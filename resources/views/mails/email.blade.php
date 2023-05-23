<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Solicitud de contacto</title>
</head>
<body>
    <p>Buenas, quisera que se pusieran en contacto conmigo.</p>
    <p></p>
    <ul>
        <li>Nombre: {{$contactUs->name}}} </li>
        <li>email: {{$contactUs->email}}</li>
        <li>Mensaje: {{$contactUs->message}}</li>
        
    </ul>
    <p></p>
    
</body>
</html>