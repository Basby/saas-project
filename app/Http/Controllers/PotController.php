<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePotRequest;
use App\Http\Requests\UpdatePotRequest;
use App\Models\Pot;
use Illuminate\Support\Facades\DB;

class PotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $potting = DB::table('potting')->get();
        return view('potting.index', compact('potting'));
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
     * @param  \App\Http\Requests\StorePotRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePotRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pot  $pot
     * @return \Illuminate\Http\Response
     */
    public function show(Pot $pot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pot  $pot
     * @return \Illuminate\Http\Response
     */
    public function edit(Pot $pot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePotRequest  $request
     * @param  \App\Models\Pot  $pot
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePotRequest $request, Pot $pot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pot  $pot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pot $pot)
    {
        //
    }
}
