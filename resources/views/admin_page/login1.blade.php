<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <base href="{{ asset('') }}" target="_blank, _self, _parent, _top">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

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
    <script type="text/javascript" src="source/assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="source/assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="source/assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="source/assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script type="text/javascript" src="source/assets/js/core/app.js"></script>
    <script type="text/javascript" src="source/assets/js/pages/login.js"></script>
    <!-- /theme JS files -->

</head>

<body class="login-container">
    
    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">
                <!-- Content area -->
                <div class="content pb-20">

                    <!-- Advanced login -->
                    <form action="{{ route('login') }}" method="post">
                        <input type="hidden" name="_token" value ="{{ csrf_token() }}" >
                        <div class="col-sm-3">
                           
                        </div>
                        <div class="panel panel-body login-form">
                            <div class="text-center">
                                <h5 class="content-group-lg">Login to your account <small class="display-block">Enter your credentials</small></h5>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="text" class="form-control" name="email" required value="linhdoan@gmail.com">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="password" class="form-control"  required name="password" placeholder="Password" value="12345">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group login-options">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" class="styled" checked="checked">
                                            Remember
                                        </label>
                                    </div>

                                    {{-- <div class="col-sm-6 text-right">
                                        <a href="login_password_recover.html">Forgot password?</a>
                                    </div> --}}
                                </div>
                            </div>
                              <div class="row">                                
                                        @if(Session::has('flag'))
                                        <div class="alert alert-{{ Session::get('flag') }}">
                                            {{ Session::get('tb') }}
                                        </div>
                                        @endif                                
                                </div>
                            <div class="form-group">
                                <button type="submit" class="btn bg-blue btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
                            </div>

                            {{-- <div class="content-divider text-muted form-group"><span>or sign in with</span></div>
                            <ul class="list-inline form-group list-inline-condensed text-center">
                                <li><a href="#" class="btn border-indigo text-indigo btn-flat btn-icon btn-rounded"><i class="icon-facebook"></i></a></li>
                                <li><a href="#" class="btn border-pink-300 text-pink-300 btn-flat btn-icon btn-rounded"><i class="icon-dribbble3"></i></a></li>
                                <li><a href="#" class="btn border-slate-600 text-slate-600 btn-flat btn-icon btn-rounded"><i class="icon-github"></i></a></li>
                                <li><a href="#" class="btn border-info text-info btn-flat btn-icon btn-rounded"><i class="icon-twitter"></i></a></li>
                            </ul>

                            <div class="content-divider text-muted form-group"><span>Don't have an account?</span></div>
                            <a href="login_registration.html" class="btn btn-default btn-block content-group">Sign up</a>
                            <span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span> --}}
                        </div>
                         
                    </form>
                    <!-- /advanced login -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>
</html>