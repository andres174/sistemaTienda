<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CategoriesComponent;
use App\Http\Livewire\CategoriesForm;
use App\Http\Livewire\ProductsComponent;
use App\Http\Livewire\ProductsForm;
use App\Http\Livewire\PosComponent;
use App\Http\Livewire\ClientsComponent;
use App\Http\Livewire\ClientsForm;

use App\Http\Livewire\FechasComponent;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('categorias', CategoriesComponent::class);

Route::get('categories-form', CategoriesForm::class);

Route::get('productos', ProductsComponent::class);

Route::get('products-form', ProductsForm::class);

Route::get('pos', PosComponent::class);

Route::get('clientes', ClientsComponent::class);
Route::get('clients-form', ClientsForm::class);

Route::get('fechas-productos', FechasComponent::class);

