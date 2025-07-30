<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>App Name - @yield('title')</title>
    </head>
    <body>
 
        <div class="container">
            @yield('content')
        </div>
        <footer class="bg-light text-center py-4">
            <p>
               @yield('footer')
            </p>
        </footer>
    </body>
</html>