<div class="form-group">
    {!! Form::label('name', 'Nome:', [
        'class' => 'col-md-3 control-label'
    ]) !!}
    <div class="col-md-4">
        {!! Form::text('name', null, [
            'class' => 'form-control',
            'required' => 'required',
            'autofocus' => 'autofocus'
        ]) !!}
    </div> <!-- /.col-md-4 -->
</div> <!-- /.form-group -->

<div class="form-group">
    {!! Form::label('email', 'E-mail:', [
        'class' => 'col-md-3 control-label'
    ]) !!}
    <div class="col-md-4">
        {!! Form::email('email', null, [
            'class' => 'form-control',
            'required' => 'required',
        ]) !!}
    </div> <!-- /.col-md-4 -->
</div> <!-- /.form-group -->

<div class="form-group">
    {!! Form::label('password', 'Senha:', [
        'class' => 'col-md-3 control-label'
    ]) !!}
    <div class="col-md-4">
        {!! Form::password('password', [
            'class' => 'form-control',
            'required' => 'required'
        ]) !!}
    </div> <!-- /.col-md-4 -->
</div> <!-- /.form-group -->

<div class="form-group">
    {!! Form::label('password-confirm', 'Confirmação de Senha:', [
        'class' => 'col-md-3 control-label'
    ]) !!}
    <div class="col-md-4">
        {!! Form::password('password-confirm', [
            'class' => 'form-control',
            'required' => 'required'
        ]) !!}
    </div> <!-- /.col-md-4 -->
</div> <!-- /.form-group -->

<div class="form-group">
    <div class="col-md-4 col-md-offset-3">
        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    </div> <!-- /.col-md-4 -->
</div> <!-- /.form-group -->