<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlantsRequest;
use App\Http\Requests\UpdatePlantsRequest;
use App\Models\Plants;

class PlantsController extends Controller
{
    /**
     * Define the middleware permissions.
     */
    function __construct()
    {
        $this->middleware('permission:plant-list|plant-create|plant-edit|plant-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:plant-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:plant-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:plant-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plants = Plants::latest()->paginate(5);
        return view('plants.index', compact('plants'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlantsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlantsRequest $request)
    {
        request()->validate([
            'id' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        Plants::create($request->all());

        return redirect()->route('plants.index')->with('success', 'Plant created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function show(Plants $plants)
    {
        return view('plants.show', compact('plants'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function edit(Plants $plants)
    {
        return view('plants.edit',compact('plants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlantsRequest  $request
     * @param  \App\Models\Plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlantsRequest $request, Plants $plants)
    {
        request()->validate([
            'id' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        $plants->update($request->all());

        return redirect()->route('plants.index')->with('success', 'Plant updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plants  $plants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plants $plants)
    {
        return redirect()->route('plants.index')->with('success', 'Plant deleted successfully');
    }
}
