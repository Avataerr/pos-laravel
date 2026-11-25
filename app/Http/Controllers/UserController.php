<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 'U001', 'name' => 'Alex Rivera', 'email' => 'alex@example.com', 'role' => 'Admin'],
            ['id' => 'U002', 'name' => 'Bea Lim', 'email' => 'bea@example.com', 'role' => 'Cashier'],
            ['id' => 'U003', 'name' => 'Chris Tan', 'email' => 'chris@example.com', 'role' => 'Cashier'],
            ['id' => 'U004', 'name' => 'Dani Lopez', 'email' => 'dani@example.com', 'role' => 'Manager'],
            ['id' => 'U005', 'name' => 'Eli Garcia', 'email' => 'eli@example.com', 'role' => 'Cashier'],
        ];

        return view('users.index', ['users' => $users]);
    }
}