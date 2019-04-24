<?php

namespace App\Http\Controllers;
use App\Produto;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
       
        return response()->json($produtos);
    }

    public function store(Request $request)
    {
        // $produto = new Produto();
        // $produto->fill($request->all());
        // $produto->save();
        var_dump($request); exit;

        return response()->json($request, 201);
    }
}
