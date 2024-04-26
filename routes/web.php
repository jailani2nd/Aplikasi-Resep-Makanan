<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\HalamanuserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoriController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\RekomController;
use App\Http\Controllers\TestiController;
use App\Http\Controllers\KontakController;
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

Route::get('/', [AdminController::class, 'loginForm']);

Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function (){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});


Route::middleware([
    'auth:sanctum,admin',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin/dashboard');
    })->name('dashboard');
    Route::resource('admin/kontaks', KontakController::class);
    Route::get('admin/kontaks.create', [KontakController::class, 'create']);
Route::get('admin/kontaks.edit', [KontakController::class, 'edit']);
Route::put('admin/kontaks.edit', [KontakController::class, 'update']);
    Route::resource('admin/testis', TestiController::class);
    Route::get('admin/testis.create', [TestiController::class, 'create']);
Route::get('admin/testis.edit', [TestiController::class, 'edit']);
Route::put('admin/testis.edit', [TestiController::class, 'update']);
    Route::resource('admin/rekoms', RekomController::class);
    Route::get('admin/rekoms.create', [RekomController::class, 'create']);
Route::get('admin/rekoms.edit', [RekomController::class, 'edit']);
Route::put('admin/rekoms.edit', [RekomController::class, 'update']);
    Route::resource('admin/reseps', ResepController::class);
    Route::get('admin/reseps.create', [ResepController::class, 'create']);
Route::get('admin/reseps.edit', [ResepController::class, 'edit']);
Route::put('admin/reseps.edit', [ResepController::class, 'update']);
    Route::resource('admin/categoris', CategoriController::class);
    Route::get('admin/categoris.create', [CategoriController::class, 'create']);
Route::get('admin/categoris.edit', [CategoriController::class, 'edit']);
Route::put('admin/categoris.edit', [CategoriController::class, 'update']);
 Route::get('admin/slides', [SlideController::class, 'index']);
Route::put('admin/slides/{id}', [SlideController::class, 'update']);
Route::get('admin/abouts', [AboutController::class, 'index']);
Route::put('admin/abouts/{id}', [AboutController::class, 'update']);
});


Route::middleware([
    'auth:sanctum,web',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [HalamanuserController::class, 'index']);
    Route::get('/about', [HalamanuserController::class, 'about']);
    Route::get('/resep', [HalamanuserController::class, 'resep']);
    Route::get('/diabetes', [HalamanuserController::class, 'diabetes']);
    Route::get('/hipertensi', [HalamanuserController::class, 'hipertensi']);
    Route::get('/jantung', [HalamanuserController::class, 'jantung']);
    Route::get('/obesitas', [HalamanuserController::class, 'obesitas']);
    Route::get('/contact', [HalamanuserController::class, 'contact']);
    Route::get('/resep/{slug}', [HalamanuserController::class, 'detailResep']);
    Route::get('/rekom/{jenispenyakitindo}', [HalamanuserController::class, 'detailRekomendasi']);
    Route::get('/categori/{nomor}', [HalamanuserController::class, 'detailCategori']);

});
