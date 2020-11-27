<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class db_loaibantin extends Model
{
    use SoftDeletes;
    // use Illuminate\Database\Eloquent\SoftDeletes;
    protected $table='db_loaibantin';
    public $timestamps = false;
}
