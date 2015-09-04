<!DOCTYPE html>
<html>
<head>
    <title>BookStack</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="/css/app.css">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,100,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="/js/common.js"></script>

</head>
<body class="@yield('body-class')">

@if(Session::has('success'))
    <div class="notification anim pos">
        <i class="zmdi zmdi-mood"></i> <span>{{ Session::get('success') }}</span>
    </div>
@endif

@if(Session::has('error'))
    <div class="notification anim neg stopped">
        <i class="zmdi zmdi-alert-circle"></i> <span>{{ Session::get('error') }}</span>
    </div>
@endif

<section class="container">
    @yield('content')
</section>

</body>
</html>
