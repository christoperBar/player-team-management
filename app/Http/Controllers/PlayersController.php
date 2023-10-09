<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Players;

class PlayersController extends Controller
{
    function createPlayer(Request $requested){
        $anjay = $requested->validate([
            'nama_player'=>'required',
            'umur'=>'required',
            'email' => 'required',
            'role' =>'required',
            'team_id' => "required"


        ]);

        $anjay = strip_tags($anjay['nama_player']);
        $anjay = strip_tags($anjay['umur']);
        $anjay = strip_tags($anjay['email']);
        $anjay = strip_tags($anjay['role']);
        $anjay = strip_tags($anjay['team_id']);

        Players::create($anjay);
        return redirect('/');
    }
}
