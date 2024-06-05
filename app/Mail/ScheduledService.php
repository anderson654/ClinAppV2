<?php

namespace App\Mail;

use App\Models\Additional;
use App\Models\ServiceAdditionals;
use App\Models\ServiceCategory;
use App\Models\ServiceType;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Headers;
use Illuminate\Queue\SerializesModels;

class ScheduledService extends Mailable
{
    use Queueable, SerializesModels;


    public $client;
    public $service;
    public $totalValue;
    public $paymentDescription;
    public $paymentAsaas;
    public $serviceCategory;
    public $additionals;
    public $serviceType;
    public $value;
    public $discount;
    public $aditional_value;
    public $final_value;
    public $link_cobranca;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($client, $service, $values, $paymentDescription, $paymentAsaas)
    {
        //ajuste parametros
        $additionalsId = ServiceAdditionals::where('service_id', $service['id'])->get()->pluck('additionals_id');
        if ($additionalsId) {
            $additionalsTitles = Additional::whereIn('id', $additionalsId)->get()->pluck('title')->toArray();
        }
        $serviceType = ServiceType::find($service['service_type_id'])->title;
        $serviceCategory = ServiceCategory::find($service['service_category_id'])->title;

        $additionals = (isset($service['products_included']) ? 'Com todos os produtos inclusos' : '') . (isset($additionalsTitles) ? implode(', ', $additionalsTitles) : 'Nenhum adicional');

        //
        $this->client = $client ?? null;
        $this->service = $service ?? null;
        $this->paymentDescription = $paymentDescription ?? null;
        $this->paymentAsaas = $paymentAsaas ?? null;
        $this->serviceCategory = $serviceCategory ?? null;


        $this->additionals = $additionals;
        $this->serviceType = $serviceType ?? null;
        $this->value = number_format($values['total'], 2, ',', '.') ?? null;
        $this->discount = number_format($values["discounts"], 2, ',', '.') ?? '0,00';
        $this->aditional_value = number_format($values['additional'], 2, ',', '.') ?? '0,00';
        $this->final_value = number_format($values['total'], 2, ',', '.') ?? '0,00';
        $this->link_cobranca = "https://clin.app.br/payment/" . $paymentAsaas['asaasPaymentId'] ?? '#';
    }

    public function headers()
    {
        return new Headers(
            text:[
                'orderId' => $this->service->order_id,
                'typeEmailId' => 1
            ]
        );
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Confirmação',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'Mail.teste',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
