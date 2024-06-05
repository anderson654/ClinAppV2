<?php

namespace App\Mail;

use App\Models\Service;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\HttpKernel\Client;


class ServiceAccepted extends Mailable
{
    use Queueable, SerializesModels;

    public $profissional;
    public $service;
    public $cliente;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $cliente, Service $service, array $profissional)
    {
        $this->profissional = $profissional;
        $this->service = $service;
        $this->cliente = $cliente;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Sua Faxina foi confirmada, confira o nome da profissional!')->view('Mail.serviceAccepted')->with([
            'nome_cliente' => $this->cliente->name,
            'service' => $this->service,
            'profissional' => $this->profissional //Lista de Professionais                     
        ]);
    }
}

