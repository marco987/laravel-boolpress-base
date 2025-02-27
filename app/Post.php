<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function category() {

      return $this -> belongsTo(Category::class);
    }

  protected $fillable = [
    'category_id',
    'title',
    'text'
  ];
}
