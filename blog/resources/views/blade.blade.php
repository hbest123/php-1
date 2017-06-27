<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        @section('sidebar')
     
           这是父模板的sidebar
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>