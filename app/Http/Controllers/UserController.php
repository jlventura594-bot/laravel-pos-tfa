<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'full_name' => 'Alex Rivera', 'username' => 'alex', 'role' => 'Admin'],
            ['id' => 2, 'full_name' => 'Bea Torres', 'username' => 'bea', 'role' => 'Manager'],
            ['id' => 3, 'full_name' => 'Carlo Ramos', 'username' => 'carlo', 'role' => 'Cashier'],
            ['id' => 4, 'full_name' => 'Diana Flores', 'username' => 'diana', 'role' => 'Cashier'],
            ['id' => 5, 'full_name' => 'Eric Lim', 'username' => 'eric', 'role' => 'Staff'],
        ];

        return view('users', [
            'users' => $users,
        ]);
    }
}