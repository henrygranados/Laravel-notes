<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function(){
	return "Hello world";
});

Route::get('hello/{name}', function($name){
	echo "Hello ". $name;
});

// Route::get('customer/{id}', function($id){
// 	$customer = App\Customer::find($id);
// 	echo "Hello my name is ". $customer->Nombre;
// });

Route::get('customer/{id}', 'CustomerController@show');

Route::get('get_customer', function(){
	$customer = App\Customer::where('Nombre', '=', 'Maria')->first();
	echo $customer->Nombre;
});

Route::get('mypage', function(){
	//$customers = App\Customer::all();
	$customers = DB::table('people')->get();
	$data = array(
		'customers'=> $customers
		);
	return view('mypage', $data);
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
