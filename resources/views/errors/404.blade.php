@extends('layouts.layout')

@section('content')
    <div class="container">
        <header>
            <h1>Erro 404 - Página não encontrada</h1>
            <hr>
        </header>

        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/erro404.png') }}" title="Erro 404">
            </div> <!--/.col-md-6 -->
            <div class="col-md-8">
                <p>Possíveis motivos:</p>
                <ul>
                    <li>O conteúdo não está mais no ar;</li>
                    <li>A página mudou de lugar;</li>
                    <li>Você digitou o endereço errado.</li>
                </ul>
                <p>Se você digitou o endereço (URL) manualmente, por favor verifique novamente a sintaxe do endereço. Se você acredita ter encontrado um problema no servidor, por favor entre em contato com o webmaster.</p>
                <p><a href="{{ route('/') }}" class="btn btn-primary">
                        &laquo; Voltar à Página Inicial</a></p>
            </div> <!--/.col-md-6 -->
        </div> <!--/.row -->
    </div>
@endsection
