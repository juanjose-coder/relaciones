<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 4 - Muchos a Muchos</title>
</head>
<body>
    <h1>Usuario {{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>

    {{-- Relación 1:N --}}
    <p>Telefonos: </p>
    <ul>
        @foreach ($user->phones as $phone)
            <li>
                {{ $phone->prefijo }} - {{ $phone->numero }}
            </li>
        @endforeach
    </ul>

    {{-- Relación N:N (tabla pivote role_user) --}}
    <p>Roles asignados: </p>
    <ul>
        @foreach ($user->roles as $role)
            <li>
                {{ $role->nombre }}
            </li>
        @endforeach
    </ul>
</body>
</html>
