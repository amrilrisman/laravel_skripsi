@extends('layouts.main_layout_basic')
@extends('partials.card-chating')

@section('body')
    {{-- style="display: none" --}}
    <div class="col-9 px-4 py-4 overflow-y: scroll">

        <h4 class="title-tab">
            Beranda
        </h4>
        <div class="row mb-4">
            <div class="col">
                <div class="card-progress">
                    <p class="title-card">Pengajuan</p>
                    <h1 class="value-card" style="color: #3AB7D7">64</h1>
                </div>
            </div>
            <div class="col">
                <div class="card-progress">
                    <p class="title-card">Progress pengajuan</p>
                    <h1 class="value-card" style="color: #DB6702">64</h1>
                </div>
            </div>
            <div class="col">
                <div class="card-progress">
                    <p class="title-card">Pengajuan selesai</p>
                    <h1 class="value-card" style="color: #15C593">64</h1>
                </div>
            </div>
        </div>

        <h4 style="font-weight: 600">Pengajuan</h4>
        <table class="table mt-3 ">
            <thead style="border-bottom: none">
                <tr style="background-color: #E3F9FF; border-bottom: none">
                    <td scope="col">Nama</td>
                    <td scope="col">RT/RW</td>
                    <td scope="col">Judul</td>
                    <td scope="col">Tanggal</td>
                    <td scope="col"></td>
                </tr>
            </thead>
            <tbody style="border-top: none">
                @foreach ($data_document as $item)
                    <tr>
                        <td scope="row">{{ $item->title }}</td>
                        <td>4/5</td>
                        <td style="max-lines: 1; text-overflow:ellipsis">{{ $item->description }}</td>
                        <td style="max-lines: 1; text-overflow:ellipsis">{{ $item->created_at->diffForHumans() }}</td>
                        <td>
                            <a href="/pengajuan/{{ $item->id }}"
                                style="color:#3AB7D7; font-family:Georgia, 'Times New Roman', Times, serif">View</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>

    <div class="col-3 m-0 p-0 border-start">
        <a href="/messager">
            <div class="headers-chat">
                <h6 class="title-header">
                    Warga Bertanya
                </h6>
            </div>
            @foreach ($data_chat as $item)
                {{-- @dd($item["user"][0]->name) --}}
                <div class="card-chat">
                    <div class="col p-0 m-0">

                        <img class="rounded-circle"
                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"
                            alt="img" height="50px" width="50px" style="object-fit: cover">
                    </div>
                    <div class="col-9 m-0 p-0 mt-2">
                        <div class="text-title">{{ $item['user'][0]->name }}</div>
                        <div class="text-description">Sudah melakukan pembayaran tetapi transaksi belum juga diprosestapi
                            transaksi
                            belum juga diprosestapi transaksi belum juga diprosestapi transaksi belum juga diproses</div>

                    </div>

                </div>
            @endforeach
        </a>


    </div>
    {{-- <div class="col">
        
    </div> --}}
@endsection
