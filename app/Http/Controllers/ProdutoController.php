<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Models\ModelProduto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProdutoController extends Controller
{

    private $objProduto;
    public function __construct(){
        $this->objProduto = new ModelProduto();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produto=$this->objProduto->paginate(5);
        // O que for digitado aqui é o que será exibido quando for chamado o ProdutoController@index pela rota
        //chama resources > views > index.blade.php
        return view('index',compact('produto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProdutoRequest $request)
    {
        $cad=$this->objProduto->create([
            'codigo'=>$request->codigo,
            'nome'=>$request->nome,
            'descricao'=>$request->descricao,
            'preco'=>$request->preco
        ]);
        if($cad){
            return redirect('produtos');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produto = $this->objProduto->find($id);
        return view('show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto = $this->objProduto->find($id);
        return view('create', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProdutoRequest $request, string $id)
    {
        $this->objProduto->where(['id'=>$id])->update([
            'codigo'=>$request->codigo,
            'nome'=>$request->nome,
            'descricao'=>$request->descricao,
            'preco'=>$request->preco
        ]);
        return redirect('produtos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $del = $this->objProduto->destroy($id);
        return ($del)?"sim":"não";
    }
}
