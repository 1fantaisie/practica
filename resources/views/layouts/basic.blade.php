<html>
    <head>
        <title>App - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            <a href="{!! url('/projects') !!}"> Projects</a>
        @show

        <div class="container">
            <h2> @yield('content') </h2>
        </div>
    </body>
</html>