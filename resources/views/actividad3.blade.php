<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 3 - Uno a Muchos</title>
</head>
<body>
    {{-- Relación 1:N: $user->phones devuelve una colección de teléfonos --}}
    <h1>Usuario {{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Telefonos: </p>
    <ul>
        @foreach ($user->phones as $phone)
            <li>
                {{ $phone->prefijo }} - {{ $phone->numero }}
            </li>
        @endforeach
    </ul>
</body>
</html>
