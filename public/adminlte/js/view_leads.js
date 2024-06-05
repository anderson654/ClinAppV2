$(window).load(function () {
    $('#leadsTable').DataTable({
        'order': [0, 'asc'],
        "columnDefs": [{
            "className": "dt-center",
            "targets": "_all"
        }]
    });
});

lostButtons = document.querySelectorAll('.lost');
lostButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
        let id = button.dataset.id;

        let sendButton = document.querySelector('#reasonModal .send');
        sendButton.formAction = window.location.origin + `/admin/dashboard/view_leads/${id}/3`;
    })
})

let whatsappButtons = document.querySelectorAll('.whatsapp');
whatsappButtons.forEach((button) => {
    button.addEventListener('click', (e) => {
        let name = button.dataset.name
        let phone = button.dataset.phone
        let id = button.dataset.id

        ZapBtn = document.querySelector('#leadsModal .send');
        PushBtn = document.querySelector('#leadsModal .dismiss')

        // some style
        document.querySelector('#leadsModal .modal-header').style.backgroundColor = "#00a65a"
        ZapBtn.style.backgroundColor = "#00a65a"
        ZapBtn.style.display = "initial"
        ZapBtn.innerText = 'Enviar Whatsapp'
        ZapBtn.href = `https://api.whatsapp.com/send?phone=55${phone}&text=Olá ${name}, você fez uma simulação em nosso site, para contração de diarista e limpeza para o seu escritório, e não finalizou o seu agendamento. Ficou alguma duvida? Algo em que eu possa lhe Ajudar?`
        ZapBtn.target = "_blank"
        ZapBtn.dataset.id = id

        PushBtn.style.backgroundColor = "#3c8dbc"
        PushBtn.style.color = "#fff"
        PushBtn.style.display = "initial"
        PushBtn.innerText = 'Enviar mensagem Push'
        PushBtn.href = window.location.origin + `/admin/dashboard/view_leads/startFlowBotLeads/${id}`
        // end

        let title = document.querySelector('.modal-title')
        title.innerHTML = '<i class="fa fa-whatsapp"></i> Enviar mensagem'

        let content = document.querySelector('.modal-body')
        content.innerText = `Que tipo de mensagem deseja enviar para ${name}?`

        // realods e redirects
        ZapBtn.addEventListener('click', async () => {

            await fetch(`${window.location.href}/${id}/2`).then(
                setTimeout(function () {
                    window.location.href = window.location.origin +
                        "/admin/dashboard/view_leads"
                }, 500)
            )
        })

        // end
    })
})

let emailbuttons = document.querySelectorAll('.email');
emailbuttons.forEach((button) => {
    button.addEventListener('click', (e) => {
        let name = button.dataset.name
        let phone = button.dataset.phone
        let clean = button.dataset.clean

        document.querySelector('.modal-header').style.backgroundColor = "#dd4b39"
        document.querySelector('.send').style.backgroundColor = "#dd4b39"
        document.querySelector('.send').style.display = "initial"


        let title = document.querySelector('.modal-title')
        title.innerHTML = '<i class="fa fa-envelope-o"></i> Enviar e-mail'

        let content = document.querySelector('.modal-body')
        content.innerText = `Deseja mesmo enviar um e-mail marketing para ${name}?`
    })
})

let seeButtons = document.querySelectorAll('.details');
seeButtons.forEach((button) => {
    button.addEventListener('click', (e) => {
        let clean = JSON.parse(button.dataset.clean)

        document.querySelector('#leadsModal .modal-header').style.backgroundColor = "rgb(239, 239, 239)"
        document.querySelector('#leadsModal .modal-header').style.color = "#000"
        document.querySelector('#leadsModal .send').style.display = "none"

        let dismiss = document.querySelector('#leadsModal .dismiss');
        dismiss.style.display = "initial"
        dismiss.style.backgroundColor = "rgb(239, 239, 239)"
        dismiss.style.color = "#000"
        dismiss.innerText = "Fechar"
        dismiss.dataset.dismiss = "modal"



        let title = document.querySelector('.modal-title')
        title.innerHTML = '<i class="fa fa-info-circle"></i> Detalhes da simulação'

        let content = document.querySelector('.modal-body')
        content.innerHTML = `
                <div class="row">
                    <div class="col-md-6">
                    <p><strong>ID: </strong>${clean.id}</p>
                    <p><strong>Tipo de endereço: </strong>${clean.address_type.title}</p>
                    <p><strong>Tipo de faxina:</strong>${clean.clean_type ? clean.clean_type.title : 'Vazio'}</p>
                    <p><strong>Categoria: </strong>${clean.clean_category ? clean.clean_category.title : 'Vazio'}</p>
                    <p><strong>QT. Banheiros: </strong>${clean.qt_bathrooms}</p>
                    <p><strong>QT. Quartos: </strong>${clean.qt_bedrooms}</p>
                    <p><strong>Tempo total: </strong>${clean.total_time}Hrs</p>
                    <p><strong>Produtos inclusos?:  </strong>${clean.products_included == 0 ? 'Sim' : 'Não'}</p>
                    <p><strong>Valor: </strong>R$${clean.value}</p>
                    <p><strong>Data: </strong>${clean.start_time}</p>
                    <p><strong>CLIENTE: </strong>${clean.client.name}</p>
                    </div>
                </div>
                `
    })
})

function redirect(button) {
    let clean = JSON.parse(button.dataset.clean)

    window.location.href =
        `${window.location.origin}/admin/agendamentoAdmin?client_id=${clean.client_id}&address_type_id=${clean.address_type_id}&clean_type_id=${clean.clean_type_id}&products_included=${clean.products_included}&clean_category_id=${clean.clean_category_id}&total_time=${clean.total_time}&qt_employees=${clean.qt_employees}&value=${clean.value}&start_time=${clean.start_time}`
}