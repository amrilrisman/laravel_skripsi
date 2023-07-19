<?php

namespace App\Http\Controllers;

use App\Models\RT;
use App\Http\Requests\StoreRTRequest;
use App\Http\Requests\UpdateRTRequest;

class RTController extends Controller
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
     * @param  \App\Http\Requests\StoreRTRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRTRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RT  $rT
     * @return \Illuminate\Http\Response
     */
    public function show(RT $rT)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RT  $rT
     * @return \Illuminate\Http\Response
     */
    public function edit(RT $rT)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRTRequest  $request
     * @param  \App\Models\RT  $rT
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRTRequest $request, RT $rT)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RT  $rT
     * @return \Illuminate\Http\Response
     */
    public function destroy(RT $rT)
    {
        //
    }
}
