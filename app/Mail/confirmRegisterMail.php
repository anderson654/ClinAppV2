<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use App\Models\User;

class confirmRegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    private $email;
    private $verification_code;
    private $name;
    private $title;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nameAndEmail, $title)
    { 
        $this->title = $title;
        $this->verification_code = rand(100000, 199999);
        $this->email = $nameAndEmail->email;
        $this->name = $nameAndEmail->name;
        User::where('email',$this->email)->update(['verification_code' => $this->verification_code]);
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    { 
        $this->to($this->email, $this->name);
        return $this->markdown('Mail.confirmRegisterMail', [
            'title' => $this->title,
            'name' => $this->name,
            'email' => $this->email,
            'verification_code' => $this->verification_code
        ]);
    }
}
