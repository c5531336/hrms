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

    /**
     *
     */

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
            Route::get('/details2', function () {
                return view('SalaryManagement.Payroll.salary_detail_2');
            })->name('details2');
        });
        /**
         * Salary_Calculation
         */
        Route::prefix('SalaryCalculation')->name('SalaryCalculation.')->group(function () {
            Route::get('/', function () {
                return view('SalaryManagement.SalaryCalculation.index');
            })->name('index');

        });
    });
    /**
     * Employee
     */
    Route::namespace('Employee')->group(function () {
        Route::resource('employee', 'EmployeeController');
    });
    /**
     * Department
     */
    Route::namespace('Department')->group(function () {
        Route::resource('department', 'DepartmentController');
    });
    /**
     * Branch
     */
    Route::namespace('Branch')->group(function () {
        Route::resource('branch', 'BranchController');
    });
    /**
     * EmployeeLevel
     */
    Route::namespace('EmployeeLevel')->group(function () {
        Route::resource('employee-level', 'EmployeeLevelController')->parameters(['employee-level' => 'employeeLevel']);
    });
    Route::namespace('TimeShift')->group(function () {
        Route::resource('time-shift', 'TimeShiftController')->parameters(['time-shift' => 'timeShift']);
    });
    Route::namespace('ProductCategory')->group(function () {
        Route::resource('product', 'ProductCategoryController');
    });
    /**
     * Time Keeping Machine
     */
    Route::namespace('TimeKeepingMachine')->group(function (){
        Route::get('time-keeping/{timeKeeping}/edit','TimeKeepingMachineController@edit')->name('time-keeping.edit');
        Route::resource('time-keeping', 'TimeKeepingMachineController')->parameters(['time-keeping' => 'EmployeeId'])->except([
            'edit','update'
        ]);
    });

    /**
     * Salary
     */
    Route::namespace('Salary')->group(function (){
        Route::resource('temp-salary', 'TemporarySalaryController')->parameters(['temp-salary' => 'TempSalary']);
    });
    /**
     * Importer
     */
    Route::prefix('importer')->namespace('Import')->name('Importer.')->group(function () {
        Route::get('/', 'ImporterController@index')->name('index');
        Route::post('/import-time-keeping', 'ImporterController@ImportTimeKeepingMachine')->name('TimeKeeping');
        Route::post('/import-product-made', 'ImporterController@ImportProductMade')->name('ProductMade');
        Route::post('/import-employee-level', 'ImporterController@ImportEmployeeLevel')->name('EmployeeLevel');
    });
});
/*
 * test route
*/
Route::get('/home2', 'HomeController@index2')->name('home2');
Route::get('/home3', 'HomeController@index3')->name('home3');
Route::get('/test','HomeController@testCreateTime');
