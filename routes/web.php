<?php
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\PlayersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[TeamsController::class,'showAllTeams']);
Route::get('/team/{team}',[TeamsController::class,'getTeamWithID']);
Route::get('/add-team',function(){
    return view('addTeam',
    [
        "pagetitle" => "Add Team",
            "aktif1" => "",
            "aktif2" => "active",
            "aktif3" => "",
            "aktif4" => ""
    ]
);
});
Route::post('/team', [TeamsController::class, 'createTeam']);
Route::delete('/team/{team}', [TeamsController::class, 'deleteTeam']);
Route::match(['put', 'patch'], '/team/{team}', [TeamsController::class, 'updateTeam']);


Route::get('/players',[PlayersController::class,'showAllPlayers']);
Route::get('/player', [PlayersController::class, 'createPlayerForm']);
Route::post('/player', [PlayersController::class, 'createPlayer']);
Route::delete('player/{player}', [PlayersController::class, 'deletePlayer']);
Route::get('/player/{player}',[PlayersController::class,'getPlayerWithID']);
Route::match(['put', 'patch'], '/player/{player}', [PlayersController::class, 'updatePlayer']);