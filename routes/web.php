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

Route::prefix("/admin")->group(function(){
    Route::get("/produtos", [ProductsController::class, "index"])->name("products.index");
    Route::get("/cadastrar-produto", [ProductsController::class, "create"])->name("products.create");
    Route::post("/salvar-produto", [ProductsController::class, "store"])->name("products.store");
    Route::get("/produto/{id}", [ProductsController::class, "show"])->name("products.show");
    Route::get("/editar-produto/{id}", [ProductsController::class, "edit"])->name("products.edit");
    Route::post("/atualizar-produto/{id}", [ProductsController::class, "update"])->name("products.update");
    Route::get("/excluir-produto/{id}", [ProductsController::class, "destroy"])->name("products.destroy");
});