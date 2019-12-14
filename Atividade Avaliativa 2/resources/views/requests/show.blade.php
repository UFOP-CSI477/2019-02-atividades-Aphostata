@extends('layouts.app')
@section('content') 

<style>
  input{
    text-align: center;
    width: 100%;
    padding: 3px;
    border: 1px solid black;
    border-radius: 5px;
  }
  td{
    text-align: center
  }
  th{
    text-align-last: center;
  }

</style>

<table class="table table-striped table-bordered">
  <thead class="table-light">
    <tr>
      <th>Id</th>
      <th>Descrição</th>
      <th>Data</th>
    </tr>
  </thead>
  <tbody>

<h2 align="center">Requisições</h1>

    @foreach ($request as $r)
    <tr>
      <td>{{ $r->description }}</td>
      <td width="150px">{{ $r->date }}</td>
      </form>
    </tr>
    @endforeach

  </tbody>
</table>
<input type="text" value="{{ adminsubs_pricesum }}" class="form-control" disabled>
<form method="get" action="{{ route('requests.create') }}">
  <input class="btn btn-secondary" type="submit" value="Incluir" width="100%">
</form>

@endsection
