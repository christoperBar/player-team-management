<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamsController extends Controller
{
    function createTeam(Request $requested){
        $gurinjay = $requested->validate([
            'nama'=>'required',
            'alamat'=>'required',
            'telp' => 'required',
            'kota' =>'required',
        ]);

        Team::create($gurinjay);
        return redirect('/');
    }

    function showAllTeams(){
        $semuatim = Team::all();
        return view('teamList',[
            'teams' => $semuatim,
            "pagetitle" => "Team List",
            "aktif1" => "active",
            "aktif2" => "",
            "aktif3" => "",
            "aktif4" => ""
    ]);
    }

    function getTeamWithID(Team $team){
        return view('updateTeam',[
            'team' => $team,
            "pagetitle" => "Update Team",
            "aktif1" => "",
            "aktif2" => "",
            "aktif3" => "",
            "aktif4" => ""
    ]);
    }

    function deleteTeam(Team $team){
        $team->delete();
        return redirect('/');
    }

    function updateTeam(Request $requested, Team $team){
        $validatedData = $requested->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'kota' => 'required',
        ]);
    
        $team->update($validatedData);
    
        return redirect('/');
    }
    
}
