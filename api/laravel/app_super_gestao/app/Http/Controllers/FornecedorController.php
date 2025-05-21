<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = ['Fornecedor 1', 'Fornecedor 2', 'Fornecedor 3', 'Fornecedor 4', 'Fornecedor 5', 'Fornecedor 6', 'Fornecedor 7', 'Fornecedor 8', 'Fornecedor 9', 'Fornecedor 10', 'Fornecedor 11', 'Fornecedor 12', 'Fornecedor 13', 'Fornecedor 14', 'Fornecedor 15', 'Fornecedor 16', 'Fornecedor 17', 'Fornecedor 18', 'Fornecedor 19', 'Fornecedor 20'];
        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
