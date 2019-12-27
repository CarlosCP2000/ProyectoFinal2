<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lobby</title>
    <link rel="stylesheet" href="styleLobby.css">
    <link rel="stylesheet" href="{{ asset('css/styleLobby.css') }}" />
</head>
<body>
    <div class="container">
        <div class="title">
            <div class="tagline">BIBLIOTECA</div>
            <div class="logo">San Carlos</div>
        </div>
        <div class="button">
            <button><a href="{{ url('/login') }}">INICIAR SESIÓN</a></button>
        </div>
    </div>
</body>
</html>