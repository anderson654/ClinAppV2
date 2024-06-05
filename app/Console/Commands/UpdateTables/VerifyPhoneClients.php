<?php

namespace App\Console\Commands\UpdateTables;

use App\Models\Payment;
use App\Models\PaymentAccount;
use Illuminate\Console\Command;

class VerifyPhoneClients extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'verifyPhoneClients:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Esse comando verifica verifica os telefones duplicados dos clientes';

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
        $option = "";


        $this->options();


        while (!is_int($option)) {
            # code...
            $option = (int)readline("\033[0;33m Selecione uma das opçoes acima: \033[0m ");
        }



        do {
            # code...
            switch ($option) {
                case 1:
                    # code...
                    echo "\033[0;33m Update de pagamentos iniciado! \033[0m \n";
                    $this->updatePaymentAccount();
                    break;
                case 0:
                    # code...
                    echo "\033[0;31 Finalizar script? \033[0m";
                    break;

                default:
                    # code...
                    break;
            }
        } while ((int)readline("Escolha uma opção: ") != 0);
        # code...

        echo "Script finalizado";
        return 0;
    }


    public function options()
    {
        echo "\033[0;34m" . "\n" . "------------------------------------------------------------" . "\033[0m \n";
        echo "\033[0;34m" . "\n" . "1 Atualizar pagamento das profissionais" . "\033[0m \n";
        echo "\033[0;34m" . "\n" . "------------------------------------------------------------" . "\033[0m \n";
    }


    public function updatePaymentAccount()
    {
        $payments = Payment::where('payment_method_id', 3)->where('payment_category', 4)->whereNull('payment_account_id');

        if (!$payments->count() > 0) {
            echo "\033[0;31m" . "\n" . "Nenhum pagamento para ser atualizado: " . "\033[0m \n";
            return;
        }


        $sucessPayment = [];
        $erroePayment = [];
        foreach ($payments->get() as $payment) {
            # code...
            $paymentAccount = PaymentAccount::where('user_id', $payment->user_id)->first();
            if (!$paymentAccount) {
                array_push($erroePayment, $payment->id);
            } else {
                $payment->payment_account_id = $paymentAccount->id;
                if ($payment->save()) {
                    array_push($sucessPayment, $payment->id);
                } else {
                    array_push($erroePayment, $payment->id);
                }
            }
        }
        //melhor criar um arquivo com os erros em storage
        echo "\033[0;31m" . "\n" . "falha ao salvar pagamentos: " . var_dump($erroePayment) . "\033[0m \n";
        echo "\033[0;32m" . "\n" . "pagamento atualizado: " . var_dump($sucessPayment) . "\033[0m \n";
    }
}
