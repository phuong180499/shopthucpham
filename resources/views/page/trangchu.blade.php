@extends('master') @section('content')
<div class="row">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        {{--
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol> --}}

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="source/img/img_index/image-16.jpg" alt="Chicago">
                {{-- <div id="slide_first" style="text-align: center;height: 540px;width: 1357px;padding-top: 130px">
                    <img src="source/img/slide/slide-7.png" alt="Los Angeles" class="animated inifinite zoomIn" id="natural" style="height: 220px;
                                width: 240px;">
                </div> --}}
            </div>
            @foreach($slide as $sl)
            <div class="item">
                <img src="source/img/img_index/{{ $sl->image}}" alt="Chicago">
            </div>
            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>
<div class="row" id="">
    <div class=" col-md-offset-5 col-md-1" id="">
        <div id="logo1">
            <!-- <img src="source/img/img_index/logo2.png" alt="" id="" style="width: 300px;height: 70px;"> -->
        </div>
    </div>
</div>
<div class="row" id="next_head2">
    <div class="col-md-6" id="next_head_img1">
        <img src="source/img/img_index/image-5.png" alt="img" class="animated inifinite bounceInLeft">
        <a href="" title="" id="text-decoration">
            <h2 class="animated inifinite fadeInDown">Gi???m ?????n 20 %</h2>
            <p class="animated inifinite fadeInUp">cho l???n ?????u ti??n</p>
        </a>
        <button type="button" class="btn btn-default">T??m hi???u ngay</button>
    </div>
    <div class="col-md-6" id="next_head_img2">
        <a href="" title="" id="text-decoration">
            <h2 class="animated inifinite fadeInDown">Mi???n ph?? <br>Ship</h2>
            <p class="animated inifinite fadeInUp">Cho h??a ????n tr??n 300.000??</p>
        </a>
        <button type="button" class="btn btn-default">T??m hi???u ngay</button>
        <img src="source/img/img_index/image-6.png" alt="img" class="animated inifinite bounceInRight">
    </div>
</div>
<div class="row" id="icon_nen">
    <img src="source/img/img_index/icon.png" alt="icon" id="icon" class="animated inifinite fadeInDown">
    <h3 id="" class="animated inifinite fadeInDown">S???n ph???m m???i</h3>
    <hr>
       <div class="row" style="text-align: center;">
            <p style="font-size: 16px">T??m th???y {{count($new_product)}} s???n ph???m</p>
        </div>
</div>
<div class="container" id="container_sp1">
    <div class="animated inifinite bounceInRight" id="content">
        <div class="row">
            @foreach($new_product as $new)
            <div class="col-md-3">
                <div class="row">
                    @if($new->gia_km!=0)
                    <div class="ribbon"><span>SALE</span></div>
                    @endif
                    <a href="{{ route('chi-tiet-san-pham',$new->id) }}" title="" id="text-decoration">
                        <img src="upload/sanpham/{{ $new->image }}" alt=""></a>
                        <p class="ten">{{ $new->name }}</p>
                        @if($new->gia_km!=0)
                         <lable class="giacu">{{number_format($new->unit_price,0,',','.') }}&nbsp;??</lable>&nbsp;
                          <lable class="gia">{{ number_format($new->gia_km,0,',','.') }}&nbsp;??</lable>
                         @else
                         <lable class="gia">{{ number_format($new->unit_price,0,',','.') }}&nbsp;??</lable>
                         @endif <br>
                         <br>
                         <a href="{{ asset('cart/add/'.$new->id) }}" title="" id="text-decoration">
                        <label><button type="button" id="themgiohang"><i class="fas fa-cart-plus"></i></button></label></a>
                        <a href="{{ route('chi-tiet-san-pham',$new->id) }}" id="text-decoration">
                        <label><button type="button" id="ct"> Chi ti???t</button></label></a></div>
            </div>
            @endforeach
        </div>
        <div class="row">
            {{ $new_product->links() }}
        </div>
    </div>
</div>
<div class="row" id="icon_nen">
    <img src="source/img/img_index/icon.png" alt="icon" id="icon" class="animated inifinite fadeInDown">
    <h3 id="" class="animated inifinite fadeInDown">S???n ph???m n???i b???t</h3>
    <hr>
    <div class="row" style="text-align: center;">
            <p style="font-size: 16px">T??m th???y {{count($product)}} s???n ph???m</p>
        </div>
</div>
<div class="container" id="container_sp1">
    <div class="animated inifinite bounceInLeft" id="content">
        <div class="row">
            @foreach($product as $pr)
            <div class="col-md-3">
                <div class="row">
                    @if($pr->gia_km!=0)
                    <div class="ribbon"><span>SALE</span></div>
                    @endif
                   <a href="{{ route('chi-tiet-san-pham',$pr->id) }}" title="" id="text-decoration">
                        <img src="upload/sanpham/{{ $pr->image }}" alt=""></a>
                        <p class="ten">{{ $pr->name }}</p>
                        @if($pr->gia_km!=0)
                         <lable class="giacu">{{number_format($pr->unit_price,0,',','.') }}&nbsp;??</lable>&nbsp;
                          <lable class="gia">{{ number_format($pr->gia_km,0,',','.') }}&nbsp;??</lable>
                         @else
                         <lable class="gia">{{ number_format($pr->unit_price,0,',','.') }}&nbsp;??</lable>
                         @endif <br>
                         <br>
                         <a href="{{ asset('cart/add/'.$pr->id) }}" title="" id="text-decoration">
                        <label><button type="button" id="themgiohang"><i class="fas fa-cart-plus"></i></button></label></a>
                        <a href="{{ route('chi-tiet-san-pham',$pr->id) }}" id="text-decoration">
                        <label><button type="button" id="ct"> Chi ti???t</button></label></a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            {{ $product->links() }}
        </div>
    </div>
</div>
<!--  end content -->
<div class="container-fluid" style="background-color:#eaf8be;margin-top:50px">
    <div class="col-md-4">
        <img src="source/img/img_index/image-1.png">
    </div>
    <div class=" col-md-6" style="margin-top:100px">
        <h1>Cung c???p th???c ph???m ?????m b???o ch???t l?????ng</h1>
            <p>Ch??ng t??i cung c???p tr??i c??y n??ng s???n t????i v?? rau cho kh??ch h??ng qu?? c???a ch??ng t??i. Nh???ng ng?????i ghi nh??? nh??m c???a ch??ng t??i l?? c??c chuy??n gia trang tr???i v?? l??m v?????n, nh???ng ng?????i gi??p ch??ng t??i l???a ch???n c??c s???n ph???m ch???t l?????ng t???t nh???t t??? ??????nh?? n??ng n??ng ??? v??ng ?????t c???a gia ????nh</p>
            <button type="button" class="btn btn-danger">T??M HI???U</button>
    </div>
     <div class="col-md-1">
        <img src="source/img/img_index/image-35.png">
        <img src="source/img/img_index/nen.png">
        <img src="source/img/img_index/image-36.png">
    </div>
</div>
<div class="row" id="icon_nen">
    <img src="source/img/img_index/icon.png" alt="icon" id="icon" class="animated inifinite fadeInDown">
    <h3 id="" class="animated inifinite fadeInDown">S???n ph???m li??n quan</h3>
    <hr>
</div>
<div class="container" id="container_sp3">
    <div id="content">
        <div class="row">
            @foreach($product1 as $pr1)
            <div class="col-md-2">
                <div class="row">
                    @if($pr1->gia_km!=0)
                    <div class="ribbon"><span>SALE</span></div>
                    @endif
                   <a href="{{ route('chi-tiet-san-pham',$pr1->id) }}" title="" id="text-decoration">
                        <img src="upload/sanpham/{{ $pr1->image }}" alt=""></a>
                        <p class="ten">{{ $pr1->name }}</p>
                        @if($pr->gia_km!=0)
                         <lable class="giacu">{{number_format($pr1->unit_price,0,',','.') }}&nbsp;??</lable>&nbsp;
                          <lable class="gia">{{ number_format($pr1->gia_km,0,',','.') }}&nbsp;??</lable>
                         @else
                         <lable class="gia">{{ number_format($pr1->unit_price,0,',','.') }}&nbsp;??</lable>
                         @endif <br>
                         <br>
                         <a href="{{ asset('cart/add/'.$pr1->id) }}" title="" id="text-decoration">
                        <label><button type="button" id="themgiohang"><i class="fas fa-cart-plus"></i></button></label></a>
                        <a href="{{ route('chi-tiet-san-pham',$pr1->id) }}" id="text-decoration">
                        <label><button type="button" id="ct"> Chi ti???t</button></label></a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            {{ $product->links() }}
        </div>
    </div>
</div>
<!-- <div class="container-fluid" style="background-color:#ddf3f9;margin-top:50px">
    <div class="col-md-1">
        <img src="source/img/img_index/nen2.png">
        <img src="source/img/img_index/image-37.png">
    </div>
    <div class="col-md-4" style="margin-top:">
        <img src="source/img/img_index/slide-9.png">
        <h1>Cung c???p th???c ph???m ?????m b???o ch???t l?????ng</h1>
            <p>Ch??ng t??i cung c???p tr??i c??y n??ng s???n t????i v?? rau cho kh??ch h??ng qu?? c???a ch??ng t??i. Nh???ng ng?????i ghi nh??? nh??m c???a ch??ng t??i l?? c??c chuy??n gia trang tr???i v?? l??m v?????n, nh???ng ng?????i gi??p ch??ng t??i l???a ch???n c??c s???n ph???m ch???t l?????ng t???t nh???t t??? ??????nh?? n??ng n??ng ??? v??ng ?????t c???a gia ????nh</p>
    </div>
    <div class="col-md-offset-1 col-md-5">
        <img src="source/img/img_index/image-32.png">
    </div>
</div> -->
{{-- <div class="container-fluid" id="doi_tac">
    <img src="source/img/img_index/image-7.png" alt="h??ng h???p t??c">
</div> --}}
<!-- nh?? cung c???p -->
{{-- <div class="container" id="ncc_abouts">
     @foreach($tintuc as $tin)
    <div class="col-md-4">
        <div class="row">
            <a href="{{ $tin->id_new }}" title="" id="text-decoration">
                <img src="source/img/tintuc/{{ $tin->image }}" alt="???nh tin">
                <h4>{{ $tin->title }}</h4>
                <p></p>
            </a>
        </div>
    </div>
    @endforeach
</div> --}}
<!-- <div class="row" id="next_heads">
    <div class="container" id="" class="animated inifinite bounceInLeft">
        <div class="col-md-5">
            <img src="source/img/img_index/image-9.png" class="animated inifinite bounceInLeft">
        </div>
        <div class="col-md-offset-1 col-md-6">
            <h1 class="animated inifinite bounceInRight">Th??ng tin<br>V??? c???a h??ng</h1>
            <p class="animated inifinite bounceInRight">{{-- We deliver fresh farm produce fruits and vegitables to our esteemed customers. Our team memebrers are farm and horticulture experts, who helps us to choose the best quality products from the farmer???s house accorss the country. --}}Ch??ng t??i cung c???p tr??i c??y n??ng s???n t????i v?? rau cho kh??ch h??ng qu?? c???a ch??ng t??i. Nh???ng ng?????i ghi nh??? nh??m c???a ch??ng t??i l?? c??c chuy??n gia trang tr???i v?? l??m v?????n, nh???ng ng?????i gi??p ch??ng t??i l???a ch???n c??c s???n ph???m ch???t l?????ng t???t nh???t t??? ??????nh?? n??ng n??ng ??? v??ng ?????t c???a gia ????nh</p>
            <button type="button" class="btn btn-danger">T??M HI???U</button>
        </div>
    </div>
</div> -->
@endsection()