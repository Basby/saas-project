<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePestsRequest;
use App\Http\Requests\UpdatePestsRequest;
use App\Models\Pests;

class PestsController extends Controller
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
     * @param  \App\Http\Requests\StorePestsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePestsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pests  $pests
     * @return \Illuminate\Http\Response
     */
    public function show(Pests $pests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pests  $pests
     * @return \Illuminate\Http\Response
     */
    public function edit(Pests $pests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePestsRequest  $request
     * @param  \App\Models\Pests  $pests
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePestsRequest $request, Pests $pests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pests  $pests
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pests $pests)
    {
        //
    }
}
