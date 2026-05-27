<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">

    <title>Administrador</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">

    <div class="container-fluid">

        <span class="navbar-brand">
            PANEL ADMINISTRADOR
        </span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button class="btn btn-danger">
                Cerrar sesión
            </button>
        </form>

    </div>

</nav>

<div class="container mt-5">

    <div class="card shadow p-5">

        <h1 class="mb-3">
            Bienvenido {{ auth()->user()->name }}
        </h1>

        <h4 class="text-primary">
            Usuario: {{ auth()->user()->username }}
        </h4>

        <p class="mt-3">
            Rol: {{ auth()->user()->rol }}
        </p>

        <hr>

        <a href="{{ route('users.index') }}"
            class="btn btn-primary btn-lg">

            Gestionar Usuarios

        </a>

    </div>

</div>

</body>
</html>
