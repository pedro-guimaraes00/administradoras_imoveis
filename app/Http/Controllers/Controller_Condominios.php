<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Condominios;

class Controller_Condominios extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $condominios = Condominios::paginate(15);
        return view('/condominios', compact('condominios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newCondo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $condo = new Condominios;
        $condo->nome = $request->input('nomeCondo');
        $condo->lote = $request->input('loteCondo');
        $condo->FK_idAdministradora = $request->input('FK_idAdministradora');
        $condo->save();

        return redirect('/condominios');

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
        $condo = Condominios::find($id);
            if(isset($condo)){
                return view('editCondo', compact('condo'));
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
        $condo = Condominios::find($id);
            if(isset($condo)) {
                $condo->nome = $request->input('nomeCondo');
                $condo->lote = $request->input('loteCondo');
                $condo->FK_idAdministradora = $request->input('FK_idAdministradora');

                $condo->save();
                
                return redirect('/condominios');
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
        //
    }
}
