<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $lihatTeam = [
        'nama',
        'alamat',
        'telp',
        'kota'
    ];

    public function teamPlayers(){
        return $this->hasMany(Players::class, 'team_id');
    }

}