<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .contact_form.my-5.p-4 {
    background: whitesmoke;
}
    </style>
</head>
<body>
    <div class="">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="contact_form my-5 p-4">
                        <h1>Contact US</h1>
                        <form action="{{ route('email.send') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="textarea" class="form-control" name="subject" placeholder="Enter Subject">
                            </div>
                            <div class="mb-3">
                            <textarea class="form-control" name="message"></textarea>
                           </div>
                            <button type="submit" class="btn btn-primary">Submit</button>          
                        </form>                
                </div>  
            </div>
            <div class="col-md-4"></div>
        </div>
        
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>