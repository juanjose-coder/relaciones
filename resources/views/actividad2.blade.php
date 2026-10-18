<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2 - Uno a Uno</title>
</head>
<body>
    {{-- Relación 1:1: $user->phone devuelve UN solo teléfono --}}
    <h1>Usuario {{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Prefijo: {{ $user->phone->prefijo }}</p>
    <p>Nro Telefono: {{ $user->phone->numero }}</p>
</body>
</html>
