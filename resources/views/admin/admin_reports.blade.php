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

    .col-md-4.mx-1 {
        margin-top: 15px !important;
        background: white !important;
        width: 40% !important;
    }

    .col-sm-4 {
        text-align: center !important;
    }

    img.report {
        width: 80px !important;
        height: 80px !important;
    }

    

    .card {
         background: whitesmoke;
    }

    .page-breadcrumb .breadcrumb .breadcrumb-item.active {
    font-size: medium !important;
}

/* .topbar .top-navbar .navbar-nav>.nav-item .nav-link{
    font-size: medium !important;
 } */
 
   .left-sidebar {
        top: 52px !important;
    }
    
     header.topbar1 {
        background: #2f3356 !important;
    }

    a.top-link {
        color: #ffffff !important;
        font-size: small;
    }

    i.mdi.mdi-eye {
     color: #54667a !important;
  }

  i.mdi.mdi-eye:hover {
    color: #5d4dbe !important;
}

</style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <header class="topbar1 " data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark mx-5">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <!-- <a href="<?php echo URL::to('/'); ?>/index" class="navbar-brand ms-4"> -->
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="<?php echo URL::to('/'); ?>/public/assets/images/logo-light-icon.png" alt="homepage" class="dark-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <!-- <span class="logo-text"> -->
                            <!-- dark Logo text -->
                            <!-- <img src="<?php echo URL::to('/'); ?>/public/assets/images/logo-light-text.png" alt="homepage" class="dark-logo" /> -->

                        <!-- </span> -->
                    <!-- </a> -->
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <!-- <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a> -->
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse mx-5" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white "
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <!-- <li class="nav-item search-box">
                            <a class="nav-link text-muted" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search" style="display: none;">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li> -->
                        <li class="sidebar-item mt-1"> <a href="" class="top-link"
                                 aria-expanded="false"><i class="mdi me-2 mdi-phone"></i><span
                                    class="hide-menu ">Phone: 9876543210</span></a></li>
                        <li class="sidebar-item mt-1 mx-4"> <a href="" class="top-link"
                                 aria-expanded="false"><i class="mdi me-2 mdi-email"></i><span
                                    class="hide-menu ">Email: rohit@gmail.com</span></a></li>
                        <!-- <li class="nav-item ">
                            <a class="nav-link text-muted " href=""><i class=""></i></i>Phone: 9876543210</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-muted" href=""><i class=""></i>Email: rohit@gmail.com</a>
                        </li> -->
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="sidebar-item mt-1 mx-1"> <a href="" class="top-link"
                                 aria-expanded="false"><i class="mdi me-2 mdi-facebook-box"></i><span
                                    class="hide-menu "></span></a></li>
                        <li class="sidebar-item mt-1 mx-1"> <a href="" class="top-link"
                                 aria-expanded="false"><i class="mdi me-2 mdi-instagram"></i><span
                                    class="hide-menu "></span></a></li>
                        <li class="sidebar-item mt-1 mx-1"> <a href="" class="top-link"
                                 aria-expanded="false"><i class="mdi me-2 mdi-facebook-messenger"></i><span
                                    class="hide-menu "></span></a></li>  
                        <li class="sidebar-item mt-1 mx-1 "> <a href="" class="top-link"
                                 aria-expanded="false"><i class="mdi me-2 mdi-file-powerpoint-box"></i><span
                                    class="hide-menu "></span></a></li>                      
                        <!-- <li class="nav-item dropdown">
                          <a href="<?php echo URL::to('/'); ?>/admin_login" class=" nav-link dropdown-toggle text-muted waves-effect waves-dark"> -->
                                <!-- <img src="../assets/images/users/1.jpg" alt="user" class="profile-pic me-2"> -->
                                 <!-- {{session('data')['name']}}  -->
                            <!-- </a>
                            <a href="" class="nav-link dropdown-toggle text-muted waves-effect waves-dark ">Logout</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        </li> -->
                    </ul>
                </div>
            </nav>
         
        </header>
        
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <!-- Start Topbar header -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header " data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand ms-4" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon mx-4">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo URL::to('/'); ?>/public/assets/images/logo-light-icon.png" alt="homepage" class="dark-logo  mx-5" />
                            <!-- <img src="../assets/images/logo-light-icon.png" alt="homepage" class="dark-logo" /> -->

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                      
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

                        <!-- <li class="nav-item"> <a href="<?php echo URL::to('/'); ?>/index" class="nav-link "
                                 aria-expanded="false"><i class="mdi me-2 mdi-"></i><span
                                    class="hide-menu me- ">Dashboard</span></a></li>
                        <li class="nav-item"> <a href="<?php echo URL::to('/'); ?>/profile_page" class="nav-link"
                                 aria-expanded="false">
                                <i class="mdi me- mdi-"></i><span class="hide-menu me-">Profile</span></a>
                        </li>
                        <li class="nav-item"> <a href="<?php echo URL::to('/'); ?>/users" class="nav-link"
                                 aria-expanded="false"><i class="mdi me- mdi-"></i><span
                                    class="hide-menu me-">Users</span></a></li>
                        <li class="nav-item"> <a href="<?php echo URL::to('/'); ?>/admin_reports" class="nav-link" aria-expanded="false"><i class="mdi me-0 mdi-"></i><span class="hide-menu me-">Reports Record</span></a></li>
                        <li class="nav-item"> <a href="<?php echo URL::to('/'); ?>/report_title" class="nav-link" aria-expanded="false"><i class="mdi me-0 mdi-"></i><span class="hide-menu me-">Manage Report Title</span></a></li>
                        <li class="nav-item"> <a href="<?php echo URL::to('/'); ?>/manage_access" class="nav-link" aria-expanded="false"><i class="mdi me-0 mdi-y"></i><span class="hide-menu me-">Manage Access</span></a></li>
                        <li class="nav-item"> <a href="<?php echo URL::to('/'); ?>/locations" class="nav-link" aria-expanded="false"><i class="mdi me-0 mdi-"></i><span class="hide-menu me-">Location</span></a></li> -->
                        <li class="nav-item search-box">
                            <a class="nav-link text-muted" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search" style="display: none;">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link text-muted waves-effect waves-dark" href="pages-profile.html"  role="button">
                                <img src="../assets/images/users/1.jpg" alt="user" class="profile-pic me-2">Markarn Doe
                            </a>
                            
                        </li> -->
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

        <!-- Edit List Modal -->
        <div class="modal fade" id="editlist" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Sidebar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Sidebar Title 1 </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Sidebar Title 2</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label">Sidebar Title 3</label>
                        <input type="text" class="form-control" id="exampleFormControlInput3">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput4" class="form-label">Sidebar Title 4</label>
                        <input type="text" class="form-control" id="exampleFormControlInput4" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput5" class="form-label">Sidebar Title 5</label>
                        <input type="text" class="form-control" id="exampleFormControlInput5">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput6" class="form-label">Sidebar Title 6</label>
                        <input type="text" class="form-control" id="exampleFormControlInput6">
                    </div>
                </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>
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
                        <h3 class="page-title mb-0 p-0 ">Report Table</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Report Table</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <a href=""  data-bs-toggle="modal" data-bs-target="#add"
                                class="btn btn-danger d-none d-md-inline-block text-white" target="_blank">Add Report</a>
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
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Report Table</h4>
                                <!-- <h6 class="card-subtitle">Add class <code>Report table</code></h6> -->
                                <!-- Add Modal -->
                                <div class="modal fade" id="add" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Add Report </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="report" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="mb-3">
                                                  <label for="exampleInputEmail1" class="form-label">Report Type</label>
                                                  <select class="form-select"  name="report_type" aria-label="Default select example">
                                                    <option selected>Select Report Type</option>
                                                    <option value="Activity Reports"> Activity Reports</option>
                                                    <option value="Incident Reports"> Incident Reports</option>
                                                    <option value="Patrol Reports"> Patrol Reports</option>
                                                    <option value="Parking violations"> Parking violations</option>
                                                    <option value="Visitor logs"> Visitor logs</option>
                                                  </select>
                                                </div>
                                                
                                                <div class="mb-3">
                                                  <label for="exampleInputEmail1" class="form-label">Report Title</label>
                                                  <select class="form-select"  name="report_title" aria-label="Default select example">
                                                    <option selected>Select Report Title</option>
                                                    @foreach($data as $title)
                                                    <option selected value="{{$title->id}}">{{$title->title}}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                                <div class="mb-3">
                                                  <label for="exampleInputEmail1" class="form-label">Main Location</label>
                                                  <select class="form-select" name="main_location" aria-label="Default select example">
                                                  @foreach($locations as $location)
                                                    <option selected value="{{$location['parent_location']}}">{{$location['parent_location']}}</option>
                                                  @endforeach
                                                  </select>
                                                </div>
                                                <div class="mb-3">
                                                  <label for="exampleInputEmail1" class="form-label">Sub Location</label>
                                                  <select class="form-select" name="sub_location" aria-label="Default select example">
                                                  @foreach($locations as $location)
                                                    <option selected value="{{$location['location_name']}}">{{$location['location_name']}}</option>
                                                  @endforeach
                                                  </select>
                                                </div>
                                                <div class="mb-3">
                                                  <label class="form-label">Report Time</label>
                                                  <input type="time"  name="report_time" value="" id="timeInput" onChange="onTimeChange()" class="form-control">
                                                  <input type="hidden" name="meridian" value="" id="meridian"/>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Report Date</label>
                                                    <input type="date" value="{{$location['report_date']}}" name="report_date" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Report Photo</label>
                                                    <input type="file" name="report_photo[]" class="form-control" multiple>
                                                </div>
                                                  <input type="hidden" name="user_id" value="{{session('data')['id']}} "/>
                                                  <div class="text-center">
                                                    <button type="submit" class="btn btn-primary col-6">Submit</button>
                                                    </div>
                                              </form>
                                        </div>
                                       
                                    </div>
                                    </div>
                                </div>
                                <!-- Edit Modal -->
                                    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Edit Report </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                
                                                    <div class="mb-3">
                                                      <label for="exampleInputEmail1" class="form-label">Report Title</label>
                                                      <select class="form-select" aria-label="Default select example">
                                                        <option selected>Select Report Title</option>
                                                           @foreach($data as $title)
                                                             <option value="{{$title->id}}">{{$title->title}}</option>
                                                        @endforeach
                                                      </select>
                                                    </div>
                                                    <div class="mb-3">
                                                      <label class="form-label">Main Location</label>
                                                      <input type="text"  name="main_location"  value="" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                      <label class="form-label">Sub Location</label>
                                                      <input type="text" name="sub_location" value="" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                      <label class="form-label">Report Time</label>
                                                      <input type="time" value="" id="time" name="report_time" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Report Date</label>
                                                        <input type="date" value="" id="date" class="form-control">
                                                      </div>
                                                      <div class="mb-3">
                                                      <label class="form-label">Report Type</label>
                                                      <input type="text" value="" name="report_type" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Report Photo</label>
                                                        <input type="file" value="" name="report_photo" class="form-control" multiple>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary col-6">Submit</button>
                                                    </div>
                                                  </form>
                                            </div>
                                           
                                        </div>
                                        </div>
                                    </div>
                                    <!-- delete Modal -->
                                    <!-- <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            
                                            <div class="modal-body text-center pt-5">
                                           <h3>Are you sure?</h3>
                                           <p>Do you really want to delete these records?<br/>
                                            This process cannot be undone.</p>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger btn-lg">Delete</button>
                                            </div>
                                            </div>
                                            
                                        </div>
                                        </div>
                                    </div> -->
                                <div class="table-responsive">
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">#</th>
                                                <th class="border-top-0">User Name</th>
                                                <th class="border-top-0">Report Title</th>
                                                <th class="border-top-0">Main Location</th>
                                                <th class="border-top-0">Sub Location</th>
                                                <th class="border-top-0">Report Time</th>
                                                <th class="border-top-0">Report Date</th>
                                                <th class="border-top-0">Report Type</th>
                                                <th class="border-top-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($activitys as $activity)
                                            <tr>
                                                <td>{{$loop->iteration }}</td>
                                                <td>{{$activity['users']['name']}}</td> 
                                                <td>{{$activity['report_title']}}</td>
                                                <td>{{$activity['main_location']}}</td>
                                                <td>{{$activity['sub_location']}}</td>
                                                <td>{{$activity['report_time']}}</td>
                                                <td>{{$activity['report_date']}}</td>
                                                <td>{{$activity['report_type']}}</td>
                                                <td >
                                                    <div class="d-flex">
                                                        <a href="" class="h3" data-bs-toggle="modal" data-bs-target="#edit" onclick="return runMyFunction({{json_encode($activity)}});">
                                                            <i class="mdi mdi-pencil"></i>
                                                        </a>
                                                        <a class="h3" href="{{ 'delete_report/' . $activity['id'] }}">
                                                            <i class="mdi mdi-delete"></i>
                                                        </a>
                                                        <a class="h3" href="{{ 'report_view/' . $activity['id'] }}" data-bs-toggle="modal">
                                                            <i class="mdi mdi-eye"></i>
                                                            
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>                                 
                                      
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Report Filter</h3>
                                    </div>
                                    <div class="card-body">
                                     <form action="{{ URL('/filter_data') }}" method="POST">
                                     @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Start Date</label>
                                            <input type="date" name="start_date" class="form-control" >
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Start Time</label>
                                            <input type="time" class="form-control" >
                                        </div>
                                        <div class="mb-3">
                                            <label  class="form-label">End Date</label>
                                            <input type="date" name="end_date" class="form-control" >
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">End Time</label>
                                            <input type="time" class="form-control" >
                                        </div>
                                        <div class="text-center">
                                        <button  type="submit" class="btn btn-primary col-6">Submit</button>
                                        </div>
                                     </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col"></div>
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
    <script type="text/javascript">
            $(document).ready(function(){
              $('#report').on('submit', function(event){
                    event.preventDefault();
                    var url = 'https://www.codenomad.net/report-portal/insert_activity'
                    $.ajax({
                        url: url,
                        method: 'POST',
                        data: new FormData(this),
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success:function(response)
                        {
                            $('#add').modal('hide');
                            toastr.options =  {
                                "closeButton" : true,
                                "progressBar" : true,
                            }
                            toastr.success(response.message);
                            setTimeout(function(){
                                location.reload();
                            },3000)
                        },
                        error: function(response) {
                            //$('.error').remove();
                        }
                    });
                });
                        });
            var inputEle = document.getElementById('timeInput');
            function onTimeChange() {
            var timeSplit = inputEle.value.split(':'),
                hours,
                minutes,
                meridian;
            hours = timeSplit[0];
            minutes = timeSplit[1];
            if (hours > 12) {
                meridian = 'PM';
                hours -= 12;
            } else if (hours < 12) {
                meridian = 'AM';
                if (hours == 0) {               
                hours = 12;
                }
            } else {
                meridian = 'PM';
            }
            $("#meridian").val(meridian);
            }
            
            function runMyFunction(data){
                console.log(data);
                // $("#time").val(data.report_time)
                // $('#date').val(data.report_date)
            }
        </script>
</body>
</html>