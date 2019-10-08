@extends('layout.layout-base')

@section('content')

  <a href="{{Route('home-page')}}">Back home</a>

  <div class="form-create">

    <form action="{{Route('store.post')}}" method="post">
      @csrf
      @method('POST')

      <select name="category_id">

        @foreach ($categories as $category)
          <option value="{{$category -> id}}">{{$category -> category}}</option>
        @endforeach

      </select>

      <label for="title">Titolo</label>
      <input type="text" name="title" value="">
      <label for="text">Testo</label>
      <input type="text" name="text" value="">

      <button type="submit"> SALVA </button>
    </form>

  </div>

@endsection
