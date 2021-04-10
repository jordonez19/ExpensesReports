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

Route::get('/', 'HomeController@index'); //home
Route::get('/dashboard','DashboardController@index'); //home

Route::resource('/expenseReports', 'ExpenseReportController'); // reports

Route::get('/expenseReports/{id}/del', 'ExpenseReportController@deleteExpanseReportIndex'); //delete index
Route::get('/expenseReports/{id}/delete', 'ExpenseReportController@deleteExpanseReport');//delete details

Route::get('/expenseReports/{expenseReports}/expenses/create', 'ExpenseController@create'); // new expense
Route::put('/expenseReports/{expenseReports}/expenses/update/{id}', 'ExpenseController@update'); // new expense




Route::get('/expenseReports/{id}/expenses/editDetails/{detail_id}', 'ExpenseController@editDetails'); // edit expense






Route::post('/expenseReports/{expenseReports}/expenses', 'ExpenseController@store'); // expense created

Route::post('/expenseReports/{id}/sendEmail', 'ExpenseReportController@SendEmail'); //send mail
Route::get('/expenseReports/{id}/confirmSendEmail', 'ExpenseReportController@confirmSendEmail');// confirm send mail
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/expenseReports/{{$id}}/expenses/editDetails', 'ExpenseController@store');





