<!-- resources/views/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Login to Zabalite</h1>
    </header>
    <div style="text-align: center; margin-top: 50px;">
        

        @if(session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif

        <form method="post" action="{{ url('/login') }}">
            @csrf
            <label>Email:
                <input type="email" name="email" required>
            </label><br>
            <label>Password:
                <input type="password" name="password" required>
            </label><br>
            <button type="submit">Login</button>
        </form>
    </div>
    <footer>
        <p>&copy; 2023 Zabalite. All rights reserved.</p>
    </footer>
</body>
</html>
