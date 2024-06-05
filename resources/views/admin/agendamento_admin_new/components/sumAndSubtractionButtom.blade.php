<div class="row justify-content-center">
    <div class="card-type-two">
        <p class="title">{{ $title }}</p>
        <div class="sum-subtraction-container">
            <button type="button" class="btn btn-primary" data-buttomSubtraction="{{ $data }}">-</button>
            <input type="text" value="{{ $value }}" name="{{ $name }}">
            <button type="button" class="btn btn-primary" data-buttomSum="{{ $data }}">+</button>
        </div>
    </div>
</div>
