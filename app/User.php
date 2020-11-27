<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Laravelista\Comments\Commenter;

use BeyondCode\Vouchers\Traits\CanRedeemVouchers; // su dung voucher


class User extends Authenticatable
{
    protected $table='db_thanhvien';
    use Notifiable, Commenter, CanRedeemVouchers;
    // protected $primaryKey = 'id_user'; 
    // để sử dụng bảng tbl_user của minh tạo ra, mặc định users của laravel nên phải đổi nó lại.
    use Notifiable;
    public function phuongxa() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\Ward','id_phuongxa','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
    public function vaitro() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\db_vaitro','id_vaitro','id'); 
        
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
    public function loaithanhvien() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\db_loaithanhvien','id_loaithanhvien','id'); 
        
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function datlich() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->hasOne('App\Models\db_datlich','id_khachhang','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

