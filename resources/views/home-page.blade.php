@extends('layout.layout-base')

@section('content')

  <div class="box-ultimipost">
    <h2>Ultimi 5 post</h2>

    @foreach ($lastsPost as $lastPost)

      <div class="box">
        <h5>{{$lastPost -> category -> category}}
          <p class="category-color" style="background-color:{{$lastPost -> category -> category}}"></p>
        </h5>
        <p>{{$lastPost -> text}}</p>
      </div>
    @endforeach

  </div>

  <div class="box-categorie">
    <h2>Seleziona Categoria</h2>

  @foreach ($categories as $category)

    <div class="box">
      <h5>{{$category -> category}}</h5>
      <a href="#"><p class="category-color" style="background-color:{{$category -> category}}"></p></a>
    </div>

  @endforeach

  </div>

@endsection

{{-- <div class="box">
  <h4>Categoria: {{$category -> category}}</h4>
  <p class="category-color" style="background-color:{{$category -> category}}"></p>
  <h2>Titolo:</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div> --}}
