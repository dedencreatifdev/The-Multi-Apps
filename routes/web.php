<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::dashboard.dashboard-index')->name('Dashboard.Index');
Route::livewire('/pesanan', 'pages::pesanan.pesanan-index')->name('Pesanan.Index')->lazy();
Route::livewire('/', 'pages::dashboard.dashboard-index')->name('Dashboard.Index');
