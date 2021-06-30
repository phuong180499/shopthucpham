 <ul class="navigation navigation-main navigation-accordion">

                                <!-- Main -->
                                <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                                <li><a href="{{ route('trang-admin') }}"><i class="icon-home4"></i><span>Home</span></a></li>
                                <li><a href="{{ route('ds-loai-sp') }}"><i class="fab fa-product-hunt"></i><span>Loại sản phẩm</span></a></li>
                                <li>
                                    <a href="{{ route('ds-sp-all') }}" title=""><i class="fab fa-product-hunt"></i><span>Sản phẩm</span></a>
                                   {{--  <ul>
                                        <li><a href="{{ route('ds-sp-all') }}" title=""><i class="icon-chevron-right"></i>All</a></li>
                                        @foreach($loai_sp as $loai)
                                        <li><a href="{{ route('ds-sp',$loai->id) }}"><i class="icon-chevron-right"></i><span>{{ $loai->tenloai }}</span></a></li>
                                        @endforeach
                                    </ul> --}}
                                </li>
                                <li><a href="{{ route('ds-ncc') }}"><i class="fas fa-users"></i><span>Nhà cung cấp</span></a></li>
                                <li><a href="{{ route('ds-kh') }}"><i class="fas fa-users"></i><span>Quản lí khách hàng</span></a></li>
                                <li><a href="{{ route('ds-tk') }}"><i class="fas fa-user-lock"></i><span>Tài khoản</span></a></li>
                             {{--    <li><a href="kh.html"><i class="far fa-comment-dots"></i><span>Phản hồi của khách hàng</span></a></li> --}}
                               {{--  <li><a href="{{ route('ds-nv') }}"><i class="fas fa-user-tie"></i><span>Quản lí nhân viên</span></a></li> --}}
                               {{--  <li><a href="{{ route('ds-hd-nhap') }}"><i class="fas fa-file-invoice"></i><span>Hóa đơn nhập</span></a></li> --}}
                                <li><a href="{{ route('ds-hd-ban') }}"><i class="fas fa-file-invoice" ></i><span>Hóa đơn bán</span></a></li>

                               {{--  <li><a href="edit.html"><i class="far fa-newspaper"></i><span>Tin tức</span></a></li> --}}
                                {{-- <li><a href="edit.html"><i class="fab fa-slideshare"></i><span>Slide</span></a></li> --}}
                               {{--  <li><a href="edit.html"><i class="far fa-newspaper"></i><span>Quảng cáo</span></a></li> --}}

                            </ul>