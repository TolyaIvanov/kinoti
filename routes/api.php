<?php

use Illuminate\Http\Request;

Route::get('/', 'FilmsController@index');

Route::get('films', 'FilmsController@films');

Route::get('films/{film}', 'FilmsController@showFilm');

Route::get('films/top', 'FilmsController@filmTop');

Route::get('cartoons', 'FilmsController@catroons');

Route::get('cartoons/top', 'FilmsController@cartoonsTop');

Route::get('serials', 'SerialsController@serials');

Route::get('serials/{serial}', 'SerialsController@showSerial');

Route::get('serials/top}', 'SerialsController@serialTop');

Route::get('/premiere', 'FilmsController@premiere');

Route::get('/actor/{actor}', 'ActorController@show');

Route::get('/director/{director}', 'DirectorController@show');

Route::get('/admin', 'parser\ParserController@getContent');


