<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Models\MailerSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebHoockEmail extends Controller
{
    //
    public function webHoockEmail(Request $request)
    {
        $body = json_decode($request->getContent(), true);
        $body = json_decode($body['Message']);
        $event = $body->eventType;

        //pegar o orderId
        $mail = (object)($body->mail);
        $messageId = $mail->messageId;
        $orderId = null;
        $typeEmailId = null;

        if (isset($mail->headers) && is_array($mail->headers)) {
            foreach ($mail->headers as $header) {
                if (isset($header->name) && $header->name === 'orderId') {
                    $orderId = $header->value;
                }
                if (isset($header->name) && $header->name === 'typeEmailId') {
                    $typeEmailId = $header->value;
                }
                if ($orderId && $typeEmailId) {
                    break;
                }
            }
        }
        
        MailerSend::create([
            'order_id' => $orderId,
            'status' => $event,
            'email_id' => $messageId,
            'template_id' => $typeEmailId
        ]);
    }
}
