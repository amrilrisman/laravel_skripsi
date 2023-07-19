<?php

namespace App\Http\Controllers;

use App\Models\administation_documents;
use App\Models\files_pengajuan;
use App\Models\PrivateDocument;
use Illuminate\Http\Request;

class ApiAdministrationDocument extends Controller
{
    public function data($id)
    {
        $data = administation_documents::where("id_user", $id)->get();
        return [
            "data" => $data,
        ];
    }

    public function detail($id)
    {
        $data = administation_documents::where("id_user", $id)->get();
        return [
            "files" => files_pengajuan::where("id_administation_documents", $data[0]->id)->get(),
            "data" => administation_documents::where("id", $id)->get(),
            "data_private" => PrivateDocument::where("id_user", $id)->get(),
        ];
    }
}
