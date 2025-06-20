<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('guest')->group(function () {
});

Route::get('/',  [HomeController::class, 'index'])->name('index');
Route::get('/qr-code/show/{hash}',  [QrCodeController::class, 'show'])->name('qr-code.show');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/ticket',  [TicketController::class, 'index'])->name('ticket.index');
    Route::get('/ticket/show/{hash}',  [TicketController::class, 'show'])->name('ticket.show');
    Route::get('/ticket/import',  [TicketController::class, 'import'])->name('ticket.import');
    Route::post('/ticket/store',  [TicketController::class, 'store'])->name('ticket.store');
    Route::post('/ticket/update',  [TicketController::class, 'update'])->name('ticket.update');
});
