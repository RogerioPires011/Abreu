@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<div class="container col-md-8 offset-md-2">
    	<div class="card border border-while">
		 	<div class="card-header border-while nv-background">
		 		<div class="card-title">
		 			<b>PRODUTOS</b>
		 		</div>
		 	</div>
		 	<div class="card-body">
					<form action="/roupa/{{ $edit->id }}" method="POST">
			    	@csrf
					<div class="form-row">
						<div class="form-group col-md-3">
                            <label for="nome">Nome da Roupa</label>
                            <input required type="text" class="form-control cpf-mask" name="nome" value="{{$edit->nome}}" placeholder="Ex.: Polo">
						</div>
						<div class="form-group col-md-3">
                            <label for="categoria">Categoria</label>
                            <input required type="text" class="form-control" name="categoria" value="{{$edit->categoria}}" placeholder="Ex.: Camiseta">
						</div>
                        <div class="form-group col-md-3">
                            <label for="quantidade">Quantidade</label>
                            <input required type="text" class="form-control phone-ddd-mask" name="quantidade" value="{{$edit->quantidade}}" placeholder="Ex.: 200">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="preco">Preço</label>
                            <input required type="text" class="form-control cel-ms-mask" name="preco" value="{{$edit->preco}}" placeholder="Ex.: 129.99">
                        </div>
					</div>							
			 	    <button type="submit" class="btn btn-primary btn-md">Salvar</button>
			 		<button type="cancel" class="btn btn-danger btn-md"><a href="/roupa" style="color: white;">Cancelar</a></button>
		 		</form>
		 	</div>
		</div>
	</div>
</div>

@endsection