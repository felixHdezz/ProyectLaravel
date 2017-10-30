<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/','indexController@index');
Route::get('/catalog','indexController@index_catalog');
Route::get('/login','indexController@get_login');
Route::get('/new_user','indexController@get_new_user');
Route::get('/prod_deta/{id}','indexController@get_prod_deta');
Route::get('/car','indexController@get_car');
Route::get('/user/perfil','indexController@get_user_perfil');
Route::get('/car/order','indexController@get_car_order');
Route::post('/log/auth','indexController@get_login_auth');
Route::post('/log/new_user','indexController@get_register_user');
Route::get('/logout','indexController@get_logout');
Route::get('/busc_prod/{id}','indexController@get_busc_pord');
Route::post('/prod/add_car','indexController@get_add_carrito');
Route::get('/car/order','indexController@get_pedido');
Route::get('/car/comp','indexController@get_pedido');
Route::get('/car/destroycar','indexController@get_destroycar');
Route::post('/car/order-final','indexController@get_pedido_final');
Route::get('/order/info','indexController@get_info_ped');
/*Routas services*/
Route::get('/prod/router','indexController@get_prod_rou');
Route::get('/prod/switch','indexController@get_prod_swi');
Route::get('/prod/cabl','indexController@get_prod_cabl');
Route::get('/prod/ante','indexController@get_prod_ant');
Route::get('/prod/servi','indexController@get_prod_ser');
/**/
Route::get('/cabl-estruct','indexController@get_cabl_estrcut');
// Route::get('/cabl-estruct/wifi','indexController@get_cabl_estrcut');
// Route::get('/cabl-estruct/MinMax','indexController@get_cabl_estrcut');
Route::get('/redes-inalam','indexController@get_redes_inalam');
Route::get('/redes-inalam/lifi','indexController@get_lifi');
Route::get('/serv/presup','indexController@get_presupuest');
Route::post('/serv/soli-presu','indexController@get_soli_pre');


/*Rutas administrador*/
	Route::get('log-admin','AdminController@get_log');
	Route::post('login-admin','AdminController@get_log_auth');
	Route::get('/admin/logout','AdminController@get_logout');
	Route::get('admin','AdminController@index');
	Route::get('admin/carg','AdminController@get_cargos');
	Route::get('admin/cat','AdminController@get_cat');
	Route::get('admin/users','AdminController@get_usuario');
	Route::get('admin/client','AdminController@get_clientes');
	Route::get('admin/empl','AdminController@get_empleados');
	Route::get('admin/prove','AdminController@get_prove');
	Route::get('admin/produc','AdminController@get_product');

	/*Rutas de registro de cargos*/
	Route::get('admin/carg','CargoController@index');
	Route::get('admin/carg/create','CargoController@create');
	Route::get('admin/carg/edit/{id}','CargoController@edit');
	Route::post('admin/carg/store','CargoController@store');
	Route::put('admin/carg/update/{id}','CargoController@update');
	Route::get('admin/carg/delet/{id}','CargoController@destroy');
	/*Rutas Categorias*/
	Route::get('admin/cat/create','CategoriaController@create');
	Route::post('admin/cat/store','CategoriaController@store');
	Route::get('admin/cat/edit/{id}','CategoriaController@edit');
	Route::put('admin/cat/update','CategoriaController@update');
	Route::get('admin/cat/delete/{id}','CategoriaController@destroy');
	/*Rutas de marcas*/
	Route::get('admin/marc','AdminController@get_marcas');
	Route::get('admin/marc/create','MarcaController@create');
	Route::post('admin/marc/store','MarcaController@store');
	Route::get('admin/marc/edit/{id}','MarcaController@edit');
	Route::put('admin/marc/update','MarcaController@update');
	Route::get('admin/marc/delete/{id}','MarcaController@destroy');
	/*Usuario*/
	Route::get('admin/users/create','UsuarioController@create');
	Route::post('admin/users/store','UsuarioController@store');
	Route::get('admin/users/edit/{id}','UsuarioController@edit');
	Route::put('admin/users/update','UsuarioController@update');
	Route::get('admin/users/delete/{id}','UsuarioController@destroy');
	/*Rutas clientes*/
	Route::get('admin/client/create','ClienteController@create');
	Route::post('admin/client/store','ClienteController@store');
	Route::get('admin/client/edit/{id}','ClienteController@edit');
	Route::put('admin/client/update','ClienteController@update');
	Route::get('admin/client/delete/{id}','ClienteController@destroy');
	/*Rutas empleados*/
	Route::get('admin/empl/create','EmpleadoController@create');
	/*Rutas proveedores*/
	Route::get('admin/prove/create','ProveedorController@create');
	Route::post('admin/prove/store','ProveedorController@store');
	Route::get('admin/prove/edit/{id}','ProveedorController@edit');
	Route::put('admin/prove/update','ProveedorController@update');
	Route::get('admin/prove/delete/{id}','ProveedorController@destroy');
	/*Rutas de productos*/
	Route::get('admin/produc/create','ProductoController@create');
	Route::post('/admin/produc/store','ProductoController@store');
	/**/
	Route::get('admin/soli-presu','AdminController@get_soli_presu');
