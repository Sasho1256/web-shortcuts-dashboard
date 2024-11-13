<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('links/add/{position}', [LinkController::class, 'add'])->name('links.add');
Route::post('links/add/{position}', [LinkController::class, 'create'])->name('links.create');
Route::get('links/edit/{link}', [LinkController::class, 'edit'])->name('links.edit');
Route::put('links/edit/{link}', [LinkController::class, 'update'])->name('links.update');
Route::delete('links/delete/{link}', [LinkController::class, 'delete'])->name('links.delete');
