<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    $mahasiswa = \App\Models\Student::all();

    return view('pages.home', compact('mahasiswa'));
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/students', [PageController::class, 'students']);

Route::get('/students/create', [PageController::class, 'create']);
Route::post('/students', [PageController::class, 'store']);

Route::get('/students/{id}/edit', [PageController::class, 'edit']);
Route::put('/students/{id}', [PageController::class, 'update']);

Route::delete('/students/{id}', [PageController::class, 'destroy']);