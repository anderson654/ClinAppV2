<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento Comercial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/clin/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/clin/agendamento.css') }}">
    <!-- CSS only -->
</head>

<body>
    @php
        $user = \Auth::user();
        $login = Auth::check();
        
    @endphp
    <!-- se o usuario ja estiver logado pasar todos os dados -->
    <input type="text" name="user" id="user" value="{{ $login }}" class="none">
    @if ($login == true)
        <form action="" class="none" id="form-mobile">
            <input type="text" name="user_id" id="user_id" value="{{ $user->id }}">
        </form>
    @endif

    <header class="shadow-sm">
        <img src="{{ asset('imagens/clin/logo.svg') }}" alt="">
        <div class="btn-menu-lateral">
            <input type="checkbox" id="checkbox-menu" onclick="unloadScrollBars(this)">
            <label for="checkbox-menu">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <div class="menu-lateral">
            </div>
        </div>
    </header>
    <div class="container-white shadow">
        <div class="form-comercial" id="form-comercial">
            <div class="d-none alert alert-danger" role="alert">
            <ul id="erros_list"></ul>
            </div>
            <div class="alert alert-success d-none" role="alert">
                Agendamento realizado com sucesso ,aguarde entraremos em contato!
            </div>
            <h1>Agendamento comercial</h1>
            <form id="formcomercial">
                <div class="form-group row">
                    <label for="name" class="col-sm-1 col-form-label">Name: </label>
                    <div class="col-sm-5">
                    <input type="name" class="form-control" id="name" name="name" placeholder="Digite seu nome">
                    </div>
                    

                    <label for="email" class="col-sm-1 col-form-label">Email: </label>
                    <div class="col-sm-5">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu Email">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="phone" class="col-sm-1 col-form-label">Telefone: </label>
                    <div class="col-sm-5">
                    <input type="phone" class="form-control sp_celphones" id="phone" name="phone" placeholder="Digite seu telefone">
                    </div>
                    <label for="empresa" class="col-sm-1 col-form-label">Empresa: </label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" id="empresa" name="company" placeholder="Digite o nome da sua empresa">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="cargo" class="col-sm-1 col-form-label">cargo: </label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" id="cargo" name="office" placeholder="Digite o seu cargo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="typeAdress" class="col-sm-2 col-form-label">Tipo de endereço:</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="typeAdress" name="address_type">
                            <option>Escritório</option>
                            <option>Loja Física</option>
                            <option>Outro</option>
                        </select>       
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tamanho" class="col-sm-2 col-form-label">Tamanho aproximado:</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="tamanho" name="approximate_size">
                            <option>Até 100m²</option>
                            <option>De 100m² a 200m²</option>
                            <option>Acima de 200m²</option>
                        </select>       
                    </div>
                </div>
                <div class="form-group row">
                    <label for="service" class="col-sm-2 col-form-label">Serviço:</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="service" name="service">
                            <option>Faxina</option>
                            <option>Limpeza Pós-Obra</option>
                            <option>Limpeza Pré-Mudança</option>
                            <option>Sanitização de ambiente</option>     
                        </select>        
                    </div>
                </div>
                <div class="d-flex justify-content-center border-bottom-0">
                    <button type="button" class="btn btn-primary" onclick="saveLead();">Agendar</button>
                </div>
            </form>
        </div>
        
    </div>
    
    <!-- fim modal -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/clinapp/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/mask/masks.js') }}"></script>
    <script src="{{ asset('js/clin/lead.js') }}"></script>
    
</body>
</html>

