@extends('layout.layout-base')

@section('content')

  <div class="box-categoria">
    <h2>Categoria {{$posts -> category -> category}}</h2>
    <p class="category-color" style="background-color:{{$posts -> category -> category}}"></p>
    <a href="{{Route('home-page')}}">Back home</a>

      <div class="box">
        <h5>{{$posts -> title}}</h5>
        <p>{{$posts -> text}}</p>
      </div>

  </div>

@endsection
