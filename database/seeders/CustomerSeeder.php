<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            ['full_name' => 'Alyssa Mercado', 'email' => 'alyssa@example.com', 'phone' => '09175550101'],
            ['full_name' => 'Brian Santos', 'email' => 'brian@example.com', 'phone' => '09175550102'],
            ['full_name' => 'Carla Reyes', 'email' => 'carla@example.com', 'phone' => '09175550103'],
            ['full_name' => 'Daniel Cruz', 'email' => 'daniel@example.com', 'phone' => '09175550104'],
            ['full_name' => 'Erika Flores', 'email' => 'erika@example.com', 'phone' => '09175550105'],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}