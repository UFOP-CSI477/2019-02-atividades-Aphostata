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

<h2 align="center">Protocolos</h1>

<table class="table table-striped table-bordered">
  <thead class="table-light">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($adminsubs as $a)
    <tr>
      <td width="50px">{{ $a->id }}</td>
      <td>{{ $a->name }}</td>
      <td width="200px">{{ $a->price }}</td>
      <td width="5px">
        <form  method="post" action="{{ route('admin.destroy', $a->id) }}"
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
<form method="get" action="{{ route('admin.create') }}">
  <input class="btn btn-secondary" type="submit" value="Incluir" width="100%">
</form>
@endsection