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
   
     <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet"> -->


    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL::to('/'); ?>/public/assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="<?php echo URL::to('/'); ?>/public/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <style>
        body {
            background-color: whitesmoke !important;
        }

        .col-md-4.mb-0.mx-0 {
            margin-top: 60px !important;
            background: white !important;
           
            margin-right: 10px !important;
         }

        .col-sm-4 {
            text-align: center !important;
        }

        img.icon {
            width: 80px !important;
            height: 80px !important;
        }

        .card {
            background: whitesmoke;
            padding-bottom: 55px !important;
            margin-top: 8px !important;
            min-height: 94vh !important;
        }
    </style>
</head>
<body>
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row mt-3">

                <!-- column -->
                <div class="col-sm-12 ">
                    <div class="card ">
                        <div class="card-body ">
                            <form action="{{ URL('/login') }}" method="POST" class="row">
                                @csrf
                                <div class="col-md-4"></div>

                                <div class="col-md-4 mb-0 mx-0">

                                    <div class="mb-0 row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4 mb-0">
                                            <img class="icon" src="<?php echo URL::to('/'); ?>/public/assets/images/login-icon.png" />
                                        </div>
                                        <h4 class="text-center ">Login</h4>

                                        <div class="col-sm-4"></div>
                                    </div>
                                   
                                    <div class="p-3">
                                        <div class="d-flex ">
                                            <div class="form-check ">
                                                <input class="form-check-input " type="radio" name="type" value="admin" id="flexRadioDefault1" checked>
                                                <label class="form-check-label " for="flexRadioDefault1">
                                                Admin Access
                                                </label>
                                            </div>
                                            <div class="form-check mx-4">
                                                <input class="form-check-input " type="radio" name="type" value="user" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                Supervisor Access
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="email" class="col-sm- col-form-label">Email</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control"  name="email">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="password" class="col-sm- col-form-label">Password</label>
                                            <div class="col-sm-12">
                                                <input type="password" class="form-control"  name="password">
                                            </div>
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                        </div>
                                        <div class="d-grid gap-2 col-6 mx-auto mb-4">
                                            <!-- <a href="" type="submit" class="btn btn-primary">Login</a> -->
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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