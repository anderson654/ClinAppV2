<div class="container-payment">
    @component('admin.agendamento_admin_new.components.card.cardPayment', ['title' => 'Cartão de crédito', 'icon' => 'fas fa-credit-card', 'dataValue' => 1])
    @endcomponent
    @component('admin.agendamento_admin_new.components.card.cardPayment', ['title' => 'Boleto', 'icon' => 'fas fa-barcode', 'dataValue' => 0])
    @endcomponent
</div>
