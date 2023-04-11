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

    .topbar .top-navbar .navbar-nav>.nav-item .nav-link{
        font-size: medium !important;
    }


    .topbar{
        background: #2f3356 !important;
     }

    li {
        list-style: none;
        font-size: x-large;
    }
    
    span.invalid.feedback {
    color: red;
    text-align: left;
}



    .fa {
        margin-left: 8px !important;
    }

    li.breadcrumb-item.active {
        font-size: medium !important;
    }


    .left-sidebar {
        top: 60px !important;
    }
    
     header.topbar1 {
        background: #2f3356 !important;
    }

    a.top-link {
        color: #ffffff !important;
        font-size: small;
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
        <!-- Start Topbar header -->
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
                        <li class="sidebar-item mt-1 mx-1"> <a href="https://www.facebook.com"  target="_blank" class="top-link"
                                 aria-expanded="false"><i class="mdi me-2 mdi-facebook-box"></i><span
                                    class="hide-menu "></span></a></li>
                        <li class="sidebar-item mt-1 mx-1"> <a href="https://www.instagram.com"  target="_blank" class="top-link"
                                 aria-expanded="false"><i class="mdi me-2 mdi-instagram"></i><span
                                    class="hide-menu "></span></a></li>
                        <li class="sidebar-item mt-1 mx-1"> <a href="http://m.me"  target="_blank" class="top-link"
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
        @include('admin.header')
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
                        <h3 class="page-title mb-0 p-0">Users List</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo URL::to('/'); ?>/index">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Users List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                    <form action="{{ route('add.user') }}" method="POST">
                            @csrf
                            <div class="text-end">
                                <button type="button" class="btn d-flex btn-danger d-none d-md-inline-block text-white" id="openPopup" data-bs-toggle="modal" data-bs-target="#Report">
                                    Add User
                                </button>
                                <div class="modal fade" id="Report" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="Report_user">Add User
                                                    </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>                        
                                                <div class="modal-body">                                                  
                                                        <div class="col-md-12">
                                                            <div class="mb-3 row">
                                                                <label for="input" class="col-sm-2 col-form-label">Name</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"  name="name">
                                                                </div>
                                                                    @if ($errors->has('name'))
                                                                            <span class="invalid feedback"role="alert">
                                                                                <strong>{{ $errors->first('name') }}.</strong>
                                                                            </span>
                                                                    @endif
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"  name="email">
                                                                </div>
                                                               @if ($errors->has('email'))
                                                                            <span class="invalid feedback"role="alert">
                                                                                <strong>{{ $errors->first('email') }}.</strong>
                                                                            </span>
                                                                    @endif
                                                            </div>

                                                            <div class="mb-3 row">
                                                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control"  name="password">
                                                                </div>
                                                                  @if ($errors->has('password'))
                                                                            <span class="invalid feedback"role="alert">
                                                                                <strong>{{ $errors->first('password') }}.</strong>
                                                                            </span>
                                                                    @endif
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="email" class="col-sm-2 col-form-label">Phone</label>
                                                                <div class="col-sm-10">
                                                                    <input type="tel" class="form-control"  name="phone">
                                                                </div>
                                                                @if ($errors->has('phone'))
                                                                            <span class="invalid feedback"role="alert">
                                                                                <strong>{{ $errors->first('phone') }}.</strong>
                                                                            </span>
                                                                    @endif
                                                            </div>

                                                            <div class="mb-3 row">
                                                                <label for="categeory" class="col-sm-2 col-form-label">Categeory</label>
                                                                <div class="col-sm-10">
                                                                <select  class="form-select" name="categeory" aria-label="Default select example" >
                                                                    <option  value="">Select Categeory</option>
                                                                    <option value="supervisor">Supervisor</option>
                                                                    <option value="dispatcher">Dispatcher</option>
                                                                    <option value="client">Client </option>
                                                                    <option value="guard">Guard  </option>
                                                                    <option value="admin">Admin  </option>
                                                                </select>
                                                                </div>
                                                                   @if ($errors->has('categeory'))
                                                                            <span class="invalid feedback"role="alert">
                                                                                <strong>{{ $errors->first('categeory') }}.</strong>
                                                                            </span>
                                                                    @endif
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="input" class="col-sm-2 col-form-label">Address</label>
                                                                <div class="col-sm-10">
                                                                    <textarea type="text" class="form-control"  rows="3" name="address"></textarea>
                                                                </div>
                                                           @if ($errors->has('address'))
                                                                            <span class="invalid feedback"role="alert">
                                                                                <strong>{{ $errors->first('address') }}.</strong>
                                                                            </span>
                                                             @endif
                                                            </div>                                                                       
                                                                <input type="hidden" name="status" required value="supervisor"></input>
                                                                <!-- <div class="row">
                                                                    <div class="col">
                                                                        <button>Submit</button>
                                                                    </div>
                                                                    <div class="col"></div>
                                                                </div> -->

                                                              
                                                            
                                                            <!-- <div class="mb-3 row">
                                                                <label for="input" class="col-sm-2 col-form-label">Status</label>
                                                                <input type="hidden" class="form-control" name="status" value="supervisor">
                                                                <div class="col-sm-10">
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected>status</option>
                                                                        <option value="1">Admin</option>
                                                                        <option value="2">user</option>
                                                                    </select>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                        <!-- <div class="col-md-2"></div> -->
                                                    <!-- </form> -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                                                        <button type="submit" class="btn btn-primary btn1">Submit</button>
                                                        
                                                          
                                                                </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
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
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Users List</h4>
                            <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                            <div class="table-responsive">
                                <table class="table user-table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Password</th>
                                            <th class="border-top-0">Phone</th>
                                            <th class="border-top-0">Categeory</th>
                                            <th class="border-top-0">Address</th>
                                        
                                            <th class="border-top-0">Action</th>
                                            <!-- <th class="border-top-0">Manage Access</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{$user['name']}}</td>
                                            <td>{{$user['email']}}</td>
                                            <td>{{$user['password']}}</td>
                                            <td>{{$user['phone']}}</td>
                                            <td>{{$user['type']}}</td>
                                            <td>{{$user['address']}}</td>
                                                                                 
                                            <td>
                                               <a href="{{ 'edit_supervisor/' . $user['id'] }}"><i class="fa fa-pencil"  aria-hidden="true"></i></a>
                                               <a data-bs-toggle="modal" data-bs-target="#delete" onclick="return deleteData({{$user['id']}});">
                                               <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                           </td>   
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                                     <!-- delete Modal -->
                              <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            
                                            <div class="modal-body text-center pt-5">
                                           <h3>Are you sure?</h3>
                                           <p>Do you really want to delete these records?<br/>
                                            This process cannot be undone.</p>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#delete" class="btn btn-danger btn-lg" onclick="return DataDelete('users')">Delete</button>
                                            </div>
                                            </div>
                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <script src="<?php echo URL::to('/'); ?>/public/js/main.js"></script>

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
   @if(count($errors)>0)
       $('#openPopup').trigger('click');
    @endif
</script>
</body>

</html>