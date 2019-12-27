<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="styleLogin.css">
    <link rel="stylesheet" href="{{ asset('css/styleLogin.css') }}" />
</head>
<body>
    <div class="container">
        <div class="title">Login</div>
        <div class="form">
            <form action="{{ url('/home') }}" method="POST">
            @csrf
            <div class="username">
                <div class="taginput">USERNAME</div>
                <input name="username" class="textinput" type="text">
            </div>
            <div class="password">
                <div class="taginput">PASSWORD</div>
                <input name="password" class="textinput" type="password">
            </div>
            <div class="buttons">
                <div class="button">
                    <input type="submit" value="INGRESAR">
                </div>
            </div>
            </form>
            <form action="/registrarAdministrador" method="GET">
            @csrf
                <div class="button">
                    <input type="submit" value="REGISTRAR">
                </div>
            </form>
            <div class="return">
                    <a href="{{ url('/lobby') }}">Volver</a>
                </div>
        </div>
    </div>
</body>
</html>