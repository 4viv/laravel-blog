<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-mail</title>
    <style>
        .mail{
            color: blue;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1 class="mail">Confirmacion de cuenta</h1>

    <p>Gracias por contactarnos</p>

    <p><strong>Nombre: </strong>{{$contacto['name']}}</p>
    <p><strong>E-mail: </strong>{{$contacto['correo']}}</p>
    <p><strong>Mensaje: </strong>{{$contacto['mensaje']}}</p>
</body>
</html>