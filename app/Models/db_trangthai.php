<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class db_trangthai extends Model
{
    use SoftDeletes;
    // use Illuminate\Database\Eloquent\SoftDeletes;
    protected $table='db_trangthai';
    public $timestamps = false;
}
