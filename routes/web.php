<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ChildCategoryController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Frontend\ListingController as FrontendListingController;
use App\Http\Controllers\Admin\ListingController as AdminListingsController;

use App\Http\Controllers\DropDownController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', [FrontendListingController::class, 'welcome'])->name('welcome');

Route::get('/all-listings', [FrontendListingController::class, 'index'])
    ->name('all-listings');


Route::middleware(['auth:sanctum'])->prefix('admin')->name('admin.')->group(function () {
Route::get('dashboard', [AdminController::class, 'index'])->name('index');
Route::resource('listings', AdminListingsController::class);
Route::resource('categories', CategoryController::class);
Route::post('delete-category', [CategoryController::class, 'delete']);
Route::resource('subcategories', SubCategoryController::class);
Route::post('delete-subcategory', [SubCategoryController::class, 'delete']);
Route::resource('childcategories', ChildCategoryController::class);
Route::post('delete-childcategory', [ChildCategoryController::class, 'delete']);
Route::resource('countries', CountryController::class);
Route::resource('states', StateController::class);
Route::resource('cities', CityController::class);
});

Route::get('dropdown',[DropDownController::class,'index']);
Route::post('api/fetch-state',[DropDownController::class,'fatchState']);
Route::post('api/fetch-cities',[DropDownController::class,'fatchCity']);

Route::resource('listings', ListingController::class)->middleware('auth');
// Route::resource('dashboard', UserController::class)->middleware('auth');