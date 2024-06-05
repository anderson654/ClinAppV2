<input type="text" id="typePayment" style="display: none">
<div class="card-type-payment unchecked" data-buttonPayment={{ $dataValue ?? '' }}>
    <div class="container-icon-credit-card">
        <i class="{{ $icon ?? '' }}"></i>
    </div>
    <div class="title-type-payment">
        {{ $title ?? '' }}
    </div>
</div>
