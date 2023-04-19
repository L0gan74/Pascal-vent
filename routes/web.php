<?php

use App\Http\Controllers\InstallController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Auth;

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

            Route::get('/admin', [AdminController::class, 'requests']);

            Route::get('/admin/client', [AdminController::class, 'client']);

            Route::get('/admin/install', [AdminController::class, 'install']);

            Route::get('/admin/portfolio', [AdminController::class, 'portfolio']);

            /* installs */
            Route::post('admin/addInstall', [InstallController::class, 'add']);

            Route::get('/admin/addInstall', function () {
                return view('admin.addInstall');
            });

            Route::get('/admin/updateInstall/{id}', [InstallController::class, 'one']);

            Route::post('/admin/updateInstall', [InstallController::class, 'update']);

            Route::get('/admin/deleteInstall/{id}', [InstallController::class, 'delete']);

            /* clients */
            Route::post('/admin/addClient', [ClientController::class, 'add']);

            Route::get('/admin/addClient', function () {
                return view('admin.addClient');
            });

            Route::get('/admin/updateClient/{id}', [ClientController::class, 'one']);

            Route::post('/admin/updateClient', [ClientController::class, 'update']);

            Route::get('/admin/deleteClient/{id}', [ClientController::class, 'delete']);

            /* portfolios */
            Route::post('/admin/addPortfolio', [PortfolioController::class, 'add']);

            Route::get('/admin/addPortfolio', function () {
                return view('admin.addPortfolio');
            });

            Route::get('/admin/updatePortfolio/{id}', [PortfolioController::class, 'one']);

            Route::post('/admin/updatePortfolio', [PortfolioController::class, 'update']);

            Route::get('/admin/deletePortfolio/{id}', [PortfolioController::class, 'delete']);
        });

        Route::get('/logout', function () {
            Auth::logout();
            return redirect(url('/'));
        });
    });
});
