<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropRequest;
use App\Http\Requests\UpdatePropRequest;
use App\Models\Prop;
use Illuminate\Support\Facades\DB;

class PropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propagation = DB::table('propagation')->get();
        return view('propagation.index', compact('propagation'));
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
     * @param  \App\Http\Requests\StorePropRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prop  $prop
     * @return \Illuminate\Http\Response
     */
    public function show(Prop $prop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prop  $prop
     * @return \Illuminate\Http\Response
     */
    public function edit(Prop $prop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropRequest  $request
     * @param  \App\Models\Prop  $prop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropRequest $request, Prop $prop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prop  $prop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prop $prop)
    {
        //
    }
}
