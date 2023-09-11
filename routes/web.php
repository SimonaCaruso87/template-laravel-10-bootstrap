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
    $students = [
        'Marco',
        'Gino',
        'Claudia',
    ];

    $data = compact('students');

    // dd($data);

    return view('home', $data);

    // return view('home', [
    //     'students' => $students
    // ]);
});

Route::get('/contatti', function () {
    return view('contact');
});
