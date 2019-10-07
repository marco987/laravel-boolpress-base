<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class ControllerCategory extends Controller
{
  public function index(){

    $categories = Category::all();

    return view('home-page', compact('categories'));
  }
}
