<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'profile', 'phone', 'lang_id'];
}
