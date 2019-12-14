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
			<form method="post" action="{{ route('requests.store') }}">

				@csrf

				<p>Requisição: </p>

				<select name="description">
					@foreach ($subjects as $s)
					<option value="{{ $s->name }}">{{ $s->name }}</option>
					@endforeach
				</select>

				<p>Data: <input type="date" name="date"></p>
				<input class="btn btn-secondary"  type="submit" name="btnSalvar" value="Incluir">


			</form>

		</div>
	</div>
</div>
@endsection
