<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Mail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <style>
        form{
            width:50%;
            box-shadow:2px 3px 6px rgba(0,0,0,0.7);
            border:1px solid grey;
            padding:25px;
        }
        .goback{
            margin-left:25%;
        }
        
    </style>
</head>
<body>
<div class='container-fluid pull-left goback mt-3'>
        <a class='btn btn-primary mb-3' href="{{route('indexpage')}}">Go Back</a>
</div>

<div class='d-flex justify-content-center align-items-center'>
<form action="{{ route('storepage') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class='row'>

<div class='col-lg-6 col-md-6 col-sm-12 col-12 mb-3'>
<label>First Name</label>
<input type='text' placeholder='Enter your name' required name='name' class='form-control'>
</div>



<div class='col-lg-12 col-md-12 col-sm-12 col-12 mb-3'>
<label>Age</label>
<input type='number' required placeholder='Enter your age' name='age' class='form-control'>
</div>

<div class='col-lg-12 col-md-12 col-sm-12 col-12 mb-3'>
<label>Contact Number</label>
<input type='text' placeholder='Enter your contact number' required name='contactnum' max='10' min='10' class='form-control'>
</div>

<div class='col-lg-12 col-md-12 col-sm-12 col-12 mb-3'>
<label>Profile Photo</label>
<input type='file' required name='imagefile' class='form-control'>
</div>

<div class='col-lg-12 col-md-12 col-sm-12 col-12 mb-3'>
<label>Resume</label>
<input type='file' required name='resume' class='form-control' accept='.pdf, .jpg, .png'>
</div>

<div class='col-lg-3 col-md-3 col-sm-3 col-3'>
<button type='submit' class='btn btn-success form-control'>SEND MAIL</button>
</div>

</div>
</form>
</div>

</body>
</html>