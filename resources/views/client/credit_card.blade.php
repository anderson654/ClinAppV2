<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- <script type="text/javascript" src="https://www.boletobancario.com/boletofacil/wro/direct-checkout.min.js"></script> --}}
    <script type="text/javascript" src="https://sandbox.boletobancario.com/boletofacil/wro/direct-checkout.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.8/jquery.mask.min.js">
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            background-color: #f5f5f5;
            font-size: 0.875rem;
        }

        .container {
            width: 90%;
            margin: 0 auto;
            margin-top: 3rem;
        }

        .title {
            text-align: center;
        }

        .font {
            font-family: 'Poppins';
            font-size: 1.063rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .input_wrapper {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            margin-bottom: 12px;
        }

        .validation_wrapper {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        label {
            margin-left: 7px;
        }

        input[type="text"],
        input[type="number"] {
            border-radius: 22px;
            border: 0.5px solid rgb(221 221 221);
            color: #1F80EA;
            padding: 10px;
            background-color: #fff;
            font-size: 14px;
            font-weight: normal;
            padding: 4%;
            line-height: 14px;
        }

        input[type="submit"] {
            width: 100%;
            border-radius: 22px;
            border: 0.5px solid #1F80EA;
            background-color: #1F80EA;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 25px;
            font-size: 1.063rem;
            font-weight: 400;
        }

        #cc_exp_month,
        #cc_exp_year {
            width: 40%
        }

    </style>
</head>

<body>

    <div class="container">
        <form action="#" id="credit_card_form">
            <span style="display: none;" data-userId>{{ $userId }}</span>
            <div class="input_wrapper">
                <label class="font" for="cc_holder">Nome</label>
                <input class="font" type="text" name="cc_holder" id="cc_holder"
                    placeholder="Ex: Marina da silva">
            </div>
            <div class="input_wrapper">
                <label class="font" for="cc_number">Número do cartão</label>
                <input class="font number_card" type="number" name="cc_number" id="cc_number"
                    placeholder="Ex: 0000000000000000">
            </div>
            <div class="input_wrapper">
                <label class="font" for="cc_exp_month">Validade</label>
                <div class="validation_wrapper">
                    <input class="font month" type="number" name="cc_exp_month" id="cc_exp_month"
                        placeholder="MM" />
                    <input class="font year" type="number" name="cc_exp_year" id="cc_exp_year" placeholder="YYYY">
                </div>
            </div>
            <div class="input_wrapper">
                <label class="font" for="cc_cvc">Código de segurança</label>
                <input class="font CVV" type="number" name="cc_cvc" id="cc_cvc" placeholder="123">
            </div>
            <input id="saveCard" class="font" type="submit" value="Salvar cartão">
        </form>
    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        $('.date').mask('00/00/0000');
        $('.month').mask('00');
        $('.year').mask('0000');
        $('.CVV').mask('000');
        $('.number_card').mask('0000000000000000');
        $('.time').mask('00:00:00');
        $('.date_time').mask('00/00/0000 00:00:00');
        $('.cep').mask('00000-000');
        $('.phone').mask('0000-0000');
        $('.phone_with_ddd').mask('(00) 0000-0000');
        $('.phone_us').mask('(000) 000-0000');
        $('.mixed').mask('AAA 000-S0S');
        $('.cpf').mask('000.000.000-00', {
            reverse: true
        });
        $('.cnpj').mask('00.000.000/0000-00', {
            reverse: true
        });
        $('.money').mask('000.000.000.000.000,00', {
            reverse: true
        });
        $('.money2').mask("#.##0,00", {
            reverse: true
        });
        $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
            translation: {
                'Z': {
                    pattern: /[0-9]/,
                    optional: true
                }
            }
        });
        $('.ip_address').mask('099.099.099.099');
        $('.percent').mask('##0,00%', {
            reverse: true
        });
        $('.clear-if-not-match').mask("00/00/0000", {
            clearIfNotMatch: true
        });
        $('.placeholder').mask("00/00/0000", {
            placeholder: "__/__/____"
        });
        $('.fallback').mask("00r00r0000", {
            translation: {
                'r': {
                    pattern: /[\/]/,
                    fallback: '/'
                },
                placeholder: "__/__/____"
            }
        });
        $('.selectonfocus').mask("00/00/0000", {
            selectOnFocus: true
        });
    });
</script>
<script type="text/javascript">
    var checkout =
        /*new DirectCheckout(
               '742AD10031F2F8B3DF555F5B410BB18A111CA40D88019DF1E9EC143253DF59E0');*/
        new DirectCheckout('742AD10031F2F8B3DF555F5B410BB18A111CA40D88019DF1E9EC143253DF59E0', false);
    /* Em sandbox utilizar o construtor new DirectCheckout('PUBLIC_TOKEN', false); */

    const user_id = document.querySelector("[data-userId]").innerText;
    document.querySelector('#credit_card_form').addEventListener('submit', (e) => generateHash(e));

    function generateHash(e) {
        e.preventDefault();
        var cardData = {
            holderName: e.srcElement[0].value,
            cardNumber: e.srcElement[1].value,
            expirationMonth: e.srcElement[2].value,
            expirationYear: e.srcElement[3].value,
            securityCode: e.srcElement[4].value,
        };

        checkout.getCardHash(cardData, async (hash) => {
                const {
                    expirationMonth,
                    cardNumber
                } = cardData;

                //pegar os 4 ultimos numeros do cartão
                const last4CardNumber = cardNumber.slice(cardNumber.length - 4);
                //ultimos 2 digitos do ano
                const expirationYear = expirationYear.slice(expirationYear.length - 2);

                const body = JSON.stringify({
                    last4CardNumber,
                    expirationYear,
                    expirationMonth,
                    hash,
                    user_id,
                    "creditCardId": "0",
                    "source_request": "App",
                    "salesman_id": 13,
                    "cod_source": 6,
                    "order_id": 0,
                    "source": "App",
                });

                try {
                    const response = await fetch(`${window.location.origin}/api/client/credit_card_register`, {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json"
                        },
                        body
                    })

                    response.status === 200 ?
                        window.ReactNativeWebView?.postMessage('success') :
                        window.ReactNativeWebView?.postMessage('failed')
                } catch (error) {
                    console.log(error)
                    window.ReactNativeWebView?.postMessage('failed');
                }

            },

            function(error) {
                window.ReactNativeWebView?.postMessage('failed');
            });
    }
</script>
