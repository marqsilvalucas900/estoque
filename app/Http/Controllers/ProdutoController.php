<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $nome = "Jumento";
        // $idade = 100;
        // $html = "<h1>Olá eu sou $nome</h1>";
        // $frutas = ['banana','laranja','maçã'];
        // $produtos = \App\Models\Produto::all();
        // return dd($produtos);
        // return view('site.home',compact('nome','idade','html','frutas'));
        // return view('site.home',['nome' => $nome, 'idade' => $idade, 'html'=>$html]);
        // return view('site.home',compact('nome','idade','html','frutas'));
        $produtos = Produto::paginate(3);
        return view('site.home',compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
