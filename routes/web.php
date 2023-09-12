<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\responsableController;
use App\Http\Controllers\Backend\AgentTypeController;

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



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

///admin group middleware

route::middleware(['auth','profile:admin'])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');

    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');

    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');
   
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    

});// end group admin middleware



///responsable group middleware

route::middleware(['auth','profile:responsable'])->group(function(){

    Route::get('/responsable/dashboard', [responsableController::class, 'ResponsableDashboard'])->name('responsable.dashboard');
    
    Route::get('/responsable/logout', [ResponsableController::class, 'ResponsableLogout'])->name('responsable.logout');

    Route::get('/responsable/profile', [ResponsableController::class, 'ResponsableProfile'])->name('responsable.profile');

    Route::post('/responsable/profile/store', [ResponsableController::class, 'ResponsableProfileStore'])->name('responsable.profile.store');
    
    Route::get('/responsable/change/password', [ResponsableController::class, 'ResponsableChangePassword'])->name('responsable.change.password');

    Route::post('/responsable/update/password', [ResponsableController::class, 'ResponsableUpdatePassword'])->name('responsable.update.password');

});// end group responsable middleware


Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

Route::get('/responsable/login', [ResponsableController::class, 'ResponsableLogin'])->name('responsable.login');

Route::controller(AgentTypeController::class)->group(function(){
    Route::get('/all/type','AllType')->name('all.type');

});
Route::controller(AgentTypeController::class)->group(function(){
        Route::get('/add/type','AddType')->name('add.type');

});
Route::controller(AgentTypeController::class)->group(function(){
    Route::post('/store/type','StoreType')->name('store.type');


    

});