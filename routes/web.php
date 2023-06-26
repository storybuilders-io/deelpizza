<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\MollieWebhookController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DonationController::class, 'index']);
Route::post('/donate', [DonationController::class, 'store'])->name('donate');
Route::get('/donate', [DonationController::class, 'show'])->name('donate.show');
Route::post('webhooks/mollie', [MollieWebhookController::class, 'store'])->name('webhooks.mollie');
