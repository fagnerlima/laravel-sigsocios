@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h1 class="panel-title pull-left">Cadastrar Usuário</h1>
                <a href="{{ route('usuarios.index') }}" class="pull-right nodecoration">
                    <span class="glyphicon glyphicon-backward"></span> Voltar
                </a>
            </div> <!-- /.panel-heading -->

            <div class="panel-body">
                @include('includes._alert-danger')

                {!! Form::open(['method' => 'post', 'route' => 'usuarios.store', 'class' => 'form-horizontal']) !!}
                    @include('users._form')
                {!! Form::close() !!}
            </div> <!-- /.panel-body -->
        </div> <!-- /.panel -->
    </div> <!-- /.container -->
@endsection
