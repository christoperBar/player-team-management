<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_player',
        'umur',
        'email',
        'role',
        'team_id'
    ];

    public function team() {
        return $this->belongsTo(Team::class, 'team_id');
    }

}
