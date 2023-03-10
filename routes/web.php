<?php

use App\Http\Controllers\Admin\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;

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
    return view('index');
});

Route::get('/hello/{param}/{param2}', function($param, $param2){
    return 'Hello World!! Param: ' .$param .' Param2: ' .$param2;
});

Route::get('/hello-review/{param}', function($param){
    $model=[
        'param1'=> $param,
        'param2'=>'world'
    ];
    return view('hello-review', $model);
});

Route::get('/hello-controller/{param1}/{param2}', [MyFirstController::class, 'index']);
Route::get('/hello-controller-query-string', [MyFirstController::class, 'indexWithQueryString']);

// Route::get('/photos', [Admin\PhotoController::class, 'index']);
// Route::post('/photos', [Admin\PhotoController::class, 'store']);



Route::middleware('auth')->group(function () {
    Route::resource('/photos', PhotoController::class);
});