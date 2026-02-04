<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FirstUserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'email' => 'hottisonsiregar78@gmail.com',
                'name'  => 'Hottison Siregar',
                'role'  => 'admin',
            ],
            [
                'email' => 'idosiregar2006@gmail.com',
                'name'  => 'Ido Refael Siregar',
                'role'  => 'admin',
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                [
                    'name'     => $user['name'],
                    'password' => Hash::make('Asdfg123@#'),
                    'role'     => $user['role'],
                ]
            );
        }
    }
}
