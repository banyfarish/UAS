<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    protected $fillable = ['name','content','featured_image'];
}
