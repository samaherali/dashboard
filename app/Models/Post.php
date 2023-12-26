<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table="articles";
    public function comments()
    {
        return $this->hasMany('App\Models\comment');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\App\User');
    }
}
