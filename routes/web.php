<?php

Route::get('/', function(){
	return redirect('/login');
});
Route::get('/manajemen', 'ManajemenController@index');


Route::group(['middleware' => 'auth'],  function() {
	Route::get('/manajemen', function(){
		return view('posAdmin.manajemen');
	}); 
	Route::get('/manajemen', 'ManajemenController@index');
	Route::post('/manajemen/create', 'ManajemenController@create');
	Route::get('/manajemen/{id}/edit', 'ManajemenController@edit');
	Route::put('/manajemen/{id}/update', 'ManajemenController@update');
	Route::get('/manajemen/{id}/delete', 'ManajemenController@destroy');

	/* END Manajemen*/

	/*Makanan*/
	Route::get('/makanan', function(){
		return view('posAdmin.makanan');
	}); 

	Route::get('/makanan', 'MakananController@index');
	Route::post('/makanan/create', 'MakananController@create');
	Route::get('/makanan/{id}/edit', 'MakananController@edit');
	Route::post('/makanan/{id}/update', 'MakananController@update');
	Route::get('/makanan/{id}/delete', 'MakananController@destroy');

	/*END Makanan*/

	/* Minuman*/
	Route::get('/minuman', function(){
		return view('posAdmin.minuman');
	});

	Route::get('/minuman', 'MinumanController@index');
	Route::post('/minuman/create', 'MinumanController@create');
	Route::get('/minuman/{id}/edit',  'MinumanController@edit');
	Route::post('/minuman/{id}/update', 'MinumanController@update');
	Route::get('/minuman/{id}/delete', 'MinumanController@destroy');

	/* END Minuman*/

	/*Stok*/
	Route::get('/stok', function(){
		return view('posAdmin.stok');
	});
	Route::get('/stok', 'StokController@index');
	Route::post('stok/create', 'StokController@create');

	/*END Stok*/

	/*Kas*/
	Route::get('/kas', function(){
		return view('posAdmin.kas');
	});
	Route::get('/kas', 'KasController@index');
	Route::post('/kas/create', 'KasController@create');
	/*END Kas*/

	/*Laporan*/
	Route::get('/laporan', function(){
		return view('posAdmin.analisa');
	});
	Route::get('/laporan', 'LaporanController@index');
	/* END Laporan*/

	/*Data Pemesan*/
	Route::get('/pesanan',  function(){
		return view('posUser.pesanan');
	});
	Route::get('/pesanan', 'PesananController@index');
	Route::post('/pesanan/create', 'PesananController@create');


	/*ChecOut*/
	Route::get('/checkout', function(){
		return view('posUser.checkOut');
	});
	Route::get('/checkout', 'CheckoutController@index');
	Route::get('/print/{id}', 'CheckoutController@edit')->name('print');
	Route::get('/checkout/{id}/edit', 'CheckoutController@editutama');
	Route::post('/checkout/{id}/update', 'CheckoutController@updateutama');
	Route::get('/checkout/{id}/delete',  'CheckoutController@destroy');

	/*ENDChecOut*/

	/*Terjual*/
	Route::get('/terjual', function(){
		return view('posUser.terjual');
	});
	Route::get('/terjual', 'TerjualController@index');
	/*ENDTerjual*/

	/*Pengeluaran*/
	Route::get('/pengeluaran', function(){
		return view('posUser.pengeluaran');
	});
	Route::get('/pengeluaran', 'PengeluaranController@index');
	Route::post('/pengeluaran/create', 'PengeluaranController@create');

	/*ENDPengeluaran*/
});
/*Manajemen*/


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
