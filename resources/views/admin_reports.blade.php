<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin Panel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL::to('/'); ?>/public/assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="<?php echo URL::to('/'); ?>/public/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">
<style>
 #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link i {
        color: #2400ff !important;
    }

        #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link {
        color: #2400ff !important;
    }


    .topbar{
        background: #2f3356 !important;
    }

    li {
        list-style: none;
        font-size: 16px;
    }
    .fa {
        margin-left: 0px !important;
    }

    body {
        background-color: whitesmoke !important;
    }

    .col-md-4.mx-4 {
        margin-top: 15px !important;
        background: white !important;
        width: 35% !important;
    }

    .col-sm-4 {
        text-align: center !important;
    }

    img.report {
        width: 80px !important;
        height: 80px !important;
    }

    .footer {
        text-align: center !important;
    }

    .card {
         background: whitesmoke;
    }
</style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a href="<?php echo URL::to('/'); ?>/index" class="navbar-brand ms-4">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo URL::to('/'); ?>/public/assets/images/logo-light-icon.png" alt="homepage" class="dark-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <!-- <img src="<?php echo URL::to('/'); ?>/public/assets/images/logo-light-text.png" alt="homepage" class="dark-logo" /> -->

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white " href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <li class="nav-item search-box">
                            <a class="nav-link text-muted" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search" style="display: none;">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a href="<?php echo URL::to('/'); ?>/admin_login" class="nav-link dropdown-toggle text-muted waves-effect waves-dark" >
                                <!-- <img src="<?php echo URL::to('/'); ?>/public/assets/images/users/1.jpg" alt="user" class="profile-pic me-2"> -->
                                {{session('name')}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a href="<?php echo URL::to('/'); ?>/index" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a href="<?php echo URL::to('/'); ?>/profile_page" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                                <i class="mdi me-2 mdi-account-check"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        <li class="sidebar-item"> <a href="<?php echo URL::to('/'); ?>/users" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span class="hide-menu">Supervisor</span></a></li>
                        
                        <!-- <li class="sidebar-item"> <a href="<?php echo URL::to('/'); ?>/admin_reports" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="f5d8 mdi-animation"></i><span class="hide-menu">Reports</span></a></li> -->
                        <!-- <li class="sidebar-item"> <a href="<?php echo URL::to('/'); ?>/icon_materiale" class="sidebar-link waves-effect waves-dark sidebar-link"
                                 aria-expanded="false"><i
                                    class="mdi me-2 mdi-emoticon"></i><span class="hide-menu">Icon</span></a></li>
                        <li class="sidebar-item"> <a href="<?php echo URL::to('/'); ?>/google_map" class="sidebar-link waves-effect waves-dark sidebar-link"
                                 aria-expanded="false"><i class="mdi me-2 mdi-earth"></i><span
                                    class="hide-menu">Google Map</span></a></li>
                        <li class="sidebar-item"> <a href="<?php echo URL::to('/'); ?>/blank" class="sidebar-link waves-effect waves-dark sidebar-link"
                                 aria-expanded="false"><i
                                    class="mdi me-2 mdi-book-open-variant"></i><span class="hide-menu">Blank</span></a>
                        </li>
                        <li class="sidebar-item"> <a href="<?php echo URL::to('/'); ?>/error" class="sidebar-link waves-effect waves-dark sidebar-link"
                                 aria-expanded="false"><i class="mdi me-2 mdi-help-circle"></i><span
                                    class="hide-menu">Error 404</span></a>
                        </li> -->

                        <!-- <li class="sidebar-item"> <a href="<?php echo URL::to('/'); ?>/user_list" class="sidebar-link waves-effect waves-dark sidebar-link"
                                 aria-expanded="false"><i class="mdi me-2 mdi-help-circle"></i><span
                                    class="hide-menu">Supervisor</span></a>
                        </li> -->

                        <!-- <li class="text-center p-20 upgrade-btn">
                            <a href="https://www.wrappixel.com/templates/materialpro/"
                                class="btn btn-warning text-white mt-4" target="_blank">Upgrade to
                                Pro</a>
                        </li> -->
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <div class="sidebar-footer">
                <div class="row">
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="ti-settings"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="mdi mdi-gmail"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="mdi mdi-power"></i></a>
                    </div>
                </div>
            </div>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Admin </h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Reports</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <form action="{{ route('add.user') }}" method="POST">
                            @csrf
                            <div class="text-end">
                                <!-- <button type="button" class="btn d-flex btn-danger d-none d-md-inline-block text-white" data-bs-toggle="modal" data-bs-target="#Report">
                                    Add Supervisor
                                </button> -->
                                <div class="modal fade" id="Report" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="Report_user">Add Supervisor
                                                    </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>                        
                                                <div class="modal-body">                                                  
                                                        <div class="col-md-12">
                                                            <div class="mb-3 row">
                                                                <label for="input" class="col-sm-2 col-form-label">Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="name">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="email">
                                                                </div>
                                                            </div>

                                                            <div class="mb-3 row">
                                                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                                                <div class="col-sm-10">
                                                                    <input type="password" class="form-control" name="password">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="email" class="col-sm-2 col-form-label">Phone</label>
                                                                <div class="col-sm-10">
                                                                    <input type="tel" class="form-control" name="phone">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="input" class="col-sm-2 col-form-label">Address</label>
                                                                <div class="col-sm-10">
                                                                    <textarea type="text" class="form-control" rows="3" name="address"></textarea>
                                                                </div>
                                                            </div>                                                                       
                                                                <input type="hidden" name="status" value="supervisor"></input>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <button>Submit</button>
                                                                    </div>
                                                                    <div class="col"></div>
                                                                </div>

                                                              
                                                            
                                                            <div class="mb-3 row">
                                                                <label for="input" class="col-sm-2 col-form-label">Status</label>
                                                                <input type="hidden" class="form-control" name="status" value="supervisor">
                                                                <div class="col-sm-10">
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected>status</option>
                                                                        <option value="1">Admin</option>
                                                                        <option value="2">user</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2"></div>
                                                    </form>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                                                        <button type="submit" class="btn btn-primary btn1">Submit</button>
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                
                <!-- column -->
                <div class="col-sm-12 ">
                    <div class="card">
                        <div class="card-body">
                        <form action="{{ URL('/') }}" method="POST" class="row">
                                @csrf
                                <div class="col-md-4"></div>
                                <div class="col-md-4 mx-4 ">
                                    <div class="mb-0 row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4 mb-3 mt-0">
                                            <img class="report" src="<?php echo URL::to('/'); ?>/public/assets/images/report.jpg" />
                                        </div>
                                        <h4 class="text-center">Report</h4>

                                        <div class="col-sm-4"></div>
                                    </div>
                                    <div class="p-3">
                                        <div class="mb-3 row">
                                            <label for="name" class="col-sm- col-form-label">Name</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="input" name="name">
                                            </div>
                                        </div>
                                        <!-- <div class="mb-3 row">
                                            <label for="email" class="col-sm- col-form-label">Email</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="input" name="email">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="password" class="col-sm- col-form-label">Password</label>
                                            <div class="col-sm-12">
                                                <input type="password" class="form-control" id="input" name="password">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="phone" class="col-sm- col-form-label">Emergency Contact</label>
                                            <div class="col-sm-12">
                                                <input type="number" class="form-control" id="input" name="phone">
                                            </div>
                                        </div> -->
                                        <div class="mb-3 row">
                                            <label for="title" class="col-sm- col-form-label">Title</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="input" name="title">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="address" class="col-sm- form-label">Description</label>
                                            <textarea class="form-control" id="address" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name"class="col-form-label">Report Time</label>
                                            <input type="time" class="form-control" id="validationCustom01"  name="timestamp" required>
                                        </div>
                                        <!-- <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                        </div> -->
                                        <div class="d-grid gap-2 col-6 mx-auto mb-3">
                                            <button href="" type="submit" class="btn btn-primary">Submit Report</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </form>
                            <!-- <h4 class="card-title">Supervisor List</h4> -->
                            <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                            <!-- <div class="table-responsive"> -->
                                <!-- <table class="table user-table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Password</th>
                                            <th class="border-top-0">Phone</th>
                                            <th class="border-top-0">Address</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>           
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>                                  
                                        </tr>      
                                    </tbody>
                                </table> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer"> © 2021 Material Pro Admin by <a href="https://www.wrappixel.com/">wrappixel.com</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo URL::to('/'); ?>/public/assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo URL::to('/'); ?>/public/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo URL::to('/'); ?>/public/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo URL::to('/'); ?>/public/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo URL::to('/'); ?>/public/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo URL::to('/'); ?>/public/js/custom.js"></script>
   
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
  @if(Session::has('message'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
        toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
        toastr.error("{{ session('error') }}");
  @endif
</script>
</body>

</html>