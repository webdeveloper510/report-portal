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
 /* .topbar .top-navbar .navbar-nav>.nav-item .nav-link{
    font-size: medium !important;
 } */

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
/*         
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

        .card {
            background: whitesmoke;
        } */

        .footer{
            text-align: center!important;
            margin-top: 372px !important;
        }
         
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
                    <a href="<?php echo URL::to('/'); ?>/index" class="navbar-brand ms-4">
                        <!-- Logo icon -->
                        <b class="logo-icon mx-4">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo URL::to('/'); ?>/public/assets/images/logo-light-icon.png" alt="homepage" class="dark-logo  mx-5" />

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
                        <!-- <li class="nav-item ">
                            <a class="nav-link text-muted " href=""><i class=""></i>Phone: 9876543210</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-muted" href=""><i class=""></i>Email: rohit@gmail.com</a>
                        </li> -->
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
                        <h3 class="page-title mb-0 p-0">Report View</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Report View</li>
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
            <div class="text-center">
                <h3>Daily Activity Report</h3>
                <p>Silvertrac Software</p>
            </div>
            <div class="sub"> 
                <p class="">Tue Mar 13, 2018 12:08 PM</p>
                <p class="text-"><b class="me-2">Location:</b>On Site</p>
                <p class="text-"><b  class="me-2">Unit:</b>Patrol</p>
                <p class="text-center">Nam ut finibus quam, at venenatis sem. Donec in odio vitae tellus tincidunt dignissim. Morbi ut placerat elit. Fusce vitae tortor sed arcu tempus rhoncus ut et justo. Quisque nec urna id enim tempor dapibus at non ex. Aliquam at est libero. Donec placerat posuere venenatis. In eget eros non ipsum sodales aliquam. Vestibulum eget ullamcorper enim. In lectus dui, porta rutrum tempus ut, ornare id enim. Donec venenatis nulla id libero dictum, vitae aliquet nibh sollicitudin.</p>
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFhYZGRgaGhodHBwcHB4hGR4eHBoeGhoaHBwhIy4mHh4rHxoYJjgmKzAxNTU1GiQ7QDs0Py40NTEBDAwMEA8QHxISHzQrJSsxNDQ0MTY0NDQxNDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIALcBEwMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAEBQIDBgABB//EAEQQAAIBAgQDBAcECAUDBQEAAAECEQADBBIhMQVBUSJhcYEGEzKRobHBQtHh8BQjUmJygpLCM3OisvEVU9IWNEODlCT/xAAZAQADAQEBAAAAAAAAAAAAAAAAAQIDBAX/xAAoEQACAgEDBAICAwEBAAAAAAAAAQIRIQMSMQQTQVEiYTKhFHGRgQX/2gAMAwEAAhEDEQA/AHf6K4mJ8+Xd+NT/AERAJJytzIrnxzQYHnI++g2uO0wQI5EivVUZPnBwOUVxkLOMQaFgaGuYpUYQ3lWfxGZWJlST0FQ9a3WumPTI4p9c06o3WExqsBqKMLg86+dWrrLqDWp4Piy6gRtua5dbo9vyR1dP1yn8Wsjs2q5VqxLgA1ofH4lEXMeZ5VyRhJujtlqRSsLW2KExTZBqRHU0G3GFABGtUY/Hi4mXKRz8+laR6eSllYMpdRDa6eS8ueW1CPjCG1jxBqPCb4IKsandwyBuyw18JrpUEm00YdxuKaZba4gWEqsidY3pgtxhrl060jw131Ltl7QMU7s4pmX2DrzrLV064WC9LVvl5Ot3ixIig34cEJdB2ug50fbUxpp161PPG+3Xp4is1cXg0dSWQTDYxCkkxG86Vk+J4tncmZE6DlHKnHG8IuYsv2taSvh101bnrXdoacV8vZw9Tqyfx9AJFdloh7QGxnyqvLXWonDuaK8teZatK1yWiTAGtG0FqO8FUVbh8OXMCP8AijbPDiRroYmKqa6VGVe/WoecI1TccyOZkRRl1cnWRtQbmavtYdnOg237qYYHgbue4dKl7Y5kxpyn+KEuWpPaI30PSn78AvAnKkDqfzNKblpgYeQdd+tEZRlwwlGUV8kBFKkqVb6ujMHw4OJYsOgjfzPKqltirZMd0nUQSzaLkKNyYE1oMF6PqpzPLaezqBPLnJpjwrhyINFE9Tqfw8qfrZ05TXn6+vmkenodMquWWJcDjwAEiMoiNojSKaW7qnalnGrGV1cCM2/iO7wqGGuNXJKCktyOtSp0x5lrqCW81dWPbL3GOkjQjbyrw3W5aDpR6YIz2jI7j8tKvbg77rDCJ/Cvd3xXJ4uyb4M+bXdUfU07fCMAMyx5a1JOHFvZ91aLWic76dtiVbHWmeDu5NUA75Op79qtucPZdwR5VX+jkUSnGaCMHB45GWKxCvlKv4g/TpS/FtmXVyddBy8a5bXdUvUzoKiMIxNZTlLkrwQCnPExy/PjTZMczFuwCPETQmHthdGUmdus16LBmVBiamSjJlQcorBRfQydIkzVXqidgaa4fDOzAGRNHPwo6gaHrSerGOBrSlLJnEJBH5FNsNxchYYe6oHh0bmRMab+6j8Pwy0rDM092X76nUnptZyVpx1E8YBm4lPsLJ6UO+IJBBYBSNRrI12ovHWkRuwco5xrPh0pWy76/jShGLVpDnOSdNlF27L901151OyR4nT486kCRpUGSa6Ekc7kwZXAkRod6qdByFGjDHpVT260TVmLUqyD4fCM7Qo8T0HU1osLw1Egn8TSnD3WTbbp1q0Yt5k6+NZ6ilLCeDXRcI5ayam9ZGSRERrpyrP2uDO5jL2Qd23j60fheKdiHOv0prZxttQJNcVz07SO+oalNspscFCIxRBJB/OtL+H3GWV2IaCI9xp7jeIqqZlYbbTvWPu8VZjnAyMcwYbgwSAdY3EfjS0lOdqXkrVlCFbR8OJEkrtHWl2JwVpyWdpbmAO/n0pY2NubjsjuFEW7r5c7wAY12Y/hWy0tvGDHvKeJKxthOHW47CL4xr8aJuYAabClj8YUAZVIYUtfiLsxJPh3eFZ9qc3bZp3tOCpI0z9hSY0HOp2OLIFlmA86y74xyhSTBqrD4NnMAe+j+NGvkxfypXUUPcZxBLpBBMDkaqOLRTpG35FU4LAFfaEE9fwqnGXbSGGuKeoWXI8gNPOKlrThhvBaerJXWQ3/AKovQ+6upR/6gsDQWCe8lQT5BjFdWXd0C+3rGsv8OUr2RBHQVXgLWUFSaBw3H1YzAP8AA4Lf0tl+tFPjrbalsh/fBXXpLaHyJrnjqtqmzoemk7SJYpI9tQR1E+7x0oBrKgEq530Ecu80yDsToCw7tRWG9JOMJ6wKhUpJyh/ZYgiWGo1B2M6ada272yOTF6W6RrVuERI9+o8KGxEZjlGk6VnMP6QXAgBD5SZ07Y7iM2o6aNXljjhFzI0kNMHlqep25mCdNeQFKPWaaeSdTQdUh+qTXBYO2tY+/wAeNi8VYkqdZHeSdp1Mz7+4U0x/Gi9pQss9xlIjQwWgIO7kfDXemv8A0IJOzP8AjfZpS0wTr5a6d9dbuMG7OgNQ4baOcK7EdnXpOmx6U2v8Oy9pGkdDv7+daQ6iE43xY5dPKL9l+EQGCxk1ZiXAkE6EHWNQaHwzADUx5iq8e6GAHB8xWbacsmlNRwLnczIJqDOxO9Sdl6j3ip4S4mfUg91dHdijDtyZULIMyfz4VV+ikmPjTDEKp2EHu51WFjQiPEVS1cEPSyeX+HoADMDv1+NLr1oA9nUVoLWDR17TGeg0jeR8q5OFW9CCTvoTvUx11Hlst9O5cJGfa6dhAqlxJ5CtBi8ASJRQN5WIOlKvUO58OvKtY68WrMp6Ek6YKXCiFUT+0dT5dKqRhqSoYnmeXf40ZewpXcqfCqcgrRTjRm9OVlOdguXl+edeIzDSavRCdhNMbNhgNEgb6xNTLVSKhoyfkXDtDtAwOY+tUcKw4fOSw7FxlidTzBHdrHkadYt15rr8KzvCbjC7eBgDOxGp2BUjnp/iNoOlcsuoaarB2Q6VSTvNZH124y+xqsHTSPhS676xvazHxGgmjRcETMRRFu8Y61S168ES0L8ituGuACV0PePjVqcOaMxUx3CaB4rxi4jsihQBGvMyoOg8++k2Ivu+juzDkCez5Lt8Kzn11YRceiTyx8cfh0nOxY8gup8z7I8zQ9z0lY9m3bCA/aYyduQ0APvpJ6v8/nWo2F/WIPH/AGnrXJPqZz+jqh08IoNv3rj+27N3T2fdovwqpbH5/OlHi13fnxNSWzPf8fwFYtt8mqVcAXq+8f1V1H+r/MiuoKFb8GYbBh4HT3VynEJ7NxvAzHu2p5xpG9dKMydldFJC7nltVVv1mQyVc5gO0saEH9mO6ltFu9ipOK3lmU33KEqSOYJUiRqdKU47AWcQoUM9v1YuPJM+0QzyW1YzsPHurVpYzuUKZSBMhpG4G0ab0DxXhIZGkmOyI7iTMnfpzqW5IKT4FOHwgNkJ6xWyZpKCHgxBIJJB6+AofC2nt3AvrEe2DrlYZl7LAlkJBJ13g+QoTDWlRgVW4jKDDEMUPcTrH2t9NudQxfCVYm5lLaSJLFc0EyeuoBjnNYum6JeQrEcIzkMpBUvkA5CTCkH9nUfWruJXmRLBRTmRSsjfSdYjnm36AUTg+yhUdklSQBpBtkEDXqVOv75oqxh1vMVBAEMZbY65iBG5AO2m53BFYyuydhHg3G7sh7txlRSohQpJLCdWbuU8uunXT4vjyXshUpkSWylyHZoKjUhREE+JPLnjv0x4NsJkmWhu1mg78hqoYwSNjRWAwsMl0IrqbkAAEOpEnKVmDtvqPCto6jiqZcUjVnEdLY82Y/WqruKIBJW2B1KE/wB1EpDAMAdeRBBHUEGqOI2UNpw8hY1jfroOtVvbOjZGijD4tnzZOzlbKewo130kGR31xd5GY5gOUAEd6kDQ7byDG3OlBZyFOcOEAiZRtZReZVpBkARsKITH3IkAnZQCAROUgdoTpmyzBqs82PYjS8MxihgzHb7UeyTtnWdO4jQ8jTi/hGbZs06zWLs4zO4AGsGGTYbBpDdemoIB0MU3wXEWTSYHQ6If4SfYPcdDpryreOtJcnNPQS4GJwTpqZ16VbhriDlr8a9tYvPqDqNwdCD0I5Go5lkkiT4Vr3XJZMlpqPAaH0kHXpQz2cwmN6gzA6gRPLlVX6VlMbd1SpPwU0vIHjE7Q2FWW8Lz3q3EcTtohd5gabEkzsABqT3VUuJDAOp0IkAyDB7jqD3Gte8+DPsq9x66ZRppUhBWc0npFeLjgdCBHfUlxKzy8Klzl5KUF4BXs5xo3lWeSyUulz7LNBOunaKZj3AOx/8ArWtIuPtByg0aCTMbAjvnmNYirEtofsM0ljtA1JOjDMOfWs5TT5NI3F4M9iXJAHPMpI6gGSD3aR50Hf4wElTcCnXsJLNv0EtzrR47gyOpmyCcpADMQfAANlbzjlqNx874hwG6j5FzuhnLlUAROzDsqrDbblsDIBuTfJFUuBvaf1gzjMc0+1voY193M1YLX5/4++ocHwpS0iMIIzaEgkSxO48eQo4p1+P4/dWMuTVPAIbf5/AVDDW4up4np+yaOKeP58YFUYZf1qeJ5/unpoKSGxn6v8nl7/ur3JPf8R91EZPzH1Ndln8k/hViooy/nSuq7L+ez99e0AW8csj1ojmFG/eaDFsZDyl1/wBppticS401ieeWD/KTPwod2DLLIoG+qFBPisUEPkV8MdmvMMsIEbUkSTmXlO29FcUssUhTl7SydCeewNTwJTMSogkEaNK7zzk8utXY72P5l+tTJFo+d47hFwPPaIIJzTJJJ1A000J7vlT/AAHDglpmKnMBy0LnmSZ5bxGvLrWhwGHRu0wmNump76s4m5ylVXfc93OueUN3kvYjE8asNbtI7gM6s530EawAD5d8d5qjFcatXERmJDg5QZIbroRzI130oz0vEYZATDZmgc9xPMQIrPYTh9w20ZLBuKLnaIkkSByBzKfEc6faT5JccM1L8XT1QQqWfKCHhWJgQIBGpykHcc9tJtwty6i23SLiF5YZe3mCkCII1gHsmZ0g9T/RjhahGJRlKvADCCAbYkEHvJPjR97hqpdR1MZniI3PaI/0mPId9JxcWEYvkKw+IR1Dq8A/tAjXp0nzq29grbrka8quQrQCuZZAIIk67799WqgGwjWffvSjjOBR3UsNclvl+4K0hGzSUnFE7nALiFSrhkgZ5UZiQ2YMAAANfKlzYIjJmtkGXkoZhSNCTp+9oJOtFcIssmICK7ZclwlZOUkBokbGnIJ6KfePvHwqpYYRlaMrw+4mdIIzkgdoQ+igNAYAwTm6nyJh89mdKvxF5La53R2AKrC6ntTqCIJ22ivHxllkzqHQxoCI95J7PvnuNJpsHJCyzxhLdwo0FYHaLaiM3ZURLDzgTyptbx1tvZceZ/GKyWMxWHUmWzfuJ2ve3XvEUufjHK1aVR1Ik+4VcW1yZyp8G0v8TC+yxf8Ah9n+rakuN44Ae04U6aLq2onXp+POsziHuv7bnwn+0URxCL7Z2XK8ARJCsBtvqG+dVv8ARG32EXuNZjoNermT/TsPhTHDcf5Okd6HTxynT4TWdwuEJ2AG/LpU2sMvL3fdU7mVtRr7WJR/YcA9Dofcdz5gUDxL9MXVEQjkykufccva7lD1nhdYfiI/CirHGHTZmUe8e6m5tqrCKUXdWNfQ+84vXndZfKucHsmWYkEjLp7J5CtY2Pdtsq+Ak+86fCsxwviz3pVULbSydgD3kCfeae2QcokQR3yfMkmT31nleTVvc7otuZ2HtvO4IbY7ggez5RB2OlU43C+vRxBV4GcISCelxCO1y235a7OdauhUZsmc5ssTBgKGMH9rtCPmKi6QwKHUao3iARpzBESPwNNNrJLSeDKYDBPaQI+4LarMEFiQ2nURzPnV4H5/4k054uVZA4GVswDJ0YgnMumqtB17uoICgDu+f1gU3ySlSogw/PP4/dVdgfrU33PX9k1cT/x/xVFn/FTxPX9k+dCAdkfnQfPWvPd8TXp/Ow+Zrz88z8oqxHkePwrq7L3fAffXUANVfWAda5rQ3IH1rKcfw6m/J3yrr5TQyl1tjLccdvk7D7O34UCs1r2xM8+smhccTk69peQ7+kUr4HiLjXGDuWXISAY3zLrMTzNNMaOx/Mv1pMaLuEeyfL61diLIYGdufhvSqyxC6UZhs8iSSDvNZM1EXpNYD4dmCnsEjtEDv9nrr166UJ6GYbsODlGolVUzzBJA1AlSBy0jcGH/AB9ytoKEVw7Mp5EbQQR091JvR7FJhrSLkLm4dSumoMa67/hVJMltGuw0ZInXNOzbRH2lFD8T3tf5g/2PU+HY1LyF0VlhspDeAP1FV8V09WelyY69hqUio1WAk15icKrZTnI7NudNNFHORSLEcdyaHfoFP+5tD7qWYjiuIuQAAoGgnUgd07eQoi65FL5GiOW3eFwupQLcEg7ZhA1YAfGl2M9Jra6Kcx/dE/6jp86TDhruZdmfxOnxo61wdVGZsqjqY+Zpt2SotAN/jV5z2Ej949o+ROg8qEfC3bh7bs3dqR9wpw+JwybvnPRQW+O3xoe5x9B7Frzc/QT86VlKJRY4L+77/uo5eEQJYwO/QUrvcbvNswQdEWPiZPxpfcLOZYsx6sST7zS3Ie1jm9dwyfbDdyDN8Rp8a94NeS9cyqhAUqe1GsmNhPzpA1k9Kf8AoZZi48j9j/caIu2Eo0rGWAwMuQBzf6mr7/DY3Ujyo/hQi/5v8jT1jVvkyRh7nDAeVLeJ8EKpn2BmOunPwrf3USe0FGhYkwAMsAyf5qX8csl7QyQwGmhHT8KKGZb0FU5bhJJ/w9yeeethlrNehduFuDb/AA/760xqDY8sEZijMFzEMpbQZoyss8iQEI6w3Sr2iYGqgBQeuUBZ+FVCvQaPBNZM/wClPEnR0RLRuGGJhguWYAGvX6CrreFZlDDKdNQCDHnrQPpJgHzC4IJLQI6R+ApThb11XAUGSdOVUiWPnU7QZ6EH8KHtD9anid46HkNTRC4m4RFxEYd5hvIjnVZYG6mUZRO0zyPdTJG8eXgAB8agfzqflXp03ge6vCw6+4k/KrERyjoP6a6uzD8q1dQADxu05ukhHIgahSRt1GlB3uymojt85HKtFcD8gfEH/ivM9wDZ5/iH/lRgmhH6PXAbrQQewef7y08xnsfzL9a6y7E9oNPUx85617jPY81+tJlxRHhtnMPCmq2wKD4KOyT4fKmDVkaCP0guZLaGftv8qzDYjJ+ijsgNcuqZnlER5kCtzisPnQZrfrACxHZJ1kg7baUh4fgLdwvntn9VdfIJYZZc6CD+6N+njVUzPGQr0UYmy8x/i8o/YXpR3EPatf5n9j1dw/CIlshAVBeSCSdcoHPXYCqeJHW1/mf2PUy+zWPAQ1sMIbUdKx2PvtZC5EViRJJJ+Q399bNKzPF7UlP4T86FlAzN3OOX20koOigD47/GvBhLrgOUuODsxVmBgx7XjNGvg55VrOE4m2mHRS6Bgr9nMM3tsR2d+YpNDX0jAth2GhWPGpLYNU8c4jfuOyO7uoOxMJ1By7eYFKTh3I9tl/hJHx/CosvaP1w9S9XHKkuFF1Qf1jNrpPTpWg4FiQ7rbuIGzTDyQwgE6j2SNOQHnU3mh+LB3vKu4Pupv6G4hHd8p5JyI+0etHcS4NaGHNxJzesK6mVgd0TNDehuFCO8cws/1n4VcU1JJmcmnG0aDh6/r/N/kacstLeH2W9eDB3f5Gm72j0NdDMEIPSKfVXCN/U3fktfNMPnJnOy/wAJKn3jWvrXEbUo8iR6q5vtstfP+IWwLkKAoyroAAOfIVlI1h5HHogP8X/6/wC+tHbtljA/PU0g9Eh/i+Fv++nmKxQtWncqzbLCxmjdonxFKOQk6E2O9LrNtyi2y6qSrOdDI0MCJOvhtTbDYhLiB7ZlDprup3g+Ws1jvSnBqVt4lAwW4ozBt5K5lJ1OsSN/sirfQnFEObR9lxA8dSvubT+enduh1i0bJsJ6zs9NfpQWJ4TlUvpoJ+ldjlBfDHpft/WnHEh+pf8Ah+oqovBElkyh8Y933UOg/WJz16k8jy2q938feKGRv1ibe11n4UyR1EbCPCKgT+Zivfd/SfvrpPf5AfWrFRDzHvrq97XU/wCmuoAYxU0WasW0SNK9w7drWlYwc0Niz2D4r9avZqGxT9kz1X61LYIO4KvYMITtuwHL+E0cy/uH+sf+NC8BPYPl8qYs1SWBPaG+Q+9KRcDLevxSkNo6nskDcuf2h3VpXas1wRv/AOrFGftL8C4oBMfDv9YfGD/fQWPCl7S9sHOSOxvCNzBjnTH1lC46527P8Z/2PSoLZJE/i/pNI+IJJT+H60g9LPSPFWsS6WrmVAiGMinUsA2pHQzWjxoEr4H500gb9gV/KFRRGbM09csLE+eagMZg80gZwdIIuQoOmoQJr4FqcerBrOcd40cO7BgSswuQLOiIxktv7VKSb4KhLaCcSs/rH8V/2iguIY31bvbw4tsyEq2cZrpKmCVDDKB3AedWNxu2zIGW4XuZCD2MoDkhJ05ACY51Vd4thnd29Qc4l2IVM0+sCEgzM5mnwpR02uUOWonwCYb0iZj+sto459kI/kygR5g1qOD2QMRYZM2VmtOs+1lfK0GNJhoNJ/RnglrEXEg3PVurtJy5wVLDXcaleQNarG2Uw122FR3yIhEsAOwr5QYQ/wDbE+NQ45se/FGg9Kf/AG50jtryidDQXA0KWbexzsT7RELoCYAg6xoetQ4li/W4QuUCH1mWBr7JImYG9E8PT9Rh25gR7zP9orSLuVmb/CiGCLm6AFt7uBmDNMAjrvFNmF0bIn8t10+SmgOHf4w8X+TU9NaS5ISwAG84DZ0IAR2P61nBCjUQy67+FYvE4B3fMsRAHz5AVucd7L/5V35CsDjbj5+y7qMo0V2A9wNZyZpBc0aH0bwDJnzEahdg52zb9nvppjuH+stm2HAJLE9k6eyBoY6GkHo6jPnzPc0Cx+scb5p2bwp+WVLYLu2XORLs7mSyqoHtGZeKItBJPyJePYDJgzbJBNu3bEjYlWUSPKazPo/bZbyMFbTnBjTtDXxUVsuMZWw7OpDAIHQwYnYGGAPM1lsBi3d1RssHNsonRSfpR5HnabPiOFIe2YIUX0MwSIkxECmXELea04WZKmJVh8WAA86W4wsronYKm8i+wA0B5Go/hjbnU+OWQli41tAHCMVKqszHhFVGiHZnC3f8R91DqRnTUe0PtGlCcZvMAJZSFGYlEAJ+0wOSAJ69agl685dGfPmAyAC12SASTuJ5e6lf0wa/o1D4+2GKltRoRlb89ageI282XMJ65dOXTxFZTEcIxLS2Z9DGY+rkZuR7fcfdVNjhmJY/bQADd0Bnwz/nvp2/RNG5zju/prqx/wCi3/8AvN/+hfo9dT3I07U/X6PrCqRyPuNL7yEMdDv0NKh6Ttmywu/JR3bdo9R/UKr4vxgymW7MHM2VVAIykBS4PZ7TKfKsF1Gm/f8AhDYeVbofdQeMQspC6lWWR03394pA/GbgylWYwFMFhBnTNMxoee2jTESKf/Ud5pIKa5TJ0GpMaCdjkPfJjcULWTWEydxtuDkqmqnlyoheIK0kBtDBkZddvtRp37Gvmt/jdzJlZ9AJIWOzI3JkzqN/3qXYfirtOZySSNCcxBZIhQZn7YA1Gg02pqTabr9j3H1i5jVG5jxKj5mszwPGIt/FOWUBn0JZRIzvzJE6RtWCu4/NmUMCCxVZMwpkQQf4iQIggDnBF+JuOkOAYPZAUakToNBOoHd46iqW6nwG4+pni1v9oaCdGU845HeeVBY/iyHKwdRlJaSy6AoRtPfXzNuIHKcodSdTCdokwSsxI7+Rgd9Q/TCyiUbsqQP1bZhtlgxEbypMbamp+f0LeH+kOFa7iGdAHDLbUEOnaIZSQBvOsmvouItNK6cvrXyzhnELpxFvMpEuvaZcwAkkHtAjeDrOo863eK4lfDgBxETJRJ3/AIa0Uq/L9DScuButlulYf00Rg50bdvZnnbtxt50/HEbx/wDm9y2//GkPHLj3HCNfUFVBl9PaJ2yD93pT3JtFNNIT28M7XMMQH2wvhuZzD51LDYVle8XDkFHWO9rwCEa7AkT3UzwuG7dhvXIQnqs2ra5CQ0DLOvLy2okYI5rn69O0BEE/91bn2ivIEedW2iKYT6EXFt27dxz2Et3CznYfrHGpEgeZo/jfEFuXVuWXt3ECAGCC2pbsgE6e1r0176TX+C3/ANH9Wtt7hyOobsgEszMN3JjtbzyrPYP0UxyNmFqI5BhvPj0J99YSipJq/JUk2kfR1dWwZVWVmNwmF101MyBFN8NaK4axPUfWsViuBYnIhZM5J9lVIK6HWTObptNav0ewqoiK6ojhZytAeMzGSu8THupaLe7ayn+FhHD/APGHi/yanppfwqwrOjDKZzGQxO4PQ06f1a+09tfFh9TW7WSExXjyMjyYHqrkn+WsFiQpYFWzAqNYjrymvoeNvYZ0ZPX2e0rLo6z2hl5T16GsfhGwtoC0dSpIkpnHWA6IFIG2w26isppuSzguEmgj0YGtzwX5tTPiVxlVAIgs8ggHUZCpg6d/uqXBMbhVZgGTVdvVtOh6ZZ5156RYu0UU2yeyTINt1BzADQ5Insj76aVLkblbyhXib7tauJpHq2AUKB4AAd9Z7hVthdSVI9vcH9hqLHFXUewskxGYwRrzKjoNO+iF4wY7VpfAXNd407BpL7HdrCNRxO2fWWzBj16GY/eNMOJ2WNp+yfYbcabUFjOMvkUtZQaoZ9adCO0DBQSNBV74+6VIJswQQf1bncdc/jTUoq8ktSfgzKXCogLbjX7AO/jUsNbBcEomk/Z6Ke/uoEcTtk/aXxR48Jg1anErQ19bbH8SvGoiDKRzoW4fxOu30U5Ne0ySem4B219o1SWRXdHzAyAZgjQkE6CrWxFgkEvh50jtleemhIq82kukuDackmSl2Nf5XHupyaSzgcatc/YIbuDHtNBgfYPMSPs9IrqL/QB/20PL2+mn7ddU3H2jTe/b/wBMve4FcJz5nVh0vWgOX2Rm7vGo/wDRn3Z/EtdJJ0O+VJ2nanhbaCT00j6d1WWg7RkRyd4Akj3ax5V5a6ib4RyKLZnv+kgHV1MzpmuHUiDoEURt567611vglsHVgR3K5EyNybgG4B8h0p2+CuFjJS2f3mlvHKs69xAodrdlR277MZ2UKGHLlmPLoK6ILXkuKHtXkXnhFjmQR/lJBjlJZqi9jDrBgyNNMgjuEWjyiibvErAnJZz97yZ8QSR/pqocdujRAlsdFUf8fCto9PqP8mDUSy1kPs4a8e/OwB75CAfKiv0VY/8AbZR1fEP8gZ+FJrl+63tO2u+sTz5ab1R6qTLGfGtF09eRUh0fUD2lw6/zu59xiaHuNhh7Qw57hYYn35zQi2l6CqryDoPKtFppDwEri8IDOTIQdGt21U+Oo+lRxGPw77NdJiPbRD/pAIpU9uhLtgdKT0E3dv8A0qM6VUNbly0NfU3G72v3Pvqi9jxyw6E9Xd2PxbxpUFdfZJHgY+FSGMuDeG8Rr7xFHYXtv/pa1V6CH4lc5JaXwVvqxoR8beJ9uP4QBVyY1ftIR4Gfgfvq9L1lvtR4gj4wRVbEuEPcn5I4TieIB/xbn9bD60ztcYvDd3J72Boa3aQ+yVPgwNECwo+wT4n8KVFpBF/jrkasSe8mtP6H4rOpYx7Trvr7KHQGs/Y4OzrmFu2Adg1w5vJVBMxyoHjF25bs5ES9aYXJzIjrIyEe1K9mY57jamlkzk7TSNvwvAITblAZH7II0Xw606XBIPZtouseyoMHofvrNejuPtn1SI+dlXKYaSMqbmZPnt8a0d7GIgzOyKJgy8GDtGupnSKiQ0mXFJGqqvUbkTEjnzrEpiZdlIYS76kCNzueY0p/d45aaFQF227CSTJgamOXwrIjhOOLMUDqCxPbRRuToSxAjvB76irKSo0PAEjEGWQn1Z5a6spHLupv6ROotaye0NgANGAI37xWe4LhMTZcPce0sCD22nUgnZWXYbzTLG3EugrceRpMJmDQQRDEkDxy1STsTa9maxeLByhUf2gZAkCPf1+FTbEAKC0z1KzzJ9+9M79vDAQlthtrm366f8UFcFgfZcd4Yj+76VTVsSdLwaLGcQR7KqnbbJICLLbbCJ8O+rW4u7aJhrn85VPDRnnv25Gs/huMvbTIklZJ7bFjrHhppt41W3ELjbkjwAFHbE9RIMscHciXNtAN5csf9IiaHxOGymA2YciJH+kmfpQzXSdyT4kmvVet0n7MXT4JhO8+81zknclvHX513rKiX7hTaTFdHkDu9y/dXle+srqWyPoe5jy5xTB2vYT1jdYza9ZeF9wpdjPSq44yoqosEdSO8bL8KzwFSC1MdGEeEPcyGIvO/tOxHTl7hpVS2j30YFr0GtP6JKLeHP5iiFw9TWrBSAo9T3176kdTREVwFKgKfUjvqJw46milWvWFFAL3wo76pfBr30zZRVDp5/CgBY2CXvrx8AnRvfFMSkcq9FACVsEn7J99Q/QkP402IPODUWtd0UwFo4cn7PxNXW8OUPYdx3ZjHu1FFC1G0jzqQmkFnuHxLruA3+k+9SKOwmKQey920QfsQV1JJ5A7knfnQQPhUg350pNFKTQxvu7/APyYe4eRu2zPhJVo99M8DetoATbwoMDVVDHNzg5Tp50gRh1q/MKnah72Pr/HzEB2jooCr4bn5UsucSJ5HzYn7qBfxod7sUbULcw5sUeUDyE1E3GPOhEvVb6wU6FuZJvEmojwr3NXgNOhWXJU6rDgb1L1nhRQHE14K7N3V4bg61QE68mvA8868DVQiU11eV1AAINSBrq6gCQFegV1dQBIGprXV1AEwakDFdXUmMmGFehhXV1SB40VAiurqAIMe6qyAa8rqaAgR3moExvXV1ID0sKhnrq6kBFvGvADXV1MC1Eq0Cva6kBW48aHfzrq6mgJgHkagSa6upoD1bhFem4a9rqYHKakWrq6gDz1hqUTzryuoQiDAiuF0iurqYEv0hq6urqAP//Z" class=""/>
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