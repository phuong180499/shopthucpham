<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
class LoginAdminController extends Controller
{
     public function getlogin(){
        return view('admin_page.login1');
    }

    public function postlogin(Request $req){
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
            return redirect()->route('trang-admin');
             // return redirect()->back()->with(['flag'=>'danger','tb'=>'Đăng nhập  thành công']);
                    }
        else{
            return redirect()->back()->with(['flag'=>'danger','tb'=>'Tài khoản hoặc mật khẩu sai']);

        }
    }

    public function getlogout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
