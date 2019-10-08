<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class ControllerCategory extends Controller
{
  public function index(){

    $categories = Category::all();
    $lastsPost = Post::orderBy('updated_at', 'DESC')->take(5)->get();

    return view('home-page', compact('categories', 'lastsPost'));
  }
}
