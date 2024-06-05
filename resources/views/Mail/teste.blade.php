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

        td {
            padding-bottom: 30px;
        }

        .text-color-blue {
            color: #1966ff;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cobrança</title>
</head>

<body style="background: #fff">
    <div class="container">
        <div style="background: #e8f2fc;padding: 40px 0px">
            <div style="display: flex;flex: 1;justify-content: center;align-items: center">
                <div class="col-12">
                    <img style="object-fit: contain;width: 200px;margin-left: -10px"
                        src="https://clin.com.br/imagens/Clin_cropped.png" alt="Logo">
                </div>
            </div>
            <div style="display: flex;flex: 1;justify-content: center;align-items: center">
                <h2 class="fw-bold mb-3">
                    Agendamento realizado com sucesso
                </h2>
            </div>
        </div>
        <div style="padding: 20px;margin-bottom: 30px" class="text-color-blue">
            {{-- <h2 class="fw-bold mb-3">
                Agendamento realizado com sucesso
            </h2> --}}
            <p class="fw-bold">Olá,{{ $client->name ?? '' }}
            </p>
            <p>Este E-mail é para informar que seu agendamento de serviço com a Clin App foi realizado com sucesso: </p>
            <p><span class="fw-bold text-color-blue"></span>{{ $serviceType ?? '' }}
            </p>
            <p><span class="fw-bold text-color-blue"></span>{{ $serviceCategory ?? '' }}</p>
            <p><span class="fw-bold text-color-blue"></span>{{ $additionals ?? '' }}</p>
            <p><span
                    class="fw-bold text-color-blue">Data:</span>{{ isset($service['start_time']) ? Carbon\Carbon::parse($service['start_time'])->format('d/m/Y') : '' }}
                ás
                {{ isset($service['start_time']) ? Carbon\Carbon::parse($service['start_time'])->format('H:i') : '' }}
                horas</p>
            <p><span class="fw-bold text-color-blue"></span></p>
        </div>
        <div style="padding: 20px">
            <table style="width: 50vw"> <!-- Adicione uma borda para visualização, pode remover isso em produção -->
                <thead>
                    <tr>
                        <th style="text-align: left">
                            <h2><span class="fw-bold">Valor:</span></h2>
                        </th>
                        <th style="text-align: left">
                            <h2 style="font-weight: normal" class="text-color-blue">{{ $value ?? '' }}</h2>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bold">Desconto:</td>
                        <td>R$ {{ $discount ?? '' }}</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Adicionais:</td>
                        <td>R$ {{ $aditional_value ?? '' }}</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Valor final:</td>
                        <td>R$ {{ $final_value ?? '' }}</td>
                    </tr>
                    <tr style="text-align: left">
                        <td class="fw-bold">
                            <h2><span class="fw-bold">Visualizar Cobrança:</span></h2>
                        </td>
                        <td>
                            <a href="{{ $link_cobranca ?? '' }}" style="color: #000">
                                <h2><span class="fw-bold">Link</span></h2>
                            </a>
                        </td>
                    </tr>
                    <!-- Adicione mais linhas conforme necessário -->
                </tbody>
            </table>

            <div style="border-top: 1px solid #eaeaea"></div><br>
            <p>Precisa mudar a forma de pagamento? <a href="">Fale com o suporte</a></p><br>
            <p>O agendamento somente será confirmado e encaminhado à nossa equipe de profissionais autônomos
                especializados, após a confirmação do pagamento.</p><br>
            <div style="border-top: 1px solid #eaeaea"></div>



            <div style="display: flex;flex-direction: row;justify-content:center;align-items: center;margin: 50px 0px">
                <a href="https://clin.com.br/downloadAppClin"
                    style="text-decoration: none;background: #1966ff;color: #fff;font-weight: 400;font-size: 20px;padding: 15px 30px;border-radius: 4px;margin: 1px">
                    Baixar o App
                </a>
            </div>
            <p>Caso ainda tenha dúvidas adicionais, não hesite em nos contatar pelos seguintes meios:</p>


            <a href="">Suporte via WhatsApp: 41 98875-4815</a>
            <p>
                E-mail:
                <a href="">financeiro@clin.com.br</a>
            </p>
            <p>
                Nossa equipe de suporte está disponível para auxiliá-lo em qualquer questão que possa surgir. Sinta-se à
                vontade para entrar em contato conosco, teremos prazer em ajudar!
            </p>


            <p><span class="fw-bold fs-5 mb-0">Precisa de ajuda?</span></p>
            <p><span class="fs-5" style="font-weight: 400">Caso ainda tenha dúvidas adicionais, não hesite em nos
                    contatar
                    pelos seguintes meio:</span></p>
            <a href="">
                <p><span class="fs-5" style="font-weight: 400">Suporte via WhatsApp: 41 98875-4815</span></p>
            </a>
            <p><span class="fs-5" style="font-weight: 400">Nossa equipe de suporte está disponível para auxiliá-lo em
                    qualquer questão que possa surgir.
                    Sinta-se à vontade para entrar em contato conosco, teremos prazer em ajudar!</span></p>

        </div>
        <div style="justify-content: center;display: flex;flex-direction: row">
            <a href="https://clin.app.br/subscriptionEmail/{{ $client->id }}">Cancelar recebimento de e-mail</a>
        </div>
    </div>
</body>

</html>
