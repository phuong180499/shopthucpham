  @extends('master')
@section('content')
  <div id="">
    <hr>
        <div class="container">
            <div class="row" align="center">
                <h4 style="">THÔNG TIN CÁ NHÂN </h4><br><br>
            </div>
            <form action="" method="post" accept-charset="utf-8">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="row" style="margin-bottom: 50px">
                <div class=" col-md-offset-3 col-md-6" > 
                    <div class="form-group" id="">
                        <label class="red">*</label><label for="inputlg">FullName</label>
                        <input class="form-control" name="fullname" type="text" placeholder="* Điền đầy đủ" required value="{{ $data->full_name }}">
                    </div>
                    <div class="form-group" id="">
                        <label class="red">*</label><label for="inputlg">User Name</label>
                        <input class="form-control" name="user_name" type="text" placeholder="* Điền đầy đủ.Tên dài không quá 20 ký tự" required value={{ $data->users_name }}>
                    </div>
                    <div class="form-group" id="">
                        <label class="red">*</label><label for="inputlg">Địa chỉ:</label>
                        <input class="form-control" id="" name="address" type="text" placeholder="* Điền đầy đủ Thôn-Xã-Huyện-Tỉnh" required value={{ $data->address }}>
                        <span id="span" style="color: red"></span>
                    </div>
                    <div class="form-group" id="">
                        <label class="red">*</label><label for="inputlg">Email:</label>
                        <input class="form-control" id="email" name="email" type="text" onblur="kt_email()" placeholder="* Điền đầy đủ. Định dạng mail: a@gmail.com" required value={{ $data->email }}>
                        <span id="span1" style="color: red"></span>
                    </div>
                    <div class="form-group" id="">
                        <label class="red">*</label><label for="inputlg">Số điện thoại:</label>
                        <input class="form-control" id="" name="phone" type="text" placeholder="* Điền đầy đủ" required value={{ $data->phone }}>
                        <span id="span1" style="color: red"></span>
                    </div>
                    <div class="form-group" id="">
                        <label class="red">*</label><label for="inputlg">Mật khẩu</label>
                        <input class="form-control" name="password" type="" placeholder="* Mật khẩu dài ít nhất 5 ký tự" required value={{ decrypt($data->password) }}>
                    </div>
                    <div class="form-group" id="">
                        <label class="red">*</label><label for="inputlg">Xác nhận lại mật khẩu</label>
                        <input class="form-control" name="re_password" type="password" required>
                    </div><br>
                    <div class="row">
                            <button type="submit" class="btn btn-danger btn btn-primary">Đăng ký</button> 
                    </div>
                </div>
            </div>
            </form>
          
            
        </div>
    </div>
    @endsection()