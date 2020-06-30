@extends('templates.template')
@section ('content')
<h1 class = "text-center">@if(isset($book))Editar @else Cadastrar @endif</h1> <hr>
<div class = "col-8 m-auto">

@if(isset($errors) && count ($errors) > 0)
<div class = "text-center mt-4 mb-4 p-2 alert-danger">
@foreach($errors->all() as $erro)
{{$erro}}<br>
@endforeach
</div>
@endif

@if(isset($book))
<form name = "formEdit" id = "formEdit" method = "post" action = "{{url("books/$book->id")}}">
@method('PUT')
@else
<form name = "formCad" id = "formCad" method = "post" action = "{{url('books')}}">
@endif

@csrf

<input class = "form-control" type = "text" name = "titulo"  value = "{{$book->titulo ?? '' }}" id = "titulo" placeholder = "Digite o titulo do livro" required>
<br>
<select class = "form-control" name = "id_user" id = "id_user" required>
<option value = " {{$book->relUsers->id ?? '' }}"> {{$book->relUsers->name ?? ''}} </option>
@foreach($users as $user)
<option value = "{{$user->id}}">{{$user->name}}</option>
@endforeach
</select> <br>
<input value = "{{$book->pages ?? ''}}" class = "form-control" type = "text" name = "pages" id = "pages" placeholder = "Digite quantas páginas tem o livro" required>
<br>
<input value = "{{$book->price ?? ''}}"  class = "form-control" type = "text" name = "price" id = "price" placeholder = "Digite o preço do livro" required>
<br>
<input type = "submit" class = "btn btn-primary" value = "@if(isset($book))Editar @else Cadastrar @endif">
</form>
</div>
@endsection