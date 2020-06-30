@extends('templates.template')
@section ('content')
<h1 class = "text-center">Vizualização</h1> <hr>

<div class = "col-8 m-auto">

@php

$user = $book->find($book->id)->relUsers;

@endphp

Título: {{$book->titulo}} <br>
Páginas: {{$book->pages}} <br>
Preço R$: {{$book->price}} <br>
Autor: {{$user->name}} <br>
Email do autor: {{$user->email}}
</div>
@endsection