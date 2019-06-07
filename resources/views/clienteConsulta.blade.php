@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-16">
            <div class="card border border-while">
                <div class="card-header border-while" style="text-align:center">
                    <h3><b>Dados do Cliente</b>
                        <h3>
                </div>
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Data de Nascimento</th>
                            <th>Sexo</th>
                            <th>Celular</th>
                            <th>E-mail</th>
                            <th>CEP</th>
                            <th>Endereço</th>
                            <th>Complemento</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>UF</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $list->id }}</td>
                            <td>{{ $list->nome }}</td>
                            <td>{{ $list->cpf}}</td>
                            <td>{{ $list->dataNasc}}</td>
                            <td>{{ $list->sexo}}</td>
                            <td>{{ $list->celular}}</td>
                            <td>{{ $list->email}}</td>
                            <td>{{ $list->cep}}</td>
                            <td>{{ $list->endereco}}</td>
                            <td>{{ $list->complemento}}</td>
                            <td>{{ $list->bairro}}</td>
                            <td>{{ $list->cidade}}</td>
                            <td>{{ $list->uf}}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-footer border-while">
                    <a class="btn btn-primary btn-sm" role="button" href="/cliente/novo">Novo Cliente</a>
                    <a class="btn btn-primary btn-sm" role="button" href="/cliente">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection