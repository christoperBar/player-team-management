<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Christoper Barnaby",
            'email' => "chbar102804@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt("teper123"),
            'role_id' => 1,
            'is_login' => '0',
            'is_active' => '1',
            'remember_token' => Str::random(10)
        ]);  

        DB::table('users')->insert([
            'name' => "Jerry Tri",
            'email' => "jerry1010@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt("teper123"),
            'role_id' => 2,
            'is_login' => '0',
            'is_active' => '1',
            'remember_token' => Str::random(10)
        ]);  

        User::factory(3)->create();
    }
}
