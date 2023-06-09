<?php

#home

use App\Http\Controllers\Doadores\DoadoresController;


#pessoa
Route::resource('doadores', DoadoresController::class);
Route::resource('doadores/qtde-tipo-cartao', DoadoresController::class);



