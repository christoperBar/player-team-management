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
        $teams = Team::all()->sortBy('nama');
        return view('addPlayer', [
            'teams' => $teams,
            'pagetitle' => 'Add Player',
            'aktif1' => '',
            'aktif2' => '',
            'aktif3' => '',
            'aktif4' => 'active'
        ]);
    }
    

    function showAllPlayers(Request $request){
        if($request->has('search')){
            $semuaplayer = Players::where('nama_player', 'like', '%'.$request->search.'%')->with('team')->get();
        }
        else{
            $semuaplayer = Players::with('team')->get()->sortBy('team_id');
        }    
        
        return view('playerList',[
            'players' => $semuaplayer,
            "pagetitle" => "Player List",
            "aktif1" => "",
            "aktif2" => "",
            "aktif3" => "active",
            "aktif4" => "",
            "indek"=> "1"
    ]);
    }
    function deletePlayer(Players $player){
        $player->delete();
        return redirect('/players');
    }

    function getPlayerWithID(Players $player){
        $teams = Team::all()->sortBy('nama');;
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
