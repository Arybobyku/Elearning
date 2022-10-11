<?php

use App\Models\Materi;
use App\Models\Isimateris;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\DiskusiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardKuisController;
use App\Http\Controllers\DashboardMateriController;
use App\Http\Controllers\DashboardDiskusiController;
use App\Http\Controllers\DashboardWelcomeController;
use App\Http\Controllers\DashboardIsiMateriController;
use App\Http\Controllers\DashboardUserResultsController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
//     return view('general/welcome');
// });
Route::get('/',[WelcomeController::class, 'index']);


Route::get('/about', function () {
    return view('general/about');
});

Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth','admin'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/dashboard/materi', DashboardMateriController::class)->middleware('auth','admin');
Route::resource('/dashboard/isimateri', DashboardIsiMateriController::class)->middleware('auth','admin');
Route::resource('/dashboard/diskusi', DashboardDiskusiController::class)->middleware('auth','admin');
Route::resource('/dashboard/kuis', DashboardKuisController::class)->middleware('auth','admin');
Route::resource('/dashboard/welcome', DashboardWelcomeController::class)->middleware('auth','admin');
Route::resource('/dashboard/userresult', DashboardUserResultsController::class)->middleware('auth','admin');

Route::delete('/dashboard/userresult/', 'App\Http\Controllers\DashboardUserResultsController@destroy');

Route::middleware('auth')->group(function () {

Route::get('/academies', function () {
  return view('users/academies');
});
Route::get('/academies/materi',[MateriController::class, 'index']);
Route::get('/academies/materi/{id_materi}',[MateriController::class, 'isi']);
Route::get('/academies/kuis',[KuisController::class, 'create']);
Route::post('/academies/kuis', [KuisController::class, 'saveAnwere'])->name("insertKuis");



});

Route::middleware('auth','admin')->group(function () {
    // Route::view('about', 'about')->name('about');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    //user
    Route::post('/user/addToAdmin/{id}', [App\Http\Controllers\UserController::class, 'addToAdmin'])->name('user.addToAdmin');
    Route::post('/user/addToUser/{id}', [App\Http\Controllers\UserController::class, 'addToUser'])->name('user.addToUser');
    Route::post('/user/deleteUser/{id}', [App\Http\Controllers\UserController::class, 'deleteUser'])->name('user.deleteUser');

    Route::get('/diskusi', [App\Http\Controllers\DiskusiController::class, 'index'])->name('diskusi');
    Route::post('/diskusi', [App\Http\Controllers\DiskusiController::class, 'addKomentar'])->name('addKomentar');


});
