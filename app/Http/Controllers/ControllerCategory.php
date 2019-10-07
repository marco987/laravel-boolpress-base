<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class ControllerCategory extends Controller
{
  public function index(){

    return view('home-page');
  }
}
