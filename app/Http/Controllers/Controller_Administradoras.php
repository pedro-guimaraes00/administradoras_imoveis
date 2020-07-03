<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Administradoras;

class Controller_Administradoras extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administradora = Administradoras::all();
        return view('administradoras', compact('administradora'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/newAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $administradora = new Administradoras;
        $administradora->nome = $request->input('nomeAdmin');
        $administradora->cnpj = $request->input('cnpjAdmin');

        $administradora->save();
        return redirect('/administradoras');
    }

    /**
     * Search for an specified data (needs Database: Query Builder)
     * 
     */

    public function search(Request $request)
    {
        $search = $request->get('search');

        $administradora = DB::table('administradoras')
            ->where('nome', 'like', '%'.$search.'%')->paginate(25);
            
            return view('administradoras', compact('administradora'));
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
        $administradora = Administradoras::find($id);
            if(isset($administradora)) {
                return view('editAdmin', compact('administradora'));
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
        $administradora = Administradoras::find($id);
            if(isset($administradora)) {
                $administradora->nome = $request->input('nomeAdmin');
                $administradora->cnpj = $request->input('cnpjAdmin');
                
                $administradora->save();

                return redirect('/administradoras');
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
        $administradora = Administradoras::find($id);
            if(isset($administradora)) {
                $administradora->delete();
                return redirect('/administradoras');
            }

    }
}
