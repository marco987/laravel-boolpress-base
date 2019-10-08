@extends('layout.layout-base')

@section('content')

  <div class="box-categoria">
    <h2>Categoria {{$post -> category -> category}}</h2>
    <p class="category-color" style="background-color:{{$post -> category -> category}}"></p>
    <a href="{{Route('home-page')}}">Back home</a>

      <div class="box">
        <h5>{{$post -> title}}</h5>
        <p>{!!$post -> text!!}</p>
        <a href="{{Route('edit.post', $post -> id)}}">Modifica post</a>
        <a href="{{Route('destroy.post', $post -> id)}}">Elimina post</a>
      </div>

  </div>

@endsection
