<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('admin')}}/index3.html" class="brand-link">
        <img src="{{asset('admin')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">E-FOOD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admin')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{url('/')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header">POS SYSTEM</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-shopping-bag"> </i>
                        <p>
                             POS
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('admin')}}/index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>POS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('admin')}}/index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Orders</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">ORDER SECTION</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-cart-arrow-down"></i>
                        <p>
                            Order

                            <i class="right fas fa-angle-left"></i>
                            <span class="badge badge-info right">12</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('admin')}}/index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('admin')}}/index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pending</p>
                                <span class="badge badge-info right">12</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('admin')}}/index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Confirmed</p>
                                <span class="badge badge-info right">6</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('admin')}}/index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Processing</p>
                                <span class="badge badge-info right">2</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('admin')}}/index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Out for delivery</p>
                                <span class="badge badge-info right">5</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('admin')}}/index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Delivered</p>
                                <span class="badge badge-info right">7</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('admin')}}/index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Returned</p>
                                <span class="badge badge-info right"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('admin')}}/index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Failed</p>
                                <span class="badge badge-info right"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('admin')}}/index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Canceled</p>
                                <span class="badge badge-info right">2</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('admin')}}/index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Scheduled</p>
                                <span class="badge badge-info right"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">PRODUCT SECTION</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-shopping-bag"> </i>
                        <p>
                            Banner
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('add-banner')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('banner')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-shopping-bag"> </i>
                        <p>
                            Category
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/category')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/sub-category')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub Category</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Attribute
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('/attribute')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Attribute</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('attribute-value')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Attribute Value</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{url('/addon')}}" class="nav-link">
                        <i class="fas fa-plus-circle"></i>
                        <p>
                            Addon
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-shopping-cart"></i>
                        <p>
                            Product
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('add-product')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add new</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('admin')}}/index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('admin')}}/index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bulk Import</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('admin')}}/index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bulk Export</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">BUSINESS SECTION</li>
                <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                        <i class="fas fa-envelope-square"></i>
                        <p>
                            Messages
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                        <i class="fas fa-star"></i>
                        <p>
                            Product Reviews
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                        <i class="fas fa-bell-slash"></i>
                        <p>
                            Send Notifications
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../widgets.html" class="nav-link">
                        <i class="fas fa-gift"></i>
                        <p>
                            Coupon
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-cogs"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Terms & Condition</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../layout/top-nav-sidebar.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Privacy Policy</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../layout/boxed.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Payment Method</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../layout/fixed-sidebar.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About Us</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-header">CUSTOMER SECTION</li>
                <li class="nav-item">
                    <a href="../layout/fixed-sidebar.html" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p>Customer list</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../layout/fixed-sidebar.html" class="nav-link">
                        <i class="fas fa-dollar-sign"></i>
                        <p>Transaction History</p>
                    </a>
                </li>
                <li class="nav-header">REPORTS & ANALYTICS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-file-alt"></i>
                        <p>
                            REPORTS
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../charts/chartjs.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Earning Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../charts/flot.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Order Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../charts/inline.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../charts/uplot.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sale Report</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
