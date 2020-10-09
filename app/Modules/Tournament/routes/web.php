<?php


Route::get('tournament', 'WebController@showUserIndexTournament')->name('showUserIndexTournament');
Route::get('/tournament/create', 'WebController@showUserCreateTournament')->name('showUserCreateTournament');
Route::post('/tournament/add', 'WebController@handleUserAddTournament')->name('handleUserAddTournament');
