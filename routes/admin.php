<?php

Route::get('/', 'Admin\DashboardController@index');

Route::get('/dashboard', 'Admin\DashboardController@index');

Route::get('/table', 'Admin\DemoController@table');

Route::get('/calendar', 'Admin\DemoController@calendar');

Route::get('/form', 'Admin\DemoController@form');

Route::get('/chart', 'Admin\DemoController@chart');

Route::get('/table-list', 'Admin\DemoController@table_list');

Route::get('/table-list-img', 'Admin\DemoController@table_list_img');

/*Route::get('/sign-up', 'Admin\DemoController@');

Route::get('/login', 'Admin\DemoController@');*/

Route::get('/404', 'Admin\DemoController@error404');