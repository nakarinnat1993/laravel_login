<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login System</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 align='center'>Login2</h2>

        @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <ul>
                <li>{{$message}}</li>
            </ul>
        </div>
        @endif
        <form action="{{url('login/checklogin')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="" class="form-control">
            </div>
            <input type="submit" value="Save" class='btn btn-success'>
        </form>
    </div>

</body>

</html>
