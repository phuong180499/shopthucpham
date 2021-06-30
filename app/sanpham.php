<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    //khi muon import can them phan fillable
    protected $fillable = [
      'id', 'name','id_loai_sp','id_ncc','mota_sp','unit_price','gia_km','so_luong','image','don_vi_tinh','Delet','new'
    ];

    protected $table="san_pham";
    // protected $dateFormat = 'd-m-Y';

    public function loaisp(){
    	return $this->belongsTo('App\LoaiSanPham','id_loai_sp','id');
    	// belongTo:thuộc về,khóa ngoại của bảng sản phẩm,khóa chính của bảng sản phẩm

    	// public function chitiet_hd_nhap(){
    	// 	return $this->hasMany('App\Bill_Detail_Nhap','')
    	// }
    }
    public function phanhoi(){
    	return $this->hasMany('App\PhanHoi','id_sp','id');
    }

    public function nhacungcap(){
        return $this->belongsTo('App\Nhacungcap','id_ncc','id');
    }
}
