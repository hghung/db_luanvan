<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class db_ct_thuoctinh extends Model
{
    protected $table='db_ct_thuoctinh';
    public $timestamps = false;

    public function thuoctinh() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\db_thuoctinh','id_thuoctinh','id'); 
        
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
}
