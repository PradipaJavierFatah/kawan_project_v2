<?php

use App\Http\Controllers\cekController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

// Testing
Route::get('/tes', function () {
    return view('tes');
});

Route::get('/testing', function () {
    return view('testing');
});

// Home - Start chris
Route::get('/home-after', function () {
    return view('/home/home-after');
});

Route::get('/home-before', function () {
    return view('/home/home-before');
});

Route::get('/consult', function () {
    return view('/home/consult');
});

Route::get('/mentoring', function () {
    return view('/home/mentoring');
});

// Home - End chris

// Payment - Start Sebastian
Route::get('/checkout-pembayaran-1', function () {
    return view('/payment/checkout-pembayaran-1');
});

Route::get('/checkout-pembayaran-2', function () {
    return view('/payment/checkout-pembayaran-2');
});

Route::get('/checkout-pembayaran-3', function () {
    return view('/payment/checkout-pembayaran-3');
});

Route::get('/checkout-pembayaran-4', function () {
    return view('/payment/checkout-pembayaran-4');
});

Route::get('/confirmation-page', function () {
    return view('/payment/confirmation-page');
});

Route::get('/plans-login', function () {
    return view('/payment/plans-login');
});

Route::get('/plans-unlogin', function () {
    return view('/payment/plans-unlogin');
});
// Payment - End Sebastian

// Stress Level - Start Abdi
Route::get('/stress-level-Check', function () {
    return view('/stress/stress-level-Check');
});

Route::get('/stress-level-result-high', function () {
    return view('/stress/stress-level-result-high');
});

Route::get('/stress-level-result-low', function () {
    return view('/stress/stress-level-result-low');
});


Route::get('/stress-level-result-medium', function () {
    return view('/stress/stress-level-result-medium');
});
// Stress Level - End Abdi


// Personality - Start Aufa
Route::get('/personality-test', function () {
    return view('/personality/Personality-Test');
});


Route::get('/ENFJ', function () {
    return view('/personality/ENFJ');
});

Route::get('/ISFP', function () {
    return view('/personality/ISFP');
});

Route::get('/ENTP', function () {
    return view('/personality/ENTP');
});

Route::get('/ESFP', function () {
    return view('/personality/ESFP');
});

Route::get('/INTP', function () {
    return view('/personality/INTP');
});
// Personality - End Aufa


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/login', function () {
    return view('login');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/logout', function () {
    Auth::logout(); // Logout user
    return redirect('/login'); // Redirect ke halaman login
})->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/cek1', function () {
    return '<h1>Cek<h1>';
})->middleware('auth', 'verified');

Route::get('/cek2', [cekController::class, 'index'])->middleware('auth', 'verified');

require __DIR__ . '/auth.php';
