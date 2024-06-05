<form method="POST" action="">
    <div class="" style="margin: 10px">
        <div class="row">
            <div class="col-xs-12 form-group col">
                <div class="alert alert-danger" role="alert" style="display: none">
                    Atenção falhas ao pesquisar cep, por favor preencher manualmente!!!
                </div>

                <label for="zip">CEP<span class="text-muted">(Obrigatório)</span></label>
                <input type="text" class="form-control" id="zip" name="zip" placeholder="EX: 00000-000"
                    data-error="CEP Obrigatório" minlength="9" required>
                <div class="help-block with-errors" id="zip-error" style="color:red"></div>
            </div>
            <div class="col-xs-12 form-group col">
                <label for="number">Numero:</label>
                <input type="text" class="form-control" id="number" name="number" placeholder="EX: 000"
                    data-error="CEP Obrigatório" required>
                <div class="help-block with-errors" id="number-error" style="color:red"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 form-group col">
                <label for="neighborhood">Bairro:</label>
                <input type="text" class="form-control" id="neighborhood" name="neighborhood"
                    placeholder="EX: Gatinho briguento" data-error="CEP Obrigatório" required readonly>
                <div class="help-block with-errors" id="neighborhood-error" style="color:red"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 form-group col">
                <label for="street">Rua:</label>
                <input type="text" class="form-control" id="street" name="street" placeholder="EX: Rua frederico"
                    data-error="CEP Obrigatório" required readonly>
                <div class="help-block with-errors" id="street-error" style="color:red"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group col">
                <label for="state">Estado:</label>
                <input type="text" class="form-control" id="state" name="state" placeholder="EX: PR"
                    data-error="CEP Obrigatório" required readonly>
                <div class="help-block with-errors" id="state-error" style="color:red"></div>
            </div>
            <div class="col-xs-12 form-group col">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="EX: Campo Largo"
                    data-error="CEP Obrigatório" required readonly>
                <div class="help-block with-errors" id="city-error" style="color:red"></div>
            </div>
        </div>
        <div class="saveAddress">
            <button type="button" class="btn btn-success" data-buttomSaveAddres>Salvar
                endereço</button>
        </div>
    </div>
</form>


@section('javascript')
    <script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(function() {
            moment.updateLocale('{{ App::getLocale() }}', {
                week: {
                    dow: 1
                } // Monday is the first day of the week
            });

            $('.date').datetimepicker({
                format: "{{ config('app.date_format_moment') }}",
                locale: "{{ App::getLocale() }}",
            });

        });
    </script>
@endsection
