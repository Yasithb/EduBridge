<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});

// Teacher Routes
Route::prefix('teacher')->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('teacher.dashboard');
    })->name('teacher.dashboard');
    
    // Classes Routes
    Route::get('/classes', function () {
        return view('teacher.classes.index');
    })->name('teacher.classes.index');
    
    Route::get('/classes/students', function () {
        return view('teacher.classes.students');
    })->name('teacher.classes.students');
    
    Route::get('/classes/create', function () {
        return view('teacher.classes.create');
    })->name('teacher.classes.create');
    
    Route::get('/classes/{id}/edit', function ($id) {
        return view('teacher.classes.edit', ['id' => $id]);
    })->name('teacher.classes.edit');
    
    // Attendance Routes
    Route::get('/attendance', function () {
        return view('teacher.attendance.index');
    })->name('teacher.attendance.index');
    
    Route::get('/attendance/mark', function () {
        return view('teacher.attendance.mark');
    })->name('teacher.attendance.mark');
    
    Route::get('/attendance/report', function () {
        return view('teacher.attendance.report');
    })->name('teacher.attendance.report');
    
    // Grades Routes
    Route::get('/grades', function () {
        return view('teacher.grades.index');
    })->name('teacher.grades.index');
    
    Route::get('/grades/create', function () {
        return view('teacher.grades.create');
    })->name('teacher.grades.create');
    
    Route::get('/grades/report', function () {
        return view('teacher.grades.report');
    })->name('teacher.grades.report');
    
    // Homework Routes
    Route::get('/homework', function () {
        return view('teacher.homework.index');
    })->name('teacher.homework.index');
    
    Route::get('/homework/create', function () {
        return view('teacher.homework.create');
    })->name('teacher.homework.create');
    
    Route::get('/homework/{id}/edit', function ($id) {
        return view('teacher.homework.edit', ['id' => $id]);
    })->name('teacher.homework.edit');
    
    Route::get('/homework/submissions', function () {
        return view('teacher.homework.submissions');
    })->name('teacher.homework.submissions');
    
    // Messages Routes
    Route::get('/messages', function () {
        return view('teacher.messages.index');
    })->name('teacher.messages.index');
    
    Route::get('/messages/chat', function () {
        return view('teacher.messages.chat');
    })->name('teacher.messages.chat');
    
    Route::get('/messages/compose', function () {
        return view('teacher.messages.compose');
    })->name('teacher.messages.compose');
    
    // Reports Routes
    Route::get('/reports', function () {
        return view('teacher.reports.index');
    })->name('teacher.reports.index');
    
    Route::get('/reports/generate', function () {
        return view('teacher.reports.generate');
    })->name('teacher.reports.generate');
    
    Route::get('/reports/student-progress', function () {
        return view('teacher.reports.student-progress');
    })->name('teacher.reports.student-progress');
    
    Route::get('/reports/class-performance', function () {
        return view('teacher.reports.class-performance');
    })->name('teacher.reports.class-performance');
    
    // Announcements Routes
    Route::get('/announcements', function () {
        return view('teacher.announcements.index');
    })->name('teacher.announcements.index');
    
    Route::get('/announcements/create', function () {
        return view('teacher.announcements.create');
    })->name('teacher.announcements.create');
    
    Route::get('/announcements/{id}/edit', function ($id) {
        return view('teacher.announcements.edit', ['id' => $id]);
    })->name('teacher.announcements.edit');
    
    // Settings
    Route::get('/settings', function () {
        return view('teacher.settings');
    })->name('teacher.settings');
    
    // Profile Routes
    Route::get('/profile', function () {
        return view('teacher.profile.index');
    })->name('teacher.profile.index');
    
    Route::get('/profile/edit', function () {
        return view('teacher.profile.edit');
    })->name('teacher.profile.edit');
    
    // Schedule Routes
    Route::get('/schedule', function () {
        return view('teacher.schedule.index');
    })->name('teacher.schedule.index');
    
    Route::get('/schedule/create', function () {
        return view('teacher.schedule.create');
    })->name('teacher.schedule.create');
});
