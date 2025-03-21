<!-- filepath: c:\xampp\htdocs\Proyecto-Final-Laravel\resources\views\layouts\app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Mi Aplicación Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>