@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h1 class="panel-title pull-left">Sócios</h1>
                <a href="{{ route('socios.create') }}" class="pull-right nodecoration">
                    <span class="glyphicon glyphicon-plus"></span> Cadastrar Sócio
                </a>
            </div> <!-- /.panel-heading -->

            <div class="panel-body">
                @include('includes._alert-success')

                @include('includes._alert-warning')

                {!! Form::open(['method' => 'get', 'route' => 'socios.index', 'class' => 'form-horizontal']) !!}
                    <div class="form-group row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="search" class="form-control cpf" placeholder="Pesquise por CPF"
                                       name="q" value="{{ \Request::input('q') }}"/>
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div> <!--/.col-md-4 -->
                    </div> <!--/.form-group -->
                {!! Form::close() !!}

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th class="col-md-1 text-center">ID</th>
                            <th class="col-md-2">CPF</th>
                            <th class="col-md-3">Nome</th>
                            <th class="col-md-2">E-mail</th>
                            <th class="col-md-2">Empresa</th>
                            <th class="col-md-2 text-center">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($associates as $associate)
                            <tr>
                                <td class="text-center">{{ $associate->id }}</td>
                                <td>{{ $associate->cpf }}</td>
                                <td>{{ $associate->name }}</td>
                                <td>{{ $associate->email }}</td>
                                <td>{{ $associate->business->name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('socios.edit', ['id' => $associate->id]) }}"
                                       class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-pencil"></span> Editar
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal"
                                       data-target="#modal-destroy" data-id="{{ $associate->id }}"
                                       data-baseurl={{ route('socios.destroy', null) }}>
                                        <span class="glyphicon glyphicon-trash"></span> Excluir
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">Nenhum registro encontrado.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div> <!-- /.table-responsive -->

                <!-- Paginação -->
                {{ $associates->links() }}
            </div> <!-- /.panel-body -->
        </div> <!-- /.panel -->
    </div> <!-- /.container -->

    <!-- Modal de exclusão -->
    @include('includes.modal-destroy')
@endsection
