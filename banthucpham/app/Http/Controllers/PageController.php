<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\sanpham;
use App\Tintuc;
use App\LoaiSanPham;
use App\User;
use App\PhanHoi;
use App\Nhacungcap;
use App\Customer;
use App\NhanVien;
use App\Bill_Nhap;
use App\Bill_Ban;
use App\Bill_Detail_Nhap;
use App\Bill_Detail_ban;
use Hash;
use Auth;
use App\Cart;
use Session;
class PageController extends Controller
{
    public function getIndex(){
    	$slide=Slide::all();
    	// print_r($slide);
    	// exit;
    	$new_product=sanpham::where('new',1)->paginate(4);
    	// dd($new_product);
    	// $product=sanpham::where('new',0)->get();
    	$product=sanpham::where('new',0)->paginate(4);
        $product1=sanpham::paginate(10);
    	$tintuc=Tintuc::all();
    	return view('page.trangchu',compact('slide','new_product','product','tintuc','product1'));
    }
    public function getloaisp($type){
    	$loai=LoaiSanPham::where('id',$type)->get();
    	$sp_theoloai=sanpham::where('id_loai_sp',$type)->paginate(12);
    	$new_product=sanpham::where('new',1)->paginate(4);
    	return view('page.loai_san_pham',compact('sp_theoloai','loai','new_product'));
    }
    public function getchitiet(Request $req){
    	$sp=sanpham::where('id',$req->id)->first();//first: lấy 1 sản phẩm
        $product=sanpham::where('id_loai_sp',$sp->id_loai_sp)->paginate(4);
    	$phanhoi=PhanHoi::where('id_sp',$req->id)->paginate(5);
    	$taikhoan=User::all();
    	return view('page.chi_tiet_san_pham',compact('sp','phanhoi','taikhoan','product'));
    }
    public function postbinhluan(Request $req,$id){
        $binhluan=new PhanHoi;
        $binhluan->id_tk=$req->id_user;
        $binhluan->id_sp=$req->id_sp;
        $binhluan->level=0;
        $binhluan->note=$req->note;
        $binhluan->save();
        return back();
    }
    // public function getchitiet($id){
    // 	$sp=sanpham::where('id_sp',$id)->first();//first: lấy 1 sản phẩm
    // 	$phanhoi=PhanHoi::where('id_sp',$id)->paginate(5);
    // 	return view('page.chi_tiet_san_pham',compact('sp','phanhoi'));
    // }
     public function gettintuc(){
    	return view('page.tintuc');
    }
   
     public function getdangnhap(){
        return view('page.login');
    }
    public function postdangnhap(Request $req){
        $this->validate($req,
            [
                'email'=>"required|email",
                'password'=>'required|min:5|max:20',
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'password.required'=>'Vui lòng nhập maatk khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu íkhông quá 20 kí tự'
            ]
    );
        $arr=array('email'=>$req->email,'password'=>$req->password);
        if(Auth::attempt($arr)){
            return redirect()->route('trang-chu');
                    }
        else{
            return redirect()->back()->with(['flag'=>'danger','tb'=>'Đăng nhập không thành công']);

        }
    }

    public function postLogout(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }
   
    public function getSearch(Request $req){
        $loai2=LoaiSanPham::where('tenloai','like','%'.$req->key.'%')->first();
        $product=sanpham::where('name','like','%'.$req->key.'%')
                            ->orwhere('unit_price',$req->key)
                            // ->orwhere('id_loai_sp',$loai2->id)
                            ->get();
        return view('page.timkiem',compact('product'));
    }
  

   public function getThanhToan(){
        return view('page.thanhtoan');
   }


   public function getChar(){
    return view('admin_page.char');
   }
}
