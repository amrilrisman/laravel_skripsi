<?php

namespace App\Http\Controllers;

use App\Models\PrivateDocument;
use App\Http\Requests\StorePrivateDocumentRequest;
use App\Http\Requests\UpdatePrivateDocumentRequest;

class PrivateDocumentController extends Controller
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
     * @param  \App\Http\Requests\StorePrivateDocumentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrivateDocumentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PrivateDocument  $privateDocument
     * @return \Illuminate\Http\Response
     */
    public function show(PrivateDocument $privateDocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrivateDocument  $privateDocument
     * @return \Illuminate\Http\Response
     */
    public function edit(PrivateDocument $privateDocument)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrivateDocumentRequest  $request
     * @param  \App\Models\PrivateDocument  $privateDocument
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrivateDocumentRequest $request, PrivateDocument $privateDocument)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrivateDocument  $privateDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrivateDocument $privateDocument)
    {
        //
    }
}
