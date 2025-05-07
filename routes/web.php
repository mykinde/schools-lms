<?php

use Illuminate\Support\Facades\Route;
use App\Models\Link;

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
    return view('landwelcome');
});

/*
 Route::get('/', function () {
    return view('index', [
        'links' => Link::all()->sortDesc()
    ]);
});
 */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {


Route::resource('users', App\Http\Controllers\UserController::class);

Route::get('users-export', [App\Http\Controllers\UserController::class, 'export'])->name('users.export');

Route::post('users-import', [App\Http\Controllers\UserController::class, 'import'])->name('users.import');

    
Route::get('generate-pdf', [App\Http\Controllers\PDFController::class, 'generatePDF']);

});