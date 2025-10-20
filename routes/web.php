<?php

declare(strict_types=1);

use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TemplateController::class, 'index'])->name('home');
