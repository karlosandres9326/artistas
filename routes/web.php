<?php

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

/*
Route::get('/pagina1/{num_table}', function ($num_table) {
    return view('pagina1',
    [

        'num_table'=> $num_table,
       

    ]);

    */

    Route::get('/pagina1', function () {
        return view('pagina1',[
    
            
    
        ]);
    
    
    });