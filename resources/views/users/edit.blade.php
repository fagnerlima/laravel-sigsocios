@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h1 class="panel-title pull-left">Editar Usuário - {{ $user->name }}</h1>
                <a href="{{ route('usuarios.index') }}" class="pull-right">
                    <span class="glyphicon glyphicon-backward"></span> Voltar
                </a>
            </div> <!-- /.panel-heading -->

            <div class="panel-body">
                @include('includes._alert-danger')

                {!! Form::model($user, ['method' => 'put', 'route' => ['usuarios.update', $user->id],
                    'class' => 'form-horizontal']) !!}
                    {!! Form::hidden('id', $user->id) !!}
                    @include('users._form')
                {!! Form::close() !!}
            </div> <!-- /.panel-body -->
        </div> <!-- /.panel -->
    </div> <!-- /.container -->
@endsection
