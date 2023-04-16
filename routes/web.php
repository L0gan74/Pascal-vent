<?php

use App\Http\Controllers\InstallController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PortfolioController;

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

Route::get('/', [HomeController::class, 'get']);

Route::group(['middleware' => config('fortify.middleware', ['web'])], function () {

    Route::group(['middleware' => 'auth'], function () {

        Route::group(['middleware' => 'role:admin'], function () {

            Route::get('/admin', [AdminController::class, 'get']);

            /* installs */
            Route::post('/addInstall', [InstallController::class, 'add']);

            Route::get('/addInstall', function () {
                return view('addInstall');
            });

            Route::get('/updateInstall/{id}', [InstallController::class, 'one']);

            Route::post('/updateInstall', [InstallController::class, 'update']);

            Route::get('/deleteInstall/{id}', [InstallController::class, 'delete']);

            /* clients */
            Route::post('/addClient', [ClientController::class, 'add']);

            Route::get('/addClient', function () {
                return view('addClient');
            });

            Route::get('/updateClient/{id}', [ClientController::class, 'one']);

            Route::post('/updateClient', [ClientController::class, 'update']);

            Route::get('/deleteClient/{id}', [ClientController::class, 'delete']);

            /* portfolios */
            Route::post('/addPortfolio', [PortfolioController::class, 'add']);

            Route::get('/addPortfolio', function () {
                return view('addPortfolio');
            });

            Route::get('/updatePortfolio/{id}', [PortfolioController::class, 'one']);

            Route::post('/updatePortfolio', [PortfolioController::class, 'update']);

            Route::get('/deletePortfolio/{id}', [PortfolioController::class, 'delete']);

        });
    });
});
