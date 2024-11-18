<!-- resources/views/admin/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Bienvenido, Administrador</h1>
    <p>Esta es la vista del administrador.</p>

    <!-- Botón de logout -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" style="background: red; color: white; padding: 10px; border: none; cursor: pointer;">
            Logout
        </button>
    </form>
</body>
</html>
