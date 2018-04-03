<html>
    <head>
        <title>App Name - @yield('title')</title>
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

