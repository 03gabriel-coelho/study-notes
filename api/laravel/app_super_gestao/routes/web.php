<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Olá, sejá bem vindo ao curso!';
});

Route::get('/sobre-nos', function () {
    return 'Sobre nós';
});

Route::get('/contato', function () {
    return 'Contato';
});
