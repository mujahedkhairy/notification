<!-- <?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;

// Landing page route
Route::get('/', function () {
    return response()->json(['message' => 'Welcome to the API']);
});

// Dashboard route (requires authentication)
Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    return response()->json(['message' => 'Dashboard accessed successfully']);
})->name('dashboard');

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Notification routes
Route::middleware('auth')->group(function () {
    Route::get('/notifications/form', [NotificationController::class, 'showNotificationForm'])->name('notification.form');
    Route::post('/send_notification_all', [NotificationController::class, 'sendNotificationToAll']);
}); -->
