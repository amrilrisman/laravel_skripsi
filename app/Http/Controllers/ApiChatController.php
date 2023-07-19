<?php

namespace App\Http\Controllers;

use App\Models\chats;
use App\Http\Requests\StorechatsRequest;
use App\Http\Requests\UpdatechatsRequest;
use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class ApiChatController extends Controller
{



    public function send(Request $request)
    {
        
        if (chats::create([
            'id_user' => $request->from,
            'message' => $request->message,
            'from' => $request->from,
            'to' => $request->to,
        ])) {
            // dd("success");
            return response("success", 200);
        } else {
            return response("Failed", 401);
        }
    }


    public function detail($id)
    {
        return [
            "user" => User::where('id', $id)->get(),
            "chats" => chats::where('id_user', $id)->get(),
        ];
    }
}
