<div class="modal fade" id="modal-destroy" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        {!! Form::open(['method' => 'delete', 'data-baseurl' => route('empresas.destroy', null)]) !!}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Confirmação de exclusão</h4>
            </div> <!-- /.modal-header -->
            <div class="modal-body">
                <span>Tem certeza que deseja excluir o registro?</span>
            </div> <!--/.modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Excluir</button>
            </div>
        </div> <!-- /.modal-content -->
        {!! Form::close() !!}
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->