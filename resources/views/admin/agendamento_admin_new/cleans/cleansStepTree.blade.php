<div class="" style="padding: 10px">
    <div class="container-step-two">
        @component('admin.agendamento_admin_new.components.sumAndSubtractionButtom', ['title' => 'Qt.Quartos', 'data' => 'totalBedrooms', 'name' => 'totalBedrooms', 'value' => 1])
        @endcomponent
        @component('admin.agendamento_admin_new.components.sumAndSubtractionButtom', ['title' => 'Qt.Banheiros', 'data' => 'totalBathrooms', 'name' => 'totalBathrooms', 'value' => 1])
        @endcomponent
        @component('admin.agendamento_admin_new.components.sumAndSubtractionButtom', ['title' => 'Hora', 'data' => 'totalHours', 'name' => 'totalHours', 'value' => 0])
        @endcomponent
        @component('admin.agendamento_admin_new.components.sumAndSubtractionButtom', ['title' => 'Profissionais', 'data' => 'totalProfessionais', 'name' => 'totalProfessionais', 'value' => 0])
        @endcomponent
        @component('admin.agendamento_admin_new.components.componentValue', ['value' => 10, 'class' => 'maskMoney'])
        @endcomponent
        @component('admin.agendamento_admin_new.components.inputCupomDescaunt', ['value' => 10])
            @slot('button')
                @component('admin.agendamento_admin_new.components.buttons.buttom', ['dataSet' => 'data-cupom'])
                @endcomponent
            @endslot
        @endcomponent
        {{-- @component('admin.agendamento_admin_new.components.componentValue', ['value' => 10])
        @endcomponent --}}
        @component('admin.agendamento_admin_new.components.inputDataTime', ['value' => 10, 'class' => 'maskMoney'])
        @endcomponent
    </div>
</div>
