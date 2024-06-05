<?php

namespace App\Console\Commands\FreezeAndUnfreezeProfessional;

use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class FreezeAndUnfreezeProfessional extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'freezeAndUnfreezeProfessional:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Congela e descongela as profissionais levando em conta o pagamento da mensalidade das profissionais';

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

        Log::info("-------------------------------------------------");
        Log::info("iniciando cron de congelamento e descongelamento de profissionais");
        //pega as mensalidades das profissionais que estão ativas e não estão pagas para verificar se precisa congelar
        $users = User::has('professional_not_freeze.professional_monthly_payments')->with('professional_monthly_payments');
        if ($users->exists()) {
            foreach ($users->get() as $key => $user) {
                # code...
                $this->verifyFreezeProfessional($user, $user->professional_monthly_payments);
            }
        }

        //pega as profissionais congeladas e verifica se ainda existe algum pagamento de mensalidade com status == 1
        $users = User::has('professional_freeze')->with('professional_monthly_payments');
        if ($users->exists()) {
            foreach ($users->get() as $key => $user) {
                # code...
                $this->verifyUnfreeze($user, $user->professional_monthly_payments);
            }
        }

        Log::info("fim cron congelamento e descongelamento de profissionais");
        Log::info("-------------------------------------------------");
        return 0;
    }

    //--------------------------------------------------------------------
    public function verifyFreezeProfessional($user, $payments)
    {
        foreach ($payments as $key => $payment) {
            # code...
            //se retornar  falso congela a profissional
            $freeze = $this->verifyDate($payment);
            if (!$freeze) {
                $this->freezeProfessional($user);
            }
        }
    }

    public function verifyDate($payment)
    {
        $dateNow = Carbon::now()->toDateString();
        $newDueDate = new Carbon($payment->due_date);
        $newDueDate = $newDueDate->addDays(3)->toDateString();
        if ($dateNow >= $newDueDate) {
            return false;
        }
        return true;
    }

    public function freezeProfessional($user)
    {
        Log::info("Profissionais congelada: " . $user->name);
        $user->status = 0;
        $user->save();
    }
    //--------------------------------------------------------------------
    public function verifyUnfreeze($user, $payments){
        if($payments->count() == 0){
            $this->unfreezeProfessional($user);
        }
    }

    public function unfreezeProfessional($user){
        Log::info("Profissionais descongelada: " . $user->name);
        $user->status = 1;
        $user->save();
    }
}
