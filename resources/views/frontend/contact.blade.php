<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: sQuare :: Contact list</title>
<link rel="icon" href="{{asset('frontend/template/favicon.ico" type="image/x-icon')}}">
<!-- Favicon-->
<link rel="stylesheet" href="{{asset('frontend/template/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/footable-bootstrap/css/footable.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/footable-bootstrap/css/footable.standalone.min.css')}}">
<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">
</head>

<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/logo.svg" width="48" height="48" alt="sQuare"></div>
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
                                <li><a href="mail-inbox.html">Inbox</a></li>
                                <li><a href="chat.html">Chat</a></li>
                                <li><a href="events.html">Calendar</a></li>
                                <li><a href="file-dashboard.html">File Manager</a></li>
                                <li><a href="contact.html">Contact list</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>User Interface (UI)</h6>
                            <ul class="list-unstyled">
                                <li><a href="ui_kit.html">UI KIT</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                                <li><a href="range-sliders.html">Range Sliders</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="dialogs.html">Dialogs</a></li>
                                <li><a href="collapse.html">Collapse</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>Sample Pages</h6>
                            <ul class="list-unstyled">
                                <li><a href="image-gallery.html">Image Gallery</a> </li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="invoices.html">Invoices</a></li>
                                <li><a href="search-results.html">Search Results</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>About</h6>
                            <ul class="list-unstyled">
                                <li><a href="http://thememakker.com/about/" target="_blank">About</a></li>
                                <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                                <li><a href="http://thememakker.com/admin-templates/" target="_blank">Admin Templates</a></li>
                                <li><a href="http://thememakker.com/services/" target="_blank">Services</a></li>
                                <li><a href="http://thememakker.com/portfolio/" target="_blank">Portfolio</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="social">
                    <a class="icon" href="https://www.facebook.com/thememakkerteam" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                    <a class="icon" href="https://www.behance.net/thememakker" target="_blank"><i class="zmdi zmdi-behance"></i></a>
                    <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                    <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-linkedin"></i></a>
                    <p>Coded by WrapTheme<br> Designed by <a href="http://thememakker.com/" target="_blank">thememakker.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- Top Bar -->
<nav class="navbar">
    <ul class="nav navbar-nav navbar-left">
        <li>
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo.svg" width="30" alt="sQuare"><span class="m-l-10">sQuare</span></a>
            </div>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-sm" data-close="true">
                <i class="zmdi zmdi-arrow-left"></i>
                <i class="zmdi zmdi-arrow-right"></i>
            </a>
        </li>
        <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-apps"></i></a>
            <ul class="dropdown-menu pullDown">
                <li><a href="mail-inbox.html"><i class="zmdi zmdi-email m-r-10"></i><span>Mail</span></a></li>
                <li><a href="contact.html"><i class="zmdi zmdi-accounts-list m-r-10"></i><span>Contacts</span></a></li>
                <li><a href="chat.html"><i class="zmdi zmdi-comment-text m-r-10"></i><span>Chat</span></a></li>
                <li><a href="invoices.html"><i class="zmdi zmdi-arrows m-r-10"></i><span>Invoices</span></a></li>
                <li><a href="events.html"><i class="zmdi zmdi-calendar-note m-r-10"></i><span>Calendar</span></a></li>
                <li><a href="javascript:void(0)"><i class="zmdi zmdi-arrows m-r-10"></i><span>Notes</span></a></li>
                <li><a href="javascript:void(0)"><i class="zmdi zmdi-view-column m-r-10"></i><span>Taskboard</span></a></li>
            </ul>
        </li>
        <li class="dropdown notifications hidden-sm-down"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
            <span class="label-count">5</span>
            </a>
            <ul class="dropdown-menu pullDown">
                <li class="header">New Message</li>
                <li class="body">
                    <ul class="menu list-unstyled">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander <span class="time">13min ago</span></span>
                                        <span class="message">Meeting with Shawn at Stark Tower by 8 o'clock.</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="assets/images/xs/avatar6.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Grayson <span class="time">22min ago</span></span>
                                        <span class="message">You have 5 unread emails in your inbox.</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia <span class="time">31min ago</span></span>
                                        <span class="message">OrderPlaced: You received a new oder from Tina.</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Isabella <span class="time">35min ago</span></span>
                                        <span class="message">Lara added a comment in Blazing Saddles.</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="footer"> <a href="javascript:void(0);">View All</a> </li>
            </ul>
        </li>
        <li class="dropdown task"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i>
            <span class="label-count">3</span>
            </a>
            <ul class="dropdown-menu pullDown">
                <li class="header">Project</li>
                <li class="body">
                    <ul class="menu tasks list-unstyled">
                        <li>
                            <a href="javascript:void(0);">
                                <span class="text-muted">Clockwork Orange <span class="float-right">29%</span></span>
                                <div class="progress">
                                    <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="text-muted">Blazing Saddles <span class="float-right">78%</span></span>
                                <div class="progress">
                                    <div class="progress-bar l-slategray" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="text-muted">Project Archimedes <span class="float-right">45%</span></span>
                                <div class="progress">
                                    <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="text-muted">Eisenhower X <span class="float-right">68%</span></span>
                                <div class="progress">
                                    <div class="progress-bar l-coral" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="text-muted">Oreo Admin Templates <span class="float-right">21%</span></span>
                                <div class="progress">
                                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100" style="width: 21%;"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="footer"><a href="javascript:void(0);">View All</a></li>
            </ul>
        </li>
        <li class="search_bar hidden-sm-down">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-search"></i>
                </span>
            </div>
        </li>
        <li class="float-right">
            <a href="javascript:void(0);" class="fullscreen hidden-md-down hidden-sm-down" data-provide="fullscreen"><i class="zmdi zmdi-fullscreen"></i></a>
            <a href="javascript:void(0);" class="js-right-chat"><i class="zmdi zmdi-comments"></i></a>
            <a href="javascript:void(0);" class="js-right-sidebar"><i class="zmdi zmdi-settings"></i></a>
            <a href="javascript:void(0);" class="btn_overlay hidden-sm-down"><i class="zmdi zmdi-sort-amount-desc"></i></a>
            <a href="sign-in.html" class="mega-menu"><i class="zmdi zmdi-power"></i></a>
        </li>
    </ul>
</nav>
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="profile.html"><img src="assets/images/profile_av.jpg" alt="User"></a></div>
                    <div class="detail">
                        <h4>Michael</h4>
                        <p class="m-b-0">Manager</p>
                        <a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a>
                        <a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a>
                        <a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a>
                        <div class="row">
                            <div class="col-4 p-r-0">
                                <h6 class="m-b-5">852</h6>
                                <small>Sales</small>
                            </div>
                            <div class="col-4 p-l-0 p-r-0">
                                <h6 class="m-b-5">513</h6>
                                <small>Order</small>
                            </div>
                            <div class="col-4 p-l-0">
                                <h6 class="m-b-5">$34M</h6>
                                <small>Revenue</small>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="header">MAIN</li><li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                <ul class="ml-menu">
                    <li><a href="index.html">Dashboard 1</a></li>
                    <li><a href="index3.html">Dashboard 2</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-gamepad"></i><span>Layouts Format</span></a>
                <ul class="ml-menu">
                    <li><a href="dashboard-rtl.html">RTL Layouts</a></li>
                    <li><a href="index2.html">Horizontal Menu</a></li>
                    <li><a href="sidebar-sm.html">Small leftmenu</a></li>
                </ul>
            </li>
            <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>App</span></a>
                <ul class="ml-menu">
                    <li><a href="mail-inbox.html">Inbox</a></li>
                    <li><a href="chat.html">Chat</a></li>
                    <li><a href="events.html">Calendar</a></li>
                    <li><a href="file-dashboard.html">File Manager</a></li>
                    <li class="active"><a href="contact.html">Contact list</a></li>
                    <li><a href="blog-dashboard.html">Blog</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span></a>
                <ul class="ml-menu">
                    <li> <a href="ui_kit.html">UI KIT</a> </li>
                    <li> <a href="alerts.html">Alerts</a> </li>
                    <li> <a href="collapse.html">Collapse</a> </li>
                    <li> <a href="colors.html">Colors</a> </li>
                    <li> <a href="dialogs.html">Dialogs</a> </li>
                    <li> <a href="icons.html">Icons</a> </li>
                    <li> <a href="list-group.html">List Group</a> </li>
                    <li> <a href="media-object.html">Media Object</a> </li>
                    <li> <a href="modals.html">Modals</a> </li>
                    <li> <a href="notifications.html">Notifications</a></li>
                    <li> <a href="progressbars.html">Progress Bars</a></li>
                    <li> <a href="range-sliders.html">Range Sliders</a></li>
                    <li> <a href="sortable-nestable.html">Sortable & Nestable</a></li>
                    <li> <a href="tabs.html">Tabs</a></li>
                    <li> <a href="waves.html">Waves</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-widgets"></i><span>Widgets</span></a>
                <ul class="ml-menu">
                    <li><a href="widgets-app.html">Apps Widgetse</a></li>
                    <li><a href="widgets-data.html">Data Widgetse</a></li>
                </ul>
            </li>
            <li class="header">ECOMMERCE</li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-shopping-cart"></i><span>Ecommerce</span> </a>
                <ul class="ml-menu">
                    <li> <a href="ec-dashboard.html">Dashboard</a></li>
                    <li> <a href="ec-product.html">Product</a></li>
                    <li> <a href="ec-product-List.html">Product List</a></li>
                    <li> <a href="ec-product-detail.html">Product detail</a></li>
                </ul>
            </li>
            <li class="header">FORMS, CHARTS, TABLES</li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Forms</span></a>
                <ul class="ml-menu">
                    <li><a href="basic-form-elements.html">Basic Elements</a> </li>
                    <li><a href="advanced-form-elements.html">Advanced Elements</a> </li>
                    <li><a href="form-examples.html">Form Examples</a> </li>
                    <li><a href="form-validation.html">Form Validation</a> </li>
                    <li><a href="form-wizard.html">Form Wizard</a> </li>
                    <li><a href="form-editors.html">Editors</a> </li>
                    <li><a href="form-upload.html">File Upload</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Tables</span></a>
                <ul class="ml-menu">
                    <li> <a href="normal-tables.html">Normal Tables</a> </li>
                    <li> <a href="jquery-datatable.html">Jquery Datatables</a> </li>
                    <li> <a href="editable-table.html">Editable Tables</a> </li>
                    <li> <a href="footable.html">Foo Tables</a> </li>
                    <li> <a href="table-color.html">Tables Color</a> </li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-chart"></i><span>Charts</span></a>
                <ul class="ml-menu">
                    <li> <a href="morris.html">Morris</a> </li>
                    <li> <a href="flot.html">Flot</a> </li>
                    <li> <a href="chartjs.html">ChartJS</a> </li>
                    <li> <a href="sparkline.html">Sparkline</a> </li>
                    <li> <a href="jquery-knob.html">Jquery Knob</a> </li>
                </ul>
            </li>
            <li class="header">EXTRA COMPONENTS</li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-map"></i><span>Maps</span></a>
                <ul class="ml-menu">
                    <li><a href="google.html">Google Map</a></li>
                    <li><a href="yandex.html">YandexMap</a></li>
                    <li><a href="jvectormap.html">jVectorMap</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span></a>
                <ul class="ml-menu">
                    <li><a href="sign-in.html">Sign In</a></li>
                    <li><a href="sign-up.html">Sign Up</a></li>
                    <li><a href="forgot-password.html">Forgot Password</a></li>
                    <li><a href="404.html">Page 404</a></li>
                    <li><a href="500.html">Page 500</a></li>
                    <li><a href="page-offline.html">Page Offline</a></li>
                    <li><a href="locked.html">Locked Screen</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Sample Pages</span></a>
                <ul class="ml-menu">
                    <li><a href="blank.html">Blank Page</a> </li>
                    <li><a href="image-gallery.html">Image Gallery</a> </li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="invoices.html">Invoices</a></li>
                    <li><a href="search-results.html">Search Results</a></li>
                </ul>
            </li>
            <li><a href="doc.html"><i class="zmdi zmdi-circle-o text-warning"></i><span>Documentation</span></a></li>
            <li><a href="faqs.html"><i class="zmdi zmdi-circle-o text-success"></i><span>Faqs</span></a></li>
        </ul>
    </div>
</aside>
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
            <li><a href="javascript:void(0);"><img src="assets/images/xs/avatar1.jpg" class="rounded-circle" alt=""></a></li>
            <li><a href="javascript:void(0);"><img src="assets/images/xs/avatar2.jpg" class="rounded-circle" alt=""></a></li>
            <li class="active"><a href="javascript:void(0);"><img src="assets/images/xs/avatar3.jpg" class="rounded-circle" alt=""></a></li>
            <li><a href="javascript:void(0);"><img src="assets/images/xs/avatar4.jpg" class="rounded-circle" alt=""></a></li>
            <li><a href="javascript:void(0);"><img src="assets/images/xs/avatar5.jpg" class="rounded-circle" alt=""></a></li>
            <li><a href="javascript:void(0);"><img src="assets/images/xs/avatar6.jpg" class="rounded-circle" alt=""></a></li>
            <li><a href="javascript:void(0);"><img src="assets/images/xs/avatar7.jpg" class="rounded-circle" alt=""></a></li>
            <li><a href="javascript:void(0);"><img src="assets/images/xs/avatar8.jpg" class="rounded-circle" alt=""></a></li>
            <li><a href="javascript:void(0);"><img src="assets/images/xs/avatar9.jpg" class="rounded-circle" alt=""></a></li>
        </ul>
    </div>
</aside>
<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting">Setting</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity">Activity</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane slideRight active" id="setting">
            <div class="slim_scroll">
                <div class="card">
                    <h6>Skins</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple">
                            <div class="purple"></div>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                        </li>
                        <li data-theme="cyan" class="active">
                            <div class="cyan"></div>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                        </li>
                        <li data-theme="blush">
                            <div class="blush"></div>
                        </li>
                    </ul>
                </div>
                <div class="card theme-light-dark">
                    <h6>Left Menu</h6>
                    <button class="t-light btn btn-default btn-simple btn-round">Light</button>
                    <button class="t-dark btn btn-default btn-round">Dark</button>
                </div>
                <div class="card">
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <div class="checkbox">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">Report Panel Usage</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox2" type="checkbox" checked="">
                                <label for="checkbox2">Email Redirect</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox3" type="checkbox" checked="">
                                <label for="checkbox3">Notifications</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox4" type="checkbox" checked="">
                                <label for="checkbox4">Auto Updates</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox5" type="checkbox" checked="">
                                <label for="checkbox5">Offline</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox6" type="checkbox" checked="">
                                <label for="checkbox6">Location Permission</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h6>Information Summary</h6>
                    <div class="row m-b-20">
                        <div class="col-7">
                            <small class="displayblock">MEMORY USAGE</small>
                            <h5 class="m-b-0 h6">512</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#00ced1">8,7,9,5,6,4,6,8</div>
                        </div>
                    </div>
                    <div class="row m-b-20">
                        <div class="col-7">
                            <small class="displayblock">CPU USAGE</small>
                            <h5 class="m-b-0 h6">90%</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#F15F79">6,5,8,2,6,4,6,4</div>
                        </div>
                    </div>
                    <div class="row m-b-20">
                        <div class="col-7">
                            <small class="displayblock">DAILY TRAFFIC</small>
                            <h5 class="m-b-0 h6">25 142</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#78b83e">7,5,8,7,4,2,6,5</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <small class="displayblock">DISK USAGE</small>
                            <h5 class="m-b-0 h6">60.10%</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#457fca">7,5,2,5,6,7,6,4</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane slideLeft" id="activity">
            <div class="slim_scroll">
                <div class="card user_activity">
                    <h6>Recent Activity</h6>
                    <div class="streamline b-accent">
                        <div class="sl-item">
                            <img class="user rounded-circle" src="assets/images/xs/avatar4.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Admin Birthday</h5>
                                <small>Jan 21 <a href="javascript:void(0);" class="text-info">Sophia</a>.</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="assets/images/xs/avatar5.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Add New Contact</h5>
                                <small>30min ago <a href="javascript:void(0);">Alexander</a>.</small>
                                <small><strong>P:</strong> +264-625-2323</small>
                                <small><strong>E:</strong> maryamamiri@gmail.com</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="assets/images/xs/avatar6.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Code Change</h5>
                                <small>Today <a href="javascript:void(0);">Grayson</a>.</small>
                                <small>The standard chunk of Lorem Ipsum used since the 1500s is reproduced</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="assets/images/xs/avatar7.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">New Email</h5>
                                <small>45min ago <a href="javascript:void(0);" class="text-info">Fidel Tonn</a>.</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h6>Recent Attachments</h6>
                    <ul class="list-unstyled activity">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-pdf xl-slategray"></i>
                                <div class="info">
                                    <h4>info_258.pdf</h4>
                                    <small>2MB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-text xl-slategray"></i>
                                <div class="info">
                                    <h4>newdoc_214.doc</h4>
                                    <small>900KB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-image xl-slategray"></i>
                                <div class="info">
                                    <h4>MG_4145.jpg</h4>
                                    <small>5.6MB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-image xl-slategray"></i>
                                <div class="info">
                                    <h4>MG_4100.jpg</h4>
                                    <small>5MB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-text xl-slategray"></i>
                                <div class="info">
                                    <h4>Reports_end.doc</h4>
                                    <small>780KB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-videocam xl-slategray"></i>
                                <div class="info">
                                    <h4>movie2018.MKV</h4>
                                    <small>750MB</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>

<section class="content contact">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Contact
                <small>Welcome to sQuare</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> sQuare</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card action_bar bg-dark">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-1 col-md-2 col-2">
                                <div class="checkbox inlineblock delete_all">
                                    <input id="deleteall" type="checkbox">
                                    <label for="deleteall">
                                        All
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-7">
                                <div class="input-group search">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-search"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 col-3 text-right">
                                <div class="btn-group hidden-sm-down" role="group">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="zmdi zmdi-label"></i>
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right pullDown">
                                            <li>
                                                <a href="javascript:void(0);">Family</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Work</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Google</a>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                            <li>
                                                <a href="javascript:void(0);">Create a Label</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-neutral hidden-sm-down">
                                    <i class="zmdi zmdi-plus-circle"></i>
                                </button>
                                <button type="button" class="btn btn-neutral hidden-sm-down">
                                    <i class="zmdi zmdi-archive"></i>
                                </button>
                                <button type="button" class="btn btn-neutral">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body table-responsive">
                        <table class="table table-hover m-b-0 c_list">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th data-breakpoints="xs">Phone</th>
                                    <th data-breakpoints="xs sm md">Address</th>
                                    <th data-breakpoints="xs">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input id="delete_2" type="checkbox">
                                            <label for="delete_2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="assets/images/xs/avatar1.jpg" class="rounded-circle avatar" alt="">
                                        <p class="c_name">John Smith <span class="badge badge-default m-l-10 hidden-sm-down">Family</span></p>
                                    </td>
                                    <td>
                                        <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-2583</span>
                                    </td>
                                    <td>
                                        <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                    </td>
                                    <td>
                                        <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                        <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input id="delete_3" type="checkbox">
                                            <label for="delete_3">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="assets/images/xs/avatar3.jpg" class="rounded-circle avatar" alt="">
                                        <p class="c_name">Hossein Shams <span class="badge badge-info m-l-10 hidden-sm-down">Google</span></p>
                                    </td>
                                    <td>
                                        <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-5689</span>
                                    </td>
                                    <td>
                                        <address><i class="zmdi zmdi-pin"></i>44 Shirley Ave. West Chicago, IL 60185</address>
                                    </td>
                                    <td>
                                        <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                        <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input id="delete_4" type="checkbox">
                                            <label for="delete_4">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="assets/images/xs/avatar4.jpg" class="rounded-circle avatar" alt="">
                                        <p class="c_name">Maryam Amiri</p>
                                    </td>
                                    <td>
                                        <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-9513</span>
                                    </td>
                                    <td>
                                        <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                    </td>
                                    <td>
                                        <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                        <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input id="delete_5" type="checkbox">
                                            <label for="delete_5">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="assets/images/xs/avatar6.jpg" class="rounded-circle avatar" alt="">
                                        <p class="c_name">Tim Hank<span class="badge badge-default m-l-10 hidden-sm-down">Family</span></p>
                                    </td>
                                    <td>
                                        <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-1212</span>
                                    </td>
                                    <td>
                                        <address><i class="zmdi zmdi-pin"></i>70 Bowman St. South Windsor, CT 06074</address>
                                    </td>
                                    <td>
                                        <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                        <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input id="delete_6" type="checkbox">
                                            <label for="delete_6">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="assets/images/xs/avatar7.jpg" class="rounded-circle avatar" alt="">
                                        <p class="c_name">Fidel Tonn<span class="badge badge-default m-l-10 hidden-sm-down">Family</span></p>
                                    </td>
                                    <td>
                                        <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-2323</span>
                                    </td>
                                    <td>
                                        <address><i class="zmdi zmdi-pin"></i>514 S. Magnolia St. Orlando, FL 32806</address>
                                    </td>
                                    <td>
                                        <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                        <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input id="delete_7" type="checkbox">
                                            <label for="delete_7">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="assets/images/xs/avatar8.jpg" class="rounded-circle avatar" alt="">
                                        <p class="c_name">Gary Camara<span class="badge badge-success m-l-10 hidden-sm-down">Work</span></p>
                                    </td>
                                    <td>
                                        <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-1005</span>
                                    </td>
                                    <td>
                                        <address><i class="zmdi zmdi-pin"></i>44 Shirley Ave. West Chicago, IL 60185</address>
                                    </td>
                                    <td>
                                        <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                        <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input id="delete_8" type="checkbox">
                                            <label for="delete_8">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="assets/images/xs/avatar9.jpg" class="rounded-circle avatar" alt="">
                                        <p class="c_name">Frank Camly</p>
                                    </td>
                                    <td>
                                        <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-9999</span>
                                    </td>
                                    <td>
                                        <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                    </td>
                                    <td>
                                        <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                        <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <input id="delete_9" type="checkbox">
                                            <label for="delete_9">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="assets/images/xs/avatar10.jpg" class="rounded-circle avatar" alt="">
                                        <p class="c_name">Tim Hank<span class="badge badge-default m-l-10 hidden-sm-down">Family</span></p>
                                    </td>
                                    <td>
                                        <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-1212</span>
                                    </td>
                                    <td>
                                        <address><i class="zmdi zmdi-pin"></i>70 Bowman St. South Windsor, CT 06074</address>
                                    </td>
                                    <td>
                                        <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                        <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <ul class="pagination pagination-primary m-b-0">
                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/footable.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/tables/footable.js"></script><!-- Custom Js -->
</body>
</html>
