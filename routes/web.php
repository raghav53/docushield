<?php

use Illuminate\Support\Facades\Route;

/* -------CONTROLLERS--------- */
use App\Http\Controllers\admin\AdminDashboard;
use App\Http\Controllers\admin\AdminMain;
use App\Http\Controllers\front\HomeController;


/* -------MIDDLEWARES--------- */
use App\Http\Middleware\AdminAuth;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home']);

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/adminlogout', function () {
    Auth::logout();
    return redirect('/admin_login');
});
Route::get('/make_admin', [AdminDashboard::class, 'make_admin']);
Route::get('/admin_login', [AdminDashboard::class, 'admin_login']);
Route::post('/post_admin', [AdminDashboard::class, 'post_admin']);
Route::post('/sendResetPasswordLinkAdmin', [AdminDashboard::class, 'sendResetPasswordLinkAdmin']);

Route::middleware([AdminAuth::class])->group(function () {
     Route::get('/adminAccount', [AdminMain::class, 'adminAccount'])->name('adminAccount');
    Route::post('/saveAdminAccountDetails', [AdminMain::class, 'saveAdminAccountDetails'])->name('saveAdminAccountDetails');
    Route::get('/adminDashboard', [AdminDashboard::class, 'dashboard'])->name('AdminDashboard');
    Route::get('/mainBanner', [AdminMain::class, 'mainBanner'])->name('mainBanner');
    Route::get('/everythingYouNeed', [AdminMain::class, 'everythingYouNeed'])->name('everythingYouNeed');
    Route::get('/whatTheySay', [AdminMain::class, 'whatTheySay'])->name('whatTheySay');
    Route::get('/blog', [AdminMain::class, 'blog'])->name('blog');
    Route::get('/recentMedia', [AdminMain::class, 'recentMedia'])->name('recentMedia');
    Route::get('/secMainBanner', [AdminMain::class, 'secMainBanner'])->name('secMainBanner');
    Route::post('/saveMainPageData', [AdminMain::class, 'saveMainPageData'])->name('saveMainPageData');
    Route::get('/DeleteMainPageData/{id}', [AdminMain::class, 'DeleteMainPageData'])->name('DeleteMainPageData');
});