<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Contacto;
use Illuminate\Http\Request;

class TipoContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        $tipo_Contacto = Tipo_Contacto::creat([

               'descricao' => $request->descricao 
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Tipo_Contacto $tipo_Contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tipo_Contacto $tipo_Contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tipo_Contacto $tipo_Contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tipo_Contacto $tipo_Contacto)
    {
        //
    }
}
