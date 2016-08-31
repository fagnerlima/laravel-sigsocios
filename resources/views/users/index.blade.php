@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h1 class="panel-title pull-left">Usuários</h1>
                <a href="{{ route('usuarios.create') }}" class="pull-right nodecoration">
                    <span class="glyphicon glyphicon-plus"></span> Cadastrar Usuário
                </a>
            </div> <!-- /.panel-heading -->

            <div class="panel-body">
                @include('includes._alert-success')

                @include('includes._alert-warning')

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th class="col-md-1 text-center">ID</th>
                            <th class="col-md-6">Nome</th>
                            <th class="col-md-3">E-mail</th>
                            <th class="col-md-2 text-center">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td class="text-center">{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="text-center">
                                    <a href="{{ route('usuarios.edit', ['id' => $user->id]) }}"
                                       class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-pencil"></span> Editar
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs" data-toggle="modal"
                                       data-target="#modal-destroy" data-id="{{ $user->id }}"
                                       data-baseurl={{ route('usuarios.destroy', null) }}>
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
                {{ $users->links() }}
            </div> <!-- /.panel-body -->
        </div> <!-- /.panel -->
    </div> <!-- /.container -->

    <!-- Modal de exclusão -->
    @include('includes.modal-destroy')
@endsection
