<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMediaRequest;
use App\Http\Requests\UpdateMediaRequest;
use App\Models\Media;
use Illuminate\Support\Facades\DB;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media = DB::table('media')->get();
        return view('media.index', compact('media'));
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
     * @param  \App\Http\Requests\StoreMediaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMediaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMediaRequest  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMediaRequest $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        //
    }
}
