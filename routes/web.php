<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('test', function() {
//     echo 'Hello World ' ;
// });

Route::get('test/{id}', function($id) {
    // dd($id);
    // ddd($id);
    echo 'Hello World ' . $id;
})->where('id', '[0-9]+');


Route::get('/test', function(Request $request) {
    dd($request->name);
});