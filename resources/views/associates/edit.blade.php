@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h1 class="panel-title pull-left">Editar Sócio - {{ $associate->name }}</h1>
                <a href="{{ route('socios.index') }}" class="pull-right">
                    <span class="glyphicon glyphicon-backward"></span> Voltar
                </a>
            </div> <!-- /.panel-heading -->

            <div class="panel-body">
                @include('includes._alert-danger')

                {!! Form::model($associate, ['method' => 'put', 'route' => ['socios.update', $associate->id],
                    'class' => 'form-horizontal']) !!}
                    {!! Form::hidden('id', $associate->id) !!}

                    @include('associates._form')
                {!! Form::close() !!}
            </div> <!-- /.panel-body -->
        </div> <!-- /.panel -->
    </div> <!-- /.container -->
@endsection
