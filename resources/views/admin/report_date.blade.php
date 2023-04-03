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
    color: slategrey !important;
  }

  i.mdi.mdi-eye:hover {
    color: #5d4dbe !important;
}


img.report_logo {
    width: 100% !important;
    height: 50px !important;
}

.level2 {
    background: orange !important;
}
.level1 {
    background: green !important;
}
.level3 {
    background: red !important;
}



p.num.my-1 {
    color: #8a2be3 !important;
}

.sub_header {
    background: #d6d6d6 !important;
}


img.four_images {
width: 100% !important;
height: 77px !important;
}

* {
  box-sizing: border-box;
}

/* .zoom {
  
  background-color: green;
  transition: transform .2s;
  width: 200px;
  height: 200px;
  margin: 0 auto;
} */

/* .zoom:hover { */
  /* -ms-transform: scale(1.5);       IE 9 */
  /* -webkit-transform: scale(1.5);           Safari 3-8 */
  /* transform: scale(1.5);  */
/* } */


/* img.four_images:hover {
width: 100% !important;
height: 100% !important;
} */

/* img {
    width: 100% !important;
    height: 77px !important;
} */

 /* img:hover {
   width: 100% !important;
    height: 100% !important;
} */

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
                        <li class="sidebar-item mt-1"> <a href="tel:9876543210" class="top-link"
                                 aria-expanded="false"><i class="mdi me-2 mdi-phone"></i><span
                                    class="hide-menu ">Phone: 9876543210</span></a></li>
                        <li class="sidebar-item mt-1 mx-4"> <a href="mailto:rohit@gmail.com" class="top-link"
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
                        <li class="sidebar-item mt-1 mx-1"> <a href="https://www.facebook.com" target="_blank" class="top-link"
                                 aria-expanded="false"><i class="mdi me-2 mdi-facebook-box"></i><span
                                    class="hide-menu "></span></a></li>
                        <li class="sidebar-item mt-1 mx-1"> <a href="https://www.instagram.com" target="_blank" class="top-link"
                                 aria-expanded="false"><i class="mdi me-2 mdi-instagram"></i><span
                                    class="hide-menu "></span></a></li>
                        <li class="sidebar-item mt-1 mx-1"> <a href="http://m.me" target="_blank" class="top-link"
                                 aria-expanded="false"><i class="mdi me-2 mdi-facebook-messenger"></i><span
                                    class="hide-menu "></span></a></li>  
                        <li class="sidebar-item mt-1 mx-1 "> <a href="https://twitter.com" class="top-link"
                                 aria-expanded="false"><i class="mdi me-2 mdi-twitter"></i><span
                                    class="hide-menu "></span></a></li>                                
                        <!-- <li class="nav-item dropdown">
                          <a href="<?php echo URL::to('/'); ?>/admin_login" class=" nav-link dropdown-toggle text-muted waves-effect waves-dark"> -->
                                <!-- <img src="../assets/images/users/1.jpg" alt="user" class="profile-pic me-2"> -->
                                 <!-- {{session('data')['name']}}  -->
                            <!-- </a>
                           <a href="" class="nav-link dropdown-toggle text-muted waves-effect waves-dark "><i class="mdi mdi-power"></i></a>
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
                        <h3 class="page-title mb-0 p-0 ">Report Tables</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Report Tables</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        
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

               <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="">
                        <img class="profile" src="{{ URL::asset('public/images/'.$data[0]->file)}}"  width="150"  />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <h4>Daily Activity Report</h4>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-end">
                            <p class="mb-0"><b>Start: </b>{{$filter_data['start_date']}}</p>
                             <p class=""><b>End: </b>{{$filter_data['end_date']}}</p>
                        </div>
                    </div>
               </div>
               @foreach($reports as $report)
               <?php
               if($report['level']=='level1')
                   $level = 'Level 1';

                if($report['level']=='level2')
                    $level = 'Level 2';

                if($report['level']=='level3')
                $level = 'Level 3';
                ?>      
               <div class="report-view mt-1">
                   <div class="header-table">
                        <div class="sub_header">
                            <div class="row g-0 mx-2">
                                    <div class="col-md-4">
                                        <div class=""><p class="my-1">{{$report['report_date']}}, {{$report['report_time']}}</p></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center"><p class="my-1"></p>{{$report['title']}}</div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-end"><p class="num my-1">293742753</p></div>
                                    </div>
                            </div>
                        </div>
                   </div>
                   <div class="report-body">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="mx-2">
                                    <p class="mb-0">Commercial Property</p>
                                    <p class="mb-0"><b>Address:</b>{{$report['address']}}</p>
                                    <p class="mb-0"><b>Location: </b>{{$report['parent_location']}}</p>
                                    <p class="mb-0"><b>Sub Location: </b>{{$report['sub_location']}}</p>
                                     
                                    <p class="mb-1">{{$report['users'] ? $report['users']['name']:''}}</p>
                                    
                                    <div class="{{$report['level']}} me-3">
                                        <p class="text-white  mx-2" style="text-transform: capitalize;">{{$level}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text ">
                                    <p>{{$report['description']}}</p>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <div class="row g-2">
                                    @foreach (json_decode($report['report_photo']) as $member)
                                            <div class="col-6">
                                                <div class="">
                                                    <img src="{{ URL::asset('public/images/'.$member)}}"  class="four_images"/> 
                                                </div>
                                            </div>
                                     @endforeach
                                </div>    
            
                            <!-- <div class="col-md-4">
                                <div class="text-end">
                                    @foreach(json_decode($report['report_photo']) as $member)
                                    <img src="{{ URL::asset('public/images/'.$member)}}"/> 
                                     @endforeach  
                                </div>
                            </div> -->
                            </div>
                   </div>
               </div>
               @endforeach

             

              
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