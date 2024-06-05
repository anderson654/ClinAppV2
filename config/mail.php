<?php

return [
    'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' => env('MAIL_HOST', 'email-smtp.us-east-2.amazonaws.com'), // Certifique-se de usar a região correta
    'port' => env('MAIL_PORT', 587),
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'contato@clin.com.br'),
        'name' => env('MAIL_FROM_NAME', 'Clin'),
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'), // tls ou ssl, dependendo das configurações do SES
    'username' => env('MAIL_USERNAME'), // Nome de usuário SMTP do SES
    'password' => env('MAIL_PASSWORD'), // Senha SMTP do SES

    // 'timeout' => null , 
    'verify_peer' => false,
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => [
        'theme' => 'default',
        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],
    'log_channel' => env('MAIL_LOG_CHANNEL'),
];
