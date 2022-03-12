<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from myrathemes.com/delexa/layouts/blue-vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Mar 2022 06:52:48 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Delexa - Material Design Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <!-- LOGO -->
                <div class="navbar-brand-box d-flex align-items-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="assets/images/logo-light.png" alt="" height="18">
                        </span>
                        <i>
                            <img src="assets/images/logo-small.png" alt="" height="24">
                        </i>
                    </a>

                    <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect waves-light" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </div>

                <div class="d-flex align-items-center">

                    <div class="dropdown d-none d-sm-inline-block ml-2">
                        <button type="button" class="btn header-item noti-icon waves-effect waves-light" id="page-header-search-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-search-dropdown">
                            
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                  
<!-- 
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect waves-light" id="page-header-notifications-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-bell"></i>
                            <span class="badge badge-danger badge-pill">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Notifications </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small"> View All</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="#" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="assets/images/users/avatar-2.jpg"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Samuel Coverdale</h6>
                                            <p class="font-size-12 mb-1">You have new follower on Instagram</p>
                                            <p class="font-size-12 mb-0 text-muted"><i class="mdi mdi-clock-outline"></i> 2 min ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-success rounded-circle">
                                                <i class="mdi mdi-cloud-download-outline"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Download Available !</h6>
                                            <p class="font-size-12 mb-1">Latest version of admin is now available. Please download here.</p>
                                            <p class="font-size-12 mb-0 text-muted"><i class="mdi mdi-clock-outline"></i> 4 hours ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="assets/images/users/avatar-3.jpg"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Victoria Mendis</h6>
                                            <p class="font-size-12 mb-1">Just upgraded to premium account.</p>
                                            <p class="font-size-12 mb-0 text-muted"><i class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top">
                                <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-down-circle mr-1"></i> Load More..
                                </a>
                            </div>
                        </div>
                    </div> -->

                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn header-item waves-effect waves-light" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                alt="Header Avatar">
                            <span class="d-none d-sm-inline-block ml-1">Henry</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Inbox</span>
                                <span>
                                    <span class="badge badge-pill badge-info">3</span>
                                </span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Profile</span>
                                <span>
                                    <span class="badge badge-pill badge-warning">1</span>
                                </span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                Settings
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Lock Account</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="index.html" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span class="badge badge-pill badge-info float-right">3</span><span>Dashboard</span></a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="mdi mdi-book-open-page-variant"></i><span>Products</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ url('product') }}">Create Product</a></li>
                                <li><a href="{{ url('product') }}">Manage Product</a></li>
                                <!-- <li><a href="pages-invoice.html">Invoice</a></li>
                                <li><a href="pages-starter.html">Starter Page</a></li>
                                <li><a href="pages-maintenance.html">Maintenance</a></li>
                                <li><a href="pages-faqs.html">FAQs</a></li>
                                <li><a href="pages-pricing.html">Pricing</a></li>
                                <li><a href="pages-team.html">Team</a></li>
                                <li><a href="pages-login.html">Login</a></li>
                                <li><a href="pages-register.html">Register</a></li>
                                <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                <li><a href="pages-404.html">Error 404</a></li>
                                <li><a href="pages-500.html">Error 500</a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="mdi mdi-book-open-page-variant"></i><span>Category</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ url('category') }}">Create Category</a></li>
                                <li><a href="{{ url('/category') }}">Manage Category</a></li>
                                </ul>
                        </li>
                  
                          

                        <!-- <li>
                            <a href="javascript: void(0);" class="waves-effect"><i class="mdi mdi-format-page-break"></i><span class="badge badge-pill badge-danger float-right">6</span><span>Forms</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="forms-elements.html">Elements</a></li>
                                <li><a href="forms-plugins.html">Plugins</a></li>
                                <li><a href="forms-validation.html">Validation</a></li>
                                <li><a href="forms-mask.html">Masks</a></li>
                                <li><a href="forms-quilljs.html">Quilljs</a></li>
                                <li><a href="forms-uploads.html">File Uploads</a></li>
                            </ul>
                        </li> -->

                        <!-- <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="mdi mdi-table-merge-cells"></i><span>Tables</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatables.html">Data Tables</a></li>
                            </ul>
                        </li> -->

                        <!-- <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="mdi mdi-chart-donut"></i><span>Charts</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="charts-morris.html">Morris</a></li>
                                <li><a href="charts-google.html">Google</a></li>
                                <li><a href="charts-chartjs.html">Chartjs</a></li>
                                <li><a href="charts-sparkline.html">Sparkline</a></li>
                                <li><a href="charts-knob.html">Jquery Knob</a></li>
                            </ul>
                        </li> -->

                        <!-- <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="mdi mdi-black-mesa"></i><span>Icons</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="icons-feather.html">Feather Icons</a></li>
                                <li><a href="icons-materialdesign.html">Material Design</a></li>
                                <li><a href="icons-dripicons.html">Dripicons</a></li>
                                <li><a href="icons-fontawesome.html">Font awesome</a></li>
                            </ul>
                        </li> -->

                        <!-- <li class="menu-title">More</li> -->

                        <!-- <li><a href="calendar.html" class=" waves-effect"><i class="mdi mdi-calendar"></i><span>Calendar</span></a></li> -->

                        <!-- <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="mdi mdi-map-marker-multiple"></i><span>Maps</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="maps-google.html">Google Maps</a></li>
                                <li><a href="maps-vector.html">Vector Maps</a></li>
                            </ul>
                        </li> -->

                        <!-- <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="mdi mdi-share-variant"></i><span>Multi Level</span></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">Level 1.1</a></li>
                                <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="javascript: void(0);">Level 2.1</a></li>
                                        <li><a href="javascript: void(0);">Level 2.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Delexa</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                
                            </div>
                        </div>
                    </div>     
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-primary float-right">Daily</span>
                                        <h5 class="card-title mb-0">Cost per Unit</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                $17.21
                                            </h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="text-muted">12.5% <i class="mdi mdi-arrow-up text-primary"></i></span>
                                        </div>
                                    </div>

                                    <div class="progress shadow-sm" style="height: 7px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 57%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-primary float-right">Per Week</span>
                                        <h5 class="card-title mb-0">Market Revenue</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                $1875.54
                                            </h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="text-muted">18.71% <i class="mdi mdi-arrow-down text-danger"></i></span>
                                        </div>
                                    </div>

                                    <div class="progress shadow-sm" style="height: 7px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 57%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-primary float-right">Per Month</span>
                                        <h5 class="card-title mb-0">Expenses</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                $784.62
                                            </h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="text-muted">57% <i class="mdi mdi-arrow-up text-primary"></i></span>
                                        </div>
                                    </div>

                                    <div class="progress shadow-sm" style="height: 7px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 57%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-primary float-right">All Time</span>
                                        <h5 class="card-title mb-0">Daily Visits</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                1,15,187
                                            </h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span class="text-muted">17.8% <i class="mdi mdi-arrow-down text-danger"></i></span>
                                        </div>
                                    </div>

                                    <div class="progress shadow-sm" style="height: 7px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 57%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-right position-relative">
                                        <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#" class="dropdown-item">Action</a></li>
                                            <li><a href="#" class="dropdown-item">Another action</a></li>
                                            <li><a href="#" class="dropdown-item">Something else here</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a href="#" class="dropdown-item">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="card-title d-inline-block">Daily Sales</h4>

                                    <div id="morris-donut-example" class="morris-chart" style="height: 260px;"></div>

                                    <div class="row text-center mt-4">
                                        <div class="col-6">
                                            <h4>5,459</h4>
                                            <p class="text-muted mb-0">Total Sales</p>
                                        </div>
                                        <div class="col-6">
                                            <h4>18</h4>
                                            <p class="text-muted mb-0">Open Compaign</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-right position-relative">
                                        <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#" class="dropdown-item">Action</a></li>
                                            <li><a href="#" class="dropdown-item">Another action</a></li>
                                            <li><a href="#" class="dropdown-item">Something else here</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a href="#" class="dropdown-item">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="card-title d-inline-block">Statistics</h4>

                                    <div id="morris-bar-example" class="morris-chart" style="height: 260px;"></div>

                                    <div class="row text-center mt-4">
                                        <div class="col-6">
                                            <h4>$1875.54</h4>
                                            <p class="text-muted mb-0">Revenue</p>
                                        </div>
                                        <div class="col-6">
                                            <h4>541</h4>
                                            <p class="text-muted mb-0">Total Offers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-right position-relative">
                                        <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#" class="dropdown-item">Action</a></li>
                                            <li><a href="#" class="dropdown-item">Another action</a></li>
                                            <li><a href="#" class="dropdown-item">Something else here</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a href="#" class="dropdown-item">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="card-title d-inline-block">Total Revenue</h4>

                                    <div id="morris-line-example" class="morris-chart" style="height: 260px;"></div>

                                    <div class="row text-center mt-4">
                                        <div class="col-6">
                                            <h4>$7841.12</h4>
                                            <p class="text-muted mb-0">Total Revenue</p>
                                        </div>
                                        <div class="col-6">
                                            <h4>17</h4>
                                            <p class="text-muted mb-0">Open Compaign</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->
                    

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                    
                                    <h4 class="card-title">Recent Customers</h4>
                                    <p class="card-subtitle mb-4 font-size-13">Transaction period from 21 July to 25 Aug</p>
                                    
                                    <div class="table-responsive">
                                        <table class="table table-centered table-striped table-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Customer</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Location</th>
                                                    <th>Create Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="table-user" class="mr-2 avatar-xs rounded-circle">
                                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">Paul J. Friend</a>
                                                    </td>
                                                    <td>
                                                        937-330-1634
                                                    </td>
                                                    <td>
                                                        pauljfrnd@jourrapide.com
                                                    </td>
                                                    <td>
                                                        New York
                                                    </td>
                                                    <td>
                                                        07/07/2018
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-3.jpg" alt="table-user" class="mr-2 avatar-xs rounded-circle">
                                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">Bryan J. Luellen</a>
                                                    </td>
                                                    <td>
                                                        215-302-3376
                                                    </td>
                                                    <td>
                                                        bryuellen@dayrep.com
                                                    </td>
                                                    <td>
                                                        New York
                                                    </td>
                                                    <td>
                                                        09/12/2018
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-8.jpg" alt="table-user" class="mr-2 avatar-xs rounded-circle">
                                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">Kathryn S. Collier</a>
                                                    </td>
                                                    <td>
                                                        828-216-2190
                                                    </td>
                                                    <td>
                                                        collier@jourrapide.com
                                                    </td>
                                                    <td>
                                                        Canada
                                                    </td>
                                                    <td>
                                                        06/30/2018
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="table-user" class="mr-2 avatar-xs rounded-circle">
                                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">Timothy Kauper</a>
                                                    </td>
                                                    <td>
                                                        (216) 75 612 706
                                                    </td>
                                                    <td>
                                                        thykauper@rhyta.com
                                                    </td>
                                                    <td>
                                                        Denmark
                                                    </td>
                                                    <td>
                                                        09/08/2018
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="table-user" class="mr-2 avatar-xs rounded-circle">
                                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">Zara Raws</a>
                                                    </td>
                                                    <td>
                                                        (02) 75 150 655
                                                    </td>
                                                    <td>
                                                        austin@dayrep.com
                                                    </td>
                                                    <td>
                                                        Germany
                                                    </td>
                                                    <td>
                                                        07/15/2018
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                        
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                    
                                    <h4 class="card-title">Account Transactions</h4>
                                    <p class="card-subtitle mb-4 font-size-13">Transaction period from 21 July to 25 Aug</p>
                                    
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-hover table-centered table-nowrap mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">4257 **** **** 7852</h5>
                                                        <span class="text-muted font-size-12">11 April 2019</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">$79.49</h5>
                                                        <span class="text-muted font-size-12">Amount</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-17 mb-1 font-weight-normal"><i class="fab fa-cc-visa"></i></h5>
                                                        <span class="text-muted font-size-12">Card</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">Helen Warren</h5>
                                                        <span class="text-muted font-size-12">Pay</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">4265 **** **** 0025</h5>
                                                        <span class="text-muted font-size-12">28 Jan 2019</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">$1254.00</h5>
                                                        <span class="text-muted font-size-12">Amount</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-17 mb-1 font-weight-normal"><i class="fab fa-cc-stripe"></i></h5>
                                                        <span class="text-muted font-size-12">Card</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">Kayla Lambie</h5>
                                                        <span class="text-muted font-size-12">Pay</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">5570 **** **** 8547</h5>
                                                        <span class="text-muted font-size-12">08 Dec 2018</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">$784.25</h5>
                                                        <span class="text-muted font-size-12">Amount</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-17 mb-1 font-weight-normal"><i class="fab fa-cc-amazon-pay"></i></h5>
                                                        <span class="text-muted font-size-12">Card</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">Hugo Lavarack</h5>
                                                        <span class="text-muted font-size-12">Pay</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">7845 **** **** 5214</h5>
                                                        <span class="text-muted font-size-12">03 Dec 2018</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">$485.24</h5>
                                                        <span class="text-muted font-size-12">Amount</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-17 mb-1 font-weight-normal"><i class="fab fa-cc-visa"></i></h5>
                                                        <span class="text-muted font-size-12">Card</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">Amber Scurry</h5>
                                                        <span class="text-muted font-size-12">Pay</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">4257 **** **** 7852</h5>
                                                        <span class="text-muted font-size-12">12 Nov 2018</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">$8964.04</h5>
                                                        <span class="text-muted font-size-12">Amount</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-17 mb-1 font-weight-normal"><i class="fab fa-cc-visa"></i></h5>
                                                        <span class="text-muted font-size-12">Card</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15 mb-1 font-weight-normal">Caitlyn Gibney</h5>
                                                        <span class="text-muted font-size-12">Pay</span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2019 © Delexa.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Design & Develop by Myra
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/simplebar.min.js"></script>

    <!-- Morris Js-->
    <script src="../plugins/morris-js/morris.min.js"></script>
    <!-- Raphael Js-->
    <script src="../plugins/raphael/raphael.min.js"></script>

    <!-- Morris Custom Js-->
    <script src="assets/pages/dashboard-demo.js"></script>

    <!-- App js -->
    <script src="assets/js/theme.js"></script>

</body>


<!-- Mirrored from myrathemes.com/delexa/layouts/blue-vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Mar 2022 06:53:05 GMT -->
</html>