<?php

namespace App\Http\Controllers;

use App\Models\files_pengajuan;
use App\Http\Requests\Storefiles_pengajuanRequest;
use App\Http\Requests\Updatefiles_pengajuanRequest;

class FilesPengajuanController extends Controller
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
     * @param  \App\Http\Requests\Storefiles_pengajuanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storefiles_pengajuanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\files_pengajuan  $files_pengajuan
     * @return \Illuminate\Http\Response
     */
    public function show(files_pengajuan $files_pengajuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\files_pengajuan  $files_pengajuan
     * @return \Illuminate\Http\Response
     */
    public function edit(files_pengajuan $files_pengajuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatefiles_pengajuanRequest  $request
     * @param  \App\Models\files_pengajuan  $files_pengajuan
     * @return \Illuminate\Http\Response
     */
    public function update(Updatefiles_pengajuanRequest $request, files_pengajuan $files_pengajuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\files_pengajuan  $files_pengajuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(files_pengajuan $files_pengajuan)
    {
        //
    }
}
