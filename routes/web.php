<?php

use App\Livewire\AccountBalance;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Deposit;
use App\Livewire\Admin\Enrollments;
use App\Livewire\Admin\Tournamentes;
use App\Livewire\Admin\Withdraw;
use App\Livewire\Tournmament\Tournament;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::get('account', AccountBalance::class);
Route::get('tournament', Tournament::class);
Route::get('admin', Dashboard::class);
Route::get('deposits', Deposit::class)->name('deposits');
Route::get('withdraws', Withdraw::class)->name('withdraws');
Route::get('tournaments', Tournamentes::class)->name('tournaments');
Route::get('enrollments', Enrollments::class)->name('enrollments');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');

    Route::get('balance', AccountBalance::class);
});

require __DIR__ . '/auth.php';
