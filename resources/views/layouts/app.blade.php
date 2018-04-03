<html>
    <head>
        <title>App Name - @yield('title')</title>
       <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body>
        @section('sidebar')
           <a href="student">Organizator </a>
            <a href="admin">Admin </a>
            
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>

