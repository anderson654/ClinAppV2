{{-- css esta em componentValue --}}
@section('csshead')

@stop
<div class="container-input">
    <div class="internal-container-value">
        <div class="container-title">
            <h3>Cupom de desconto: </h3>
        </div>
        <div class="row input-border">
            <div class="input-group input-type-value">
                <input type="text" class="form-control value" aria-label="Amount (to the nearest dollar)" name="value">
            </div>
            {{ $button }}
        </div>
    </div>
</div>
