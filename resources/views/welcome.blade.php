<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to My Website</h1>
    <p>Email : {{ $email }}</p>

    <table class="table m-3">
        <thead>
            <tr>
                <th>NO</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($users as $user) --}}
            @for ($i = 0; $i < 10; $i++)
            <tr>
                <td>{{ $i + 1 }}</td>
            </tr>
            

        @endfor
            {{-- @endforeach --}}
        </tbody>
       
    </table>
       
</body>
</html>