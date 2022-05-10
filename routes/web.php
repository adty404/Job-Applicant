<?php

use App\Http\Controllers\ApplyJobController;
use App\Http\Controllers\LandingPageController;
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

Route::get('/', [LandingPageController::class, 'index'])->name('landing_page.index');
Route::get('job/{id}/detail', [LandingPageController::class, 'detail'])->name('landing_page.detail');

Route::get('apply/{id}', [ApplyJobController::class, 'index'])->name('apply_job.index');
Route::post('apply', [ApplyJobController::class, 'post'])->name('apply_job.post');
