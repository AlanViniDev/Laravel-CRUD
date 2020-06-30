@extends('templates.template')
@section ('content')
<h1 class = "text-center">CRUD</h1> <hr>

<div class = "text-center mt-3 mb-4">
<a href = "{{url('books/create')}}">
<button class = "btn btn-success"> Cadastrar </button>
</a>
</div>

<div class = "col-8 m-auto">
@csrf
<table class = "table text-center">
<thead class = "">
<tr>
<th scope = "col">ID</th>
<th scope = "col">Titulo</th>
<th scope = "col">Autor</th>
<th scope = "col">Preço</th>
<th scope = "col">Action</th>
</tr>
</thead>
<tbody>
@foreach($book as $books)
@php
$user = $books->find($books->id)->relUsers;
@endphp
<tr>
<td>{{$books->id}}</td>
<td>{{$books->titulo}}</td>
<td>{{$user->name}}</td>
<td>{{$books->price}}</td>

<td>
<a href = "{{url("books/$books->id")}}">
<button class = "btn btn-success" >Visualizar</button>
</a>
<a href = "{{url("books/$books->id/edit")}}">
<button class = "btn btn-primary">Editar</button>
</a>
<a href = "{{url("books/$books->id")}}" class = "js-del">
<button class = "btn btn-danger">Excluir</button>
</a>

</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection