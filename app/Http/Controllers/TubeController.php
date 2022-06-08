<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTubeRequest;
use App\Http\Requests\UpdateTubeRequest;
use App\Models\Tube;
use Illuminate\Support\Facades\DB;

class TubeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tubing = DB::table('tubing')->get();
        return view('tubing.index', compact('tubing'));
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
     * @param  \App\Http\Requests\StoreTubeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTubeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tube  $tube
     * @return \Illuminate\Http\Response
     */
    public function show(Tube $tube)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tube  $tube
     * @return \Illuminate\Http\Response
     */
    public function edit(Tube $tube)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTubeRequest  $request
     * @param  \App\Models\Tube  $tube
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTubeRequest $request, Tube $tube)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tube  $tube
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tube $tube)
    {
        //
    }
}
