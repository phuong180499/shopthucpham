  @extends('master')
@section('content')
  <div id="">
    <hr>
        <div class="container">
            <div class="row" align="center">
                <br>
                <h4 style="">THÔNG TIN CÁ NHÂN ĐĂNG KÝ</h4><br><br>
            </div>
            <form action="{{route('getlienhe') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="row" style="margin-bottom: 50px">
                <div class=" col-md-offset-3 col-md-6" >
                    <div class="form-group" id="">
                        <label for="inputlg">Tên</label>
                        <input class="form-control" name="fullname" type="text">
                    </div>
                    <div class="form-group" id="">
                        <label for="inputlg">Nội dung:</label>
                        <textarea name="note"></textarea>
                    </div>
                    <div class="row">
                            <button type="submit" class="btn btn-danger btn btn-primary">Send</button> 
                    </div>
                </div>
            </div>
            </form>
          
            
        </div>
    </div>
    @endsection()