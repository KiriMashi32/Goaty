<?php

use Illuminate\Support\Facades\Route;
use App\Models\Goat;

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
    // $goats = [
    //     ['id' => 0, 'nom' => 'Boby', 'prix' => 50],
    //     ['id' => 1, 'nom' => 'Bobo', 'prix' => 150],
    //     ['id' => 2, 'nom' => 'Boba', 'prix' => 250],
    //     ['id' => 3, 'nom' => 'Bobu', 'prix' => 350],
    // ];
    $goats = Goat::all();
    

    return view('goats.index', compact('goats')); 

});



Route::get('/goats/create', function() {

    return view('goats.create');

});
    

//Show : afficher un seul goat
Route::get('/goats/{id}', function($id){
    $goat = Goat::find($id);

    // $goats = [
    //     ['id' => 0, 'nom' => 'Boby', 'prix' => 50],
    //     ['id' => 1, 'nom' => 'Bobo', 'prix' => 150],
    //     ['id' => 2, 'nom' => 'Boba', 'prix' => 250],
    //     ['id' => 3, 'nom' => 'Bobu', 'prix' => 350],
    // ];
        
    // $goat = $goat->id;
    // dd($id);
    return view('goats.show', compact('goat'));
});


Route::post('/goats', function() {
    $g = new Goat();
    $g->sex = request()->sex == 'on' ? true : false;
    $g->name = request()->name;
    $g->price = request()->price;
    $g->color = request()->color;
    $g->birthday = request()->birthday;
    $g->save();
    return redirect('/goats');


});




Route::get('/', function() {
    return redirect('/goats');
});

//Form : afficher un formulaire

