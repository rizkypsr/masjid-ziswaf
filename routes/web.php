<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Infaq;
use App\Http\Livewire\Transaction;
use App\Http\Livewire\TransactionDetail;
use App\Http\Livewire\Wakaf;
use App\Http\Livewire\Zakat;
use Illuminate\Support\Facades\Route;

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

Route::get('/', Home::class)->middleware(['auth']);
Route::get('/infaq', Infaq::class)->middleware(['auth'])->name('infaq');
Route::get('/wakaf', Wakaf::class)->middleware(['auth'])->name('wakaf');
Route::get('/zakat', Zakat::class)->middleware(['auth'])->name('zakat');
Route::get('/transaction', Transaction::class)->middleware(['auth'])->name('transaction');
Route::get('/transaction/{id}', TransactionDetail::class)->middleware(['auth'])->name('transaction-detail');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
