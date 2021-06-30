<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nhacungcap extends Model
{
     protected $table="nha_cung_cap";

     public function sanpham(){
    	return $this->hasMany('App\sanpham','id_ncc','id');
    }

     public function hoadon(){
    	return $this->hasMany('App\Bill_Nhap','id_ncc','id');
    }
}
