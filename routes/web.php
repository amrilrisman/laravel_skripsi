<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdministationDocumentsController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengumumanController;
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
    return view("layouts.auth.index");
});

// View

// auth
Route::post("/login", [LoginController::class, "login"]);
Route::post("/logout", [LoginController::class, "logout"]);

// auth
Route::get('/beranda', [BerandaController::class, 'index'])->middleware("asn");

// Route::get('/beranda', [BerandaController::class, 'index']);
// Route::get('/beranda', [BerandaController::class, 'index']);
Route::get('/document', [DocumentController::class, 'index']);
// Route::get('/messager', [ChatsController::class, 'index']);
// Route::get('/messager/{id}', [ChatsController::class, 'show']);
// Route::post('/messager/{from}/{to}', [ChatsController::class, 'store']);
// Route::get('/pengumumman', [PengumumanController::class, 'index']);
Route::get('/account', [AccountController::class, 'index']);

Route::resource("/messager", ChatsController::class);
Route::resource("/pengumumman", PengumumanController::class);

Route::resource("/pengajuan", AdministationDocumentsController::class);
