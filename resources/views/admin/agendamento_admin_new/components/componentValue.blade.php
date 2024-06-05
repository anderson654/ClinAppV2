@section('csshead')
    <style>
        .container-input {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .internal-container-value {
            width: 80%;
            border-radius: 10px;
        }

        .input-type-value {
            flex-grow: 1;
        }

        .container-text {
            display: flex;
            flex-grow: 1;
        }

        .input-type-value .value {
            border: none;
        }

        .input-border {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;

        }

        .input-border input:focus {
            color: #495057;
            background-color: #fff;
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 25%);
        }

        .container-cifra {
            display: flex;
            flex: 3;
            justify-content: center;
            align-items: center;
            background: #e9ecef;
            border: 1px solid #ced4da;
            border-top: none;
            border-bottom: none;
        }

        .container-value {
            display: flex;
            flex: 7;
            justify-content: center;
            align-items: center;
            background: #e9ecef;
            border: 0px solid #ced4da;
        }

        .internal-container-value .container-title {
            justify-content: start;
        }

    </style>
@stop
<div class="container-input">
    <div class="internal-container-value">
        <div class="container-title">
            <h3>Valor total: </h3>
        </div>
        <div class="row input-border">
            <div class="input-group input-type-value">
                <input type="text" class="form-control value {{ $class ?? '' }}"
                    aria-label="Amount (to the nearest dollar)" name="value" data-valueClean>
            </div>
            <div class="container-text">
                <div class="container-cifra">$</div>
                <div class="container-value">{{ 'Reais' }}</div>
            </div>
        </div>
    </div>
</div>
