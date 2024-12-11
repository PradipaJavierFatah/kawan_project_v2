<?php

use App\Http\Controllers\cekController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AdminAuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\UserController;


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

Route::get('/verify-email', function () {
    return view('verify-email');
});


// Home - End chris

// Payment - Start Sebastian

Route::get('/checkout-pembayaran-{page}', [MentorController::class, 'showCheckoutPage'])
    ->middleware('checkout.payment') // Ensure this middleware exists and is configured correctly
    ->where('page', '[1-4]'); // Constraint: only accept page values between 1 and 4



    Route::get('/plans-login', [MentorController::class, 'showPlansLogin'])->name('payment.plans-login');


Route::get('/confirmation-page', function () {
    return view('/payment/confirmation-page');
});

// Route::get('/plans-unlogin', function () {
//     return view('/payment/plans-unlogin');
// });

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


// Login Start - Dipa
Route::get('/verify-email', function () {
    return view('verify-email');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// dashboard admin -- Aufa
Route::middleware('auth')->group(function () {
    Route::get('/dashboard_admin', function () {
        return view('admin.dashboard_admin');
    })->name('dashboard_admin');

    // Rute untuk daftar mentor (halaman mentor_list)
    Route::get('mentor_list', [MentorController::class, 'index'])->name('mentor_list');  // ini untuk menampilkan daftar mentor

    // Rute untuk create mentor (halaman create_mentor)
    Route::get('mentors/create', [MentorController::class, 'create'])->name('mentors.create');

    // Rute untuk menyimpan mentor baru
    Route::post('mentors', [MentorController::class, 'store'])->name('mentors.store');

    // Rute untuk edit mentor (halaman edit_mentor)
    Route::get('mentors/{id}/edit', [MentorController::class, 'edit'])->name('mentors.edit');

    // Rute untuk memperbarui mentor
    Route::put('mentors/{id}', [MentorController::class, 'update'])->name('mentors.update');

    // Rute untuk menghapus mentor
    Route::delete('mentors/{id}', [MentorController::class, 'destroy'])->name('mentors.destroy');

});



Route::middleware(['auth'])->prefix('admin')->group(function () {
    // Halaman dashboard admin
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // // Artikel
    // Route::resource('articles', ArticleController::class);

    // Mentor
    Route::resource('mentors', MentorController::class);
});




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

// Grouping Route untuk Admin
Route::prefix('admin')->name('admin.')->group(function () {
    // User Management Routes
    Route::resource('users', UserController::class);
});

// Route untuk menampilkan halaman daftar user
Route::get('admin/users', [UserController::class, 'index'])->name('admin.users.index');
// Route untuk menampilkan form tambah user
Route::get('admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
// Route untuk menyimpan data user setelah form disubmit
Route::post('admin/users', [UserController::class, 'store'])->name('admin.users.store');
// Route untuk menampilkan form edit user
Route::get('admin/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
// Route untuk mengupdate data user
Route::put('admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
// Route untuk menghapus user
Route::delete('admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');


// Login Admin End - Dipa

Route::get('/cek1', function () {
    return '<h1>Cek<h1>';
})->middleware('auth', 'verified');

Route::get('/cek2', [cekController::class, 'index'])->middleware('auth', 'verified');

require __DIR__ . '/auth.php';

//Article Start - Ryan
//Create
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');


//Connect dashboard dan article
Route::get('/dashboard', [ArticleController::class, 'dashboard'])->name('dashboard');
// Baca Article
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
// Post Article
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
//Resources
Route::resource('articles', ArticleController::class);


// Delete Article
Route::post('/article/{article}', [ArticleController::class, 'delete']);
Route::put('/article/{article}', [ArticleController::class, 'update']);