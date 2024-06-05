<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LogCentralController;
use App\Models\DiscountCoupon;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceStatus;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class DiscountCouponController extends Controller
{
    public function applyDiscountCoupon(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|int',
            'order_id' => 'required|int',
            'coupon' => 'required',
            'cod_source' => 'required|int',
            'source_requester' => 'required',
        ]);
        if ($validator->fails()) {
            /*****************LOG CENTRAL*********************/
            $messageError =  $validator->errors();
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }
        $loggedUser = Auth::user();

        if ($loggedUser->id == $request->user_id || in_array($loggedUser->role_id, [0, 1, 6, 7])) {

            $status_open = ServiceStatus::where('title', 'Aberta')->orWhere('title', 'Confirmada')->orWhere('title', 'Finalizada')->get()->pluck('id')->toArray();
            $status_lead = ServiceStatus::where('title', 'Aguardando Aprovação')->orWhere('title', 'Lead')->orWhere('title', 'Visualizada')->get()->pluck('id')->toArray();
            //recupera a order
            $order = Order::where('id', $request->order_id)->first();

            if (!$order) {
                /*****************LOG CENTRAL*********************/
                $messageError =  'Order nao encontrada';
                $event_type = "E";
                return LogCentralController::create($request, $messageError, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }

            //Recupera o cliente
            $client = User::where('id', $request->user_id)->first();
            if (!$client) {
                /*****************LOG CENTRAL*********************/
                $messageError =  'Cliente não encontrado.';
                $event_type = "E";
                return LogCentralController::create($request, $messageError, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }

            //Recupera o service
            $service = Service::where('order_id', $order->id)->where('client_id', $request->user_id)->whereIn('status_id', $status_lead)->first();

            if (!$service) {
                /*****************LOG CENTRAL*********************/
                $messageError =  'Nenhum serviço encontrado dentro dos critérios.';
                $event_type = "E";
                return LogCentralController::create($request, $messageError, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }
            $request->service_id = $service->id;

            $couponTitle = $request->coupon;


            $verifyDoubleHashTag = substr($couponTitle, 0, 2);
            if( $verifyDoubleHashTag == '##'){               // Veirifca se duplicou o #
                $couponTitle = substr($couponTitle, 1);// Se duplicar o # um é eliminado
            }
            //Recupera o coupon
            $coupon = DiscountCoupon::where('localizador', $couponTitle)
                ->where('franchise_id', $order->franchise_id)
                ->where('active', 'S')
                ->first();


            if (empty($coupon)) {
                /*****************LOG CENTRAL*********************/
                $messageError = "Cupom de desconto não encontrado!";
                $event_type = "E";
                return LogCentralController::create($request, $messageError, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }

            if ($coupon->dthr_validade <= \Carbon\Carbon::today()) {
                /*****************LOG CENTRAL*********************/
                $messageError = "Cupom de desconto Vencido!";
                $event_type = "E";
                return LogCentralController::create($request, $messageError, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }

            //Verifica se o cupon pertence a franquia da região do serviço
            if ($coupon->franchise_id != $order->franchise_id) {
                /*****************LOG CENTRAL*********************/
                $messageError = "Cupom não pertence a sua região!";
                $event_type = "E";
                return LogCentralController::create($request, $messageError, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }

            //Verifica se o cupon pode ser utilizado somente no app da clin
            if ($coupon->cod_source == 6 && $request->cod_source != 6) {
                /*****************LOG CENTRAL*********************/
                $messageError = "Este Cupom pode ser utilizado somente no Aplicativo da Clin!";
                $event_type = "E";
                return LogCentralController::create($request, $messageError, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }

            //Verifica se o cupon pode ser utilizado somente no sistema de Admin da clin
            if ($coupon->cod_source == 7 && $request->cod_source != 7) {
                /*****************LOG CENTRAL*********************/
                $messageError = "Este Cupom pode ser utilizado somente pelo time de atendimento da Clin!";
                $event_type = "E";
                return LogCentralController::create($request, $messageError, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }

            $used_coupon = Service::where('client_id', $client->id)
                ->where('discount_coupon_id', $coupon->id)
                ->whereIn('status_id', $status_open)
                ->count();

            if ($used_coupon > 0) { //verifica se o cliente já utilizou esse cupom
                /*****************LOG CENTRAL*********************/
                $messageError = "Você já utilizou esse cupom!";
                $event_type = "E";
                return LogCentralController::create($request, $messageError, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }

            $date = \Carbon\Carbon::now();
            $date->subDays(90); //data de 90 dias atrás

            //recupera as faxina do cliente nos ultimos 90 dias
            $count_services = Service::where('client_id', $client->id)
                ->where('start_time', '>', $date)
                ->whereIn('status_id', $status_open)->count();


            //verifica se o cliente é um cliente ativo - Services com menos de 90 dias
            if ($count_services > 0 && $coupon->only_new_customers == 'S') {
                /*****************LOG CENTRAL*********************/
                $messageError = "Este cupom é válido apenas para novos clientes!";
                $event_type = "E";
                return LogCentralController::create($request, $messageError, $event_type);
                /*****************FIM LOG CENTRAL*********************/
            }

             //verifica se o cupom é válido para qualquer serviço
            if ($coupon->applicable_for_all_services == 'N') {

               if($coupon->service_type_id != $service->service_type_id){
                    /*****************LOG CENTRAL*********************/
                    $messageError = "Este cupom não é válido este tipo de serviço!";
                    $event_type = "E";
                    return LogCentralController::create($request, $messageError, $event_type);
                    /*****************FIM LOG CENTRAL*********************/
               }
            }

             //verifica se o cupom é válido para qualquer dia da semana
             if ($coupon->specific_dayWeek_only != null) {

                $dayWeek = \Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $service->start_time)->dayOfWeek;

                if($coupon->specific_dayWeek_only != $dayWeek){

                    $weekMap = ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sabado'];
                    $diadasemana = $weekMap[$coupon->specific_dayWeek_only];

                     /*****************LOG CENTRAL*********************/
                     $messageError = "Este cupom é válido apenas para serviços agendado para " .$diadasemana."!";
                     $event_type = "E";
                     return LogCentralController::create($request, $messageError, $event_type);
                     /*****************FIM LOG CENTRAL*********************/
                }
             }


            if ($coupon->discount_mode == 'porc') {
                if ($coupon->applicable_for_all_services == 'N' || $coupon->applicable_for_all_services == NULL) {
                    $total_discount_value = ((float)$service->value * $coupon->discount) / 100;
                }
                if ($coupon->applicable_for_all_services == 'S') {
                    $valueServices = Service::where('order_id', $order->id)->where('client_id', $request->user_id)->whereIn('status_id', $status_lead)->get()->sum('value');
                    $total_discount_value = ((float)$valueServices * $coupon->discount) / 100;
                }
            } else {
                if ($coupon->applicable_for_all_services == 'N' || $coupon->applicable_for_all_services == NULL) {
                    $total_discount_value = $coupon->discount;
                }
                if ($coupon->applicable_for_all_services == 'S') {
                    $countServices = Service::where('order_id', $order->id)->where('client_id', $request->user_id)->whereIn('status_id', $status_lead)->get()->count();
                    $total_discount_value = $countServices * $coupon->discount;
                }
            }


            if ($coupon->discount_limit == 'qtd') {
                $amount_used = Service::whereIn('status_id', [2, 3, 4])->where([
                    'discount_coupon_id' => $coupon->id
                ])->count();

                if ($amount_used >= $coupon->limit) {
                    /*****************LOG CENTRAL*********************/
                    $messageError = "Cupom esgotado!";
                    $event_type = "E";
                    return LogCentralController::create($request, $messageError, $event_type);
                    /*****************FIM LOG CENTRAL*********************/
                }
            } else {
                $ckc_valueDiscount = Service::whereIn('status_id', [2, 3, 4])->where([
                    'discount_coupon_id' => $coupon->id
                ])->sum('discount');

                if (($ckc_valueDiscount + (float)$total_discount_value) > $coupon->limit) {
                    /*****************LOG CENTRAL*********************/
                    $messageError = "Cupom esgotado!";
                    $event_type = "E";
                    return LogCentralController::create($request, $messageError, $event_type);
                    /*****************FIM LOG CENTRAL*********************/
                }
            }

            return self::applyDiscount($request, $coupon, $service);
        } else {
            /*****************LOG CENTRAL*********************/
            $messageError = "Ação não permitida!";
            $event_type = "E";
            return LogCentralController::create($request, $messageError, $event_type);
            /*****************FIM LOG CENTRAL*********************/
        }
    }
    public function applyDiscount(Request $request, $coupon, $service)
    {

        if ($coupon->discount_mode == 'porc') {
            $discount_value = ((float)$service->value * $coupon->discount) / 100;
        } else {
            $discount_value = $coupon->discount;
        }

        //Se valor de desconto for maior que o valor do service


        if ($coupon->applicable_for_all_services == 'N' || $coupon->applicable_for_all_services == NULL) {

            if ((float)$discount_value > (float)$service->value) {
                $discount_value = (float)$service->value;
            }
            $service->discount_coupon_id = $coupon->id;
            $service->discount           = $discount_value;
            $service->save();
            return response()->json('Desconto Aplicado com sucesso.');
        }

        if ($coupon->applicable_for_all_services == 'S') {
            $services = Service::where('order_id', $service->order_id)->get();

            foreach ($services as $service) {
                if ((float)$discount_value > (float)$service->value) {
                    /*****************LOG CENTRAL*********************/
                    $messageError = "Cupom invalido, valor maior que o valor do servico!";
                    $event_type = "E";
                    return LogCentralController::create($request, $messageError, $event_type);
                    /*****************FIM LOG CENTRAL*********************/
                }
                $service->discount_coupon_id = $coupon->id;
                $service->discount          = $discount_value;
                $service->save();
            }

            return response()->json('Desconto Aplicado com sucesso.');
        }
    }
}
