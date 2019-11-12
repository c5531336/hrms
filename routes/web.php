<?php

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
    return view('authorize-form.login');
});

Auth::routes();
/*
 * main route
 */
Route::middleware([])->group(function () {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('user/profile', function () {
        // Uses first & second Middleware
    });
    Route::prefix('time-keeping-machine')->name('time-keeping-machine.')->group(function () {
        Route::get('/', 'TimeKeepingMachineController@importView')->name('index');
        Route::post('import', 'TimeKeepingMachineController@import')->name('import');
    });
    /**
     * SalaryManagement
     */
    Route::prefix('salary-management')->name('salary-management.')->group(function () {
        /*
         * Payroll
         */
        Route::prefix('payroll')->name('payroll.')->group(function () {
            Route::get('/', function () {
                return view('SalaryManagement.Payroll.index');
            })->name('index');
            Route::get('/details', function () {
                return view('SalaryManagement.Payroll.salary_details');
            })->name('details');
        });



    });
});
/*
 * test route
 */
Route::get('/home2', 'HomeController@index2')->name('home2');
Route::get('/home3', 'HomeController@index3')->name('home3');
