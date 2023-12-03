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

Route::get('/',[TeamsController::class,'showAllTeams'])->name('team');
Route::get('/team/{team}',[TeamsController::class,'getTeamWithID'])->middleware('auth');
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
})->middleware('auth');
Route::post('/team', [TeamsController::class, 'createTeam'])->middleware('auth');
Route::delete('/team/{team}', [TeamsController::class, 'deleteTeam'])->middleware('auth');
Route::match(['put', 'patch'], '/team/{team}', [TeamsController::class, 'updateTeam'])->middleware('auth');


Route::get('/players',[PlayersController::class,'showAllPlayers'])->name('player');
Route::get('/player', [PlayersController::class, 'createPlayerForm'])->middleware('auth');
Route::post('/player', [PlayersController::class, 'createPlayer'])->middleware('auth');
Route::delete('player/{player}', [PlayersController::class, 'deletePlayer'])->middleware('auth');
Route::get('/player/{player}',[PlayersController::class,'getPlayerWithID'])->middleware('auth');
Route::match(['put', 'patch'], '/player/{player}', [PlayersController::class, 'updatePlayer'])->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
