<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Cliente</title>
    <link rel="stylesheet" href="styleFormulario.css">
    <link rel="stylesheet" href="{{ asset('css/styleFormulario.css') }}" />
</head>
<body>
    <div class="container">
        <div class="title">Modificar<br>Cliente</div>
        <div class="form">
        <form action="/modificarCliente" method="POST">
        {{ csrf_field() }}
            <div class="idofcliente">
                <div class="taginput">ID OF CLIENT</div>
                <input name="client_id" class="textinput" type="text">
            </div>
            <div class="nameclient">
                <div class="taginput">NAME</div>
                <input name="name" class="textinput" type="text">
            </div>
            <div class="lastnameclient">
                <div class="taginput">LASTNAME</div>
                <input name="lastname" class="textinput" type="text">
            </div>
            <div class="stateclient">
                <div class="taginput">STATE</div>
                <input name="state" class="textinput" type="text">
            </div>
            <div class="buttons">
                <div class="button">
                    <input type="submit" value="MODIFICAR">
                </div>
            </div>
            </form>
            <form action="/gestionarCliente" metod="GET">
            <div class="button">
                <input  type="submit" value="CANCELAR">
            </div>
            </form>
        </div>
    </div>
</body>
</html>