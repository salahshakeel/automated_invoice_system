<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkGeneratorPaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LinkGeneratorPaymentController::class, 'link_generator_payment_page1']);
Route::post('/save_page1', [LinkGeneratorPaymentController::class, 'create_link_generator_payment_page1'])->name('create_link_generator_payment_page1');

Route::get('/link2', [LinkGeneratorPaymentController::class, 'link_generator_payment_page2']);
Route::post('/save_page2', [LinkGeneratorPaymentController::class, 'create_link_generator_payment_page2'])->name('create_link_generator_payment_page2');

Route::get('/link3', [LinkGeneratorPaymentController::class, 'link_generator_payment_page3']);
Route::post('/save_page3', [LinkGeneratorPaymentController::class, 'create_link_generator_payment_page3'])->name('create_link_generator_payment_page3');

Route::get('/url', [LinkGeneratorPaymentController::class, 'url_page']);
Route::get('/payment/{id}', [LinkGeneratorPaymentController::class, 'payment_details']);


Route::get('/admin_dashboard', [UserController::class, 'index'])->name('admin_dashboard');
Route::get('/user_table', [UserController::class, 'user_table'])->name('user_table');


Route::get('/add_user', [UserController::class, 'addUser'])->name('add_user');
Route::post('/create-user', [UserController::class, 'createUser'])->name('user.registration');
Route::get('/deleteUsers/{id}', [UserController::class, 'deleteUsers']);


Route::get('/edit_user/{id}', [UserController::class, 'editUser'])->name('edit_user');
Route::post('/updateUsers',[UserController::class, 'updateUsers'])-> name ('user.updated');



Route::get('/add_sales_payment_merchant', [SalesController::class, 'addSalesPaymentMerchant'])->name('add_sales_payment_merchant');
Route::post('/create_sales_payment_merchant', [SalesController::class, 'createSalesPaymentMerchant'])->name('create_sales_payment_merchant');
Route::get('/deleteSalesPaymentMerchant/{id}', [SalesController::class, 'deleteSalesPaymentMerchant']);

Route::get('/add_sales_person_email', [SalesController::class, 'addSalesPersonEmail'])->name('add_sales_person_email');
Route::post('/create_sales_person_email', [SalesController::class, 'createSalesPersonEmail'])->name('create_sales_person_email');
Route::get('/deleteSalesPersonEmail/{id}', [SalesController::class, 'deleteSalesPersonEmail']);

Route::get('/table_sales_payment_merchant', [SalesController::class, 'tableSalesPaymentMerchant'])->name('table_sales_payment_merchant');
Route::get('/table_sales_person_email', [SalesController::class, 'tableSalesPersonEmail'])->name('table_sales_person_email');

Route::get('/table_invoice', [InvoiceController::class, 'tableInvoice'])->name('table_invoice');
Route::get('/deleteInvoice/{id}', [InvoiceController::class, 'deleteInvoice']);
Route::get('/viewInvoice/{id}', [InvoiceController::class, 'viewInvoice']);

Route::get('/admin_login', [UserController::class, 'login'])->name('login');
Route::post('/custom-signin', [UserController::class, 'createSignin'])->name('signin.custom');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


Route::post('/payment_done', [LinkGeneratorPaymentController::class, 'paymentDone'])->name('paymentDone');





// Route::post ( '/', function (Request $request) {
// 	\Stripe\Stripe::setApiKey ( 'sk_test_yourSecretkey' );
// 	try {
// 		\Stripe\Charge::create ( array (
// 				"amount" => 300 * 100,
// 				"currency" => "usd",
// 				"source" => $request->input ( 'stripeToken' ), // obtained with Stripe.js
// 				"description" => "Test payment." 
// 		) );
// 		Session::flash ( 'success-message', 'Payment done successfully !' );
// 		return Redirect::back ();
// 	} catch ( \Exception $e ) {
// 		Session::flash ( 'fail-message', "Error! Please Try again." );
// 		return Redirect::back ();
// 	}
// } );