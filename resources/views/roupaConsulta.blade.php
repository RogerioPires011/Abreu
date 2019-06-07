@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card border border-while">
            <div class="card-header border-while"><b>Produto {{ $list->nome }}</b></div>
                <table class="table table-ordered table-hover"> 
                    <thead>
                        <tr>
                            <th>Nome da roupa</th>
                            <th>Categoria</th>
                            <th>Quantidade</th>
                            <th>Preço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $list->nome }}</td>
                            <td>{{ $list->categoria}}</td>
                            <td>{{ $list->quantidade}}</td>
                            <td>{{ $list->preco}}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-footer border-while">
                    <a class="btn btn-primary btn-sm" role="button" href="/roupa/novo">Novo produto</a>
                    <a class="btn btn-primary btn-sm" role="button" href="/roupa">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection