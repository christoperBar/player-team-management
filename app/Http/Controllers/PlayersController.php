<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Players;
use App\Models\Team;

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

        Players::create($anjay);
        return redirect('/players');
    }

    function createPlayerForm() {
        $teams = Team::all();
        return view('addPlayer', [
            'teams' => $teams,
            'pagetitle' => 'Add Player',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => '',
            'aktif4' => 'active'
        ]);
    }
    

    function showAllPlayers(){
        $semuaplayer = Players::with('team')->get();
        return view('playerList',[
            'players' => $semuaplayer,
            "pagetitle" => "Player List",
            "aktif1" => "",
            "aktif2" => "",
            "aktif3" => "active",
            "aktif4" => ""
    ]);
    }
    function deletePlayer(Players $player){
        $player->delete();
        return redirect('/players');
    }

    function getPlayerWithID(Players $player){
        $teams = Team::all();
        return view('updatePlayer',[
            'teams' => $teams,
            'player' => $player,
            "pagetitle" => "Update Player",
            "aktif1" => "",
            "aktif2" => "",
            "aktif3" => "",
            "aktif4" => ""
    ]);
    }

    function updatePlayer(Request $requested, Players $player){
        $validatedData = $requested->validate([
            'nama_player' => 'required',
            'umur' => 'required',
            'email' => 'required',
            'role' => 'required',
            'team_id' => 'required'
        ]);
    
        $player->update($validatedData);
    
        return redirect('/players');
    }


}
