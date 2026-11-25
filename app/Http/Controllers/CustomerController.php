<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 'C001', 'name' => 'Alyssa Mercado', 'email' => 'alyssa@example.com'],
            ['id' => 'C002', 'name' => 'Brian Santos', 'email' => 'brian@example.com'],
            ['id' => 'C003', 'name' => 'Carla Reyes', 'email' => 'carla@example.com'],
            ['id' => 'C004', 'name' => 'Daniel Cruz', 'email' => 'daniel@example.com'],
            ['id' => 'C005', 'name' => 'Erika Flores', 'email' => 'erika@example.com'],
        ];

        return view('customers.index', ['customers' => $customers]);
    }
}