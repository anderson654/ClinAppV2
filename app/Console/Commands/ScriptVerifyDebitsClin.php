<?php

namespace App\Console\Commands;

use App\Models\Payment;
use App\Models\Service;
use Illuminate\Console\Command;

class ScriptVerifyDebitsClin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'teste:scriptVerifyDebitsClin {data} {newDate}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Esse comando verifica os serviços finalizados na data determinada (verifica os slots e tras os payments desses slots)';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $dateServices = $this->argument('data');
        $newDueDate = $this->argument('newDate');
        $services = Service::where('status_id', 4)
            ->whereDate('start_time', $dateServices)
            ->whereNull('deleted_at')
            ->get();
        $slotsService = Service::where('status_id', 4)
            ->whereDate('start_time', $dateServices)
            ->whereNull('deleted_at')
            ->with('slots')
            ->get();
        // dd($slotsService->count());
        $slotsIds = [];
        $totalValueServices = 0.00;
        foreach ($slotsService as $service) {
            # code...
            $totalValueServices += (float)$service->value;
            $slots = $service->slots->pluck('id')->toArray();
            $slotsIds = array_merge($slotsIds, $slots);
        }
        $paymentsServices = Service::where('status_id', 4)
            ->whereDate('start_time', $dateServices)
            ->whereNull('deleted_at')
            ->with('slots.payment')
            ->get();

        $existPayment = [];
        $notPayment = [];
        $totalValue = 0.00;
        foreach ($paymentsServices as $service) {
            foreach ($service->slots as $slot) {
                # code...
                if (isset($slot->payment)) {
                    array_push($existPayment, $slot->payment->id);
                    $totalValue += (float)$slot->value;
                    if ($newDueDate != "") {
                        $slot->payment->due_date = $newDueDate;
                        $slot->payment->payment_method_id = 5;
                        $slot->payment->save();
                    }
                } else {
                    array_push($notPayment, $slot->id);
                }
            }
            # code...
            // $slots = $service->slots->pluck('id')->toArray();
            // $slotsIds = array_merge($slotsIds, $slots);
        }

        $creditPayments = Payment::whereIn('service_slot_id', $slotsIds)->where('payment_type', 'C')->get();
        $notGenerateCredit = $slotsIds;
        foreach ($creditPayments as $payment) {
            # code...
            if (($key = array_search($payment->service_slot_id, $notGenerateCredit)) !== false) {
                unset($notGenerateCredit[$key]);
            }
        }

        dd(
            "\n" . "-------------------" .
                "Total de serviços para a data de $dateServices CRON 1" .
                "\n" . "Serviços: " . $services->count() .
                "\n" . $services->pluck('id') .
                "\n" . "Slots: " . count($slotsIds) .
                "\n" . json_encode($slotsIds) .
                "\n" . "total de débitos gerados: " . count($existPayment) .
                "\n" . "falta gerar débitos para os slots" . json_encode($notPayment) .
                "\n" . "Valor total dos serviços: " . $totalValueServices . "R$" .
                "\n" . "Valor total para repasar as profissionais: " . $totalValue . "R$" .
                "\n" . "--------------------------------------------------------------------" .
                "\n" . "-------------------" .
                "Transferencias geradas CRON 2 P2P" .
                "\n" . "Créditos não gerados para os slots:  " . json_encode($notGenerateCredit)
        );
    }
}
