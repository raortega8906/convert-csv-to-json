<?php

use App\Http\Controllers\CsvController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('upload');
});

Route::post('/csv-to-json', [CsvController::class, 'convert'])->name('csv.to.json');

