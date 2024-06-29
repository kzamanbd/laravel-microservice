<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel Version' => app()->version()];
});

require __DIR__ . '/auth.php';
