<?php

Route::get('player-match', 'PlayerMatchController@welcome');
Route::post('player-match/add', 'PlayerMatchController@handleUserAddPlayerToMatch')->name('handleUserAddPlayerToMatch')->middleware('auth');
