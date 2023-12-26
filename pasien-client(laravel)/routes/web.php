<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/', [ApiController::class, 'index']);
Route::get('/home', [ApiController::class, 'home']);
Route::get('/getpasien', [ApiController::class, 'apigetPasien']);
Route::get('/getone/{id}', [ApiController::class, 'apigetonePasien']);
Route::get('/pasien/add', [ApiController::class, 'addPasien']);
Route::post('/savepasien', [ApiController::class, 'apisavePasien']);
Route::get('/pasien/edit/{id}', [ApiController::class, 'editPasien']);
Route::put('/updatepasien/{id}', [ApiController::class, 'apiupdatePasien']);
Route::delete('/pasien/delete/{id}', [ApiController::class, 'apideletePasien']);
Route::post('/login', [ApiController::class, 'apiLogin']);
Route::get('/logout', [ApiController::class, 'apiLogout']);

