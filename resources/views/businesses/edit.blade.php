@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h1 class="panel-title pull-left">Editar Empresa - {{ $business->cnpj }}: {{ $business->name }}</h1>
                <a href="{{ route('empresas.index') }}" class="pull-right">
                    <span class="glyphicon glyphicon-backward"></span> Voltar
                </a>
            </div> <!-- /.panel-heading -->

            <div class="panel-body">
                @include('includes._alert-danger')

                {!! Form::model($business, ['method' => 'put', 'route' => ['empresas.update', $business->id],
            'class' => 'form-horizontal']) !!}
                {!! Form::hidden('id', $business->id) !!}
                    @include('businesses._form')
                {!! Form::close() !!}
            </div> <!-- /.panel-body -->
        </div> <!-- /.panel -->
    </div> <!-- /.container -->
@endsection
