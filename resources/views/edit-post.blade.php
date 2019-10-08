@extends('layout.layout-base')

@section('content')

  <a href="{{Route('home-page')}}">Back home</a>

  <div class="form-create">

    <form action="{{Route('update.post', $post -> id)}}" method="post">
      @csrf
      @method('POST')

      <select name="category_id" value="{{$post -> category_id}}">
        <option value="{{$post -> category_id}}">{{$post -> category -> category}}</option>
      </select>

      <label for="title">Titolo</label>
      <input type="text" name="title" value="{{$post -> title}}">
      <label for="text">Testo</label>
      <input type="text" name="text" value="{{$post -> text}}">

      <button type="submit"> SALVA </button>
    </form>

  </div>

@endsection
