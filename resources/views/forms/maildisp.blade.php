<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Email</title>
</head>
<body>
    <h1>{{ $mailings['title'] }}</h1>
    <p>Hi,</p>
    <p>{{ $mailings['body'] }}</p>
    <p>This is a simple test mail using Laravel which has been sent on {{ $mailings['date'] }}.</p>
    <p>User name: {{ $mailings['name'] }}</p>
    <p>User Age: {{ $mailings['age'] }}</p>
    <p>Contact Number: {{ $mailings['contactnum'] }}</p>
    {{-- <p>Image file: <img src="/images/{{$mailings['imagefile']}}" height="50px" width="50px"></p> --}}
    <p>Thank You</p>
    <p>Regards,</p>
    <p>{{ $mailings['sender'] }}</p>
    
</body>
</html>
