<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NhanVien;
class NhanVienController extends Controller
{
     public function getds_nv(){
    	$nhanvien=NhanVien::paginate(10);
    	return view('admin_page.NhanVien.nhanvien',compact('nhanvien'));
    }
}
