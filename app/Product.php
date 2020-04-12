<?php

namespace App;
  
use Illuminate\Database\Eloquent\Model;
   
class Product extends Model
{
    protected $fillable = [
        'name', 'detail'
    ];


public function posts(){
    return $this->hasMany(Post::class);
}

}