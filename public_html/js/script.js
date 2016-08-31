$(function () {
    // Máscaras dos campos de formulário
    $('.cnpj').mask('00.000.000/0000-00');
    $('.cpf').mask('000.000.000-00');

    // Remoção das máscaras dos campos de formulário para envio
    $('form').submit(function () {
        $('.cnpj, .cpf').unmask();
    });

    // Exclusão de registros
    $('#modal-destroy').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var modal = $(this);
        var form = modal.find('form');
        //var baseUrl = form.data('baseurl');
        var baseUrl = button.data('baseurl');

        if(!baseUrl.endsWith('/'))
            baseUrl += '/';

        form.attr('action', baseUrl + id);
        modal.find('.modal-body span').html('Tem certeza que deseja excluir o registro <b>' + id + '</b>?');
    });
});