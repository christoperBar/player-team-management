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

        $gurinjay = strip_tags($gurinjay['nama']);
        $gurinjay = strip_tags($gurinjay['alamat']);
        $gurinjay = strip_tags($gurinjay['telp']);
        $gurinjay = strip_tags($gurinjay['kota']);

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
            "aktif4" => "",
            "aktif5" => "",
            "aktif6" => ""
    ]);
    }
}
