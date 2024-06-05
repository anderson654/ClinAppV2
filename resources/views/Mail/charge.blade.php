<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        /* Defina a fonte desejada para o corpo do email */
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .fw-bold {
            font-weight: bold;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cobrança</title>
</head>

<body style="background: #fff">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <img style="object-fit: contain;width: 200px;margin-left: -10px"
                    src="https://clin.com.br/imagens/Clin_cropped.png" alt="Logo">
            </div>
        </div>
        <div class="row">
            <h2 class="fw-bold mb-3">
                Olá, Anderson Gabriel,tudo bem?
                Seu agendamento de serviço foi confirmado e<br>estamos empolgados para atendê-lo!
            </h2>
            <p>Recebemos com sucesso o seu pagamento e gostaríamos de informar o número da sua ordem: {$order_number}.</p>
            <p><span class="fw-bold"></span>{$serviceType}</p>
            <p><span class="fw-bold"></span>{$serviceCategory}</p>
            <p><span class="fw-bold"></span>$additionals</p>
            <p><span class="fw-bold">Data:</span>{$startTime} ás {$time} horas</p>
            <p><span class="fw-bold"></span>{$description}</p>

            <p>A partir deste momento, seu pedido foi encaminhado à nossa equipe de profissionais autônomos
                especializados, que estão prontos para aceitar e atender a sua demanda com excelência.<br><br>

                Para acompanhar em tempo real o status do seu agendamento, convidamos você a utilizar o nosso aplicativo
                dedicado. Lá, você poderá visualizar todas as atualizações e progresso relacionados ao seu pedido,
                proporcionando uma experiência tranquila e transparente.<br><br>

                Agradecemos pela confiança em nossos serviços e estamos ansiosos para garantir que sua experiência
                conosco seja a melhor possível. Em caso de dúvidas ou necessidade de assistência adicional, não hesite
                em entrar em contato conosco. Estamos à disposição para ajudar!</p>
        </div>
        <div style="margin:50px 0px">

            <a href=""
                style="text-decoration: none;background: #1f80ea;color: #fff;font-weight: 400;font-size: 20px;padding: 15px 30px;border-radius: 4px;margin: 1px">
                Baixar o App
            </a>

        </div>
        <p class="mb-5"><span class="fs-5" style="font-weight: 400">Caso você tenha efetuado o pagamento desta
                cobrança nas últimas 48 horas, favor desconsiderar esta mensagem</span></p>

        <p><span class="fw-bold fs-5 mb-0">Obrigado,</span><br><span class="fs-5" style="font-weight: 400">Dos seus
                amigo da Clin App</span></p>

        <table class="my-5" cellpadding="0" cellspacing="0" border="0" align="center" width="100%"
            style="border-top: 1px solid #eaeaea; border-collapse: initial;" class="mlContentTable">
            <tbody>
                <tr>
                    <td height="20" class="spacingHeight-20" style="line-height: 20px; min-height: 20px;"></td>
                </tr>
            </tbody>
        </table>

        <p><span class="fw-bold fs-5 mb-0">Precisa de ajuda?</span></p>
        <p><span class="fs-5" style="font-weight: 400">Caso ainda tenha dúvidas adicionais, não hesite em nos contatar
                pelos seguintes meio:</span></p>
        <a href="https://getbootstrap.com/docs/5.0/components/buttons/">
            <p><span class="fs-5" style="font-weight: 400">Suporte via WhatsApp: 41 98875-4815</span></p>
        </a>
        <p><span class="fs-5" style="font-weight: 400">Nossa equipe de suporte está disponível para auxiliá-lo em
                qualquer questão que possa surgir.
                Sinta-se à vontade para entrar em contato conosco, teremos prazer em ajudar!</span></p>

    </div>
</body>

</html>
