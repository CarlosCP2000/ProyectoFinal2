<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestionar Libros</title>
    <link rel="stylesheet" href="styleFormulario.css">
    <link rel="stylesheet" href="{{ asset('css/styleFormulario.css') }}" />
</head>
<body>
    <div class="container">
        <div class="title">Gestionar<br>Libros</div>
        
        <table>
            <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>AUTHOR</th>
                <th>PAGES</th>
                <th>COPIES</th>
                <th>CATEGORY</th>
            </tr>
            @foreach($Book as $Bo)
            <tr> 
                <td>{{$Bo->id}}</td>
                <td>{{$Bo->title}}</td>
                <td>{{$Bo->author}}</td>
                <td>{{$Bo->number_pages}}</td>
                <td>{{$Bo->number_copies}}</td>
                <td>{{$Bo->category}}</td>
            </tr>
            @endforeach
            
        </table>
            <form action="{{ url('/modificarLibro') }}" metod="GET">
            <div class="button">
                <input  type="submit" value="Modificar">
            </div>
            </form>
            <form action="{{ url('/gestionarDatos') }}" metod="GET">
            <div class="button">
                <input  type="submit" value="Volver">
            </div>
            </form>
    </div>
</body>
</html>