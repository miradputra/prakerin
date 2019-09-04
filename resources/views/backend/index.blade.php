<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>:: sQuare :: Home</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="{{asset('backend/template/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/template/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
<link rel="stylesheet" href="{{asset('backend/template/assets/plugins/morrisjs/morris.min.css')}}" />
<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('backend/template/assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('backend/template/assets/css/color_skins.css')}}">
</head>
<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{asset('backend/template/assets/images/logo.svg')}}" width="48" height="48" alt="sQuare"></div>
        <p>Please wait...</p>
    </div>
</div>
<div class="overlay_menu">
    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-close"></i></button>
    <div class="container">
        <div class="row clearfix">
            <div class="card links">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>App</h6>
                            <ul class="list-unstyled">
                                <li><a href="{{asset('backend/template/mail-inbox.html')}}">Inbox</a></li>
                                <li><a href="{{asset('backend/template/chat.html')}}">Chat</a></li>
                                <li><a href="{{asset('backend/template/events.html')}}">Calendar</a></li>
                                <li><a href="{{asset('backend/template/file-dashboard.html')}}">File Manager</a></li>
                                <li><a href="{{asset('backend/template/contact.html')}}">Contact list</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>User Interface (UI)</h6>
                            <ul class="list-unstyled">
                                <li><a href="{{('asset/backend/tamplate/ui_kit.html')}}">UI KIT</a></li>
                                <li><a href="{{('asset/backend/tamplate/tabs.html')}}">Tabs</a></li>
                                <li><a href="{{('asset/backend/tamplate/range-sliders.html')}}">Range Sliders</a></li>
                                <li><a href="{{('asset/backend/tamplate/modals.html')}}">Modals</a></li>
                                <li><a href="{{('asset/backend/tamplate/alerts.html')}}">Alerts</a></li>
                                <li><a href="{{('asset/backend/tamplate/dialogs.html')}}">Dialogs</a></li>
                                <li><a href="{{('asset/backend/tamplate/collapse.html')}}">Collapse</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>Sample Pages</h6>
                            <ul class="list-unstyled">
                                <li><a href="{{('asset/backend/tamplate/image-gallery.html')}}">Image Gallery</a> </li>
                                <li><a href="{{('asset/backend/tamplate/profile.html')}}">Profile</a></li>
                                <li><a href="{{('asset/backend/tamplate/timeline.html')}}">Timeline</a></li>
                                <li><a href="{{('asset/backend/tamplate/pricing.html')}}">Pricing</a></li>
                                <li><a href="{{('asset/backend/tamplate/invoices.html')}}">Invoices</a></li>
                                <li><a href="{{('asset/backend/tamplate/search-results.html')}}">Search Results</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>About</h6>
                            <ul class="list-unstyled">
                                <li><a href="{{('asset/backend/tamplate/http://thememakker.com/about/')}}" target="_blank">About</a></li>
                                <li><a href="{{('asset/backend/tamplate/http://thememakker.com/contact/')}}" target="_blank">Contact Us</a></li>
                                <li><a href="{{('asset/backend/tamplate/http://thememakker.com/admin-templates/')}}" target="_blank">Admin Templates</a></li>
                                <li><a href="{{('asset/backend/tamplate/http://thememakker.com/services/')}}" target="_blank">Services</a></li>
                                <li><a href="{{('asset/backend/tamplate/http://thememakker.com/portfolio/')}}" target="_blank">Portfolio</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="social">
                    <a class="icon" href="{{('asset/backend/tamplate/https://www.facebook.com/thememakkerteam" target="_blank')}}"><i class="zmdi zmdi-facebook"></i></a>
                    <a class="icon" href="{{('asset/backend/tamplate/https://www.behance.net/thememakker" target="_blank')}}"><i class="zmdi zmdi-behance"></i></a>
                    <a class="icon" href="{{('asset/backend/tamplate/javascript:void(0);"><i class="zmdi zmdi-twitter')}}"></i></a>
                    <a class="icon" href="{{('asset/backend/tamplate/javascript:void(0);"><i class="zmdi zmdi-linkedin')}}"></i></a>
                    <p>Coded by WrapTheme<br> Designed by <a href="{{('asset/backend/tamplate/http://thememakker.com/" target="_blank')}}">thememakker.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- Top Bar -->
    @include('layouts.navbar')
<!-- Left Sidebar -->
    @include('layouts.sidebarr')
<!-- Right Chatbar -->
<aside id="rightchat" class="right_chat">
    <div class="chat_body">
        <div class="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-search"></i>
                </span>
            </div>
        </div>
        <ul class="chat-widget m-b-0 clearfix">
            <li class="left float-left">
                <div class="chat-info">
                    <span class="datetime">6:12</span>
                    <span class="message">Hello, John </span>
                </div>
            </li>
            <li class="right">
                <div class="chat-info">
                    <a class="name" href="javascript:void(0);">Alexander</a>
                    <span class="datetime">6:15</span>
                    <span class="message">Hi, Alexander<br> How are you!</span>
                </div>
            </li>
            <li class="right">
                <div class="chat-info">
                    <a class="name" href="javascript:void(0);">Alexander</a>
                    <span class="datetime">6:16</span>
                    <span class="message">There are many variations of passages of Lorem Ipsum available</span>
                </div>
            </li>
            <li class="left float-left">
                <div class="chat-info">
                    <span class="datetime">6:25</span>
                    <span class="message">Hi, Alexander,<br> John <br> What are you doing?</span>
                </div>
            </li>
            <li class="left float-left">
                <div class="chat-info">
                    <span class="datetime">6:28</span>
                    <span class="message">I would love to join the team.</span>
                </div>
            </li>
                <li class="right">
                <div class="chat-info">
                    <span class="datetime">7:02</span>
                    <span class="message">Hello, <br>Michael</span>
                </div>
            </li>
        </ul>
        <div class="enter_msg">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter text here...">
                <span class="input-group-addon"><i class="zmdi zmdi-mail-send"></i></span>
            </div>
        </div>
    </div>
    <div class="chat_list">
        <ul class="list-unstyled clearfix">
            <li><a href="javascript:void(0);"><img src="{{asset('backend/template/assets/images/xs/avatar1.jpg')}}" class="rounded-circle" alt=""></a></li>
            <li><a href="javascript:void(0);"><img src="{{asset('backend/template/assets/images/xs/avatar2.jpg')}}" class="rounded-circle" alt=""></a></li>
            <li class="active"><a href="javascript:void(0);"><img src="{{asset('backend/template/assets/images/xs/avatar3.jpg')}}" class="rounded-circle" alt=""></a></li>
            <li><a href="javascript:void(0);"><img src="{{asset('backend/template/assets/images/xs/avatar4.jpg')}}" class="rounded-circle" alt=""></a></li>
            <li><a href="javascript:void(0);"><img src="{{asset('backend/template/assets/images/xs/avatar5.jpg')}}" class="rounded-circle" alt=""></a></li>
            <li><a href="javascript:void(0);"><img src="{{asset('backend/template/assets/images/xs/avatar6.jpg')}}" class="rounded-circle" alt=""></a></li>
            <li><a href="javascript:void(0);"><img src="{{asset('backend/template/assets/images/xs/avatar7.jpg')}}" class="rounded-circle" alt=""></a></li>
            <li><a href="javascript:void(0);"><img src="{{asset('backend/template/assets/images/xs/avatar8.jpg')}}" class="rounded-circle" alt=""></a></li>
            <li><a href="javascript:void(0);"><img src="{{asset('backend/template/assets/images/xs/avatar9.jpg')}}" class="rounded-circle" alt=""></a></li>
        </ul>
    </div>
</aside>

<!-- Main Content -->
<section class="content home">
    <br>
        @yield('content')
</section>
<!-- Jquery Core Js -->
<script src="{{asset('backend/template/assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="{{asset('backend/template/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{asset('backend/template/assets/bundles/morrisscripts.bundle.js')}}"></script><!-- Morris Plugin Js -->
<script src="{{asset('backend/template/assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('backend/template/assets/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob-->

<script src="{{asset('backend/template/assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('backend/template/assets/js/pages/index.js')}}"></script>
</body>
</html>
