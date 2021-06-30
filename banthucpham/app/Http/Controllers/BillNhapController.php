<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill_Ban;
use App\Bill_Detail_ban;
use App\Bill_Nhap;
use App\Bill_Detail_Nhap;
use App\Nhacungcap;
use App\NhanVien;
use App\sanpham;

class BillNhapController extends Controller
{
    public function getds_hd(){
    	$hoadonNhap=Bill_Nhap::paginate(10);
    	$nhacungcap=Nhacungcap::all();
    	$nhanvien=NhanVien::all();
    	return view('admin_page.HoaDonNhap.hoadon_nhap',compact('hoadonNhap','nhacungcap','nhanvien'));
    }

    public function getct_hd(Request $req){
    	$ct_hd=Bill_Detail_Nhap::where('id_bill_nhap',$req->id)->get();
    	$sp_nhap=Bill_Nhap::where('id',$req->id)->first();
    	$sanpham=sanpham::all();
    		return view('admin_page.HoaDonNhap.ct_hoadon',compact('ct_hd','sanpham','sp_nhap'));
    }
}
