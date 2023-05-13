<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

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
// Retorna todos os jobs    
Route::get('/', function () {
    return view('jobs',[
        'heading'=> 'Vagas recentes',
        'jobs'=> Job::all()
    ]);
});
// Retorna job por id
Route::get('/jobs/{id}', function ($id) {
    return view('job',[
        'job'=> Job::find($id)
    ]);
});

// Route::get('test', function() {
//     echo 'Hello World ' ;
// });

// Route::get('test/{id}', function($id) {
//     // dd($id);
//     // ddd($id);
//     echo 'Hello World ' . $id;
// })->where('id', '[0-9]+');


// Route::get('/test', function(Request $request) {
//     dd($request->name);
// });