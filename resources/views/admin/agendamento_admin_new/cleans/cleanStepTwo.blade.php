<input type="text" style="display: none" value="0" name="productsIncluded">
<div class="" style="padding: 10px">
    <div class="container-title">
        <h2>Adicionais</h2>
    </div>
    <div class="">
        <div class="list-group">
            @foreach ($newAdditionals as $additional)
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start"
                    data-additionals="0">
                    <p class="mb-1">{{ $additional->title }}</p>
                </a>
            @endforeach
        </div>
    </div>
</div>
<div class="" style="padding: 0px 10px 10px 10px">
    <div class="" name="products">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Produtos inclusos
        </label>
    </div>
</div>
