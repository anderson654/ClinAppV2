$(document).ready(function ($) {
    // mascara pf
    $("#zip").mask("00000-000");
    $("#cpf_pf").mask("000.000.000-00");
    $(".cpf").mask("000.000.000-00");
    $('.zip').mask("00000-000");

    var options = {
        onKeyPress: function (cep, e, field, options) {
            var masks = ['(00) 0000-00000', '(00) 0 0000-0000'];
            var mask = (cep.length >= 15) ? masks[1] : masks[0];
            $('#phone_pf').mask(mask, options);
        }
    };

    $('#phone_pf').mask('(00) 0000-0000', options);

    // mascara pj
    $("#zip_pj").mask("00000-000");
    $("#cnpj").mask("00.000.000.0000-00");

    var options = {
        onKeyPress: function (cep, e, field, options) {
            var masks = ['(00) 0000-00000', '(00) 0 0000-0000'];
            var mask = (cep.length >= 15) ? masks[1] : masks[0];
            $('#phone_pj').mask(mask, options);
        }
    };
    $('#phone_pj').mask('(00) 0000-0000', options);

    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
        spOptions = {
            onKeyPress: function (val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };

    $('.sp_celphones').mask(SPMaskBehavior, spOptions);
});