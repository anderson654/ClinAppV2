<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Models\Additional;
use App\Models\Asaas\AsaasBilling;
use App\Models\Mail\TemplateEmail;
use App\Models\MailerSend as ModelsMailerSend;
use App\Models\Service;
use App\Models\ServiceAdditionals;
use App\Models\ServiceCategory;
use App\Models\ServiceType;
use App\Models\User;
use Illuminate\Http\Request;
use MailerSend\MailerSend;
use MailerSend\Helpers\Builder\Variable;
use MailerSend\Helpers\Builder\Recipient;
use MailerSend\Helpers\Builder\EmailParams;
use MailerSend\Helpers\Builder\WebhookParams;
use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\Log;
use NumberFormatter;

class MailerSenderController extends Controller
{


    public function callbackTestMailersend(Request $request)
    {
        try {
            //code...
            $mailerSend =  ModelsMailerSend::where('email_id', $request['data']['email']['id'])->first();
            if ($mailerSend) {
                $mailerSend->status = $request['data']['email']['status'];
                $mailerSend->action = isset($request['data']['morph']) ? $request['data']['morph']['object'] : null;
                $mailerSend->ip = isset($request['data']['morph']) ? $request['data']['morph']['ip'] : null;
                $mailerSend->date_morph = isset($request['data']['morph']) ? $request['data']['morph']['created_at'] : null;
            }
            if (!$mailerSend->save()) {
                Log::info('Erro ao salvar e-mail.');
            }
            return response()->json("Success", 200);
        } catch (\Throwable $th) {
            //throw $th;
            Log::info($th);
            return response()->json($th->getMessage(), 422);
        }
    }


    public function sendEmailFinishScheduled($user, $service, $values, $paymentDescription, $paymentAsaas)
    {
        $mailersend = new MailerSend(['api_key' => env('MAILERSEND_API_KEY')]);

        $additionalsId = ServiceAdditionals::where('service_id', $service['id'])->get()->pluck('additionals_id');
        if ($additionalsId) {
            $additionalsTitles = Additional::whereIn('id', $additionalsId)->get()->pluck('title')->toArray();
        }
        $serviceType = ServiceType::find($service['service_type_id'])->title;
        $serviceCategory = ServiceCategory::find($service['service_category_id'])->title;

        $variables = [
            new Variable($user->email, [
                'name' => $user->name,
                'time' => Carbon::parse($service["start_time"])->format('H:i'),
                'discount' => number_format($values["discounts"], 2, ',', '.') ?? '0,00',
                'startTime' => Carbon::parse($service["start_time"])->format('d/m/Y'),
                'additionals' => (isset($service['products_included']) ? 'Com todos os produtos inclusos' : '') . (isset($additionalsTitles) ? implode(', ', $additionalsTitles) : 'Nenhum adicional'),
                'description' => '',
                'final_value' => number_format($values['total'], 2, ',', '.'),
                'serviceType' => $serviceType,
                'total_value' => number_format($values['total'], 2, ',', '.'),
                'account_name' => 'Clin app',
                'link_cobranca' => "https://clin.app.br/payment/" . $paymentAsaas['asaasPaymentId'],
                'aditional_value' => number_format($values['additional'], 2, ',', '.'),
                'serviceCategory' => $serviceCategory
            ])
        ];

        $recipients = [
            new Recipient($user->email, $user->name),
        ];

        $emailParams = (new EmailParams())
            ->setFrom('financeiro@clin.com.br')
            ->setFromName('Clin App')
            ->setRecipients($recipients)
            ->setSubject('Subject')
            ->setTemplateId('zr6ke4n9zdylon12')
            ->setVariables($variables)
            ->setReplyTo('financeiro@clin.com.br')
            ->setReplyToName('reply to name');

        $response = $mailersend->email->send($emailParams);
        sleep(2);
        Log::info("@agendamento finalizado" . json_encode($response));
        $xMessageId = $response['headers']['x-message-id'][0];
        $this->saveLocalEmail($xMessageId, $service, null, 'zr6ke4n9zdylon12');
        return $response;
    }

    public function apiSendEmailConfirmationService(Request $request)
    {
        try {
            //code...
            $user = User::find($request->user_id);
            $service = Service::find($request->service_id);
            $this->sendEmailConfirmationService($user, $service);
            return response()->json("Email enviado com sucesso.");
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th->getMessage(), 422);
        }
    }

    public function sendEmailConfirmationService($user, $service)
    {
        $mailersend = new MailerSend(['api_key' => env('MAILERSEND_API_KEY')]);

        $additionalsId = ServiceAdditionals::where('service_id', $service['id'])->get()->pluck('additionals_id');
        if ($additionalsId) {
            $additionalsTitles = Additional::whereIn('id', $additionalsId)->get()->pluck('title')->toArray();
        }
        $serviceType = ServiceType::find($service['service_type_id'])->title;
        $serviceCategory = ServiceCategory::find($service['service_category_id'])->title;

        $variables = [
            new Variable($user->email, [
                'name' => $user->name,
                'time' => Carbon::parse($service["start_time"])->format('H:i'),
                'startTime' => Carbon::parse($service["start_time"])->format('d/m/Y'),
                'additionals' => (isset($service['products_included']) ? 'Com todos os produtos inclusos' : '') . (isset($additionalsTitles) ? implode(', ', $additionalsTitles) : 'Nenhum adicional'),
                'description' => '',
                'serviceType' => $serviceType,
                'order_number' => "" . $service['order_id'],
                'serviceCategory' => $serviceCategory
            ])
        ];

        $recipients = [
            new Recipient($user->email, $user->name),
        ];

        $emailParams = (new EmailParams())
            ->setFrom('financeiro@clin.com.br')
            ->setFromName('Clin App')
            ->setRecipients($recipients)
            ->setSubject('Subject')
            ->setTemplateId('x2p03478m3plzdrn')
            ->setVariables($variables)
            ->setReplyTo('financeiro@clin.com.br')
            ->setReplyToName('reply to name');

        $response = $mailersend->email->send($emailParams);
        sleep(2);
        Log::info("@EMAIL CONFIRMAÇÃO" . json_encode($response));
        $xMessageId = $response['headers']['x-message-id'][0];
        $this->saveLocalEmail($xMessageId, $service, null, 'x2p03478m3plzdrn');
        return $response;
    }


    public function billingEmail($user, $service)
    {
        $mailersend = new MailerSend(['api_key' => env('MAILERSEND_API_KEY')]);
        $serviceType = ServiceType::find($service['service_type_id'])->title;
        $serviceCategory = ServiceCategory::find($service['service_category_id'])->title;
        $paymentAsaas =  $service->asaas_billing_pending;

        $variables = [
            new Variable($user->email, [
                'name' => $user->name,
                'valor' => number_format($service["value"], 2, ',', '.') ?? '0,00',
                'description' => '',
                'serviceType' => $serviceType,
                'link_cobranca' => "https://clin.app.br/payment/" . $paymentAsaas['asaasPaymentId'],
                'data_vencimento' => Carbon::parse($paymentAsaas["dueDate"])->format('d/m/Y'),
                'serviceCategory' => $serviceCategory
            ])
        ];

        $recipients = [
            new Recipient($user->email, $user->name),
        ];

        $emailParams = (new EmailParams())
            ->setFrom('financeiro@clin.com.br')
            ->setFromName('Clin App')
            ->setRecipients($recipients)
            ->setSubject('Subject')
            ->setTemplateId('k68zxl2pqom4j905')
            ->setVariables($variables)
            ->setReplyTo('financeiro@clin.com.br')
            ->setReplyToName('reply to name');

        $response = $mailersend->email->send($emailParams);
        sleep(2);
        Log::info("@email de cobrança" . json_encode($response));
        $xMessageId = $response['headers']['x-message-id'][0];
        $this->saveLocalEmail($xMessageId, $service, null, 'k68zxl2pqom4j905');
        return $response;
    }

    public function saveLocalEmail($xMessageId, $service, $userId, $template)
    {
        $templateEmail = TemplateEmail::where('template_id', $template)->first()->id;
        Log::info('@template' . $templateEmail);
        $mailersend = new MailerSend(['api_key' => env('MAILERSEND_API_KEY')]);
        $response = $mailersend->messages->find($xMessageId)['body'];
        $data = [
            "x_message_id" => $xMessageId,
            "id_object" => $response['data']['id'],
            "email_id" =>  $response['data']['emails'][0]['id'],
            "service_id" => $service->id ?? null,
            "order_id" => $service->order_id ?? null,
            "user_id" => $userId ?? $service->client_id ?? null,
            "template_id" => $templateEmail ?? null
        ];
        $mail = ModelsMailerSend::create($data);
        if (!$mail) {
            return null;
        }
        return $mail;
    }
}
