<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table='district';
    public $timestamps = false;

    public function tinhthanh() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\Province','province_id','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
}
