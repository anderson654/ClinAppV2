<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clin | Subscription email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body style="height: 100vh;">
    <div class="container h-100 w-100 d-flex justify-content-center align-items-center">
        <div class="card text-center">
            <div class="card-header">
                Email ({{ $email }})
            </div>
            <div class="card-body">
                <h5 class="card-title">Deseja continuar recebendo email?</h5>
                <div class="form-check form-switch d-flex justify-content-center">
                    <input type="hidden" name="userId" value="{{ $userId }}">
                    <input class="form-check-input me-2" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                        name="notifyEmail" {{ $statusNotifyEmail ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Não/Sim</label>
                </div>
            </div>
            <div class="card-footer text-body-secondary">
                Update
                2 days ago
            </div>
        </div>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

<script>
    $(document).ready(function() {
        //pegar os valores que serão enviados
        $("#flexSwitchCheckChecked").on("change", async function() {
            const userId = $("[name='userId']").val();
            // Verifique se o checkbox está marcado ou desmarcado
            if ($(this).is(":checked")) {
                // Checkbox marcado
                var notify = true;
                await setNotification(userId, notify);

            } else {
                // Checkbox desmarcado
                var notify = false;
                await setNotification(userId, notify);
            }
        });


        async function setNotification(userId, notify) {
            const url = 'https://clin.app.br/api/setNotificationEmail';

            const data = {
                user_id: userId,
                notify: notify,
            };

            const config = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json', // Especifique o tipo de conteúdo JSON ou apropriado para seus dados
                    // Outros cabeçalhos opcionais, se necessário
                },
                body: JSON.stringify(data), // Converte os dados para JSON
            };

            try {
                const response = await fetch(url, config);

                if (!response.ok) {
                    alert(
                        "Erro ao desativar notificaçoes para este e-mail entre en contato com o suporte."
                    );
                    throw new Error('Erro na solicitação POST');
                }

                const dadosresponse = await response.json();
                if (notify) {
                    alert("O email voltara a receber notificaçoes da Clin.");
                } else {
                    alert("O email não recebera mais notificaçoes da Clin.");
                }
            } catch (erro) {
                console.error('Erro ao fazer a solicitação POST:', erro);
            }
        }
    });
</script>

</html>
