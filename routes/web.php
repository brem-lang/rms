<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Roles;
use App\Http\Livewire\Permission\Permissions;
use App\Http\Livewire\Permission\CreatePermission;
use App\Http\Livewire\User\CreateUser;
use App\Http\Livewire\User\UserManagement;

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Roles\CreateRoles;
use App\Http\Livewire\Roles\EditRoles;

use App\Http\Livewire\Memorandums\Memorandums;
use App\Http\Livewire\Memorandums\CreateMemorandum;
use App\Http\Controllers\MemorandumController;


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
    return view('welcome');
});

Route::get('/dashboard', Dashboard::class)->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->name('admin.')->group(function () {
    // Matches The "/admin/roles" URL
    Route::get('/roles', Roles::class)->middleware(['auth', 'role:super|admin'])->name('roles');
    Route::get('/permission', Permissions::class)->middleware(['auth', 'role:super|admin'])->name('permission');
    Route::get('/users', UserManagement::class)->middleware(['auth', 'role:super|admin'])->name('users');
    Route::get('/create-user', CreateUser::class)->middleware(['auth', 'role:super|admin'])->name('createUser');
    Route::get('/users/{user}',[UserManagement::class, 'show'])->name('users.show');

    // edit
    Route::get('/roles/{id}',EditRoles::class)->name('roles.edit');
});

Route::prefix('create')->name('create.')->group(function () {
    Route::get('/memorandum', Memorandums::class)->middleware(['auth', 'role:super|admin'])->name('memorandum');
    Route::get('/createMemorandum', CreateMemorandum::class)->middleware(['auth', 'role:super|admin'])->name('createMemorandum');
    Route::post('/memorandum/store', [MemorandumController::class, 'store'])->name('memorandum.store');
});

Route::prefix('pdf')->name('pdf.')->group(function () {
    Route::get('/memorandum/{id}', [MemorandumController::class, 'show'])->name('memorandum.view');
    Route::get('/generate-pdf/{id}', [MemorandumController::class, 'generatePDF'])->name('memorandum.generate');
});


require __DIR__.'/auth.php';
