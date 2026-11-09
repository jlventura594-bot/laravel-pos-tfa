<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            ['full_name' => 'Ana Santos', 'email' => 'ana@example.com', 'phone' => '09170000001'],
            ['full_name' => 'Marco Reyes', 'email' => 'marco@example.com', 'phone' => '09170000002'],
            ['full_name' => 'Sofia Cruz', 'email' => 'sofia@example.com', 'phone' => '09170000003'],
            ['full_name' => 'Luis Garcia', 'email' => 'luis@example.com', 'phone' => '09170000004'],
            ['full_name' => 'Mia Mendoza', 'email' => 'mia@example.com', 'phone' => '09170000005'],
        ];

        foreach ($customers as $customer) {
            Customer::updateOrCreate(
                ['email' => $customer['email']],
                [
                    'full_name' => $customer['full_name'],
                    'phone' => $customer['phone'],
                ]
            );
        }

        $users = [
            ['username' => 'alex', 'full_name' => 'Alex Rivera', 'email' => 'alex@example.com'],
            ['username' => 'bea', 'full_name' => 'Bea Torres', 'email' => 'bea@example.com'],
            ['username' => 'carlo', 'full_name' => 'Carlo Ramos', 'email' => 'carlo@example.com'],
            ['username' => 'diana', 'full_name' => 'Diana Flores', 'email' => 'diana@example.com'],
            ['username' => 'eric', 'full_name' => 'Eric Lim', 'email' => 'eric@example.com'],
        ];

        foreach ($users as $user) {
            User::firstOrCreate(
                ['username' => $user['username']],
                [
                    'full_name' => $user['full_name'],
                    'email' => $user['email'],
                    'password' => Hash::make(Str::random(40)),
                ]
            );
        }
    }
}