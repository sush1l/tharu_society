<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'title' => 'Admin',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Role::insert($roles);
    }
}
