<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'image', 'body', 'category_id', 'user_id' , 'state'];
}
