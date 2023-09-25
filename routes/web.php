<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Profiles;
use App\Http\Controllers;
use App\Http\Controllers\Devis\ModuleItems;
use App\Http\Controllers\Devis\SectionDev;
use App\Http\Controllers\GererClient;
use App\Http\Controllers\ressource\GererProjet as RessourceGererProjet;
use App\Http\Livewire\AnalyseCadrage;
use App\Http\Livewire\GererClient as LivewireGererClient;
use App\Http\Livewire\GererProjet;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/dash', [App\Http\Livewire\DashboardComponent::class, 'render'])->name('dash');
Route::get('/profiles', [App\Http\Controllers\parametrage\profiles::class,'index']);
// Route::get('/profiles', [App\Http\Livewire\Profiles::class, 'render'])->name('pro');
Route::post('/profiles/update', [App\Http\Livewire\Profiles::class, 'update']);
Route::get('/profiles/{id}', [App\Http\Livewire\Profiles::class, 'destroy']);
Route::get('/test', [App\Http\Livewire\Test::class, 'render'])->name('test');
// Route::post('/create', [App\Http\Livewire\Profiles::class, 'store'])->name('store');
Route::post('/update', [App\Http\Livewire\ModuleItems::class, 'update']);

Route::get('/section/dev',[SectionDev::class,'index'])->name('sectionDev');
Route::get('/module',[ModuleItems::class,'index']);
Route::get('/item',[App\Http\Livewire\Item::class,'render']);


Route::get('/analyseCadrage',[App\Http\Controllers\devis\AnalyseCadrage::class,'index']);
Route::get('/analyseCadrage/{id}',[AnalyseCadrage::class, 'destroy']);

Route::get('/gererProjet',[\App\Http\Controllers\ressource\GererProjet::class,'index']);
Route::get('/gererProjet/destroy/{id}',[GererProjet::class,'destroy']);
Route::post('/gererProjet/update', [GererProjet::class, 'update']);

// mapias route groupe,
// 

// route client component
Route::get('/gererClient',[\App\Http\Controllers\ressource\GererClient::class,'index']);
Route::post('/gererClient/update', [LivewireGererClient::class, 'update']);
Route::get('/gererClient/{id}',[LivewireGererClient::class, 'destroy']);
// Route::get('/gererClient/find/{recherche}',[LivewireGererClient::class, 'find']);
