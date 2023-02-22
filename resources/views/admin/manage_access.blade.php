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
    <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL::to('/'); ?>/public/assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="<?php echo URL::to('/'); ?>/public/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="<?php echo URL::to('/'); ?>/public/js/popper.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <style>
 .topbar .top-navbar .navbar-nav>.nav-item .nav-link{
    font-size: medium !important;
 }

    #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link i {
        color: #2400ff !important;
    }

        #main-wrapper[data-layout=vertical] .left-sidebar[data-sidebarbg=skin6] .sidebar-nav ul .sidebar-item .sidebar-link {
        color: #2400ff !important;
    }

        .topbar{
            background: #2f3356 !important;
       }

        body {
            background-color: whitesmoke !important;
        }
        
        .manage_control {
            background: white !important;
            width: 100% !important;
        }

        .col-sm-4 {
            text-align: center !important;
        }
        
        .dropdown .btn-group {
            width: 100%;
        }

        img.manage {
            width: 100px !important;
            height: 100px !important;
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
                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white "
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
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
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-muted " href=""><i class=""></i>Phone: 9876543210</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-muted" href=""><i class=""></i>Email: rohit@gmail.com</a>
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
                          <a href="<?php echo URL::to('/'); ?>/admin_login" class=" nav-link dropdown-toggle text-muted waves-effect waves-dark">
                                <!-- <img src="../assets/images/users/1.jpg" alt="user" class="profile-pic me-2"> -->
                                 {{session('data')['name']}} 
                            </a>
                            <a href="" class="nav-link dropdown-toggle text-muted waves-effect waves-dark ">Logout</a>
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
        @include('admin.sidebar')
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
                        <h3 class="page-title mb-0 p-0">Manage  Access</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Manage</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">

                        <div class="row">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6">

                            </div>

                        </div>

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
                    <div class="card ">
                        <div class="card-body  ">

                            <form action="{{ URL('/deny_access') }}" method="POST" class="row ">
                                @csrf
                                <div class="col-md-4"></div>

                                <div class="col-md-4 mb-3 mx-5">
                                    <div class="manage_control  ">
                                        <div class="mb-0 row">
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-4 mb-3 mt-4">
                                                <img class="manage" src="<?php echo URL::to('/'); ?>/public/assets/images/manage2.jpg" />
                                            </div>
                                            <h4 class="text-center">Manage Control</h4>
                                            <div class="col-sm-4"></div>
                                        </div>
                                        <div class="p-3">

                                            <div class="mb-3 row">
                                                <label for="name" class="col-sm- col-form-label"><h6>Select Supervisor</h6></label>
                                                <div class="dropdown col-sm-12">
                                                <select class="form-select"  name="user_id" aria-label="Default select example">
                                                @foreach($users as $user)
                                                    <option selected value="{{$user['id']}}">{{$user['name']}}</option>
                                                @endforeach
                                                </select>
                                                    <!-- <input type="text" class="form-control" id="input" name="name" value=""> -->
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="name" class="col-sm- col-form-label"><h6>Select Locations</h6></label>
                                                <div class="dropdown col-sm-12">
                                                <select id="multiple-checkboxes" class="form-control"  name="location_id[]" multiple="multiple">
                                                   @foreach($locations as $location)
                                                <option value="{{$location['id']}}">{{$location['location_name']}}</option>
                                               
                                                 @endforeach
                                               
                                            </select>
                                                <!-- <select id="multiple-checkboxes" class="form-control" multiple="multiple">
                                                    <option value="php">PHP</option>
                                                    <option value="javascript">JavaScript</option>
                                                    <option value="java">Java</option>
                                                    <option value="sql">SQL</option>
                                                    <option value="jquery">Jquery</option>
                                                    <option value=".net">.Net</option>
                                                </select> -->
                                                    <!-- <input type="text" class="form-control" id="input" name="name" value=""> -->
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="email" class="col-sm- col-form-label"><h6>Site Access</h6></label>
                                                <div class="col-sm-12">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" name="site_access"   type="checkbox" id="flexSwitchCheckDefault">
                                                <!-- <label class="form-check-label" for="flexSwitchCheckDefault">YES/NO</label> -->
                                                </div>
                                                <!-- <input type="text" class="form-control" value="" name="email"> -->

                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="email" class="col-sm- col-form-label"><h6>Create Other Account</h6></label>
                                                <div class="col-sm-12">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input"  name="create_account"   type="checkbox" id="flexSwitchCheckDefault">
                                                    <!-- <label class="form-check-label" for="flexSwitchCheckDefault">YES/NO</label> -->
                                                </div>
                                                    <!-- <input type="text" class="form-control" value="" name="email"> -->
                                                </div>
                                            </div>
                                            <div class="d-grid gap-2 col-6 mx-auto mb-3">
                                                <button type="submit" class="btn btn-primary">Update Manage</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </form>
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
    <script src="<?php echo URL::to('/'); ?>/public/js/jquery.min.js"></script>
    <!-- <script src="<?php echo URL::to('/'); ?>/public/assets/plugins/jquery/dist/jquery.min.js"></script> -->
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo URL::to('/'); ?>/public/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo URL::to('/'); ?>/public/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo URL::to('/'); ?>/public/js/bootstrap-multiselect.js"></script>
    
    <script src="<?php echo URL::to('/'); ?>/public/js/main.js"></script>
    <script src="<?php echo URL::to('/'); ?>/public/js/bootstrap.min.js"></script>
    <script src="<?php echo URL::to('/'); ?>/public/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo URL::to('/'); ?>/public/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo URL::to('/'); ?>/public/js/custom.js"></script>
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