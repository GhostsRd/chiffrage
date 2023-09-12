<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Profiles;
use App\Http\Controllers;
use App\Http\Controllers\Devis\ModuleItems;
use App\Http\Controllers\Devis\SectionDev;

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

Route::get('/section/dev',[SectionDev::class,'index'])->name('sectionDev');
Route::get('/module',[ModuleItems::class,'index']);
Route::get('/item',[App\Http\Livewire\Item::class,'render']);

// mapias route groupe
// 

