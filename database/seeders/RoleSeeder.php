<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'role_name' => 'Admim'
        ]);
        Role::create([
            'role_name' => 'Editor'
        ]);
        Role::create([
            'role_name' => 'Member'
        ]);
    }
}
