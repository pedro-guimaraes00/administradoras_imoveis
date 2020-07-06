<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoas;

class Controller_Pessoas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoas::paginate(15);
        return view('pessoas', compact('pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/newPessoa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pessoa = new Pessoas;
        $pessoa->cpf = $request->input("cpfPessoa");
        $pessoa->nome = $request->input("nomePessoa");
        $pessoa->telefone = $request->input("telPessoa");
        $pessoa->save();

        return redirect('/clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pessoa = Pessoas::find($id);
            if(isset($pessoa)) {
                return view('editPessoas', compact('pessoa'));
            }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pessoa = Pessoas::find($id);
            if(isset($pessoa)) {
                $pessoa->cpf = $request->input('cpfPessoa');
                $pessoa->nome = $request->input('nomePessoa');
                $pessoa->telefone = $request->input('telPessoa');

                $pessoa->save();
                return redirect('/clientes');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pessoa = Pessoas::find($id);
            if(isset($pessoa)) {
                $pessoa->delete();
                return redirect('/clientes');
            }
    }
}
