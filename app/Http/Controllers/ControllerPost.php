<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class ControllerPost extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::all();

      return view('create-post', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $datiVerificati = $request -> validate([
        'category_id' => 'required',
        'title' => 'required',
        'text' => 'required'
      ]);
      Post::create($datiVerificati);

      return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $category = Category::findOrFail($id);
      $posts = Post::where('category_id', $id)->get();

      return view('category-home', compact('category', 'posts'));
    }

    public function showSinglePost($id)
    {
      $post = Post::where('id', $id)->first();

      return view('single-post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::findOrFail($id);

      return view('edit-post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      //dd($request->all());
      $datiVerificati = $request -> validate([
        'category_id' => 'required',
        'title' => 'required',
        'text' => 'required'
      ]);
      Post::whereId($id) -> update($datiVerificati);

      return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::findOrFail($id);
      $post -> delete();

      return redirect('/');
    }
}
