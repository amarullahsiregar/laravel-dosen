{{-- login.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="pagestyle" href="../assets/css/main.css" rel="stylesheet" />
    <title>Login Dosen</title>
    <!-- Tambahkan CSS Anda di sini -->

    <!-- Add Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Add Tailwind -->
</head>
<body>
    <div class="login-container">
        <h1>Login Dosen</h1>
        <form method="POST" action="">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>
