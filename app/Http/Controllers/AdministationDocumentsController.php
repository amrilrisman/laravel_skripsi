<?php

namespace App\Http\Controllers;

use App\Models\administation_documents;
use App\Http\Requests\Storeadministation_documentsRequest;
use App\Http\Requests\Updateadministation_documentsRequest;

class AdministationDocumentsController extends Controller
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
     * @param  \App\Http\Requests\Storeadministation_documentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeadministation_documentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\administation_documents  $administation_documents
     * @return \Illuminate\Http\Response
     */
    public function show(administation_documents $administation_documents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\administation_documents  $administation_documents
     * @return \Illuminate\Http\Response
     */
    public function edit(administation_documents $administation_documents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateadministation_documentsRequest  $request
     * @param  \App\Models\administation_documents  $administation_documents
     * @return \Illuminate\Http\Response
     */
    public function update(Updateadministation_documentsRequest $request, administation_documents $administation_documents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\administation_documents  $administation_documents
     * @return \Illuminate\Http\Response
     */
    public function destroy(administation_documents $administation_documents)
    {
        //
    }
}
