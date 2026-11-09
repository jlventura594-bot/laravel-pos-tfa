<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $customer ? 'Edit' : 'Create' }} Customer | Laravel POS</title>
</head>

<body>
    <h1>{{ $customer ? 'Edit' : 'Create' }} Customer</h1>

    <form method="POST" action="{{ $customer
    ? route('customers.update', $customer)
    : route('customers.store') }}" novalidate>
        @csrf

        @if ($customer)
            @method('PUT')
        @endif

        <p>
            <label for="full_name">Full Name</label><br>
            <input id="full_name" name="full_name" type="text" value="{{ old('full_name', $customer?->full_name) }}"
                required>
            @error('full_name')
                <br><span style="color: red">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label for="email">Email</label><br>
            <input id="email" name="email" type="email" value="{{ old('email', $customer?->email) }}" required>
            @error('email')
                <br><span style="color: red">{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label for="phone">Phone (optional)</label><br>
            <input id="phone" name="phone" type="text" value="{{ old('phone', $customer?->phone) }}">
            @error('phone')
                <br><span style="color: red">{{ $message }}</span>
            @enderror
        </p>

        <button type="submit">
            {{ $customer ? 'Update Customer' : 'Save Customer' }}
        </button>
        <a href="{{ route('customers') }}">Cancel</a>
    </form>
</body>

</html>