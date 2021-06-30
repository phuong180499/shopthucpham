<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\LoaiSanPham;
use App\Imports\LoaiSanPhamImport;
use Excel;
use App\sanpham;
class LoaiSanPhamController extends Controller
{
   public function getds_loai_sp(){
    	$loai_sp=LoaiSanPham::where('Delet',0)
                            ->orwhere('Delet',2)->get();
    	return view('admin_page.tbl_loaisp.loaisp',compact('loai_sp'));
    }

    public function add_loai_sp(Request $req){
        $this->validate($req,
            [
            'ten_loai'=>'unique:loai_sp,tenloai'
            ],
            [
            'ten_loai.unique'=>'Tên loại đã có'
            ]);
    	$loaisp=new LoaiSanPham;
    	$loaisp->tenloai=$req->ten_loai;
        $loai_sp->Delet=0;
    	$loaisp->save();

    	 return redirect()->back()->with(['flag'=>'success','tb'=>'Thêm thành công']);
    }

     public function getLoai(Request $req){
        $data=LoaiSanPham::where('id',$req->id)->first();//first: lấy 1 sản phẩm
        // print_r($data);
        return view('admin_page.tbl_loaisp.sua_loaisp',compact('data'));
    }

     public function postSua(Request $req,$id){
        $this->validate($req,
            ['tenloai1'=>'required'],
            ['tenloai1.required'=>'hay dien ten']
        );
        $sp=LoaiSanPham::find($id);
        // print_r($sp);
        $sp->tenloai=$req->tenloai1;
        $sp->save();
        return redirect()->route('ds-loai-sp')->with('thanh cong','Sửa thành công');
        // return redirect()->route('ds-loai-sp')->with(['flag'=>'success','tb'=>'Sửa thành công']);
    }

     public function xoa(Request $req,$id){
        $loai=LoaiSanPham::where('id',$req->id)->first();
        $sanpham=sanpham::where('id_loai_sp',$req->id)->count();
        if($sanpham==0){
            $sp=LoaiSanPham::find($id);
            $sp->Delet=1;
            $sp->save();
      return redirect()->route('ds-loai-sp')->with(['flag'=>'success','tb'=>'Xóa thành công']);
  }else{
    
    echo "<script type='text/javascript'>
    alert('Xin lỗi !Bạn không thể xóa loại này do trong sản phẩm còn id khóa ngoại');
    window.location='";
    echo route('ds-loai-sp');
    echo"'
    </script>";
  }
      
    }

     public function export(){
        return Excel::download(new LoaiSanPhamExport(),'loaisanpham.xlsx');
    }
    
     public function import1(Request $req){

         Excel::import(new LoaiSanPhamImport(), $req->file('import_file'));
        return redirect()->route('ds-loai-sp')->with(['flag'=>'success','tb'=>'import thành công']);
    }











    // public function getAllLoai(){
    //     $loai_sp=LoaiSanPham::all();
    //     return response()->json($loai_sp);
    // }
    // public function getloaisp(Request $req){
    //      $loai_sp=LoaiSanPham::find($req->id);
    //     return response()->json($loai_sp);
    // }
    // public function deleteLoai(Request $req){
    //     $loai_sp=LoaiSanPham::find($req->id)->delete();
    //     return response()->json($loai_sp);
    // }
    // public function postLoai(){
    //     $loai=new LoaiSanPham();
    //     if($req->loaidang='update'){
    //         $loai=LoaiSanPham::find($req->id);
    //     }
    //     $loai->tenloai=$req->name;
    //     $loai->save();
    //     return response()->json($loai);
    // }
}
