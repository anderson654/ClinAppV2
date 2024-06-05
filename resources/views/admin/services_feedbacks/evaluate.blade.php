    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .button-align {
            text-align: right;
        }
        .size-form {
            max-width: 60%;
        }
        .star input[type=radio] {
            display: none;
        }
        .star label i.fa:before {
            content:'\f005';
            color: #FC0;
        }
        .star input[type=radio]:checked ~ label i.fa:before {
            color: #CCC;
        }
    </style>
</head>
    
<form action="/enviar/avaliacao" method="post">
    {!! csrf_field() !!}
    <div class="container size-form">
        @include('layouts.partials.nav')
        <hr>
        <div class="form-group">
            <label for="userName">Nome</label>
            <input type="text" class="form-control" id="userName" placeholder="{{$client}}" disabled>
        </div>
        <div class="form-group">
            <label for="professional">Profissional</label>
            @foreach ($listProfessional as $professional)
                <br>
                <input type="text" class="form-control" id="professional" placeholder="{{$professional}}" disabled>
            @endforeach
        </div>
        <div class="form-group star">
            <label>Qual o seu nível de satisfação com a profissional que lhe atendeu?*</label>
            <br>
            <label for="cm_star-1"><i class="fa fa-2x"></i></label>
            <input type="radio" class="form-control" id="cm_star-1" name="evaluate" value="1"/>
            <label for="cm_star-2"><i class="fa fa-2x"></i></label>
            <input type="radio" class="form-control" id="cm_star-2" name="evaluate" value="2"/>
            <label for="cm_star-3"><i class="fa fa-2x"></i></label>
            <input type="radio" class="form-control" id="cm_star-3" name="evaluate" value="3"/>
            <label for="cm_star-4"><i class="fa fa-2x"></i></label>
            <input type="radio" class="form-control" id="cm_star-4" name="evaluate" value="4"/>
            <label for="cm_star-5"><i class="fa fa-2x"></i></label>
            <input type="radio" class="form-control" id="cm_star-5" name="evaluate" value="5" checked />
        </div>
        <div>
            <input type="hidden" class="form-control" name="service_id" value="{{$service}}">
        </div>
        <div class="form-group">
            <label for="describeservice">Como foi a sua limpeza?</label>
            <textarea class="form-control" id="describeservice" rows="3" name="text" placeholder="Opcional"></textarea>
        </div>
        <div class="button-align">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>        
</form>
