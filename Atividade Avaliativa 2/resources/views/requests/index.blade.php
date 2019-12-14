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

    @foreach ($requests as $r)
    <tr>
      <td width="50px">{{ $r->id }}</td>
      <td>{{ $r->description }}</td>
      <td width="150px">{{ $r->date }}</td>
      <td width="5px">
        <form method="get" action="{{ route('requests.edit', $r->id) }}">
          <input class="btn btn-info" type="submit" value="Editar">
        </form>
      </td>
      <td width="5px">
        <form  method="post" action="{{ route('requests.destroy', $r->id) }}"
          onsubmit="return confirm('Confirma exclusão da cidade?');">
          @csrf
          @method('DELETE')
          <input class="btn btn-danger" type="submit" value="Excluir">
        </td>
      </form>
    </tr>
    @endforeach

  </tbody>
</table>
<form method="get" action="{{ route('requests.create') }}">
  <input class="btn btn-secondary" type="submit" value="Incluir" width="100%">
</form>

@endsection
