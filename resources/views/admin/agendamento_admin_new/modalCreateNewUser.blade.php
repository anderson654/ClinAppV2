<form>
    <div class="" style="margin: 10px">
        <div class="row">
            <div class="col-xs-12 form-group col">
                <div class="alert alert-danger" role="alert" style="display: none">
                    Atenção falhas ao pesquisar cep, por favor preencher manualmente!!!
                </div>

                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="EX: Maria do Carmo"
                    data-error="CEP Obrigatório" minlength="9" data-name required>
                <div class="help-block with-errors" id="name-error" style="color:red"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 form-group col">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email"
                    placeholder="EX: andersong.salvador@gmail.com" data-error="CEP Obrigatório" data-email required>
                <div class="help-block with-errors" id="email-error" style="color:red"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 form-group col">
                <label for="cpf">Cpf:</label>
                <input type="text" class="form-control cpf" id="cpf" name="cpf" placeholder="EX: 000.000.000-00"
                    data-error="CEP Obrigatório" data-cpf required>
                <div class="help-block with-errors" id="cpf-error" style="color:red"></div>
            </div>
            <div class="col-xs-12 form-group col">
                <label for="birthdate">Data de nascimento:</label>
                <input type="text" class="form-control birthData" id="birthdate" name="birthdate"
                    placeholder="EX: 00/00/0000" data-error="CEP Obrigatório" data-birthdate required>
                <div class="help-block with-errors" id="birthdate-error" style="color:red"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group col-7">
                <label for="phone">Telefone:</label>
                <input type="text" class="form-control celPhone" id="phone" name="phone"
                    placeholder="EX: (00) 0 0000-0000" data-error="CEP Obrigatório" data-phone required>
                <div class="help-block with-errors" id="phone-error" style="color:red"></div>
            </div>
        </div>
        <div class="saveAddress">
            <button type="button" class="btn btn-success" data-saveClient disabled>Salvar
                usuario</button>
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
