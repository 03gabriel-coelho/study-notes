<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\TesteController;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function(){ return 'Login'; })->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ return 'Clientes'; })->name('site.clientes');
    Route::get('/fornecedores', function(){ return 'Fornecedores';})->name('site.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos';})->name('site.produtos');
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');

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

// Route::get('/rota1', function() {
//     echo 'Rota 1';
// })->name('site.rota1');

// Route::get('/rota2', function() {
//     return redirect()->route('site.rota1'); // redireciona a rota 2 para a rota 1
// })->name('site.rota2');

// Route::redirect('/rota2', '/rota1'); // redireciona a rota 2 para a rota 1

Route::fallback(function(){ // CRIANDO UMA ROTA FALLBACK PARA REDIRECIONAR QUANDO A ROTA NÃO EXISTE
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para voltar a página inicial.';
});

