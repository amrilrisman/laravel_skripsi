<?php

namespace App\Http\Controllers;

use App\Models\chats;
use App\Http\Requests\StorechatsRequest;
use App\Http\Requests\UpdatechatsRequest;
use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class ChatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            "layouts.messanger.index",
            [

                "data_chat" => [
                    [
                        "user" => User::where('id', 1)->get(),
                        "chats" => chats::where('id_user', 1)->get(),
                    ],
                    [
                        "user" => User::where('id', 2)->get(),
                        "chats" => chats::where('id_user', 2)->get(),
                    ],

                    [
                        "user" => User::where('id', 3)->get(),
                        "chats" => collect(chats::where('id_user', 3)->get()),
                    ]
                ],
                "detail_chat" => []

            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // 
        dd("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorechatsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $databody = [];

        if ($request->url_file == null) {
            $databody = [
                'id_user' => $request->to,
                'message' => $request->message,
                'from' => $request->from,
                'to' => $request->to,
            ];
            # code...
        } else {

            $databody = [
                'id_user' => $request->to,
                'message' => $request->message,
                'from' => $request->from,
                "url_file" => $request->file('url_file')->store("image"),
                'to' => $request->to,
            ];
        }

        if (chats::create($databody)) {
            return redirect()->intended("/messager/{$request->to}");
        } else {
            dd("errorr");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chats  $chats
     * @return \Illuminate\Http\Response
     */
    public function show(chats $chats, $id)
    {
        return view(
            "layouts.messanger.index",
            [
                "data_chat" => [
                    [
                        "user" => User::where('id', 1)->get(),
                        "chats" => chats::where('id_user', 1)->get(),
                    ],
                    [
                        "user" => User::where('id', 2)->get(),
                        "chats" => chats::where('id_user', 2)->get(),
                    ],

                    [
                        "user" => User::where('id', 3)->get(),
                        "chats" => chats::where('id_user', 3)->get(),
                    ]
                ],
                "detail_chat" => collect(chats::where('id_user', $id)->get())
            ]

        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chats  $chats
     * @return \Illuminate\Http\Response
     */
    public function edit(chats $chats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatechatsRequest  $request
     * @param  \App\Models\chats  $chats
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatechatsRequest $request, chats $chats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chats  $chats
     * @return \Illuminate\Http\Response
     */
    public function destroy(chats $chats)
    {
        //
    }
}
