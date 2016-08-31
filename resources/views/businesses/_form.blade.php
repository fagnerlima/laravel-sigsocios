<div class="form-group">
    {!! Form::label('cnpj', 'CNPJ:', [
        'class' => 'col-md-1 control-label'
    ]) !!}
    <div class="col-md-4">
        {!! Form::text('cnpj', null, [
            'class' => 'form-control cnpj',
            'required' => 'required',
            'autofocus' => 'autofocus'
        ]) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('name', 'Nome:', [
        'class' => 'col-md-1 control-label'
    ]) !!}
    <div class="col-md-4">
        {!! Form::text('name', null, [
            'class' => 'form-control',
            'required' => 'required',
        ]) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 col-md-offset-1">
        <button type="submit" class="btn btn-primary">
            <span class="glyphicon glyphicon-ok"></span> Salvar
        </button>
    </div>
</div>