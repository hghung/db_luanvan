<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $table='ward';
    public $timestamps = false;

    public function quanhuyen() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\District','district_id','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
}
