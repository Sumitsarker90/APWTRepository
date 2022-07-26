<html>
    <head>
        <title>Laravel App</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
    </head>
    <body>
        <div class="container">
            @include('inc.topnav')
            <div>
                @yield('content')
            </div>
        </div>
        
    </body>
</html>