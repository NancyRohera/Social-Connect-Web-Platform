<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Register to Zabalite</h1>
    </header>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <h2>Register</h2>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>

        <label for="University_id">University ID:</label>
        <input type="text" id="University_id" name="University_id" value="{{ old('University_id') }}" required>

        <label for="phone_no">Phone Number:</label>
        <input type="text" id="phone_no" name="phone_no" value="{{ old('phone_no') }}" required>

        <label for="semester">Semester:</label>
        <input type="text" id="semester" name="semester" value="{{ old('semester') }}" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>

        <button type="submit" action="{{ url('/login') }}">Register</button>
    </form>
    <footer>
        <p>&copy; 2023 Zabalite. All rights reserved.</p>
    </footer>

</body>
</html>
