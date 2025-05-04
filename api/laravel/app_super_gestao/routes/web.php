<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobreNosController as TesteController;
use App\Http\Controllers\ContatoController;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);
Route::get('/sobre-nos', [TesteController::class, 'sobreNos']);
Route::get('/contato', [ContatoController::class, 'contato']);

// ---EXEMPLO--- Conseguimos passar parametros desta forma, não precisa ter a mesma nomenclatura
// Route::get('/contato/{nome}/{y}', function (string $xyz, string $z) {
//     echo 'Estamos aqui: '.$xyz.' - '.$z;
// });

// ---EXEMPLO--- é possível passar parametros opcionais
// Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}',
//     function (string $nome, string $categoria, string $assunto, string $mensagem = 'Mensagem não informada') {
//         echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
//    }
// );

// ---EXEMPLO--- tipando os parâmetros no qual é possível passar apenas números ou letras
// Route::get(
//     '/contato/{nome}/{categoria_id}',
//     function (
//         string $nome = 'Desconhecido',
//         int $categoria_id = 1 // 1 - 'Informação'
//     ) {
//         echo "Estamos aqui: $nome - $categoria_id";
//     }
// )
// ->where('categoria_id', '[0-9]+') // [0-9]+ - só aceita números
// ->where('nome', '[A-Za-z]+'); // [0-9]+ - só aceita letras

Route::get(
    '/contato/{nome}/{categoria_id}',
    function (
        string $nome = 'Desconhecido',
        int $categoria_id = 1 // 1 - 'Informação'
    ) {
        echo "Estamos aqui: $nome - $categoria_id";
    }
)
->where('categoria_id', '[0-9]+') // [0-9]+ - só aceita números
->where('nome', '[A-Za-z]+'); // [0-9]+ - só aceita letras

