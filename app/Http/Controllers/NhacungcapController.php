<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nhacungcap;
use App\sanpham;

class NhacungcapController extends Controller
{
    public function getds_ncc(){
        $nhacungcap=Nhacungcap::where('Delet',0)
                            ->orwhere('Delet',2)->get();
        return view('admin_page.NhaCungcap.ncc',compact('nhacungcap'));
    }

    public function add_ncc(Request $req){
        $this->validate($req,
            [
            'name'=>'unique:nha_cung_cap,ten_ncc',
            'email'=>'required|email|unique:users,email',    
        ],
        [
            'name.unique'=>'Tên nhà cung cấp đã có.Vui lòng kiểm tra lại',
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            'email.unique'=>'Email đã có người sử dụng',
                 
        ]);
    	$ncc=new Nhacungcap();
    	$ncc->ten_ncc=$req->name;
        $ncc->diachi_ncc=$req->address;
        $ncc->email=$req->email;
        $ncc->sdt=$req->phone;
        $ncc->Delet=0;
    	$ncc->save();
    	return redirect()->back()->with(['flag'=>'success','tb'=>'Thêm thành công']);
    }

      public function getSua1(Request $req){
        $nhacungcap=Nhacungcap::where('id',$req->id)->first();
        return view('admin_page.NhaCungcap.sua',compact('nhacungcap'));
    }

     public function postSua1(Request $req,$id){
        $ncc=Nhacungcap::find($id);
        $ncc->ten_ncc=$req->name;
        $ncc->diachi_ncc=$req->address;
        $ncc->email=$req->email;
        $ncc->sdt=$req->phone;
        $ncc->save();
        return redirect()->route('ds-ncc')->with(['flag'=>'success','tb'=>'Sửa thành công']);
    }

    public function xoa(Request $req,$id){
        $ncc=Nhacungcap::where('id',$req->id)->first();
        $sanpham=sanpham::where('id_ncc',$ncc->id)->count();
        if($sanpham==0){
            $sp=Nhacungcap::find($id);
            $sp->Delet=1;
            $sp->save();
      return redirect()->route('ds-ncc')->with(['flag'=>'success','tb'=>'Xóa thành công']);
      }else{
        echo "<script type='text/javascript'>
        alert('Xin lỗi !Bạn không thể xóa do trong sản phẩm còn id khóa ngoại');
        window.location='";
        echo route('ds-ncc');
        echo"'
        </script>";
      }
    }
}
