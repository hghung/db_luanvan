<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class db_thuoctinh extends Model
{
    use SoftDeletes;
    protected $table='db_thuoctinh';
    public $timestamps = false;
}
