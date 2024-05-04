<?php

use App\Http\Controllers\AdminAuth;
use App\Http\Controllers\AdminManageItemsController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index'])->name('index');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['guest:admin'])->group(function () {
        Route::get('/login', [AdminAuth::class, 'showLogin'])->name('showLogin');
        Route::post('/login', [AdminAuth::class, 'doLogin'])->name('doLogin');
    });
    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/logout', [AdminAuth::class, 'logout'])->name('logout');
        Route::prefix('item')->name('Item.')->group(function () {
            Route::get('/show', [AdminManageItemsController::class, 'showAll'])->name('showAll');
            Route::get('/show/{id}', [AdminManageItemsController::class, 'showPerID'])->name('showPerID');

            Route::prefix('manage')->name('manage.')->group(function () {
                Route::get('/add', [AdminManageItemsController::class, 'showAdd'])->name('showAdd');
                Route::post('/add', [AdminManageItemsController::class, 'doAdd'])->name('doAdd');

                Route::get('/update/{id}', [AdminManageItemsController::class, 'showUpdate'])->name('showUpdate');
                Route::post('/update/{id}', [AdminManageItemsController::class, 'doUpdate'])->name('doUpdate');


                Route::get('/delete/{id}', [AdminManageItemsController::class, 'showDelete'])->name('showDelete');
                Route::post('/delete/{id}', [AdminManageItemsController::class, 'doDelete'])->name('doDelete');
            });

        });
    });
});
