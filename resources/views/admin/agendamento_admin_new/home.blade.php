<input type="text" style="display: none" value="0" name="typeService">
<div class="container-info-user">
    <div class="icon-client">
        <i class="fas fa-user-circle icon-user"></i>
        <div>
            Cliente: <span data-name-user> </span>
            <br>
            Endereço selecionado: <span data-cep-user></span> <a href="#" class="badge badge-primary icon-edit"><i
                    class="fas fa-edit"></i>Editar</a>
            <br>
        </div>
    </div>
</div>
<div class="container-cards">
    @foreach ($servicesTypes as $serviceType)
        <div class="container-flex-card" data-buttomTypeServices="{{ $serviceType->id }}">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">{{ $serviceType->title }}</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <div class="text-center">
                        <img src="{{ asset('imagens/')$serviceType->icon.png }}" class="rounded"
                            alt="{{ $serviceType->title }}" width="60" height="60">
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
