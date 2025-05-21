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