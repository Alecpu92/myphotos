<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\MyFirstController;
use App\Http\Controllers\Admin\PhotoController;

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
Route::get('/hello/{param}/{param2}', function($param, $param2){
    return 'Hello World!!! Param : ' . $param . ' Param2 :' . $param2;
});
Route ::get('/hello-view' , function() {

    $model = [

        'param1' => 'hello',
        'param2' => 'world',
    ];

    return view('hello-view' , $model);
});

Route :: get('/hello-controller/{param1}/{param2}', [MyFirstController::class, 'index']);

Route :: get('/hello-controller-query-string', [MyFirstController::class, 'indexWithQueryString']);

Route :: resource('photos' , 'App\Http\Controllers\Admin\PhotoController');





