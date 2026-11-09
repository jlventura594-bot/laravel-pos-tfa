<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users | Laravel POS</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px 16px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('customers') }}">Customers</a> |
        <a href="{{ route('users') }}">Users</a>
    </nav>

    <h1>Users</h1>

    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <p><a href="{{ route('users.create') }}">Create User</a></p>

    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Username</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->full_name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user) }}">Edit</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No users found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>