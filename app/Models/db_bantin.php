<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Laravelista\Comments\Commentable;


class db_bantin extends Model implements Viewable
{
    // use Illuminate\Database\Eloquent\SoftDeletes;
    use  Sluggable,InteractsWithViews,Commentable,SoftDeletes;
    protected $table='db_bantin';

    public function sluggable() {
        return [
            'slug' => [
                'source' => 'tieu_de',
            ]
        ];
    }
    
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function bds() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->hasOne('App\Models\db_batdongsan','id_bantin','id'); 
        
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function hinhthuc() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\db_hinhthuc','id_hinhthuc','id'); 
        
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function trangthai() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\db_trangthai','id_trangthai','id'); 
        
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function user() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\User','id_thanhvien','id'); 
        
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    


}
