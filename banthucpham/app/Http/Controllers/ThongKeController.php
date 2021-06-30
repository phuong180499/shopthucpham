<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;
use App\LoaiSanPham;
use App\Bill_Ban;
use App\Bill_Detail_ban;
use App\Bill_Nhap;
use App\Bill_Detail_Nhap;
use App\Nhacungcap;
use App\NhanVien;
use App\Customer;
use PDF;
use DB;
use App\Kho;
class ThongKeController extends Controller
{
      public function getadmin(){
      	// $loai_sp=LoaiSanPham::all();
        $kho=Kho::all();
      	$sanpham=sanpham::all();
        $loai=LoaiSanPham::all();
        $bill=Bill_Ban::all();
              $info = DB::table('san_pham')
                 ->select('id_loai_sp', DB::raw('count(*) as total'))
                 ->groupBy('id_loai_sp')
                 ->pluck('total','id_loai_sp')->all();
          
      	// $ngaythongke=date('Y-m-d');
    	return view('page.admin_content',compact('sanpham','loai','kho','info','bill'));
    }




    //in hoa don
    public function PDF(Request $req){
    	$HoaDonBan=Bill_Ban::where('id',$req->id)->first();
    	$khachhang=Customer::where('id',$HoaDonBan->id_kh)->first();
    	$CtHoaDon=Bill_Detail_ban::where('id_bill_ban',$HoaDonBan->id)->get();
    	$sanpham=sanpham::all();
    	$pdf=PDF::loadView('admin_page.HoaDonBan.pdfdown',compact('HoaDonBan','khachhang','CtHoaDon','sanpham'));
		return $pdf->download('download.pdf');

    }
    
}
