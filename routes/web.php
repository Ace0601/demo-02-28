<?php

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

Route::get('/person', function () {
    return view('person', [
        'name' => 'Kim Smith',
        'age' => 36,
        'color' => 'blue',
        'siblings' => [
            [
                'name' => 'Rowel',
                'age' => 26,
            ],
            [
                'name' => 'Carmen',
                'age' => 24,
            ],
            [
                'name' => 'Nicole',
                'age' => 20,
            ],
            [
                'name' => 'Dexter',
                'age' => 17,
            ],
        ],
    ]);
});
