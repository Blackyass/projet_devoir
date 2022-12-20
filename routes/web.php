<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/addclasse',[ClasseController::class,'index']);
Route::get('/tabclasse',[ClasseController::class,'show'])->name('tabclasse');
Route::post('/classe',[ClasseController::class,'store'])->name('postclasse');
Route::get('/editclasse/{id}',[ClasseController::class,'edit']);
Route::post('/updateclasse',[ClasseController::class,'update'])->name('updateclasse');
Route::get('/deleteclasse/{id}',[ClasseController::class,'destroy']);

Route::get('/addcaissier',[CaissierController::class,'index']);
Route::get('/tabcaissier',[CaissierController::class,'show'])->name('tabcaissier');
Route::post('/caissier',[CaissierController::class,'store'])->name('postcaissier');
Route::get('/editcaissier/{id}',[CaissierController::class,'edit']);
Route::post('/updatecaissier',[CaissierController::class,'update'])->name('updatecaissier');
Route::get('/deletecaissier/{id}',[CaissierController::class,'destroy']);

Route::get('/addetudiant',[EtudiantController::class,'index']);
Route::get('/tabetudiant',[EtudiantController::class,'show'])->name('tabetudiant');
Route::post('/etudiant',[EtudiantController::class,'store'])->name('postetudiant');
Route::get('/editetudiant/{id}',[EtudiantController::class,'edit']);
Route::post('/updateetudiant',[EtudiantController::class,'update'])->name('updateetudiant');
Route::get('/deleteetudiant/{id}',[EtudiantController::class,'destroy']);

Route::get('/addencaisser',[EncaisserController::class,'index']);
Route::get('/tabencaisser',[EncaisserController::class,'show'])->name('tabencaisser');
Route::post('/encaisser',[EncaisserController::class,'store'])->name('postencaisser');
Route::get('/editencaisser/{id}',[EncaisserController::class,'edit']);
Route::post('/updateencaisser',[EncaisserController::class,'update'])->name('updateencaisser');
Route::get('/deleteencaisser/{id}',[EncaisserController::class,'destroy']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
