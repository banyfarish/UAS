<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    protected $table = "komentar";
    protected $primaryKey = "id";
    public $timestamps = true;
}
