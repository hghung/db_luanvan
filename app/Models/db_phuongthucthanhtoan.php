<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class db_phuongthucthanhtoan extends Model
{
    use SoftDeletes;
    protected $table='db_phuongthucthanhtoan';
    public $timestamps = false;

    public function trangthai()
    {
        return $this->belongsTo('App\Models\db_trangthai','id_trangthai','id'); 
    }
}
