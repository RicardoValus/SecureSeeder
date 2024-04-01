<?php

use App\Http\Controllers\ContactController;
use App\Models\Flight;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', [ContactController::class, 'index']);

Route::post('/contato/store', [ContactController::class, 'store'])->name('contato.store');

Route::put('/contato/update', [ContactController::class, 'update'])->name('contato.update');

Route::delete('/contato/delete/{id}', [ContactController::class, 'destroy'])->name('contato.destroy');

Route::get('/contato/decripty', [ContactController::class, 'decripty']);
