<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['title', 'body', 'price', 'bairshil_id', 'cat_id', 'lang_id'];
}
