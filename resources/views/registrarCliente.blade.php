<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Cliente</title>
    <link rel="stylesheet" href="styleFormulario.css">
    <link rel="stylesheet" href="{{ asset('css/styleFormulario.css') }}" />
</head>
<body>
    <div class="container">
        <div class="title">Registrar<br>Cliente</div>
        <div class="form">
            <form action="/registrarCliente" method="POST">
            {{ csrf_field() }}
            <div class="name">
                <div class="taginput">NAME</div>
                <input name="name" class="textinput" type="text">
            </div>
            <div class="lasrname">
                <div class="taginput">LASTNAME</div>
                <input name="lastname" class="textinput" type="text">
            </div>
            <div class="dni">
                <div class="taginput">N° DNI</div>
                <input name="id" class="textinput" type="text">
            </div>
            <div class="buttons">
                <div class="button">
                    <input type="submit" value="REGISTRAR">
                </div>
            </div>
            </form>
            <form action="{{ url('/home') }}" metod="GET">
            <div class="button">
                <input  type="submit" value="CANCELAR">
            </div>
            </form>
            
            
        </div>
    </div>
</body>
</html>