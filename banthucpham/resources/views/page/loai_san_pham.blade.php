 @extends('master') @section('content')
   <hr>
<div class="container" style="padding-top:30px">
  
    <a href="trangchu.html" title=""><i class="fas fa-home"></i></a>/ @foreach($loai as $loai)
            {{ $loai->tenloai }}
             @endforeach
</div>
<div class="container-fluid" id="" style="padding-top:0px;padding-bottom: 70px">
    <div class="row" id="icon_nen" style="margin-top:-40px">
         <img src="source/img/img_index/icon.png" alt="icon" id="icon">
       <h3>Danh sách sản phẩm</h3>
       <hr>
    </div>
    <div class="container" id="container_sp1" style="margin-top:30px">
        <div class="row">
            @foreach($sp_theoloai as $sp)
            <div class="col-md-3" style="margin-top:100px">
                 <div class="row">
                    @if($sp->gia_km!=0)
                    <div class="ribbon"><span>SALE</span></div>
                    @endif
                    <a href="{{ route('chi-tiet-san-pham',$sp->id) }}" title="" id="text-decoration">
                        <img src="upload/sanpham/{{ $sp->image }}" alt=""></a>
                        <p class="ten">{{ $sp->name }}</p>
                        @if($sp->gia_km!=0)
                         <lable class="giacu">{{number_format($sp->unit_price,0,',','.') }}&nbsp;đ</lable>&nbsp;
                          <lable class="gia">{{ number_format($sp->gia_km,0,',','.') }}&nbsp;đ</lable>
                         @else
                         <lable class="gia">{{ number_format($sp->unit_price,0,',','.') }}&nbsp;đ</lable>
                         @endif <br>
                         <br>
                         <a href="{{ asset('cart/add/'.$sp->id) }}" title="" id="text-decoration">
                        <label><button type="button" id="themgiohang"><i class="fas fa-cart-plus"></i></button></label></a>
                        <a href="{{ route('chi-tiet-san-pham',$sp->id) }}" id="text-decoration">
                        <label><button type="button" id="ct"> Chi tiết</button></label></a>
                    </div>
            </div>
            @endforeach
        </div>
         <div class="row">
            {{ $sp_theoloai->links() }}
        </div>
   </div>
    <div class="container">
        <div class="row" style="margin-top:100px">
            <div class="col-md-3" id="padding">CÓ THỂ BẠN QUAN TÂM</div>
            <div class="co-md-9" id="padding1"></div>
        </div>
    </div>
    <div class="row">
        <div class="container" id="container_sp" style="margin-top:50px">
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
                         <lable class="giacu">{{number_format($new->unit_price) }}&nbsp;đ</lable>&nbsp;
                          <lable class="gia">{{ number_format($new->gia_km) }}&nbsp;đ</lable>
                         @else
                         <lable class="gia">{{ number_format($new->unit_price) }}&nbsp;đ</lable>
                         @endif <br>
                         <br>
                         <a href="{{ asset('cart/add/'.$new->id) }}" title="" id="text-decoration">
                        <label><button type="button" id="themgiohang"><i class="fas fa-cart-plus"></i></button></label></a>
                        <a href="{{ route('chi-tiet-san-pham',$new->id) }}" id="text-decoration">
                        <label><button type="button" id="ct"> Chi tiết</button></label></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection()