<input type="text" style="display: none" value="1" data-recurrence>
<input type="text" style="display: none" value="1" name="typeAddres">
@component('admin.agendamento_admin_new.components.titles.title1', ['text' => 'Que tipo de faxina você precisa?'])
@endcomponent
<div class="" style="padding: 10px">
    <div class="container-recurrence">
        @component('admin.agendamento_admin_new.components.buttons.buttonSelect', ['title' => 'Faxina única', 'data' => 'data-cardRecurrence=1'])
        @endcomponent
        @component('admin.agendamento_admin_new.components.buttons.buttonSelect', ['title' => 'Quinzenal', 'data' => 'data-cardRecurrence=2'])
        @endcomponent
        @component('admin.agendamento_admin_new.components.buttons.buttonSelect', ['title' => 'Semanal', 'data' => 'data-cardRecurrence=3'])
        @endcomponent
    </div>
</div>
@component('admin.agendamento_admin_new.components.titles.title1', ['text' => 'Como é seu lar?'])
@endcomponent
<div class="" style="padding: 10px">
    <div class="container-recurrence">
        @component('admin.agendamento_admin_new.components.buttons.buttonSelect', ['title' => 'Apartamento', 'data' => 'data-cardTypeAddres=1'])
        @endcomponent
        @component('admin.agendamento_admin_new.components.buttons.buttonSelect', ['title' => 'Casa/Sobrado', 'data' => 'data-cardTypeAddres=2'])
        @endcomponent
        @component('admin.agendamento_admin_new.components.buttons.buttonSelect', ['title' => 'Triplex', 'data' => 'data-cardTypeAddres=3'])
        @endcomponent

    </div>
</div>
