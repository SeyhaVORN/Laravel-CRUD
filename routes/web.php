<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostControlller;
use App\Models\Employee;
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
    return view('layouts.frontend');
});

// Route::get('/home', function () {
//     return view('pages.home');
// })->name('home');

Route::get('employee', [EmployeeController::class, 'index'])->name('employee');
Route::get('add', [EmployeeController::class, 'create'])->name('add-employee');

Route::post('store-employee', [EmployeeController::class, 'store'])->name(
    'store-employee'
);

Route::get('edit-employee/{id}', [EmployeeController::class, 'edit'])->name(
    'edit-employee'
);

Route::put('update-employee/{id}', [EmployeeController::class, 'update'])->name(
    'update-employee'
);

// Route::get('delete-employee/{id}', [EmployeeController::class, 'delete'])->name(
//     'delete-employee'
// );

Route::delete('delete-employee/{id}', [
    EmployeeController::class,
    'delete',
])->name('delete-employee');

Auth::routes();

Route::get('/home', [
    App\Http\Controllers\HomeController::class,
    'index',
])->name('home');

Route::resource('posts', 'PostController');

Route::get('search', [EmployeeController::class, 'search']);