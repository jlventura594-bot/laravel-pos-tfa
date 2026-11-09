<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        return view('users', [
            'users' => User::orderBy('id')->get(),
        ]);
    }

    public function create()
    {
        return view('user_form', ['user' => null]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => ['required', 'string', 'max:50', 'unique:users,username'],
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create($data);

        return redirect()->route('users')
            ->with('success', 'User created successfully.');
    }

    public function edit(User $user)
    {
        return view('user_form', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'username' => [
                'required', 'string', 'max:50',
                Rule::unique('users', 'username')->ignore($user),
            ],
            'full_name' => ['required', 'string', 'max:255'],
            'email' => [
                'required', 'email', 'max:255',
                Rule::unique('users', 'email')->ignore($user),
            ],
        ]);

        $user->update($data);

        return redirect()->route('users')
            ->with('success', 'User updated successfully.');
    }
}