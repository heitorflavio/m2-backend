<?php

namespace App\Http\Controllers;

use App\Models\Grupo_Cidades;
use App\Http\Requests\StoreGrupo_CidadesRequest;
use App\Http\Requests\UpdateGrupo_CidadesRequest;

class GrupoCidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $grupo__cidades = Grupo_Cidades::all();
        return $grupo__cidades;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGrupo_CidadesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGrupo_CidadesRequest $request)
    {
        //
        $grupo__cidades = Grupo_Cidades::create($request->all());
        return $grupo__cidades;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grupo_Cidades  $grupo_Cidades
     * @return \Illuminate\Http\Response
     */
    public function show(Grupo_Cidades $grupo_Cidades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grupo_Cidades  $grupo_Cidades
     * @return \Illuminate\Http\Response
     */
    public function edit(Grupo_Cidades $grupo_Cidades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGrupo_CidadesRequest  $request
     * @param  \App\Models\Grupo_Cidades  $grupo_Cidades
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGrupo_CidadesRequest $request, Grupo_Cidades $grupo_Cidades,$id)
    {
        //
        $grupo_Cidades = Grupo_Cidades::find($id);
        $grupo_Cidades->update($request->all());
        return $grupo_Cidades;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grupo_Cidades  $grupo_Cidades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grupo_Cidades $grupo_Cidades,$id)
    {
        //
        $grupo_Cidades = Grupo_Cidades::find($id);
        $grupo_Cidades->delete();
        return $grupo_Cidades;
    }
}
