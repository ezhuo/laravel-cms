<?php

Route::get('/', 'Web\IndexController@index');

Route::get(ROUTER_PASSPORT_LOGIN, 'Auth\PassportController@login');

Route::get(ROUTER_PASSPORT_REG, 'Auth\PassportController@reg');