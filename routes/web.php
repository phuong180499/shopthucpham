<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("index",['as'=>'trang-chu','uses'=>'PageController@getIndex']);

Route::get("loaisanpham/{type}",['as'=>'loai-san-pham','uses'=>'PageController@getloaisp']);

Route::get("chitietsanpham/{id}",['as'=>'chi-tiet-san-pham','uses'=>'PageController@getchitiet']);
Route::post("chitietsanpham/{id}",['as'=>'chi-tiet-san-pham','uses'=>'PageController@postbinhluan']);

Route::get("tintuc",['as'=>'tin-tuc','uses'=>'PageController@gettintuc']);

Route::get("suaUser/{id}",['as'=>'sua-user','user'=>'PageController@getSuaUser']);

Route::get("login",['as'=>'dang-nhap','uses'=>'PageController@getdangnhap']);
Route::post("login",['as'=>'dang-nhap','uses'=>'PageController@postdangnhap']);

Route::get('dang-xuat',['as'=>'logout','uses'=>'PageController@postLogout']);

Route::get("search",['as'=>'search','uses'=>'PageController@getSearch']);


//gio hang
Route::group(['prefix'=>'cart'],function(){
	Route::get('add/{id}','ShoppingCartController@getAddCart');
	Route::get('show','ShoppingCartController@getShowCart');
	Route::get('delete/{id}','ShoppingCartController@getDeleteCart');
	Route::get('update','ShoppingCartController@getUpdateCart');
	Route::post('show','ShoppingCartController@postCompleted')->name('sendmail');
});
Route::get('complete','ShoppingCartController@getComplete');


Route::get("login1",[
	'as'=>'login',
	'uses'=>'LoginAdminController@getlogin'
]);
Route::post("login1",[
	'as'=>'login',
	'uses'=>'LoginAdminController@postlogin'
]);
Route::get("logout",[
	'as'=>'logout1',
	'uses'=>'LoginAdminController@getlogout'
]);


// Route::group(['prefix'=>'admin1'],function(){
// 	Route::get('/',function(){
// 		return view('admin.LoaiSanPham.index');
// 	});
// 	Route::get('/index.html','LoaiSanPhamController@getAllLoai')->name('loaisp.allLoai');
// 	Route::get('/get-loai.html','LoaiSanPhamController@getloaisp')->name('loaisp.OneLoai');
// 	Route::get('/delete-loai.html','LoaiSanPhamController@deleteLoai')->name('loaisp.deleteLoai');
// 	Route::post('/post.html','LoaiSanPhamController@postLoai')->name('loaisp.postLoai');
// });



//quan li loai san pham
Route::get("dsloai",['as'=>'ds-loai-sp','uses'=>'LoaiSanPhamController@getds_loai_sp']);
Route::post("dsloai",['as'=>'ds-loai-sp','uses'=>'LoaiSanPhamController@add_loai_sp']);

Route::get("sua/{id}",['as'=>'sua-loai-sp','uses'=>'LoaiSanPhamController@getLoai']);
Route::post("sua/{id}",['as'=>'post-sua-loai','uses'=>'LoaiSanPhamController@postSua']);

Route::get("xoaloai/{id}",['as'=>'xoa-loai','uses'=>'LoaiSanPhamController@xoa']);

Route::get('/export1','LoaiSanPhamController@export')->name('export1');
Route::post('/import1','LoaiSanPhamController@import1')->name('import1');




//quan li san pham chung
Route::get("sanphamAll",['as'=>'ds-sp-all','uses'=>'SanPhamController@getds_sp_all']);

Route::get("themsp1",['as'=>'them-san-pham1','uses'=>'SanPhamController@getThem1']);
Route::post("themsp1",['as'=>'them-san-pham1','uses'=>'SanPhamController@postThem1']);

Route::get("suasp1/{id}",['as'=>'sua-san-pham1','uses'=>'SanPhamController@getSua1']);
Route::post("suasp1/{id}",['as'=>'post-sua-san-pham1','uses'=>'SanPhamController@postSua1']);

Route::get("xoa1/{id}",['as'=>'xoa-san-pham1','uses'=>'SanPhamController@xoa1']);

Route::get("searchSp",['as'=>'searchSp','uses'=>'SanPhamController@getSearch']);
//export
Route::get('/export','SanPhamController@export')->name('export');
Route::post('/import','SanPhamController@import')->name('import');





//quan li nha cung cap
Route::get("nhacungcap",['as'=>'ds-ncc','uses'=>'NhacungcapController@getds_ncc']);
Route::post("nhacungcap",['as'=>'ds-ncc','uses'=>'NhacungcapController@add_ncc']);

Route::get("suancc/{id}",['as'=>'sua-nha-cung-cap','uses'=>'NhacungcapController@getSua1']);
Route::post("suancc/{id}",['as'=>'post-sua-nha-cung-cap','uses'=>'NhacungcapController@postSua1']);

Route::get("xoancc/{id}",['as'=>'xoa-ncc','uses'=>'NhacungcapController@xoa']);




//quan li khach hang
Route::get("khachhang",['as'=>'ds-kh','uses'=>'KhachHangController@getds_kh']);






//quan li user
Route::get("dangky",['as'=>'dang-ky','uses'=>'UsersController@getdangky']);
Route::post("dangky",['as'=>'dang-ky','uses'=>'UsersController@postdangky']);

Route::get("taikhoan",['as'=>'ds-tk','uses'=>'UsersController@getds_tk']);
Route::get("suatk/{id}",[
	'as'=>'sua-user',
	'uses'=>'UsersController@getsua'
]);
// Route::post("suatk/{id}",[
// 	'as'=>'post-sua-tk',
// 	'uses'=>'UsersController@postSua'
// ]);
Route::get("xoatk/{id}",['as'=>'xoa-user','uses'=>'UsersController@xoa']);





//quan li nhan vien
Route::get("nhanvien",['as'=>'ds-nv','uses'=>'NhanVienController@getds_nv']);






//quan li hoa don nhap
Route::get("hoadon_nhap",['as'=>'ds-hd-nhap','uses'=>'BillNhapController@getds_hd']);

Route::get("chitiet/{id}",'BillNhapController@getct_hd');






//quan li hoa don ban
Route::get("hoadon_ban",['as'=>'ds-hd-ban','uses'=>'BillBanController@getds_hd']);

Route::get("chitiet_ban/{id}",'BillBanController@getct_hd');

Route::get("duyet/{id}",'BillBanController@duyet');

//pdf
Route::get('pdf_hoadon/{id}','ThongKeController@PDF');

Route::get('pdf',function(){
	$users=App\User::all();
	$pdf=PDF::loadView('admin_page.HoaDonBan.pdfdown', ['users'=>$users]);
	return $pdf->download('download.pdf');
});







//thong ke
Route::get("admin",[
	'as'=>'trang-admin',
	'uses'=>'ThongKeController@getadmin'
]);



Route::get('lien-he',['as'=>'getlienhe','uses'=>'SendMailController@get_lienhe']);
Route::post('lien-he',['as'=>'postlienhe','uses'=>'SendMailController@post_lienhe']);









