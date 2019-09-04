<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>Forgot Password</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('backend/template/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('backend/template/assets/css/main.css')}}">
<link rel="stylesheet" href="{{ asset('backend/template/assets/css/color_skins.css')}}">
</head>

<body class="theme-cyan">
    <div class=" authentication sidebar-collapse">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
            <div class="container">
                <div class="navbar-translate n_logo">
                    <a class="navbar-brand" href="{{ route('home') }}">sQuare</a>
                    <button class="navbar-toggler" type="button">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" title="Follow us on Twitter" href="javascript:void(0);" target="_blank">
                                <i class="zmdi zmdi-twitter"></i>
                                <span class="d-lg-none d-xl-none m-l-10">Twitter</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="Like us on Facebook" href="javascript:void(0);" target="_blank">
                                <i class="zmdi zmdi-facebook"></i>
                                <span class="d-lg-none d-xl-none m-l-10">Facebook</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="Follow us on Instagram" href="javascript:void(0);" target="_blank">
                                <i class="zmdi zmdi-instagram"></i>
                                <span class="d-lg-none d-xl-none m-l-10">Instagram</span>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link btn btn-white btn-round" href="sign-in.html">SIGN IN</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <!-- End Navbar -->
    <div class="page-header">
        <div class="container">
            <div class="col-md-12 content-center">
                <div class="card-plain">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <div class="header">
                            <div class="logo-container expandUp">
                                <img src="{{ asset('backend/template/assets/images/logo.svg')}}" alt="">
                            </div>
                            <h5>Forgot Password?</h5>
                            <span class="text-muted">Enter your e-mail address below to reset your password.</span>
                        </div>
                        <div class="content">
                            <div class="input-group input-lg">
                                <input id="email" type="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-email"></i>
                                    </span>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="footer">
                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                        <li><a href="http://thememakker.com/about/" target="_blank">About Us</a></li>
                        <li><a href="javascript:void(0);">FAQ</a></li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>,
                    <span>Designed by <a href="http://thememakker.com/" target="_blank">ThemeMakker</a></span>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Jquery Core Js -->
<script src="{{ asset('backend/template/assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{ asset('backend/template/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{ asset('backend/template/assets/js/pages/authentication/page.js')}}"></script>
</body>
</html>
