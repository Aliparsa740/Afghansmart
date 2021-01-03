<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Co-Project</title>
    <script src="/js/jquery.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
</head>
<body>
{{View::make('header')}}
@yield('contant')
{{View::make('footer')}}
</body>
</html>
<style>
    .form-inline{
        margin-left: 550px;
        margin-bottom: 10px;
    }
    .search-row{
        margin-bottom: 10px;
    }
    .search{
        height: 20px;
        background-color: dimgrey;
        border: none;
        color: #1f7199;

    }
    .social{
        color: #cdcdff;
        margin-bottom: 15px;
    }
    .puplogin{

        margin-top: -26px;
    }

    .loginwithfacebook{
        background-color: #70a6fd;
    }
    .navbar-top{
        height: 30px;
        background-color: #515d69;
    }
    .navbar-buttom{
        background-color: black;
    }
    .nav-link{
    color: whitesmoke;
    }
</style>
