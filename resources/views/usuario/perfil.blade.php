<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">

    <title>Perfil Usuario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-primary">

    <div class="container-fluid">

        <span class="navbar-brand">
            PERFIL USUARIO
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

        <h1>
            Bienvenido {{ auth()->user()->name }}
        </h1>

        <hr>

        <h4>
            Usuario:
            {{ auth()->user()->username }}
        </h4>

        <h4>
            Rol:
            {{ auth()->user()->rol }}
        </h4>

    </div>

</div>

</body>
</html>
