<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDiseasesRequest;
use App\Http\Requests\UpdateDiseasesRequest;
use App\Models\Diseases;

class DiseasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreDiseasesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiseasesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diseases  $diseases
     * @return \Illuminate\Http\Response
     */
    public function show(Diseases $diseases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diseases  $diseases
     * @return \Illuminate\Http\Response
     */
    public function edit(Diseases $diseases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiseasesRequest  $request
     * @param  \App\Models\Diseases  $diseases
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiseasesRequest $request, Diseases $diseases)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diseases  $diseases
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diseases $diseases)
    {
        //
    }
}
