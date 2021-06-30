<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhanHoi extends Model
{
     protected $table="phan_hoi";

     public function sanpham(){
     	return $this->belongsTo('App\sanpham','id_sp','id_phan_hoi');
     }

     public function taikhoan(){
     	return $this->belongsTo('App\User','id_tk','id_phan_hoi');
     }
}
