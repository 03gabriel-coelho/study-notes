@php
    // Comentário de uma linha

    /*
    Comentário de
    múltiplas linhas
    */
    echo 'Texto de teste';
@endphp

{{-- @dd($fornecedores); --}}
<br>
@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    Status: {{ $fornecedores[0]['status'] }}
    CNPJ: {{ $fornecedores[0]['cnpj'] }}
    @isset($fornecedores[0]['cnpj'])
        @empty($fornecedores[0]['cnpj'])
            CNPJ não informado
        @endempty
    @endisset
@endisset
