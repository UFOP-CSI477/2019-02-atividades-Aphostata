@extends('layouts.app')
@section('content') 

<style type="text/css">
	input{
		text-align: center;
		width: 100%;
		padding: 3px;
		border: 1px solid black;
		border-radius: 5px;
	}
	form{
		width: 450px;
		font-size: 16px;
		padding: 30px 30px 15px 30px;
		border: 1px solid black;
	}
	select{
		margin: 0 auto;
	}
	p{
		text-align: center;
		font-family: sans-serif;

	}
	select{
		width: 100%;
		text-align-last: center;
	}

</style>


<div class="container">
	<div class="form-group">
		<div class="col-md-6 offset-md-3">
			<form method="post" action="{{ route('admin.update' , $adminsubs->id) }}">

				@csrf
				@method('PATCH')

				<p>Protocolo: </p>

				<p>Nome: <input type="text" name="name"></p>
				<p>Preço: <input type="number" name="price"></p>

				<input class="btn btn-secondary" type="submit" name="btnSalvar" value="Alterar">
			</form>
		</div>
	</div>
</div>
@endsection
