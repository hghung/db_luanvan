<?php

use App\Models\db_bantin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/dang-ky-2','DangkyController@post_reg')->name('post.reg');

Route::post('/checkusername2','DangkyController@checkusername')->name('check.username');
Route::post('/checkemail','DangkyController@checkemail')->name('check.email');
// test validate ajax
Route::get('/voucher','CuahangController@voucher');

Route::get('/test','TestController@test');
Route::get('/test1','TestController@test2');
Route::get('/test3','TestController@test3');
Route::get('/test4','TestController@test4');



//dropzone
Route::get('/item/create', 'ItemController@create');

Route::post('/item', 'ItemController@store');

Route::post('/item/image/upload', 'ItemController@fileUpload')->name('item.upload');
Route::get('/item/image/delete', 'ItemController@removeUpload')->name('item.del');

// 2
Route::get('/dropzone', 'DropzoneController@index');
Route::post('/dropzone/upload', 'DropzoneController@upload')->name('dropzone.upload');
Route::get('/dropzone/fetch', 'DropzoneController@fetch')->name('dropzone.fetch');
Route::get('/dropzone/delete', 'DropzoneController@delete')->name('dropzone.delete');
// ---------------------------
Route::post('save-form', 'DangkyController@store')->name('validate.ajax');

// Ddangw nhap
Route::post('/dang-nhap','DangnhapController@post_login')->name('post.login');
// dang xuat
Route::get('/dang-xuat','DangnhapController@logout')->name('dangxuat');

// -------------------------------------------------------------------------- ////
Route::get('/','PageController@home')->name('home1');

Route::group(['prefix'=>'danh-sach-ban-tin'],function(){
	Route::get('/','PageController@list')->name('list.1');
	Route::get('/danh-sach/{slug}/','PageController@single')->name('single');
	

});


//so sanh
Route::get('/so-sanh','SosanhController@list')->name('compare');
Route::get('/so-sanh-{id}','SosanhController@addCompare')->name('compare.add');
Route::get('/xoa-san-pham-{id}','SosanhController@delCompare')->name('compare.del');


// tìm kiếm ajax
Route::get('/tim-kiem-bao-tri', 'TimkiemController@timkiem_baotri')->name('timkiem.baotri');
Route::get('/tim-kiem-user', 'TimkiemController@timkiem_user')->name('timkiem.user');
Route::get('/tim-kiem-tin-tuc', 'TimkiemController@timkiem_tintuc')->name('timkiem.tintuc');
Route::get('/tim-kiem-tin-tuc-khoi-phuc', 'TimkiemController@timkiem_tintuc_kp')->name('timkiem.tintuc.kp');
Route::get('/tim-kiem-bao-tri-khoi-phuc', 'TimkiemController@timkiem_baotri_kp')->name('timkiem.baotri.kp');



// tin tuc
Route::get('/tin-tuc', 'PageController@blog')->name('blog');
Route::get('/tin-tuc-{id}', 'PageController@detail_blog')->name('blog.detail');

// backup
Route::group(['prefix'=>'backup'],function(){
	Route::get('/','BackupController@backup')->name('backup');
	
	Route::get('/run','BackupController@run_backup')->name('backup.run');

	Route::get('/delete','BackupController@delete_backup')->name('delete.run');

	// Route::get('/add','LoainhaController@post_add')->name('backup.add');


});






Route::group(['prefix'=>'tai-khoan','middleware'=>'login_account'],function(){

	Route::get('/','TaikhoanController@dashbord')->name('taikhoan.dashbord');
	Route::get('/backup','BackupController@dashbord')->name('taikhoan.backup');
	Route::get('/thong-ke','ThongkeController@dashbord')->name('taikhoan.thongke');

	

	Route::group(['prefix'=>'dat-lich'],function(){
		// khach-hang
		Route::post('/{id}','BookingController@datlich')->name('datlich.post');
		// nguoi-dang
		Route::get('/danh-sach','BookingController@list')->name('datlich.list');

		Route::get('/tim-kiem', 'TimkiemController@timkiem_datlich')->name('datlich.timkiem');

		// trangthai
		Route::get('/phe-duyet-{id}','BookingController@phe_duyet')->name('datlich.pheduyet');
		Route::get('/huy-{id}','BookingController@huy_duyet')->name('datlich.huy');

	});

	// chat
	Route::group(['prefix'=>'tin-nhan'],function(){
		Route::get('/','ChatController@index')->name('chat.index');

	}); 
	// profile
	Route::group(['prefix'=>'thong-tin-tai-khoan'],function(){
		Route::get('/','TaikhoanController@profile')->name('taikhoan.profile');
		Route::post('/update-profile','TaikhoanController@profile_update')->name('taikhoan.profile.update');
		//update mat khau
		Route::post('/check-password','TaikhoanController@checkpassword')->name('check.password');
		Route::post('/update-mat-khau','TaikhoanController@password_update')->name('taikhoan.profile.matkhau.update');
		// ajax tinh-quan-xa
		Route::get('/quan-huyen/{id_province}','TaikhoanController@ajax_district')-> name('ajax.quanhuyen');
		Route::get('/phuong-xa/{id_ward}','TaikhoanController@ajax_ward')-> name('ajax.phuongxa') ;
	}); 
	 	// vaitro check_user bang middleware bằng admin thì mới cho vào
	Route::group(['prefix'=>'loai-thanh-vien','middleware'=>'check_user'],function(){
		Route::get('/danh-sach','LoaithanhvienController@list')->name('loaithanhvien.list');
		// edit
		Route::get('/sua-{id}','LoaithanhvienController@edit')->name('loaithanhvien.edit');
		Route::post('/sua-{id}','LoaithanhvienController@edit_post')->name('loaithanhvien.edit.post');
	});

	Route::group(['prefix'=>'thuoc-tinh','middleware'=>'check_user'],function(){
		Route::get('/danh-sach','ThuoctinhController@list')->name('thuoctinh.list');
		//add
		Route::get('/them','ThuoctinhController@add')->name('thuoctinh.add');
		Route::post('/them','ThuoctinhController@add_post')->name('thuoctinh.add.post');
		// edit
		Route::get('/sua-{id}','ThuoctinhController@edit')->name('thuoctinh.edit');
		Route::post('/sua-{id}','ThuoctinhController@edit_post')->name('thuoctinh.edit.post');
		// delete
		Route::get('/xoa-{id}','ThuoctinhController@delete')->name('thuoctinh.delete');
		// Tim kiem
		Route::get('/tim-kiem', 'TimkiemController@timkiem_thuoctinh')->name('thuoctinh.timkiem');
		// Khôi phục
		Route::get('/khoi-phuc','ThuoctinhController@list_restore')->name('thuoctinh.khoiphuc');
		Route::get('/khoi-phuc-{id}','ThuoctinhController@restore')->name('thuoctinh.khoiphuc.post');
		// Tim kiem khoi phục
		Route::get('/tim-kiem-khoi-phuc', 'TimkiemController@timkiem_thuoctinh_khoiphuc')->name('thuoctinh.timkiem.khoiphuc');
	});

	Route::group(['prefix'=>'tai-san','middleware'=>'check_user'],function(){
		Route::get('/danh-sach','TaisanController@list')->name('taisan.list');
		//add
		Route::get('/them','TaisanController@add')->name('taisan.add');
		Route::post('/them','TaisanController@add_post')->name('taisan.add.post');
		// edit
		Route::get('/sua-{id}','TaisanController@edit')->name('taisan.edit');
		Route::post('/sua-{id}','TaisanController@edit_post')->name('taisan.edit.post');
		// TaisanController
		Route::get('/xoa-{id}','TaisanController@delete')->name('taisan.delete');
		// Tim kiem
		Route::get('/tim-kiem', 'TimkiemController@timkiem_taisan')->name('taisan.timkiem');
		// Khôi phục
		Route::get('/khoi-phuc','TaisanController@list_restore')->name('taisan.khoiphuc');
		Route::get('/khoi-phuc-{id}','TaisanController@restore')->name('taisan.khoiphuc.post');
		// Tim kiem khoi phục
		Route::get('/tim-kiem-khoi-phuc', 'TimkiemController@timkiem_taisan_khoiphuc')->name('taisan.timkiem.khoiphuc');
	});

	Route::group(['prefix'=>'loai-bat-dong-san','middleware'=>'check_user'],function(){
		Route::get('/danh-sach','LoaiBDSController@list')->name('loaiBDS.list');
		//add
		Route::get('/them','LoaiBDSController@add')->name('loaiBDS.add');
		Route::post('/them','LoaiBDSController@add_post')->name('loaiBDS.add.post');
		// edit
		Route::get('/sua-{id}','LoaiBDSController@edit')->name('loaiBDS.edit');
		Route::post('/sua-{id}','LoaiBDSController@edit_post')->name('loaiBDS.edit.post');
		// TaisanController
		Route::get('/xoa-{id}','LoaiBDSController@delete')->name('loaiBDS.delete');
		// Tim kiem
		Route::get('/tim-kiem', 'TimkiemController@timkiem_loaiBDS')->name('loaiBDS.timkiem');
		// Khôi phục
		Route::get('/khoi-phuc','LoaiBDSController@list_restore')->name('loaiBDS.khoiphuc');
		Route::get('/khoi-phuc-{id}','LoaiBDSController@restore')->name('loaiBDS.khoiphuc.post');
		// Tim kiem khoi phục
		Route::get('/tim-kiem-khoi-phuc', 'TimkiemController@timkiem_loaiBDS_khoiphuc')->name('loaiBDS.timkiem.khoiphuc');
	});

	Route::group(['prefix'=>'trang-thai','middleware'=>'check_user'],function(){
		Route::get('/danh-sach','TrangthaiController@list')->name('trangthai.list');
		//add
		Route::get('/them','TrangthaiController@add')->name('trangthai.add');
		Route::post('/them','TrangthaiController@add_post')->name('trangthai.add.post');
		// edit
		Route::get('/sua-{id}','TrangthaiController@edit')->name('trangthai.edit');
		Route::post('/sua-{id}','TrangthaiController@edit_post')->name('trangthai.edit.post');
		// TaisanController
		Route::get('/xoa-{id}','TrangthaiController@delete')->name('trangthai.delete');
		// Tim kiem
		Route::get('/tim-kiem', 'TimkiemController@timkiem_trangthai')->name('trangthai.timkiem');
		// Khôi phục
		Route::get('/khoi-phuc','TrangthaiController@list_restore')->name('trangthai.khoiphuc');
		Route::get('/khoi-phuc-{id}','TrangthaiController@restore')->name('trangthai.khoiphuc.post');
		// Tim kiem khoi phục
		Route::get('/tim-kiem-khoi-phuc', 'TimkiemController@timkiem_trangthai_khoiphuc')->name('trangthai.timkiem.khoiphuc');
	});

	Route::group(['prefix'=>'loai-ban-tin','middleware'=>'check_user'],function(){
		Route::get('/danh-sach','LoaibantinController@list')->name('loaibantin.list');
		//add
		Route::get('/them','LoaibantinController@add')->name('loaibantin.add');
		Route::post('/them','LoaibantinController@add_post')->name('loaibantin.add.post');
		// edit
		Route::get('/sua-{id}','LoaibantinController@edit')->name('loaibantin.edit');
		Route::post('/sua-{id}','LoaibantinController@edit_post')->name('loaibantin.edit.post');
		// TaisanController
		Route::get('/xoa-{id}','LoaibantinController@delete')->name('loaibantin.delete');
		// Tim kiem
		Route::get('/tim-kiem', 'TimkiemController@timkiem_loaibantin')->name('loaibantin.timkiem');
		// Khôi phục
		Route::get('/khoi-phuc','LoaibantinController@list_restore')->name('loaibantin.khoiphuc');
		Route::get('/khoi-phuc-{id}','LoaibantinController@restore')->name('loaibantin.khoiphuc.post');
		// Tim kiem khoi phục
		Route::get('/tim-kiem-khoi-phuc', 'TimkiemController@timkiem_loaibantin_khoiphuc')->name('loaibantin.timkiem.khoiphuc');
	});

	Route::group(['prefix'=>'ban-tin'],function(){
		// cua ad
		Route::get('/danh-sach-all','BantinController@ad_list')->name('ad.bantin.list');
		// Tim kiem khoi phục
		Route::get('/tim-kiem-khoi-phuc', 'TimkiemController@timkiem_bantin_khoiphuc')->name('bantin.timkiem.khoiphuc');
		// của user
		Route::get('/danh-sach','BantinController@list')->name('bantin.list');
		// Tim kiem
		Route::get('/tim-kiem', 'TimkiemController@timkiem_bantin')->name('bantin.timkiem');
		

		// /////////////////////////////////////////////
		//check slug
		Route::get('/check_slug','BantinController@checkSlug')->name('bantin.checkslug');
		//add
		Route::get('/them','BantinController@add')->name('bantin.add');
		Route::post('/them','BantinController@add_post')->name('bantin.add.post');
		// edit
		Route::get('/sua-{id}','BantinController@edit')->name('bantin.edit');
		Route::post('/sua-{id}','BantinController@edit_post')->name('bantin.edit.post');
		// TaisanController
		Route::get('/xoa-{id}','BantinController@delete')->name('bantin.delete');
		
		// Khôi phục
		Route::get('/khoi-phuc','BantinController@list_restore')->name('bantin.khoiphuc');
		Route::get('/khoi-phuc-{id}','BantinController@restore')->name('bantin.khoiphuc.post');
		

		Route::get('/dropzone/fetch', 'BantinController@fetch')->name('dropzone.123');

	});

	Route::group(['prefix'=>'phuong-thuc-thanh-toan'],function(){
		Route::get('/danh-sach','PhuongthucController@list')->name('phuongthuc.list');
		//add
		Route::get('/them','PhuongthucController@add')->name('phuongthuc.add');
		Route::post('/them','PhuongthucController@add_post')->name('phuongthuc.add.post');
		// edit
		Route::get('/sua-{id}','PhuongthucController@edit')->name('phuongthuc.edit');
		Route::post('/sua-{id}','PhuongthucController@edit_post')->name('phuongthuc.edit.post');
		// TaisanController
		Route::get('/xoa-{id}','PhuongthucController@delete')->name('phuongthuc.delete');
		// Tim kiem
		Route::get('/tim-kiem', 'TimkiemController@timkiem_phuongthuc')->name('phuongthuc.timkiem');
		// Khôi phục
		Route::get('/khoi-phuc','PhuongthucController@list_restore')->name('phuongthuc.khoiphuc');
		Route::get('/khoi-phuc-{id}','PhuongthucController@restore')->name('phuongthuc.khoiphuc.post');
		// Tim kiem khoi phục
		Route::get('/tim-kiem-khoi-phuc', 'TimkiemController@timkiem_phuongthuc_khoiphuc')->name('phuongthuc.timkiem.khoiphuc');

	});


	Route::group(['prefix'=>'san-pham'],function(){
		Route::get('/danh-sach','SanphamController@list')->name('sanpham.list');
		Route::get('/check_slug','SanphamController@checkSlug')->name('sanpham.checkslug');

		//add
		Route::get('/them','SanphamController@add')->name('sanpham.add');
		Route::post('/them','SanphamController@add_post')->name('sanpham.add.post');
		// edit
		Route::get('/sua-{id}','SanphamController@edit')->name('sanpham.edit');
		Route::post('/sua-{id}','SanphamController@edit_post')->name('sanpham.edit.post');
		// TaisanController
		Route::get('/xoa-{id}','SanphamController@delete')->name('sanpham.delete');
		// Tim kiem
		Route::get('/tim-kiem', 'TimkiemController@timkiem_sanpham')->name('sanpham.timkiem');
		// Khôi phục
		Route::get('/khoi-phuc','SanphamController@list_restore')->name('sanpham.khoiphuc');
		Route::get('/khoi-phuc-{id}','SanphamController@restore')->name('sanpham.khoiphuc.post');
		// Tim kiem khoi phục
		Route::get('/tim-kiem-khoi-phuc', 'TimkiemController@timkiem_sanpham_khoiphuc')->name('sanpham.timkiem.khoiphuc');

	});


	Route::group(['prefix'=>'cua-hang'],function(){
		Route::get('/san-pham','CuahangController@list')->name('cuahang.list');

		Route::get('/thanh-toan/{slug}/','CuahangController@checkout')->name('cuahang.checkout');
		
		Route::post('/payment','CuahangController@thanhtoan')->name('cuahang.payment');
		// 
		Route::get('/hoa-don','CuahangController@bill')->name('cuahang.bill');

		Route::get('/lich-su','CuahangController@history')->name('cuahang.history');

	});



});






////////////////////////////////////////////////////////////////
use App\User;
use App\Models\db_user;
use App\Models\db_vaitro;
use App\Models\db_trangthai;

use App\Models\db_loaithanhvien;
use App\Models\db_hinhthuc;
use App\Models\db_loaibantin;
use App\Models\db_loaiBDS;
use App\Models\db_taisan;
use App\Models\db_thuoctinh;
use Carbon\Carbon; // lấy ngày hiên tại
// /////////////////////////////////////////////////
Route::get('/luanvan',function(){
	// add vai tro
	$vaitro = new db_vaitro;
	$vaitro->vai_tro = 'Admin';
	$vaitro->save();

	$vaitro = new db_vaitro;
	$vaitro->vai_tro = 'Nhân viên';
	$vaitro->save();

	$vaitro = new db_vaitro;
	$vaitro->vai_tro = 'Khách hàng';
	$vaitro->save();

	$vaitro = new db_vaitro;
	$vaitro->vai_tro = 'Đại lý';
	$vaitro->save();
	// db_loaiBDS

	$loaiBDS = new db_loaiBDS;
	$loaiBDS->ten_loaiBDS = 'Nhà cấp 1';
	$loaiBDS->save();

	$loaiBDS = new db_loaiBDS;
	$loaiBDS->ten_loaiBDS = 'Nhà cấp 2';
	$loaiBDS->save();

	$loaiBDS = new db_loaiBDS;
	$loaiBDS->ten_loaiBDS = 'Nhà cấp 3';
	$loaiBDS->save();

	$loaiBDS = new db_loaiBDS;
	$loaiBDS->ten_loaiBDS = 'Nhà cấp 4';
	$loaiBDS->save();

	$loaiBDS = new db_loaiBDS;
	$loaiBDS->ten_loaiBDS = 'Chung cư';
	$loaiBDS->save();

	$loaiBDS = new db_loaiBDS;
	$loaiBDS->ten_loaiBDS = 'Căn hộ';
	$loaiBDS->save();

	$loaiBDS = new db_loaiBDS;
	$loaiBDS->ten_loaiBDS = 'Biệt thự - Villa';
	$loaiBDS->save();

	// add db_hinhthuc
	$hinhthuc = new db_hinhthuc;
	$hinhthuc->ten_hinhthuc = 'Thuê';
	$hinhthuc->mau_sac = #007bff; 
	$hinhthuc->save();

	$hinhthuc = new db_hinhthuc;
	$hinhthuc->ten_hinhthuc = 'Bán';
	$hinhthuc->mau_sac = #ff5a5f; 
	$hinhthuc->save();	

	// add db_hinhthuc
	$loaibantin = new db_loaibantin;
	$loaibantin->ten_loaibantin = 'Thường';
	$loaibantin->save();

	$loaibantin = new db_loaibantin;
	$loaibantin->ten_loaibantin = 'VIP';
	$loaibantin->save();	



	// add db_trangthai
	$trangthai = new db_trangthai;
	$trangthai->ten_trangthai = 'Unlock'; 

	$trangthai->save();

	$trangthai = new db_trangthai;
	$trangthai->ten_trangthai = 'Lock';
	$trangthai->save();

	$trangthai = new db_trangthai;
	$trangthai->ten_trangthai = 'Hide';
	$trangthai->save();

	$trangthai = new db_trangthai;
	$trangthai->ten_trangthai = 'Show';
	$trangthai->save();
	
	//loai thanh vien
	$loaitv = new db_loaithanhvien;
	$loaitv->loai_thanhvien = 'Bạc';
	$loaitv->save();

	$loaitv = new db_loaithanhvien;
	$loaitv->loai_thanhvien = 'Vàng';
	$loaitv->save();

	$loaitv = new db_loaithanhvien;
	$loaitv->loai_thanhvien = 'Bạch Kim';
	$loaitv->save();

	$loaitv = new db_loaithanhvien;
	$loaitv->loai_thanhvien = 'Kim Cương';
	$loaitv->save();
	
	// tai san
	$taisan = new db_taisan;
	$taisan->ten_taisan = 'Sân Vườn';
	$taisan->save();

	$taisan = new db_taisan;
	$taisan->ten_taisan = 'Hồ bơi';
	$taisan->save();

	$taisan = new db_taisan;
	$taisan->ten_taisan = 'Phòng GYM';
	$taisan->save();

	$taisan = new db_taisan;
	$taisan->ten_taisan = 'Nhà để xe';
	$taisan->save();

	$taisan = new db_taisan;
	$taisan->ten_taisan = 'Cáp TV';
	$taisan->save();

	$taisan = new db_taisan;
	$taisan->ten_taisan = 'Máy lạnh';
	$taisan->save();

	$taisan = new db_taisan;
	$taisan->ten_taisan = 'Tủ lạnh';
	$taisan->save();

	$taisan = new db_taisan;
	$taisan->ten_taisan = 'Máy sấy';
	$taisan->save();

	$taisan = new db_taisan;
	$taisan->ten_taisan = 'Wifi';
	$taisan->save();

	$taisan = new db_taisan;
	$taisan->ten_taisan = 'Lò vi sóng';
	$taisan->save();

	$taisan = new db_taisan;
	$taisan->ten_taisan = 'Máy quạt';
	$taisan->save();

	$taisan = new db_taisan;
	$taisan->ten_taisan = 'Máy giặt';
	$taisan->save();


	// Thuộc tính
	$thuoctinh = new db_thuoctinh;
	$thuoctinh->ten_thuoctinh = 'Phòng ngủ';
	$thuoctinh->save();

	$thuoctinh = new db_thuoctinh;
	$thuoctinh->ten_thuoctinh = 'Phòng tắm';
	$thuoctinh->save();

	$thuoctinh = new db_thuoctinh;
	$thuoctinh->ten_thuoctinh = 'Số tầng';
	$thuoctinh->save();

	$thuoctinh = new db_thuoctinh;
	$thuoctinh->ten_thuoctinh = 'Diện tích';
	$thuoctinh->save();

	$thuoctinh = new db_thuoctinh;
	$thuoctinh->ten_thuoctinh = 'Diện tích đất';
	$thuoctinh->save();

	$thuoctinh = new db_thuoctinh;
	$thuoctinh->ten_thuoctinh = 'Lộ giới';
	$thuoctinh->save();

	$thuoctinh = new db_thuoctinh;
	$thuoctinh->ten_thuoctinh = 'Năm xây dựng';
	$thuoctinh->save();
	


	
	// // add thong tin
	// $user = new db_user;
	// $user->ho_ten='Gia Hung';
	// $user->email = 'admin@gmail.com';
	// $user->sdt = '0762999994';
	// $user->nam_sinh = '1998-01-01';
	// $user->cmnd = '331821579';
	
	// $user->save();
	// $user->ma_user = "ADMIN-000".$user->id;
	// $user->save();
	// // add tai khoan
	// $taikhoan = new User;
	// $taikhoan->username='admin';
	// $taikhoan->password=bcrypt('admin');
	// $taikhoan->trang_thai='1';
	// $taikhoan->id_vaitro='1';
	// $taikhoan->id_user = $user->id;
	// $taikhoan->save();



});

////////////////////////s
Route::get('/update-{id}','UsersController@update_mk');
