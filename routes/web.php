<?php

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



//Index : voir tout les goats
Route::get('/goats', function() {
    $goats = [
        ['id' => 0, 'nom' => 'Boby', 'prix' => 50],
        ['id' => 1, 'nom' => 'Bobo', 'prix' => 150],
        ['id' => 2, 'nom' => 'Boba', 'prix' => 250],
        ['id' => 3, 'nom' => 'Bobu', 'prix' => 350],
    ];
    

    return view('goats.index', compact('goats')); 

});

Route::get('/goats/create', function() {

    return view('goats.create');

});
    

//Show : afficher un seul goat
Route::get('/goats/{id}', function($id){
    

    $goats = [
        ['id' => 0, 'nom' => 'Boby', 'prix' => 50],
        ['id' => 1, 'nom' => 'Bobo', 'prix' => 150],
        ['id' => 2, 'nom' => 'Boba', 'prix' => 250],
        ['id' => 3, 'nom' => 'Bobu', 'prix' => 350],
    ];

    $goat =$goats[$id];
    // dd($id);
    return view('goats.show', compact('goat'));
});


Route::post('/goats', function(){
    dd('POST goat');
});


//Form : afficher un formulaire

