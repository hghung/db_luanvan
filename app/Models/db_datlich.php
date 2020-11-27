<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class db_datlich extends Model
{
    protected $table='db_datlich';
    public $timestamps = false;

    public function idkhachhang() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\User','id_khachhang','id'); 
        
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
    public function idnguoidang() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\User','id_nguoidang','id'); 
        
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function idbantin() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\db_bantin','id_bantin','id'); 
        
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    
}
