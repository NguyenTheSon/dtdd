<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnhSP extends Model {

    protected $table = "anhsp";
    protected $fillable = ['id', 'san_pham_id', 'anh'];
    public $timestamps = false;

}
