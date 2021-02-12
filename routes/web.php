<?php

use App\Http\Controllers\Academy\AcademyController;
use App\Http\Controllers\Dashboard\Activity\ActivityController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Tasks\TaskController;
use App\Http\Controllers\Invoices\InvoiceController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Projects\ProjectController;
use App\Http\Controllers\Settings\SettingController;
use App\Http\Controllers\Tickets\TicketController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/test', function () {
    return Inertia::render('Test', [
    ]);
});


// Guest routes...
Route::middleware('guest')
    ->group(function () {
        Route::get('/', function () {
            return view('auth.login');
        });
    });

// Auth routes...
Route::middleware(['auth', 'verified'])
    ->group(function () {
        // Dashboard routes...
        Route::name('dashboard.')
            ->prefix('dashboard')
            ->group(function () {
                Route::get('/', [DashboardController::class, 'index'])->name('index');

                Route::name('tasks.')
                    ->prefix('tasks')
                    ->group(function () {
                        Route::get('/', [TaskController::class, 'index'])->name('index');
                    });

                Route::name('activity.')
                    ->prefix('activity')
                    ->group(function () {
                        Route::get('/', [ActivityController::class, 'index'])->name('index');
                    });
            });

        // Projects routes...
        Route::name('projects.')
            ->prefix('projects')
            ->group(function () {
                Route::get('/', [ProjectController::class, 'index'])->name('index');
            });

        // Tickets routes...
        Route::name('tickets.')
            ->prefix('tickets')
            ->group(function () {
                Route::get('/', [TicketController::class, 'index'])->name('index');
            });

        // Invoices routes...
        Route::name('invoices.')
            ->prefix('invoices')
            ->group(function () {
                Route::get('/', [InvoiceController::class, 'index'])->name('index');
            });

        // Academy routes...
        Route::name('academy.')
            ->prefix('academy')
            ->group(function () {
                Route::get('/', [AcademyController::class, 'index'])->name('index');
            });

        // Settings routes...
        Route::name('settings.')
            ->prefix('settings')
            ->group(function () {
                Route::get('/', [SettingController::class, 'index'])->name('index');
            });

        // Profile routes...
        Route::name('profile.')
            ->prefix('profile')
            ->group(function () {
                Route::get('/', [ProfileController::class, 'index'])->name('index');
            });
    });
