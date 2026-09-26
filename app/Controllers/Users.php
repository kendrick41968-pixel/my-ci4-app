<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'juan123',
                'full_name' => 'Juan Dela Cruz',
                'role'      => 'Administrator',
            ],
            [
                'username' => 'maria456',
                'full_name' => 'Maria Santos',
                'role'      => 'Cashier',
            ],
            [
                'username' => 'carlos789',
                'full_name' => 'Carlos Reyes',
                'role'      => 'Manager',
            ],
            [
                'username' => 'ana101',
                'full_name' => 'Ana Garcia',
                'role'      => 'Cashier',
            ],
            [
                'username' => 'pedro202',
                'full_name' => 'Pedro Martinez',
                'role'      => 'Staff',
            ],
        ];

        $data = [
            'title' => 'User Accounts',
            'users' => $users,
        ];

        return view('users/index', $data);
    }
}