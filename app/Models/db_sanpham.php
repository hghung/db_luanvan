<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

use BeyondCode\Vouchers\Traits\HasVouchers;

class db_sanpham extends Model
{
    use SoftDeletes, Sluggable, HasVouchers;
    protected $table='db_sanpham';
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
    
    public function trangthai()
    {
        return $this->belongsTo('App\Models\db_trangthai','id_trangthai','id'); 
    }
}
