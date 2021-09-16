<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


    {{-- css --}}
    @yield('css')

    <title>@yield('title')</title>
    </head>

    <@yield('Header')
    <hr>


    <body>
        <div style="margin-left: auto; margin-right: auto">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

        @yield('content')
        <div align="center">
            <p>@yield('image1')</p>
        </div>
        <p>@yield('button1')</p>

        <div align="center">
        @yield('content2')
            <p>@yield('image2')</p>
        </div>
        <p>@yield('button2')</p>
        
        <div style="margin-right: 3%; margin-left:3%; border: 1px black;">
        @yield('table1')
        </div>
        </div>

        <div style="margin-right: 35%; margin-left:35%; border: 1px black;">
            @yield('table2')
        </div>

        @yield('js')

        <br>
        <br>
        <br>
        <hr>
        <i><footer style="text-align: center; font-size: 4px;">@yield('footer')</footer></i>
    </body>
</html>