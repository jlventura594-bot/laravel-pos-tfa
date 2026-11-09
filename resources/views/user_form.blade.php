<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $user ? 'Edit' : 'Create' }} User | Laravel POS</title>
</head>

<body>
    <h1>{{ $user ? 'Edit' : 'Create' }} User</h1>

    <form method="POST" action="{{ $user
    ? route('users.update', $user)
    : route('users.store') }}" novalidate>
        @csrf

        @if ($user)
            @method('PUT')
        @endif

        @foreach ([
                'username' => 'Username',
                'full_name' => 'Full Name',
                'email' => 'Email',
            ] as $field => $label)
            <p>
                <label for="{{ $field }}">{{ $label }}</label><br>
                <input id="{{ $field }}" name="{{ $field }}" type="{{ $field === 'email' ? 'email' : 'text' }}"
                    value="{{ old($field, $user?->{$field}) }}" required>
                @error($field)
                    <br><span style="color: red">{{ $message }}</span>
                @enderror
            </p>
        @endforeach

        @if (!$user)
            <p>
                <label for="password">Password (at least 8 characters)</label><br>
                <input id="password" name="password" type="password" autocomplete="new-password" required>
                @error('password')
                    <br><span style="color: red">{{ $message }}</span>
                @enderror
            </p>

            <p>
                <label for="password_confirmation">Confirm Password</label><br>
                <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password"
                    required>
            </p>
        @endif

        <button type="submit">
            {{ $user ? 'Update User' : 'Save User' }}
        </button>
        <a href="{{ route('users') }}">Cancel</a>
    </form>
</body>

</html>