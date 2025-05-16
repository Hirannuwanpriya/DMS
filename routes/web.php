<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');


Route::get('dashboard', [\App\Http\Controllers\DeliveryController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    //create new delivery
    Route::get('deliveries/create', [\App\Http\Controllers\DeliveryController::class, 'create'])
        ->name('deliveries.create');

    //update delivery
    Route::get('deliveries/{delivery}/edit', [\App\Http\Controllers\DeliveryController::class, 'edit'])
        ->name('deliveries.edit');

    //delete delivery
    Route::delete('deliveries/{delivery}', [\App\Http\Controllers\DeliveryController::class, 'destroy'])
        ->name('deliveries.destroy');


});

require __DIR__.'/auth.php';
