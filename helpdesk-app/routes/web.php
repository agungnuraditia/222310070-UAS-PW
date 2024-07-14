<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailTicketController;

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

Route::get('/home', function () {
    $auth = Auth::user();
    if ($auth->role_id==1){
        return view('mahasiswa.ticket');
    }
    return view('riwayat_ticket');
});

Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/ticket',[TicketController::class, 'index']);
Route::post('/ticket',[TicketController::class, 'store'])->name('ticket.create');
Route::get('/riwayat',[TicketController::class, 'riwayat_ticket'])->name('ticket.riwayat');


Route::post('postLogin', [LoginController::class, 'postLogin'])->name ('postLogin');

Route::get('/divisi', [DivisiController::class, 'index']);

Route::get('/delete/{item}', [TicketController::class, 'delete']);

Route::get('/detail_ticket/{id}',[TicketController::class, 'show'])->name('detail_ticket');

Route::get('/update-proses-status/{id}', [TicketController::class, 'updateProsesStatus'])->name('updateProsesStatus');

Route::get('/update-proses-selesai/{id}', [TicketController::class, 'updateProsesSelesai'])->name('updateProsesSelesai');

Route::get('/logout', function() {
    Auth::logout();
    return redirect('/login');
})->name('logout');
