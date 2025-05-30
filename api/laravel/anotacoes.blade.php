{{-- Comentário descartado pelo interpretador do Blade --}}

{{'Texto de teste'}}
<?= 'Texto de teste' ?>

@php
    // Comentário de uma linha

    /*
    Comentário de
    múltiplas linhas
    */
    echo 'Texto de teste';
@endphp

{{--Fazendo um if com o Blade--}}
@if(count($fornecedores) > 0 && count($fornecedores) < 10)  
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem muitos fornecedores cadastrados</h3>
@else
    <h3>Não existem fornecedores cadastrados</h3>
@endif

{{-- Fazendo um unless com o Blade, o unless é o inverso do if --}}
@unless($fornecedores[0]['status'] == 'S')
    Fornecedor inativo
@endunless

{{-- Fazendo um isset com o Blade, o isset verifica se a variável existe ou não, retorna true ou false --}}
@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    Status: {{ $fornecedores[0]['status'] }}
@endisset

{{-- Fazendo um empty com o Blade, o empty verifica se a variável está vazia ou não, retorna true ou false --}}
@empty($fornecedores[0]['cnpj'])
    CNPJ não informado
@endempty



