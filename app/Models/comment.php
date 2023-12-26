<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public $table="comments";

    public function pst()
    {
        return $this->belongsTo('App\Models\Post');
    }

}
