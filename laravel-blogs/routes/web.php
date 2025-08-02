<?php

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', fn() => view('about'));

Route::get('/json', function(Request $request) {

    return [
        'name' => $request->get('name', 'Guest'),
        'mesage' => 'Hello, this is a JSON response',
        'status' => 'success',
        'data' => [
            'id' => 1,
            'name' => 'Laravel Blog',
            'description' => 'A simple blog application built with Laravel'
        ]
        ];
});


Route::get('/jobs/{id}', fn($id) => Job::find($id));