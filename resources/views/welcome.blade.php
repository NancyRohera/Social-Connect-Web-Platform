<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Zabalite</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Welcome to Zabalite</h1>
    </header>

    <main>
        <p>If you have an account, please <a href="{{ url('/login') }}">login</a>.</p>
        <p>If you don't have an account, you can <a href="{{ route('register') }}">Register yourself now</a>.</p>
    </main>

    <footer>
        <p>&copy; 2023 Zabalite. All rights reserved.</p>
    </footer>
</body>
</html>
