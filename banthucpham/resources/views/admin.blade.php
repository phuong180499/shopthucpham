<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
   <base href="{{ asset('') }}" target="_blank, _self, _parent, _top">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin_Bán thực phẩm</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Global stylesheets -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="source/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="source/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="source/assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="source/assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="source/assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    <!-- Core JS files -->
    <script type="text/javascript" src="source/assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="source/assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <link href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css" rel="stylesheet" />
    <script type="text/javascript" src="source/assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="source/assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="source/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="source/assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="source/assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="source/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="source/assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="source/assets/js/plugins/pickers/daterangepicker.js"></script>

    <script type="text/javascript" src="source/assets/js/core/app.js"></script>
    {{-- <script type="text/javascript" src="source/assets/js/pages/dashboard.js"></script> --}}
    <!-- /theme JS files -->

    <script src="source/ckeditor/ckeditor.js"></script>
    {{-- <script src="source/ckfinder/ckfinder.js"></script>
    <script  type="text/javascript" charset="utf-8">
    var baseURL="{{ url('/') }}";
    </script> --}}
{{--  <script type="text/javascript" src="source/ckfinder/ckediter_ckfineder.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
 
    <style type="text/css" media="">
        #dtCate th
        {
            background-color: #EEE;
        }
         #tb_admin th
        {
            background-color: #EEE;
        }
        #nen
        {
             background-color: #CCFFCC;
        }
    </style>
</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html" id="navbar-brand">BON GROCER</a>

            <ul class="nav navbar-nav visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
                <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>

            <p class="navbar-text">
                <span class="label bg-success">Online</span>
            </p>

            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-people"></i>
                            <span class="visible-xs-inline-block position-right">Users</span>
                        </a>
                        <div class="dropdown-menu dropdown-content">
                            <div class="dropdown-content-heading">
                                Users online
                                <ul class="icons-list">
                                    <li><a href="#"><i class="icon-gear"></i></a></li>
                                </ul>
                            </div>

                            <ul class="media-list dropdown-content-body width-300">
                                <li class="media">
                                    <div class="media-left"><img src="source/assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading text-semibold">Jordana Ansley</a>
                                        <span class="display-block text-muted text-size-small">Lead web developer</span>
                                    </div>
                                    <div class="media-right media-middle"><span class="status-mark border-success"></span></div>
                                </li>
                            </ul>

                            <div class="dropdown-content-footer">
                                <a href="#" data-popup="tooltip" title="All users"><i class="icon-menu display-block"></i></a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-bubbles4"></i>
                            <span class="visible-xs-inline-block position-right">Messages</span>
                            <span class="badge bg-warning-400">2</span>
                        </a>

                        <div class="dropdown-menu dropdown-content width-350">
                            <div class="dropdown-content-heading">
                                Messages
                                <ul class="icons-list">
                                    <li><a href="#"><i class="icon-compose"></i></a></li>
                                </ul>
                            </div>

                            <ul class="media-list dropdown-content-body">
                                <li class="media">
                                    <div class="media-left">
                                        <img src="source/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                        <span class="badge bg-danger-400 media-badge">5</span>
                                    </div>

                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">James Alexander</span>
                                            <span class="media-annotation pull-right">04:58</span>
                                        </a>

                                        <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                    </div>
                                </li>
                            </ul>

                            <div class="dropdown-content-footer">
                                <a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <img src="source/assets/images/placeholder.jpg" alt="">
                            <span>
                                @if(Auth::check())
                                {{ Auth::user()->full_name }}
                                @endif
                            </span>
                            <i class="caret"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                            <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                            <li><a href="#"><span class="badge bg-blue pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                             @if(Auth::check())
                            <li><a href="{{ route('logout1') }}"><i class="icon-switch2"></i> Logout</a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /main navbar -->

    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main">
                <div class="sidebar-content">

                    <!-- User menu -->
                    <div class="sidebar-user">
                        <div class="category-content">
                            <div class="media">
                                <a href="#" class="media-left"></a>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">
                                          @if(Auth::check())
                                            {{ Auth::user()->full_name }}
                                            @endif
                                    </span>
                                    <div class="text-size-mini text-muted">
                                        <i class="icon-pin text-size-small"></i> &nbsp;An Thi,Hung Yen
                                    </div>
                                </div>

                                <div class="media-right media-middle">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="#"><i class="icon-cog3"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user menu -->

                    <!-- Main navigation -->
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-content no-padding">
                           @include('link_admin')
                            </li>
                            <!-- /page kits -->

                            </ul>
                        </div>
                    </div>
                    <!-- /main navigation -->

                </div>
            </div>
            <!-- /main sidebar -->

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                    @yield('content1')
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>

</html>