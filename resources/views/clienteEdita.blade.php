@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="container col-md-8 offset-md-2">
        <div class="card border border-while">
            <div class="card-header border-while nv-background">
                <div class="card-title" style="text-align:center">
                    <h3><b>EDITAR CLIENTES</b></h3>
                </div>
            </div>
            <div class="card-body">
                <form action="/cliente/{{ $edit->id }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome do Cliente</label>
                            <input required type="text" class="form-control" name="nome" value="{{$edit->nome}}" placeholder="exe.: Francisco alves">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="cpf">CPF</label>
                            <input required type="text" class="form-control cpf-mask" name="cpf" value="{{$edit->cpf}}" placeholder="Ex.: 000.000.000-00">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="dataNasc">Data de Nascimento</label>
                            <input required type="text" class="form-control" name="dataNasc" value="{{$edit->dataNasc}}" placeholder="Ex.: dd/mm/aaaa" data-mask="00/00/0000" max="10">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="sexo">Sexo:</label>
                            <select id="sexo" required name="sexo" class="form-control">
                                <option selected required></option>
                                <option value="MASCULINO">MASCULINO</option>
                                <option value="FEMININO">FEMININO</option>
                                <option value="NAO INFORMADO">NÃO INFORMADO</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="celular">Celular</label>
                            <input required type="text" class="form-control cel-ms-mask" name="celular" value="{{$edit->celular}}" placeholder="Ex.: (00) 00000-0000">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <input required type="email" class="form-control cel-ms-mask" name="email" value="{{$edit->email}}" placeholder="Ex.: francisco@gmail.com">
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="cep">CEP</label>
                            <input type="text" class="form-control cep-mask" name="cep" value="{{$edit->cep}}" placeholder="Ex.: 00000-000">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" name="endereco" value="{{$edit->endereco}}" placeholder="Ex.: Rua fulano, 77">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="complemento">Complemento</label>
                            <input type="text" class="form-control" name="complemento" value="{{$edit->complemento}}" placeholder="Ex.: Casa de esquina">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="bairro">Bairro:</label>
                            <input type="text" class="form-control" name="bairro" value="{{$edit->bairro}}" placeholder="Ex.: bairro ciclano">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cidade">Cidade</label>
                            <input type="text" class="form-control" name="cidade" value="{{$edit->cidade}}" placeholder="Ex.: Campo grande">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="uf">UF</label>
                            <input type="text" class="form-control" name="uf" value="{{$edit->uf}}" placeholder="Ex.: MS">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md">Salvar</button>
                    <button type="cancel" class="btn btn-danger btn-md"><a href="/cliente" style="color: white;">Cancelar</a></button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection