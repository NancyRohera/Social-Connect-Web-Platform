<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Home</h1>
    @if (Auth::check())
            <!-- Display user's name and other information if logged in -->
            <p>Welcome, {{ Auth::user()->name }}!</p>
            <p>Email: {{ Auth::user()->email }}</p>
            <p>If you would like to connect to facebook click the link below</p>
            <a href="{{ route('facebook.login') }}">Connect to Facebook</a>

            <!-- Add more user details as needed -->
        @else
            <!-- Show "Connect to Facebook" button if not logged in -->
            <a href="{{ route('connectToFacebook') }}">Connect to Facebook</a>
            
        @endif
</body>
</html>