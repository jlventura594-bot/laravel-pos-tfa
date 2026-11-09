<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Laravel POS</title>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('customers') }}">Customers</a> |
        <a href="{{ route('users') }}">Users</a>
    </nav>

    <h1>About Laravel POS</h1>

    <p>
        This application was developed by John Laurence Ventura
        for IT0049 Web System Technologies.
    </p>

    <p>
        It demonstrates Laravel routing, controllers, Blade views,
        database migrations, seeders, and Eloquent models.
    </p>

    <p>
        Customers and users can be created and edited through forms
        with server-side validation, error messages, and preserved input.
    </p>

    <h2>Current Progress</h2>

    <p>
        The project includes TFA5 foundations, TFA6 database integration,
        and the customer and user forms for TFA7.
    </p>

    <p>
        TFA7 is in progress. Avatar upload, thumbnail preparation,
        and avatar display are planned next.
    </p>
</body>
</html>