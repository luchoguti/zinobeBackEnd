<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lumen/bootstrap.min.css" integrity="sha384-GzaBcW6yPIfhF+6VpKMjxbTx6tvR/yRd/yJub90CqoIn2Tz4rRXlSpTFYMKHCifX" crossorigin="anonymous">
    </head>
    <body>
    @section('sidebar')
    @show
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>