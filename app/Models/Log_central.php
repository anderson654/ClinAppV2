<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\User;

class Log_central extends Model
{
    use HasFactory;
    protected $table = 'log_central';

    protected $fillable = [
        'user_id',
        'cod_source',
        'source',
        'log',
        'event_type',
        'payment_id'
    ];

    //Busca informacoes sobre usuario nos logs
    public function infoOperador()
    {
        return $this->belongsTo(User::Class, 'user_id');
    }

    public static function readLogs($event, $service, $subscription)
    {

        $logs = Log_Central::where('service_id', $service)
            ->Orderby('id', 'DESC')
            ->take(30)
            ->get();

        // $logs = Log_Central::where('service_id', $service)
        //                  ->orWhere('event_type', $event)
        //                  ->orWhere('subscription_id', $subscription)
        //             ->Orderby('id', 'DESC')
        //             ->take(30)
        //             ->get();

        return $logs;
    }
}
