<div class="form-group">
    {!! Form::label('cpf', 'CPF:', [
        'class' => 'col-md-2 control-label'
    ]) !!}
    <div class="col-md-4">
        {!! Form::text('cpf', null, [
            'class' => 'form-control cpf',
            'required' => 'required',
            'autofocus' => 'autofocus'
        ]) !!}
    </div> <!-- /.col-md-4 -->
</div> <!-- /.form-group -->

<div class="form-group">
    {!! Form::label('name', 'Nome:', [
        'class' => 'col-md-2 control-label'
    ]) !!}
    <div class="col-md-4">
        {!! Form::text('name', null, [
            'class' => 'form-control',
            'required' => 'required',
        ]) !!}
    </div> <!-- /.col-md-4 -->
</div> <!-- /.form-group -->

<div class="form-group">
    {!! Form::label('email', 'E-mail:', [
        'class' => 'col-md-2 control-label'
    ]) !!}
    <div class="col-md-4">
        {!! Form::email('email', null, [
            'class' => 'form-control',
            'required' => 'required',
        ]) !!}
    </div> <!-- /.col-md-4 -->
</div> <!-- /.form-group -->

<div class="form-group">
    {!! Form::label('business_id', 'Empresa:', [
        'class' => 'col-md-2 control-label'
    ]) !!}
    <div class="col-md-4">
        {!! Form::select('business_id', $businesses, null, [
            'class' => 'form-control',
            'required' => 'required'
        ]) !!}
    </div> <!-- /.col-md-4 -->
</div> <!-- /.form-group -->

<div class="form-group">
    <div class="col-md-4 col-md-offset-2">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    </div> <!-- /.col-md-4 -->
</div> <!-- /.form-group -->