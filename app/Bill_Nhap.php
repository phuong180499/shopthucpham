<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill_Nhap extends Model
{
     protected $table="bills_nhap";

     public function nhacungcap(){
    	return $this->belongsTo('App\NhaCungCap','id_ncc','id');}

    	public function ct_hoadon(){
    	return $this->hasMany('App\Bill_Detail_Nhap','id_bill_nhap','id');
    }

     public function nhanvien(){
    	return $this->belongsTo('App\NhanVien','id_nhanvien','id');}
}
