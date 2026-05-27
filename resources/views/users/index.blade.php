<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h1 class="mb-4">Lista de Usuarios</h1>

    @if(session('success'))

<div class="alert alert-success">

    {{ session('success') }}

</div>

@endif

    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">
        Nuevo Usuario
    </a>

    <table class="table table-bordered table-hover bg-white">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

            @foreach($users as $user)

            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->rol }}</td>

                <td>

                    <a href="{{ route('users.edit', $user) }}"
                        class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <form action="{{ route('users.destroy', $user) }}"
                        method="POST"
                        style="display:inline-block">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm">
                            Eliminar
                        </button>

                    </form>

                </td>
            </tr>

            @endforeach

        </tbody>

    </table>

</div>

</body>
</html>
