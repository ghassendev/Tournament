<?php

Route::get('match', 'MatchController@welcome');
Route::post('/match/add', 'MatchController@handlerUserJoinTournement')->name('handlerUserJoinTournement')->middleware('auth');
