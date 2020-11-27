<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class db_ct_taisan extends Model
{
    protected $table='db_ct_taisan';
    public $timestamps = false;

    public function taisan() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\db_taisan','id_taisan','id'); 
        
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
}
