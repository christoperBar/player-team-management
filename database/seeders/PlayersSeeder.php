<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PlayersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('players')->insert([
            'nama_player' => "Landy",
            'umur' => "21",
            'email' => "landygaming123@gmail.com",
            'role' => "Duelist",
            'team_id' => "6"
        ]);    
        DB::table('players')->insert([
            'nama_player' => "Famous",
            'umur' => "23",
            'email' => "famouszgaming1244@gmail.com",
            'role' => "Duelist",
            'team_id' => "8"
        ]);  
    }
}

