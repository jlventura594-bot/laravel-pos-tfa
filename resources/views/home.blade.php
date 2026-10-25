<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Laravel POS</title>
</head>

<body>
    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('customers') }}">Customers</a> |
        <a href="{{ route('users') }}">Users</a>
    </nav>

    <h1>Welcome to Laravel POS</h1>
    <p>A point-of-sale application for organizing customer and user information.</p>
</body>

</html>