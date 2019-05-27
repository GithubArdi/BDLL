<?php 
/*
Contoh menggunakan router


Yang ini kalo mau pake class 
	$routes['admin/:param'] = 'Landing@admin';

Yang ini kalo mau pake prosedural
	$routes['admin/:param'] = function($halo){
		echo $halo;
	};

Yang ini routes default
	$routes['default'] = 'Landing@index';

*/
$routes['default'] = 'LandingController@index';
$routes['restaurant/:id'] = 'LandingController@restaurant';
$routes['pesan'] = 'LandingController@pesan';
$routes['reservasi'] = 'LandingController@reservasi';
$routes['konfreservasi'] = 'LandingController@konfreservasi';
$routes['konfpesan'] = 'LandingController@konfpesan';
$routes['login'] = 'LandingController@login';
$routes['dologin'] = 'LandingController@dologin';
$routes['register'] = 'LandingController@register';
$routes['logout'] = 'DashboardController@logout';
$routes['control-panel'] = 'DashboardController@index';

// dashboard


//menu
$routes['control-panel/menu'] = 'MenuController@index';
$routes['control-panel/menu/edit/:id'] = 'MenuController@edit';	
$routes['control-panel/menu/create'] = 'MenuController@create';
$routes['control-panel/menu/add'] = 'MenuController@add';
$routes['control-panel/menu/update'] = 'MenuController@update';
$routes['control-panel/menu'] = 'menuController@index';
$routes['control-panel/menu/add'] = 'menuController@add';
$routes['control-panel/menu/create'] = 'menuController@create';
$routes['control-panel/menu/edit/:id'] = 'menuController@edit';
$routes['control-panel/menu/destroy'] = 'menuController@destroy';


//restaurant
$routes['control-panel/restaurant'] = 'RestaurantController@index';
$routes['control-panel/restaurant/edit/:id'] = 'RestaurantController@edit';
$routes['control-panel/restaurant/create'] = 'RestaurantController@create';
$routes['control-panel/restaurant/add'] = 'RestaurantController@add';
$routes['control-panel/restaurant/update'] = 'RestaurantController@update';
$routes['control-panel/restaurant'] = 'restaurantController@index';
$routes['control-panel/restaurant/add'] = 'restaurantController@add';
$routes['control-panel/restaurant/create'] = 'restaurantController@create';
$routes['control-panel/restaurant/edit/:id'] = 'restaurantController@edit';
$routes['control-panel/restaurant/destroy'] = 'restaurantController@destroy';

//paket
$routes['control-panel/paket'] = 'PaketController@index';
$routes['control-panel/paket/edit/:id'] = 'PaketController@edit';
$routes['control-panel/paket/create'] = 'PaketController@create';
$routes['control-panel/paket/add'] = 'PaketController@add';
$routes['control-panel/paket/update'] = 'PaketController@update';
$routes['control-panel/paket'] = 'paketController@index';
$routes['control-panel/paket/add'] = 'paketController@add';
$routes['control-panel/paket/create'] = 'paketController@create';
$routes['control-panel/paket/edit/:id'] = 'paketController@edit';
$routes['control-panel/paket/destroy'] = 'paketController@destroy';

//customers
$routes['control-panel/customer'] = 'CustomerController@index';
$routes['control-panel/customer/edit/:id'] = 'CustomerController@edit';
$routes['control-panel/customer/create'] = 'CustomerController@create';
$routes['control-panel/customer/add'] = 'CustomerController@add';
$routes['control-panel/customer/update'] = 'CustomerController@update';
$routes['control-panel/customer'] = 'customerController@index';
$routes['control-panel/customer/add'] = 'customerController@add';
$routes['control-panel/customer/create'] = 'customerController@create';
$routes['control-panel/customer/edit/:id'] = 'customerController@edit';
$routes['control-panel/customer/destroy'] = 'customerController@destroy';

//mitra
$routes['control-panel/mitra'] = 'MitraController@index';
$routes['control-panel/mitra/edit/:id'] = 'MitrarController@edit';
$routes['control-panel/mitra/create'] = 'MitraController@create';
$routes['control-panel/mitra/add'] = 'MitraController@add';
$routes['control-panel/mitra/update'] = 'MitraController@update';
$routes['control-panel/mitra'] = 'mitraController@index';
$routes['control-panel/mitra/add'] = 'mitraController@add';
$routes['control-panel/mitra/create'] = 'mitraController@create';
$routes['control-panel/mitra/edit/:id'] = 'mitraController@edit';
$routes['control-panel/mitra/destroy'] = 'mitraController@destroy';
