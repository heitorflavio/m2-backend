<?php

namespace App\Http\Controllers;

use App\Models\Campanhas;
use App\Http\Requests\StoreCampanhasRequest;
use App\Http\Requests\UpdateCampanhasRequest;

class CampanhasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $campanhas = Campanhas::all();
        return $campanhas;
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
     * @param  \App\Http\Requests\StoreCampanhasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCampanhasRequest $request)
    {
        //
        $campanhas = Campanhas::create($request->all());
        return $campanhas;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campanhas  $campanhas
     * @return \Illuminate\Http\Response
     */
    public function show(Campanhas $campanhas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campanhas  $campanhas
     * @return \Illuminate\Http\Response
     */
    public function edit(Campanhas $campanhas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCampanhasRequest  $request
     * @param  \App\Models\Campanhas  $campanhas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCampanhasRequest $request, Campanhas $campanhas,$id)
    {
        //
        $campanhas = Campanhas::find($id);
        $campanhas->update($request->all());
        return $campanhas;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campanhas  $campanhas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campanhas $campanhas,$id)
    {
        //
        $campanhas = Campanhas::find($id);
        $campanhas->delete();
        return $campanhas;
    }
}
