<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="styleHome.css">
    <link rel="stylesheet" href="{{ asset('css/styleHome.css') }}" />
</head>
<body>
    <div class="container">
        <div class="title">
            <div class="tagline">--- BIENVENIDO A BIBLIOTECA ---</div>
            <div class="logo">San Carlos</div>
            @foreach($People as $Peo)
            @if($Peo->id == 76136183)
                <div class="tagline">--- ADMI: {{$Peo->name}} {{$Peo->lastname}} ---</div>
            @endif
            @endforeach
            
        </div>
        
        <div class="menu">
            <div class="button">
                <form action="{{ url('/registrarCliente') }}" method="GET">
                @csrf
                <input type="submit" value="Registrar Cliente">
                </form>  
                <form action="{{ url('/registrarLibro') }}" method="GET">
                @csrf              
                <input type="submit" value="Registrar Libro">
                </form>
            </div>
            <div class="button">    
                <form action="{{ url('/registrarPrestamo') }}" method="GET">
                @csrf
                <input type="submit" value="Prestar Libro">
                </form>
                <form action="{{ url('/registrarDevolucion') }}" method="GET">
                @csrf
                <input type="submit" value="Devolver Libro">
                </form>
            </div>
            <div class="button">
            <form action="{{ url('/gestionarDatos') }}" method="GET">
                @csrf
                <input type="submit" value="Gestionar Datos">
                </form>
                <form action="{{ url('/lobby') }}" method="POST">
                @csrf
                <input class="submit" type="submit" value="Cerrar Sessión">
                </form>
            </div>
        </div>
    </div>
</body>
</html>