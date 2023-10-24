<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\MenuController as FrontendMenuController;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;
use App\Http\Controllers\Frontend\WelcomeController;

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

Route::get('/',[WelcomeController::class,'index'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/categories',[FrontendCategoryController::class,'index'])->name('categories.index');
Route::get('/categories/{category}',[FrontendCategoryController::class,'show'])->name('categories.show');
Route::get('/menus',[FrontendMenuController::class,'index'])->name('menu.index');
Route::get('/reservations/step-one',[FrontendReservationController::class,'stepOne'])->name('reservations.step.one');
Route::post('/reservations/step-one',[FrontendReservationController::class,'storeStepOne'])->name('reservations.store.step.one');
Route::get('/reservations/step-tow',[FrontendReservationController::class,'stepTwo'])->name('reservations.step.tow');
Route::post('/reservations/step-tow',[FrontendReservationController::class,'storeStepTwo'])->name('reservations.store.step.tow');
Route::get('/thankyou', [WelcomeController::class, 'thankyou'])->name('thankyou');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->name('admin')->prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::resource('/categories',CategoryController::class);
    Route::resource('/tables',TableController::class);
    Route::resource('/reservation',ReservationController::class);
    Route::resource('/menus',MenuController::class);

});

Route::get('/create-symlink', function (){
    symlink(storage_path('/app/public/storage/assets'), public_path('storage'));
    echo "Symlink Created. Thanks";
});

require __DIR__.'/auth.php';
