@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h1 class="panel-title pull-left">Empresas</h1>
                <a href="{{ route('empresas.create') }}" class="pull-right nodecoration">
                    <span class="glyphicon glyphicon-plus"></span> Cadastrar Empresa
                </a>
            </div> <!-- /.panel-heading -->

            <div class="panel-body">
                @include('includes._alert-success')

                @include('includes._alert-warning')

                {!! Form::open(['method' => 'get', 'route' => 'empresas.index', 'class' => 'form-horizontal']) !!}
                    <div class="form-group row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="search" class="form-control cnpj" placeholder="Pesquise por CNPJ"
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
                            <th class="col-md-2">CNPJ</th>
                            <th class="col-md-7">Nome</th>
                            <th class="col-md-2 text-center">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($businesses as $business)
                            <tr>
                                <td class="text-center">{{ $business->id }}</td>
                                <td>{{ $business->cnpj }}</td>
                                <td>{{ $business->name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('empresas.edit', ['id' => $business->id]) }}"
                                       class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-pencil"></span> Editar
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal"
                                       data-target="#modal-destroy" data-id="{{ $business->id }}"
                                       data-baseurl={{ route('empresas.destroy', null) }}>
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
                {{ $businesses->links() }}
            </div> <!-- /.panel-body -->
        </div> <!-- /.panel -->
    </div> <!-- /.container -->

    <!-- Modal de exclusão -->
    @include('includes.modal-destroy')
@endsection
