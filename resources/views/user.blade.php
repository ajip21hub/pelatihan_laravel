<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User}</title>
</head>
<body>
    
    <h1> Jumlahnya : {{ $jumlah}}</h1>

    @for ($i = 0; $i < 10; $i++)
        The current value is {{ $i }}
        @endfor
</body>
</html>