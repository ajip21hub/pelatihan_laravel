<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://unpkg.com/nes.css@2.3.0/css/nes.min.css">
        <style>
            body {
                background: #f7f7f7;
                font-family: 'IBM Plex Mono', 'Courier New', Courier, monospace;
            }
            .container, .card, .btn, .alert, .form-control {
                border-radius: 0.75rem !important;
                box-shadow: 4px 4px 0 #222, 0 0 0 2px #222;
            }
            .btn-primary, .btn-danger, .btn-success, .btn-secondary {
                border: 2px solid #222 !important;
                box-shadow: 2px 2px 0 #222;
                font-weight: bold;
                text-transform: uppercase;
                letter-spacing: 1px;
            }
            .card {
                border: 2px solid #222;
                background: #fffbe7;
            }
            .alert-success {
                background: #eaffd0;
                color: #222;
                border: 2px solid #222;
            }
            footer {
                border-top: 2px solid #222;
                background: #fffbe7;
                box-shadow: 0 -4px 0 #222;
            }
            h1, h2, h3, h4, h5, h6 {
                font-family: 'IBM Plex Mono', 'Courier New', Courier, monospace;
                font-weight: bold;
                text-shadow: 2px 2px 0 #222;
            }
        </style>
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