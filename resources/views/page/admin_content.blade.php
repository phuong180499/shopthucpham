@extends('admin') @section('content1')
<style type="text/css" media="">
    #tk1 {
        border-radius: 5px;
        padding: 17px;
        background-color: #26a69a;
        font-size: 16px;
    }
    
    #tk {
        margin-bottom: 25px;
        margin-top: 30px;
        color: #FFF;
        margin-left: 20px;
    }
    
    #tk a {
        color: #FFF;
    }
    
    #tk .p {
        font-size: 13px;
    }
    
    #tk .tk_sl {
        font-size: 22px;
    }
    
    #dropdown_chart {
        margin-top: 50px;
        margin-left: -220px;
    }
</style>
<div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header page-header-default">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
                        </div>

                        <div class="heading-elements">
                            <div class="heading-btn-group">
                                <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                                <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                                <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                            <li class="active">Dashboard</li>
                        </ul>

                        <ul class="breadcrumb-elements">
                            <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-gear position-left"></i>
                                    Settings
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                                    <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                                    <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->
                <style type="text/css" media="screen">
                    .img{
                        width: 80px;
                        height: 80px;
                    }
                    #can .col-md-3{
                        margin-left: 50px;
                        margin-right: 5px;
                        margin-top:30px;
                        margin-bottom: 50px;
                       /* width: 320px;*/
                        border:1px solid #EEE;
                       padding-left: 0px;
                    }
                     #can .col-md-3 .col-md-5
                     {
                        padding-top:9px;
                        padding-bottom:9px;
                     }
                </style>
                 <div class="row" id="can">
                     <div class="col-md-3" style="border:1px solid #DD0000">
                        <div class="col-md-5" style="background-color: #DD0000;">
                            <img src="source/img/img_dai_dien/image2.png" class="img">
                        </div>
                        <div class="col-md-7">
                            <p style="margin-top:10px;font-size:16px">Loại sản phẩm</p>
                            <p style="font-weight: bold;">{{ count($loai) }}</p> 
                        </div>
                    </div>
                    <div class="col-md-3" style="border:1px solid #006600">
                        <div class="col-md-5" style="background-color: #006600;">
                            <img src="source/img/img_dai_dien/image4.jpg" class="img">
                        </div>
                        <div class="col-md-7">
                            <p style="margin-top:10px;font-size:16px">Tổng sản phẩm</p>
                            <p style="font-weight: bold;">{{ count($sanpham) }}</p> 
                        </div>
                    </div>
                   
                    <div class="col-md-3" style="border:1px solid #000099">
                        <div class="col-md-5" style="background-color: #000099;">
                            <img src="source/img/img_dai_dien/image3.png" class="img">
                        </div>
                        <div class="col-md-7">
                            <p style="margin-top:10px;font-size:16px">Tổng đơn hàng</p>
                            <p style="font-weight: bold;">{{ count($bill) }}</p> 
                        </div>
                    </div>
                   
                </div>

 <div class="col-lg-12">
    <div class="container" style="width: 1000px">
        <canvas id="myChart" width="" ;></canvas>
    </div>
   {{--  <script>
        let myChart = document.getElementById('myChart').getContext('2d');
            // Global Options
        Chart.defaults.global.defaultFontFamily = 'Lato';
        Chart.defaults.global.defaultFontSize = 15;
        Chart.defaults.global.defaultFontColor = '#444';
        let massPopChart = new Chart(myChart, {
        type: 'horizontalBar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data: {
        labels: [
            @foreach($sanpham as $sp)
            @endforeach
            @foreach($kho as $kh)
            @foreach($sanpham as $sp)
             @if($sp->id==$kh->id_sp)
             '{{ $sp->name }}',
            @endif
            @endforeach
            @endforeach
                ],
        datasets: [{
        label: 'Population',
        data: [
            @foreach($kho as $kh)
            {{ $kh->sl }},
            @endforeach
                                                            
            ],
             //backgroundColor:'green',
             backgroundColor: [
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
                                                                
                                                                
            ],
            borderWidth: 1,
            borderColor: '#777',
            hoverBorderWidth: 3,
            hoverBorderColor: '#000'
            }]
            },
            options: {
            title: {
                display: true,
                text: 'Thống kê sản phẩm ',
                fontSize: 25
                },
            legend: {
            display: true,
            position: 'right',
            labels: {
            fontColor: '#000'
            }
            },
            layout: {
            padding: {
                left: 50,
                right: 0,
                bottom: 0,
                top: 0
                    }
                },
            tooltips: {
            enabled: true
                }
                }
            });
    </script> --}}
<br><br><br><br>
 </div>

                <!-- Content area -->
               
    <div class="row">

                    {{--  <table class="table datatable-autofill-basic" id="tb_admin">
                         <thead>
                <tr>
                    <th>ten</th>
                    <th>sl</th>
                 
                     
                </tr> @foreach($loai as $l) --}}
                        {{--   @foreach($info1 as $f1) --}}
               {{--  <tr>  @foreach($info as $f) --}}
                   {{--  @if($l->id==$f1) --}}
                 {{--  <td>{{ $f1 }}</td> --}}
                {{--   @endif --}}
                   {{-- <td>{{ $f }}</td>
                </tr> --}}
                 {{--   @endforeach --}}
                  {{--   @endforeach
                     @endforeach
                   --}}
            </thead>
                     </table>
                        <div class="col-lg-7">

                            <!-- Traffic sources -->
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h6 class="panel-title">Traffic sources</h6>
                                    <div class="heading-elements">
                                        <form class="heading-form" action="#">
                                            <div class="form-group">
                                                <label class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
                                                    <input type="checkbox" class="switch" checked="checked">
                                                    Live update:
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <ul class="list-inline text-center">
                                                <li>
                                                    <a href="#" class="btn border-teal text-teal btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-plus3"></i></a>
                                                </li>
                                                <li class="text-left">
                                                    <div class="text-semibold">New visitors</div>
                                                    <div class="text-muted">2,349 avg</div>
                                                </li>
                                            </ul>

                                            <div class="col-lg-10 col-lg-offset-1">
                                                <div class="content-group" id="new-visitors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <ul class="list-inline text-center">
                                                <li>
                                                    <a href="#" class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-watch2"></i></a>
                                                </li>
                                                <li class="text-left">
                                                    <div class="text-semibold">New sessions</div>
                                                    <div class="text-muted">08:20 avg</div>
                                                </li>
                                            </ul>

                                            <div class="col-lg-10 col-lg-offset-1">
                                                <div class="content-group" id="new-sessions"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <ul class="list-inline text-center">
                                                <li>
                                                    <a href="#" class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-people"></i></a>
                                                </li>
                                                <li class="text-left">
                                                    <div class="text-semibold">Total online</div>
                                                    <div class="text-muted"><span class="status-mark border-success position-left"></span> 5,378 avg</div>
                                                </li>
                                            </ul>

                                            <div class="col-lg-10 col-lg-offset-1">
                                                <div class="content-group" id="total-online"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="position-relative" id="traffic-sources"></div>
                            </div>
                            <!-- /traffic sources -->

                        </div>

                        <div class="col-lg-5">

                            <!-- Sales stats -->
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h6 class="panel-title">Sales statistics</h6>
                                    <div class="heading-elements">
                                        <form class="heading-form" action="#">
                                            <div class="form-group">
                                                <select class="change-date select-sm" id="select_date">
                                                    <optgroup label="<i class='icon-watch pull-right'></i> Time period">
                                                        <option value="val1">June, 29 - July, 5</option>
                                                        <option value="val2">June, 22 - June 28</option>
                                                        <option value="val3" selected="selected">June, 15 - June, 21</option>
                                                        <option value="val4">June, 8 - June, 14</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div class="row text-center">
                                        <div class="col-md-4">
                                            <div class="content-group">
                                                <h5 class="text-semibold no-margin"><i class="icon-calendar5 position-left text-slate"></i> 5,689</h5>
                                                <span class="text-muted text-size-small">orders weekly</span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="content-group">
                                                <h5 class="text-semibold no-margin"><i class="icon-calendar52 position-left text-slate"></i> 32,568</h5>
                                                <span class="text-muted text-size-small">orders monthly</span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="content-group">
                                                <h5 class="text-semibold no-margin"><i class="icon-cash3 position-left text-slate"></i> $23,464</h5>
                                                <span class="text-muted text-size-small">average revenue</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="content-group-sm" id="app_sales"></div>
                                <div id="monthly-sales-stats"></div>
                            </div>
                            <!-- /sales stats -->

                        </div>
                    </div>
                <div class="content">
                    <!-- Main charts -->
    
                    <!-- Dashboard content -->
                    <div class="row">
                        

                        <div class="col-lg-4">

                            <!-- Progress counters -->
                            
                            <!-- /progress counters -->


                            <!-- My messages -->
                            <div class="panel panel-flat">
                              

                                <!-- Numbers -->
                              
                                <!-- /numbers -->


                                <!-- Area chart -->
                                <div id="messages-stats"></div>
                                <!-- /area chart -->


                                <!-- Tabs -->
                              
                                <!-- /tabs -->

                                <!-- Tabs content -->
                                <div class="tab-content">
                                    <div class="tab-pane active fade in has-padding" id="messages-tue">
                                        <ul class="media-list">
                                            <li class="media">
                                              

                                                <div class="media-body">
                                                    
                                                </div>
                                        </ul>
                                    </div>      
                                </div>
                                <!-- /tabs content -->

                            </div>
                            <!-- /my messages -->


                        </div>
                    </div>
                    <!-- /dashboard content -->

                </div>
                <!-- /content area -->

            </div>
@endsection()