<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class db_loaiBDS extends Model
{
    use SoftDeletes;
    protected $table='db_loaiBDS';
    public $timestamps = false;
}
