<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    ProfileController,
    MailSettingController,
};
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.auth.login');
});


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/test-mail', function () {

    $message = "Testing mail";

    Mail::raw('Hi, welcome!', function ($message) {
        $message->to('ajayydavex@gmail.com')
            ->subject('Testing mail');
    });

    dd('sent');
});


Route::get('/dashboard', function () {
    return view('front.dashboard');
})->middleware(['front'])->name('dashboard');


require __DIR__ . '/front_auth.php';

// Admin routes
Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('admin.dashboard');

require __DIR__ . '/auth.php';




Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')
    ->group(function () {
        Route::resource('roles', 'RoleController');
        Route::resource('permissions', 'PermissionController');
        Route::resource('users', 'UserController');
        Route::resource('incidents', 'IncidentController');

        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::put('/profile-update', [ProfileController::class, 'update'])->name('profile.update');
        Route::get('/mail', [MailSettingController::class, 'index'])->name('mail.index');
        Route::put('/mail-update/{mailsetting}', [MailSettingController::class, 'update'])->name('mail.update');
    });



Route::resource("/animal", AnimalController::class);
Route::resource("/category", CategoryController::class);
//For adding an image
Route::get('/add-image', [AnimalController::class, 'addImage'])->name('images.add');

//For storing an image
Route::post('/store-image', [AnimalController::class, 'storeImage'])
    ->name('images.store');

//For showing an image
Route::get('/view-image', [AnimalController::class, 'viewImage'])->name('images.view');
