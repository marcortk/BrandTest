<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $fillable = [
        'name', 'biography', 'about'
    ];

    public function tags()
    {
    	return $this->belongsToMany('App\Models\Tag', 'speaker_tag');
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Models\Category', 'speaker_category');
    }
}
