<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['username' => 'alex.rivera', 'full_name' => 'Alex Rivera'],
            ['username' => 'bea.lim', 'full_name' => 'Bea Lim'],
            ['username' => 'chris.tan', 'full_name' => 'Chris Tan'],
            ['username' => 'dani.lopez', 'full_name' => 'Dani Lopez'],
            ['username' => 'eli.garcia', 'full_name' => 'Eli Garcia'],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}