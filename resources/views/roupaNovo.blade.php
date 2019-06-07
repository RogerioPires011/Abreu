@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<div class="container col-sm-6">
    	<div class="card border border-while">
		 	<div class="card-header border-while nv-background">
		 		<div class="card-title" style="text-align:center">
		 			<h5><b>CADASTRO DE PRODUTOS</b><h5>
		 		</div>
		 	</div>
		 	<div class="card-body">
		 		<form action="/roupa" method="POST">
			    	@csrf
					<div class="form-row">
						<div class="form-group col-md-4">
                            <label for="nome"><b>Nome da Roupa</b></label>
                            <input required type="text" class="form-control cpf-mask" name="nome" placeholder="Ex.: Polo">
						</div>
						<div class="form-group col-md-3">
                            <label for="categoria">Categoria</label>
                            <input required type="text" class="form-control" name="categoria" placeholder="Ex.: Camiseta">
						</div>
                        <div class="form-group col-md-2">
                            <label for="quantidade">Quantidade</label>
                            <input required type="number" class="form-control phone-ddd-mask" name="quantidade" placeholder="Ex.: 200">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="preco">Preço</label>
                            <input required type="number" class="form-control cel-ms-mask" name="preco" placeholder="Ex.: 129.99">
                        </div>
					</div>
					<hr>								
			 	    <button type="submit" class="btn btn-primary btn-md">Salvar</button>
			 		<button type="cancel" class="btn btn-danger btn-md"><a href="/roupa" style="color: white;">Cancelar</a></button>
		 		</form>
		 	</div>
		</div>
	</div>
</div>

@endsection