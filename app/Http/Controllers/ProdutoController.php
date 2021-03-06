<?php

namespace App\Http\Controllers;
use App\Produto;

use Illuminate\Http\Request;
use App\Http\Requests;

class ProdutoController extends Controller
{
    public function index()
    {
       
        $produtos = Produto::all();
       
        return response()->json($produtos);
    }

    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->fill($request->all());
        $produto->save();
        
        return response()->json($produto, 201);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);

        if(!$produto) {
            return response()->json([
                'message'   => 'Produto não encontrado',
            ], 404);
        }

        $produto->fill($request->all());
        $produto->save();

        return response()->json($produto);
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);

        if(!$produto) {
            return response()->json([
                'message'   => 'Produto não encontrado',
            ], 404);
        }

        $produto->delete();
    }
}
