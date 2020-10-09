<?php


Route::get('tournament', 'WebController@showUserListTournament')->name('showUserListTournament');
Route::get('/tournament/create', 'WebController@showUserCreateTournament')->name('showUserCreateTournament')->middleware('auth');;
Route::post('/tournament/add', 'WebController@handleUserAddTournament')->name('handleUserAddTournament')->middleware('auth');;
