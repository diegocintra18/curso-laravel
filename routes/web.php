<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\ProductsController;
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

Route::get("/hello/{text}", [ExampleController::class, "printHelloWorld"]);

Route::get("/cadastrar-produto", [ProductsController::class, "create"]);
Route::post("/salvar-produto", [ProductsController::class, "store"])->name("products.store");