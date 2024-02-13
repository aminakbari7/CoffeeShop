<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Livewire\Addcart;
use App\Livewire\Adminpanel;
use App\Livewire\Adminshow;
use App\Livewire\Adminuser;
use App\Livewire\Delcart;
use App\Livewire\Notif;
use App\Livewire\Searchproduct;
use App\Livewire\Showproducts;
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

//Route::get('/', function () {return view('welcome');});
Route::get('/', [HomeController::class, 'index'])->name("index");
Route::get('/product/showproducts', [App\Http\Controllers\ProductController::class, 'showp'])->name('showp');
Route::get('/product/searchproduct', [App\Http\Controllers\ProductController::class, 'searchproduct'])->name('searchproduct');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/product/showcart', [App\Http\Controllers\ProductController::class, 'showcart'])->name('cart');
    Route::get('/product/deletecart/{id}', [App\Http\Controllers\ProductController::class, 'deletecart'])->name('cart.delete');
    Route::post('/product/showsingle/{id}', [App\Http\Controllers\ProductController::class, 'addcart'])->name('product.addcart');

   




    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//product
Route::get('/product/showsingle/{id}', [App\Http\Controllers\ProductController::class, 'showsingle'])->name('product.showsingle');


//cart


//admin
Route::get('/admin/panel', function () {return view('admin/panel');})->name('adminpanel');

Route::get('/admin/adminshow', function () {return view('admin/adminshow');})->name('listadmin');
Route::get('/admin/showusers', [AdminController::class, 'showusers'])->name('showusers');

Route::get('/admin/createproducts', [AdminController::class, 'createproducts'])->name('createproducts');

Route::get('/notif', Notif::class);
Route::get('/addcart', Addcart::class);
Route::get('/delcart', Delcart::class); 
Route::get('/showproducts', Showproducts::class); 
Route::get('/adminusers', Adminuser::class); 
Route::get('/searchproduct', Searchproduct::class);
Route::get('/adminpanel', Adminpanel::class);

Route::get('/adminshow', Adminshow::class);


require __DIR__.'/auth.php';
