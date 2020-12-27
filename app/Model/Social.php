<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = ['fb_url', 'twitter_url', 'instagram_url', 'youtube_url'];
}
