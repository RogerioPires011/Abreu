@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card border border-while">
                <div class="card-header border-while" style="background-color: while; text-align:center"><h5><b>Consulta Clientes</b><h5></div>
                <table class="table table-ordered table-hover"> 
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
@if(isset($listar))
    @foreach($listar as $list)
                        <tr>
                            <td>{{ $list->id }}</td>
                            <td>{{ $list->nome }}</td>
                            <td>
                                <button class="btn btn-outline-primary btn-sm">
                                    <a href="/cliente/{{$list->id}}">Detalhes</a>
                                </button>   
                                <button class="btn btn-outline-info btn-sm">
                                    <a style="color: info" href="/cliente/editar/{{ $list->id }}">Editar</a>
                                </button>
                                <button class="btn btn-outline-danger btn-sm">
                                    <a style="color: red" href="/cliente/destroy/{{ $list->id }}">Apagar</a>
                                </button>
                            </td>
                        </tr>
    @endforeach
@endif
                    </tbody>
                </table>
                <div class="card-footer border-while">
                    <a class="btn btn-primary btn-sm" role="button" href="/cliente/novo">Novo Cliente</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection