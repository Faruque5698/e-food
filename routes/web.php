<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\SubCategoryController;
use App\Http\Controllers\AdminPanel\BannerController;
use App\Http\Controllers\AdminPanel\AttributeController;
use App\Http\Controllers\AdminPanel\AddonController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::middleware(['auth'])->group(function (){
    Route::get('/', function () {
        return view('adminPanel.dashboard.dashboard');
    })->name('dashboard');

    Route::get('/category',[CategoryController::class,'index']);
    Route::post('/add_category',[CategoryController::class,'add'])->name('add_category');
    Route::post('/edit_category/{$id}',[CategoryController::class,'edit'])->name('category_edit');
    Route::get('/unpublished_category',[CategoryController::class,'unpublished'])->name('category_unpublished');
    Route::get('/published_category',[CategoryController::class,'published'])->name('category_published');
    Route::get('/category_delete',[CategoryController::class,'destroy'])->name('category_destroy');
    Route::post('/update_category',[CategoryController::class,'update'])->name('update_category');


    Route::get('/sub-category',[SubCategoryController::class,'index']);


    Route::get('/banner',[BannerController::class,'index']);
    Route::get('/add-banner',[BannerController::class,'add_banner']);



    Route::get('/attribute',[AttributeController::class,'index']);
    Route::get('/attribute-value',[AttributeController::class,'attribute_value']);

    Route::get('/addon',[AddonController::class,'index']);

});

//Route::get('/', function () {
//    return view('adminPanel.dashboard.dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Route::get('test',[TestController::class,'index'])->middleware(['auth']);
