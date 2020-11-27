<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class db_taisan extends Model
{
    use SoftDeletes;
    // use Illuminate\Database\Eloquent\SoftDeletes;
    protected $table='db_taisan';
    public $timestamps = false;
}
