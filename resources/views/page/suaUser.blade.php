  @extends('master')
@section('content')
  <div id="">
    <hr>
        <div class="container">
            <div class="row" align="center">
                @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{ $err }}
                    @endforeach
                </div>
                @endif
                 @if(Session::has('thanh cong'))
                <div class="alert alert-success">
                    {{ Session::get('thanh cong') }}
                </div>
                @endif()
                <br>
                <h4 style="">THÔNG TIN TÀI KHOẢN</h4><br><br>
            </div>
            <form action="" method="post" accept-charset="utf-8">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="row" style="margin-bottom: 50px">
                <div class="col-md-6" >
                    <div class="form-group" id="">
                        <label for="inputlg">FullName</label>
                        <input class="form-control" name="fullname" type="text" required>
                    </div>
                    <div class="form-group" id="">
                        <label for="inputlg">Địa chỉ:</label>
                        <input class="form-control" id="" name="address" type="text" required>
                        <span id="span" style="color: red"></span>
                    </div>
                    <div class="form-group" id="">
                        <label for="inputlg">Email:</label>
                        <input class="form-control" id="email" name="email" type="text" onblur="kt_email()" required>
                        <span id="span1" style="color: red"></span>
                    </div>
                    <div class="form-group" id="">
                        <label for="inputlg">Số điện thoại:</label>
                        <input class="form-control" id="" name="phone" type="text" required>
                        <span id="span1" style="color: red"></span>
                    </div>
                    <div class="form-group" id="">
                        <label for="inputlg">Mật khẩu</label>
                        <input class="form-control" name="password" type="password" required>
                    </div>
                    <div class="form-group" id="">
                        <label for="inputlg">Xác nhận lại mật khẩu</label>
                        <input class="form-control" name="re_password" type="password" required>
                    </div><br>
                    <div class="row">
                            <button type="submit" class="btn btn-danger btn btn-primary">Save</button> 
                    </div>
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
            </form>
          
            
        </div>
    </div>
    @endsection