<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complete</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">
</head>

<body>

    <div class="container">
        @if(isset(Auth::user()->email))
        <div class="alert alert-success success-block">
            <strong>Welcome {{ Auth::user()->name }}</strong>
            <br />
            <a href="{{ url('login/logout') }}">Logout</a>
        </div>
        @else
        <script>
            window.location = "/login";
        </script>
        @endif

        <br />
    </div>
</body>

</html>
