@extends('layouts.main_layout_basic')

@section('body')
    <div class="col">

        <div class="headers-chat">
            <h6 class="title-header">
                Warga Bertanya
            </h6>
        </div>
        <div class="container m-0 p-0 border-end" style="min-height: 100vh">
            @foreach ($data_chat as $item)
                <form action="/messager/1" method="get">


                    <div class="card-chat">
                        <a href="/messager/{{ $item['user'][0]->id }}" class="m-0 p-0">
                            <img class="rounded-circle"
                                src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"
                                alt="img" height="50px" width="50px" style="object-fit: cover; margin-right:10px">
                            <div>
                                <div class="text-title">{{ $item['user'][0]->name }}</div>
                                {{-- @if (Str::length($item['chats']) != 0) --}}
                                {{-- TODO: message --}}
                                {{-- <div class="text-description">{{ $item['chats'][0]->message }}</div> --}}
                                {{-- @endif --}}

                        </a>
                    </div>
                </form>

        </div>
        @endforeach

    </div>
    </div>
    <div class="col-9" style="position: relative">
        <div class="row">

            <div class="headers-chat">
                @if ($detail_chat != [])
                    <b style="color: white">{{ auth()->user()->get()->find($detail_chat[0]->id_user)->name }}</b>
                    <p style="color:white">RT: 4 | RW 7</p>
                @endif
            </div>
        </div>

        <div class="row-12" style="height:70vh">

            @foreach ($detail_chat as $item)
                <div class="list-detail-message">
                    @if ($item->from == 4)
                        <div class="bubble-message darker" style="margin-left: 40%">
                            <p class="message-right">{{ $item->message }}</p>
                            <span class="time-left">{{ $item->created_at->diffForHumans() }}</span>
                        </div>
                    @elseif ($item->from = 4)
                        <div class="bubble-message" style="margin-right: 40%">
                            <p class="message-left">{{ $item->message }}</p>
                            <span class="time-right">{{ $item->created_at->diffForHumans() }}</span>
                        </div>
                    @endif

                </div>
            @endforeach
        </div>

        <form class="row justify-content-center" method="POST" action="/messager">
            @csrf
            <input type="text" width="50vh" class="form-control" id="message" name="from" value="4" hidden>
            @if ($detail_chat != [])
                <input type="text" width="50vh" class="form-control" id="message" name="to"
                    value="{{ $detail_chat[0]->id_user }}" hidden>
            @endif

            <div class="col-9">
                <label for="inputPassword2" class="visually-hidden">Password</label>
                <input type="text" width="50vh" class="form-control" id="message" name="message"
                    placeholder="Tulis pesan anda disini">
            </div>
            <div class="col-auto">
                <a href="">
                    <img src="{{ asset('icons/export.png') }}" width="24px" height="24px" alt="">
                </a>
            </div>
            <div class="col-auto">
                <button class="m-0 p-0" type="submit" style="background-color: transparent">
                    <img src="{{ asset('icons/send.png') }}" width="24px" height="24px" alt="">
                </button>
            </div>
        </form>
    </div>
@endsection
