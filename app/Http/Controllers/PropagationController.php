<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropagationRequest;
use App\Http\Requests\UpdatePropagationRequest;
use App\Models\Propagation;

class PropagationController extends Controller
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
     * @param  \App\Http\Requests\StorePropagationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropagationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propagation  $propagation
     * @return \Illuminate\Http\Response
     */
    public function show(Propagation $propagation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Propagation  $propagation
     * @return \Illuminate\Http\Response
     */
    public function edit(Propagation $propagation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropagationRequest  $request
     * @param  \App\Models\Propagation  $propagation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropagationRequest $request, Propagation $propagation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propagation  $propagation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propagation $propagation)
    {
        //
    }
}
