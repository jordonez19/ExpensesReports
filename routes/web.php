<?php

use App\Http\Controllers\DashboardController;
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

Route::get('/', 'HomeController@index');

Route::get('/dashboard','DashboardController@index');

Route::resource('/expenseReports', 'ExpenseReportController');

Route::get('/expenseReports/{id}/confirmDelete', 'ExpenseReportController@confirmDelete');

Route::get('/expenseReports/{expenseReports}/expenses/create', 'ExpenseController@create');

Route::post('/expenseReports/{expenseReports}/expenses', 'ExpenseController@store');

Route::post('/expenseReports/{id}/sendEmail', 'ExpenseReportController@SendEmail');

Route::get('/expenseReports/{id}/confirmSendEmail', 'ExpenseReportController@confirmSendEmail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

