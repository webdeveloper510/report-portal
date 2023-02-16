<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    body{
        background-color: whitesmoke !important;
    }
    .col-md-4.mt-0 {
        margin-top: 111px !important;
    background: white;
    height: 400px;
    width: 30% !important;
   }
    .col-sm-4 {
        text-align: center !important;
    }
    img.icon {
        width: 80px !important;
        height: 80px !important
        ;
    }

</style>
</head>

<body>
    @if (\Session::has('success'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif
    <form action="{{ URL('/login') }}" method="POST" class="row p-5 pt-5 mx-5">
        @csrf
        <div class="col-md-4"></div>

        <div class="col-md-4 mt-0">
           
            <div class="mb-0 row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 ">
               <img class="icon" src="<?php echo URL::to('/'); ?>/public/assets/images/login-icon.png"/>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="p-3">
            <div class="mb-3 row">
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
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary ms-auto">Submit</button>
       
        </div>
        </div>
        <div class="col-md-4"></div>
    </form>
</body>

</html>