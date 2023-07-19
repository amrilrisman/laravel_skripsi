<?php

namespace App\Http\Controllers;

use App\Models\socialitations;
use App\Http\Requests\StoresocialitationsRequest;
use App\Http\Requests\UpdatesocialitationsRequest;
use Illuminate\Http\Request;

class SocialitationsController extends Controller
{

    public function data()
    {
        return socialitations::latest()->get();
    }

    public function create(Request $request)
    {

        if (socialitations::create([
            "title" => $request->title,
            "description" => $request->description,
        ])) {
            // dd("success");
            return response("success", 200);
        } else {
            return response("Failed", 401);
        }
    }
}
