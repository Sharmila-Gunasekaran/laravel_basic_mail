<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL MAIL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    {{-- <div class='container'>
        <nav class='navbar-brand bg-dark'>
        LARAVEL MAIL FUNCTION
        </nav>
    </div> --}}
    <div class='container'>
        <a class='btn btn-primary mb-3 mt-3' href="{{route('createpage')}}">Go to Form</a>
    </div>

<table class='table table-bordered container'>
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Age</th>
            <th>Contact number</th>
            <th>Image file</th>
            <th>Resume</th>
        </tr>
    </thead>
    <tbody>
        @foreach($details as $detail)
        <tr>
            <td>{{$detail->id}}</td>
            <td>{{$detail->name}}</td>
            <td>{{$detail->age}}</td>
            <td>{{$detail->contactnum}}</td>
            <td><img src='/images/{{ $detail->imagefile }}' width="100px" height="100px"></td>
            <td>
            <p>{{ $detail->name}}_resume.{{pathinfo($detail['resume'], PATHINFO_EXTENSION)}}</p>
            <p><a href="/imagess/{{ $detail->resume }}">View</a> / <a href="/imagess/{{ $detail->resume }}" download>Download</a></p>        
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
