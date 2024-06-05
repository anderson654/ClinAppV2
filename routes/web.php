<?php

use App\Http\Controllers\PaymentInvoice;
use App\Http\Controllers\StudioDetailController;
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

Route::get('/', function () {
	return view('index');
});


Route::get('/termos-e-condicoes-de-uso-clin', function () {
	return view('clin.termsAndConditions');
})->name('terms');

Route::get('/download_app', function () {
	return view('clin.dowloadApp');
})->name('dowloadApp');

Route::get('/eduClin', function () {
	return view('educlin.index');
})->name('eduClin');

Route::get('/agendamento', function () {
	return view('clin.agendamento');
})->name('agendamento');

Route::get('/dashboard', function () {
	Route::get('/', function () {
		return redirect('/admin/home');
	});

	Route::get('/home', 'HomeController@index')->name('home');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';



//Agendamento Comercial
Route::get('/agendamento-comercial', 'Client\ComercialSedulesController@indexFormComercial')->name('agendamentoComercial');
Route::post('/agendamento-comercial/Ccreate', 'Client\ComercialSedulesController@Ccreate')->name('saveAgendamentoComercial')->middleware('can');
//fim rotas paginas do site


Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

	Route::get('/', function () {
		return redirect('/admin/home');
	});

	Route::get('/home', 'HomeController@index')->name('home');

});

Route::get('/clinDetail', [StudioDetailController::class, 'index']);
Route::get('/payment/{id}', [StudioDetailController::class, 'checkOut']);
Route::post('/payment/{id}/paymentCard', [PaymentInvoice::class, 'paymentInvoiceCard']);


//email
Route::get('/email', [PaymentInvoice::class, 'template']);
Route::get('/subscriptionEmail/{id}', [PaymentInvoice::class, 'subscriptionEmail']);
