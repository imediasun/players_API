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
Auth::routes();
Route::get('/', 'MainController@index');
/*Route::get('/admin', 'AdminController@index');
Route::get('/admin/customers_managment', 'AdminController@customers_managment');
Route::get('/admin/add_good', 'AdminController@add_good');
Route::get('/admin/add_logos', 'AdminController@add_logos');
Route::get('/admin/del_good', 'AdminController@del_good');*/
/*Route::get('/', function () {
    return view('index');
});*/
Route::get('/kalender', 'KalenderController@index');
Route::get('/erstkontakt', 'ProjekteController@erstkontakt');
Route::get('/neue_anfregen', 'AnfragenController@neue_anfregen');
Route::get('/angebotseinstellungen', 'AngebotseinsController@index');
Route::post('/km', 'AnfragenController@map_km');
Route::post('/get_starting_map', 'AnfragenController@get_starting');
Route::post('/functions_images', 'FunctionsController@index');
Route::post('/functions_image', 'FunctionsController@main_image');
Route::post('/functions_form', 'FunctionsController@form');

Route::get('/home', 'HomeController@index');
Route::get('/good/{id}', 'GoodController@index')->where('id', '[0-9]+')->name('good');
Route::get('/cabinet/{id}', 'PrivateCabinetController@index')->where('id', '[0-9]+');
Route::get('/cabinet/orders/{id}', 'PrivateCabinetController@orders')->where('id', '[0-9]+');
Route::get('/cabinet/likes/{id}', 'PrivateCabinetController@likes')->where('id', '[0-9]+');
Route::get('/cabinet/messages/{id}', 'PrivateCabinetController@messages')->where('id', '[0-9]+');
Route::get('/category/{id}', 'CategoryController@index')->where('id', '[0-9]+');
Route::post('/MainController/ajax_usersessions', 'MainController@ajax_usersessions');

Route::get('auth/facebook', 'FacebookController@redirectToProvider')->name('facebook.login');
Route::get('auth/facebook/callback', 'FacebookController@handleProviderCallback');
Route::get('/good_added', function () {
    return view('good');
})->name('good_added');
Route::get('/not_yours', function () {
    return view('not_yours');
})->name('not_yours'); 

Route::get('/logout',['uses' => 'Admin\IndexController@index','as' => 'adminIndex']);

//admin
Route::group(['prefix' => 'admin','middleware'=>['web','auth']],function(){
       //admin

    Route::get('/',['uses' => 'Admin\IndexController@index','as' => 'adminIndex']);
    Route::get('/dashboard',['uses' => 'Admin\IndexController@index','as' => 'adminIndex']);
    Route::get('/anfregen','Admin\AnfragenController@index');
    Route::get('/kunden','Admin\KundenController@index');
    Route::get('/firm/{id}','Admin\FirmController@show_firm');
    Route::get('/del_firm/{id}', 'Admin\FirmController@del_firm');
    Route::post('/first_name_xed', 'Admin\XedController@first_name');
    Route::post('/telephone_xed', 'Admin\XedController@telephone');

    Route::post('/adress_xed', 'Admin\XedController@adresse');
    Route::post('/change_active_client', 'Admin\ClientController@change_active');
    Route::post('/delete_client', 'Admin\ClientController@delete_client');
    Route::post('/add_logo', 'Admin\FirmController@add_logo');
    Route::post('/add_firm', 'Admin\FirmController@add_firm');
    
    Route::post('/client_general_information', 'Admin\ClientController@anfrage_form');
    Route::post('/func_update_role', 'FunctionsController@role');
    Route::post('/func_delete_user', 'FunctionsController@delete_user');
    Route::resource('/add_good','Admin\GoodsController');
    Route::resource('/customers_managment','Admin\CustomersController');
});
/*Route::get('sendmail','')*/
Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');
Route::get('/add_to_cart/{id}','ShopingCartController@addToCart')->name('add_to_cart');
Route::get('/shoping_cart','ShopingCartController@getCart')->name('shoping_cart');
Route::get('/checkout','ShopingCartController@getCheckout')->name('checkout');



$router->group(['prefix' => 'api/v1'], function ($router) {
    // Аутентификация приложений...
    $router->post('/auth/app', 'Api\AuthController@authenticateApp');

    // Аутентификация пользователей...
    $router->post('/auth/user', 'Api\AuthController@authenticateUser')->middleware('auth.api.app');
    $router->post('/auth/user/logout', 'Api\AuthController@logoutUser')->middleware('auth.api.user');

    // Тестовые  маршруты
    $router->get('/players', 'Api\HomeController@appData')->middleware('auth.api.app');
    $router->get('/user-data', 'Api\HomeController@userData');
});

// авторизация приложения для доступа к данным пользователя...
$router->get('/authorize', 'HomeController@showAuthorizationForm')->middleware('web'); 
$router->post('/authorize', 'HomeController@authorizeApp')->middleware('web'); 















Auth::routes();

Route::get('/home', 'HomeController@index');
