<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card p-4">

        <h1>Editar Usuario</h1>

        @if($errors->any())

<div class="alert alert-danger">

    <ul>

        @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif

        <form action="{{ route('users.update', $user) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nombre</label>

                <input type="text"
                    name="name"
                    value="{{ $user->name }}"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label>Usuario</label>

                <input type="text"
                    name="username"
                    value="{{ $user->username }}"
                    class="form-control">
            </div>

            <div class="mb-3">

                <label>Rol</label>

                <select name="rol" class="form-control">

                    <option value="admin"
                        {{ $user->rol == 'admin' ? 'selected' : '' }}>
                        Administrador
                    </option>

                    <option value="usuario"
                        {{ $user->rol == 'usuario' ? 'selected' : '' }}>
                        Usuario
                    </option>

                </select>

            </div>

            <button class="btn btn-primary">
                Actualizar
            </button>

            <a href="{{ route('users.index') }}"
                class="btn btn-secondary">
                Volver
            </a>

        </form>

    </div>

</div>

</body>
</html>
