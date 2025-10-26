<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/teacher/dashboard', function () {
    return view('teacher.dashboard');
});

Route::get('/teacher/classes', function () {
    return view('teacher.classes.index');
});

Route::get('/teacher/classes/students', function () {
    return view('teacher.classes.students');
});
