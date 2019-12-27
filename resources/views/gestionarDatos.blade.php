<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestion de Datos</title>
    <link rel="stylesheet" href="styleHome.css">
    <link rel="stylesheet" href="{{ asset('css/styleHome.css') }}" />
</head>
<body>
    <div class="container">
        <div class="title">
            <div class="tagline">--- GESTIÓN DE DATOS - BIBLIOTECA ---</div>
            <div class="logo">San Carlos</div>
            
        </div>
        
        <div class="menu">
            <div class="button">
                <form action="{{ url('/gestionarCliente') }}" method="GET">
                @csrf
                <input type="submit" value="Gestionar Cliente">
                </form>  
                <form action="{{ url('/gestionarLibro') }}" method="GET">
                @csrf              
                <input type="submit" value="Gestionar Libro">
                </form>
            </div>
            <div class="button">    
                <form action="{{ url('/gestionarEjemplar') }}" method="GET">
                @csrf
                <input type="submit" value="Gestionar Ejemplares">
                </form>
                <form action="{{ url('/gestionarPrestamo') }}" method="GET">
                @csrf
                <input type="submit" value="Gestionar Préstamos">
                </form>
            </div>
            <div class="button">
            <form action="{{ url('/gestionarDevolucion') }}" method="GET">
                @csrf
                <input type="submit" value="Gestionar Devoluciones">
                </form>
                <form action="{{ url('/home') }}" metod="GET">
                <div class="button">
                    <input  type="submit" value="Volver">
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>