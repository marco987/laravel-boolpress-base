@extends('layout.layout-base')

@section('content')

@foreach ($categories as $category)

  <div class="box">
    <h4>Categoria: {{$category -> category}}</h4>
    <p class="category-color" style="background-color:{{$category -> category}}"></p>
    <h2>Titolo:</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>

@endforeach

@endsection
