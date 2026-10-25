<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'full_name' => 'Ana Santos', 'email' => 'ana@example.com'],
            ['id' => 2, 'full_name' => 'Marco Reyes', 'email' => 'marco@example.com'],
            ['id' => 3, 'full_name' => 'Sofia Cruz', 'email' => 'sofia@example.com'],
            ['id' => 4, 'full_name' => 'Luis Garcia', 'email' => 'luis@example.com'],
            ['id' => 5, 'full_name' => 'Mia Mendoza', 'email' => 'mia@example.com'],
        ];

        return view('customers', [
            'customers' => $customers,
        ]);
    }
}