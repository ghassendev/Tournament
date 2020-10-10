<?php


Route::get('tournament', 'WebController@showUserListTournament')->name('showUserListTournament');
Route::get('/tournament/create', 'WebController@showUserCreateTournament')->name('showUserCreateTournament')->middleware('auth');
Route::post('/tournament/add', 'WebController@handleUserAddTournament')->name('handleUserAddTournament')->middleware('auth');
Route::get('/tournament/show', 'WebController@showUserTournament')->name('showUserTournament')->middleware('auth');
Route::get('/tournament/tour/{id}','WebController@showOrganizerTournamentById')->name('showOrganizerTournamentById')->middleware('auth');