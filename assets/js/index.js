$(document).ready(function() {

    $('select[name="tarefa"').select2({
        placeholder: "Selecione uma tarefa",
    });

    $('select[name="tipo_pagamento"').select2({
        placeholder: "Selecione um tipo de pagamento",
    });

    /*
    $('input[name="valor"]').mask('000.000.000.000.000,00', {reverse: true});
    $('input[name="total_servico"]').mask('000.000.000.000.000,00', {reverse: true});
    $('.valor_mensal').mask('000.000.000.000.000,00', {reverse: true});
*/  
});