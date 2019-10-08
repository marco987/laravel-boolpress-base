@extends('layout.layout-base')

@section('content')

  <div class="box-categoria">
    <h2>Categoria {{$category -> category}}</h2>
    <p class="category-color" style="background-color:{{$category -> category}}"></p>
    <a href="{{Route('home-page')}}">Back home</a>

    @foreach ($posts as $post)

      <div class="box">
        <h5>{{$post -> title}}</h5>
        <p>{{$post -> text}}</p>
      </div>

    @endforeach

  </div>

@endsection
