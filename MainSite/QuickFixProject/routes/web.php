<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;









// Home route
Route::get('/', function () {
    return redirect()->route('services.index'); // Redirect to services.index
});
Route::get('/serviceslist', [ServiceController::class, 'ListServe'])->name('list.index');

Route::get('/contact', [ServiceController::class, 'contact'])->name('contact.index');


Route::get('/about', [ServiceController::class, 'about'])->name('about.index');


// Include authentication routes (login, register, etc.)
require __DIR__ . '/auth.php';

// Public routes (accessible without authentication)
Route::get('services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/search', [ServiceController::class, 'search'])->name('search');

// Admin group routes (requires authentication)
Route::middleware(['auth'])->group(function () {
    // Resource route for ServiceController (excluding index)
    Route::resource('services', ServiceController::class)->except(['index']);

    // Custom route for listing services (if different from index)
    Route::get('service/list', [ServiceController::class, 'list'])->name('services.list');

    // Dashboard route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Authenticated group routes for user profile management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard/messages', [ServiceController::class, 'ListMessages'])->name('messages.list');
});

Route::post('/dashboard/messages/send', [ServiceController::class, 'sendMessage'])->name('messages.send');

// dashbord
use App\Models\Service;

Route::get('/dashboard', function () {
    $services = Service::all(); // Fetch services
    return view('dashboard', compact('services'));
})->middleware(['auth'])->name('dashboard');
