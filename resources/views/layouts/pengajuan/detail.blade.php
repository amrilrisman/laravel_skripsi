@extends('layouts.main_layout_basic')

@section('body')
    <div class="col" style="width:100vh; height: 100vh">
        <div class="container px-4 py-4 scroll">
            <h4 class="title-tab mb-3">
                Detail Pengajuan
            </h4>
            <a href="/document" style="color: #3AB7D7; font-weight:600">Kembali</a>
            <h5 class="mt-4">
                Informasi Pengguna
            </h5>
            <table class="table mt-3">

                {{-- <thead style="border-bottom: none">
                    <tr class="text-left" style="background-color: #E3F7FF; border-bottom: none;">
                        <td scope="col ">Nama</td>
                        <td scope="col ">Judul</td>
                        <td scope="col ">RT/RW</td>
                        <td scope="col ">Tanggal</td>
                        <td scope="col ">Progress</td>
                        <td scope="col"></td>
                    </tr>
                </thead> --}}
                <tbody>

                    <tr class="text-left pl-1 pr-4"style="background-color: white">
                        <td class="col ">Judul Pengajuan</td>
                        <td class="col-9">: {{ $data[0]->title }}</td>
                    </tr>
                    <tr class="text-left pl-1 pr-4"style="background-color: #F7F7FC">
                        <td class="col ">Deskripsi Pengajuan</td>
                        <td class="col-9">: {{ $data[0]->description }}</td>
                    </tr>
                    <tr class="text-left pl-1 pr-4"style="background-color: #F7F7FC">
                        <td class="col ">RT/RW</td>
                        <td class="col-9">: 04/07</td>
                    </tr>
                    <tr class="text-left pl-1 pr-4"style="background-color: white">
                        <td class="col ">Status</td>
                        <td class="col-9">: {{ $data[0]->status }}</td>
                    </tr>
                </tbody>
            </table>
            <h5 class="mt-4">
                Catatan Anda
            </h5>
            <table class="table mt-3">
                <tbody>
                    <tr class="text-left pl-1 pr-4"style="background-color: #F7F7FC">
                        <td class="col-12">{{ $data[0]->text_note }}</td>

                    </tr>
                </tbody>
            </table>

            <div class="row pt-2 pb-3">
                <div class="col-9">
                    <h5 class="mt-4">
                        Dokumen Terkait
                    </h5>

                </div>
                <button type="button"
                    style="background-color: transparent; color:#3AB7D7; border: 1px solid #3AB7D7; width:25%; height:45px">
                    Tambah Dokumen Wajib
                </button>

            </div>

            <div class="container">
                <div class="row">

                    <div class="col">
                        <div class="card mb-3 ">
                            <div class="row g-0 pd-4">
                                <div class="col-md-4 p-3 justify-content-center">
                                    <h5 class="card-title">KTP</h5>
                                    <img src="https://www.shutterstock.com/image-vector/ktp-indonesia-id-card-600w-1628461459.jpg"
                                        class="img-fluid rounded-start" alt="..." style="object-fit: fill">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text">KTP</p>
                                        <p class="card-text" style="color: greenyellow">Data-correct</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card mb-3 ">
                            <div class="row g-0 pd-4">
                                <div class="col-md-4 p-3 justify-content-center">
                                    <h5 class="card-title">KTP</h5>
                                    <img src="https://www.shutterstock.com/image-vector/ktp-indonesia-id-card-600w-1628461459.jpg"
                                        class="img-fluid rounded-start" alt="..." style="object-fit: fill">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text">KTP</p>
                                        <p class="card-text" style="color: greenyellow">Data-correct</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <h5 class="mt-4">
                Dokumen Warga
            </h5>

            <div class="row">
                @foreach ($data_private as $item)
                    <div class="col">
                        <div class="card bg-dark text-white">
                            <img src="{{ $item->file_url }}" class="card-img" alt="{{ $item->name_file }}">
                            <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.338)">
                                <h5 class="card-title justify-content-center">{{ $item->name_file }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>


        </div>



    </div>
@endsection
