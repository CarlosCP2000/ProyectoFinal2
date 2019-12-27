<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestionar Ejemplar</title>
    <link rel="stylesheet" href="styleFormulario.css">
    <link rel="stylesheet" href="{{ asset('css/styleFormulario.css') }}" />
</head>
<body>
    <div class="container">
        <div class="title">Gestionar<br>Ejemplar</div>
        
        <table>
            <tr>
                <th>TITLE</th>
                <th>ID</th>
                <th>STATE</th>
            </tr>
            @foreach($Copy as $Co)
            <tr> 
                @foreach($Book as $Bo)
                    @if($Bo->id == $Co->books_id)
                        <td>{{$Bo->title}}</td>
                        @break 
                    @endif
                @endforeach
                <td>{{$Co->id}}</td>
                <td>{{$Co->state}}</td>
            </tr>
            @endforeach
            
        </table>
            <form action="{{ url('/gestionarDatos') }}" metod="GET">
            <div class="button">
                <input  type="submit" value="Volver">
        </div>
    </div>
</body>
</html>