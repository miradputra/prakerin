<aside id="leftsidebar" class="sidebar">
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info">
                        <div class = user-info m-b-20>
                            @php
                            if (Auth::user()->avatar && file_exists(public_path(). '/backend/template/assets/images/user/'. Auth::user()->avatar )){
                                $img = asset('/backend/template/assets/images/user/' . Auth::user()->avatar);
                            }
                            else{
                                $img = asset('/backend/template/assets/images/user/admin.jpeg' );
                            }
                            @endphp
                        </div>
                    <div class="image" ><img src="{{ $img }}" alt=""></div>
                        <div class="detail">
                        <h4>{{Auth::user()->name}}</h4>
                            <p class="m-b-0"></p>
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
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-gamepad"></i><span>Layouts Format</span></a>
                    <ul class="ml-menu">
                        <li><a href="users">Users</a></li>
                        <li><a href="role">Role</a></li>
                        <li><a href="users/role-permission">Role Permission</a></li>
                        <li><a href="category">Category</a></li>
                        <li><a href="item">Item</a></li>
                        <li><a href="promo">Promo</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>App</span></a>
                    <ul class="ml-menu">
                        <li><a href="mail-inbox.html">Inbox</a></li>
                        <li><a href="chat.html">Chat</a></li>
                        <li><a href="events.html">Calendar</a></li>
                        <li><a href="file-dashboard.html">File Manager</a></li>
                        <li><a href="contact.html">Contact list</a></li>
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
                <li class="sm_menu_btm"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span></a>
                    <ul class="ml-menu">
                        <li><a href="sign-in.blade.php">Sign In</a></li>
                        <li><a href="sign-up.blade.php">Sign Up</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                        <li><a href="404.html">Page 404</a></li>
                        <li><a href="500.html">Page 500</a></li>
                        <li><a href="page-offline.html">Page Offline</a></li>
                        <li><a href="locked.html">Locked Screen</a></li>
                    </ul>
                </li>
                <li class="sm_menu_btm"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Sample Pages</span></a>
                    <ul class="ml-menu">
                        <li><a href="blank.html">Blank Page</a> </li>
                        <li><a href="image-gallery.html">Image Gallery</a> </li>
                        <li><a href="profile">Profile</a></li>
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
