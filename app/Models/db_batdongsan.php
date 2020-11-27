<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class db_batdongsan extends Model
{
    protected $table='db_batdongsan';
    public $timestamps = false;

    public function hinhanh() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->hasMany('App\Models\db_hinhanh','id_batdongsan','id'); 
        
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function loaibds() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\db_loaiBDS','id_loaibds','id'); 
        
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function cttaisan() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->hasMany('App\Models\db_ct_taisan','id_batdongsan','id'); 
        
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function ctthuoctinh() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->hasMany('App\Models\db_ct_thuoctinh','id_batdongsan','id'); 
        
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

}
