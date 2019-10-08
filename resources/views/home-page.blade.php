@extends('layout.layout-base')

@section('content')

  <div class="box-ultimipost">
    <h2>
      <a href="{{Route('create.post')}}">Scrivi nuovo post</a><br>
      Ultimi 5 post >>>
    </h2>

    @foreach ($lastsPost as $lastPost)

      <div class="box">
        <h5>{{$lastPost -> category -> category}}
          <p class="category-color" style="background-color:{{$lastPost -> category -> category}}"></p>
        </h5>
        <p><b>{{$lastPost -> title}}</b></p>
        <p>{{$lastPost -> text}}</p>
      </div>
    @endforeach

  </div>

  <div class="box-categorie">
    <h2>Seleziona Categoria</h2>

  @foreach ($categories as $category)

    <div class="box">
      <h5>{{$category -> category}}</h5>
      <a href="{{Route('show.category', $category -> id)}}"><p class="category-color" style="background-color:{{$category -> category}}"></p></a>
    </div>

  @endforeach

  </div>

@endsection
