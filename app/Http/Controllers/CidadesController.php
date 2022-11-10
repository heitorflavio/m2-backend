<?php

namespace App\Http\Controllers;

use App\Models\Cidades;
use App\Http\Requests\StoreCidadesRequest;
use App\Http\Requests\UpdateCidadesRequest;

class CidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cidades = Cidades::all();
        return $cidades;

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
     * @param  \App\Http\Requests\StoreCidadesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCidadesRequest $request)
    {
        //
        $cidades = Cidades::create($request->all());
        return $cidades;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cidades  $cidades
     * @return \Illuminate\Http\Response
     */
    public function show(Cidades $cidades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cidades  $cidades
     * @return \Illuminate\Http\Response
     */
    public function edit(Cidades $cidades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCidadesRequest  $request
     * @param  \App\Models\Cidades  $cidades
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCidadesRequest $request, Cidades $cidades,$id)
    {
        //
        $cidades = Cidades::find($id);
        $cidades->update($request->all());
        return $cidades;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cidades  $cidades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidades $cidades,$id)
    {
        //
        $cidades = Cidades::find($id);
        $cidades->delete();
        return $cidades;
    }
}
