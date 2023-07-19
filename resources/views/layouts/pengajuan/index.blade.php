@extends('layouts.main_layout_basic')

@section('body')
    <div class="col" style="width:100vh; height: 100vh">
        <div class="container px-4 py-4">
            <h4 class="title-tab">
                Pengajuan
            </h4>
            <div class="body-pengajuan ">
                <div class="input-group mt-2" style="width: 50vh; margin-left:18px">
                    <span class="input-group-text" style="background-color:transparent" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Search" aria-label="Username"
                        style="border-left: none" aria-describedby="basic-addon1">
                </div>

                <table class="table mt-3">
                    <thead style="border-bottom: none">
                        <tr class="text-left" style="background-color: #E3F9FF; border-bottom: none;">
                            <td scope="col ">Nama</td>
                            <td scope="col ">Judul</td>
                            <td scope="col ">RT/RW</td>
                            <td scope="col ">Tanggal</td>
                            <td scope="col ">Progress</td>
                            <td scope="col"></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-left">
                            <td scope="row">Amril Rismanto Ichsan </td>
                            <td>Pembuatan surat pengantar ke instansi tertentu</td>
                            <td>4/5</td>
                            <td>23 Oct 2022</td>
                            <td>
                                <div class="card-status">
                                    <p class="status-text">Verification RT/RW</p>
                                </div>
                            </td>
                            <td>
                                <a href="/beranda"
                                    style="color:#3AB7D7; font-family:Georgia, 'Times New Roman', Times, serif">View</a>
                            </td>
                        </tr>
                        <tr class="text-left">
                            <td scope="row">Testing</td>
                            <td>Pembuatan surat pengantar ke instansi tertentu</td>
                            <td>4/5</td>
                            <td>23 Oct 2022</td>
                            <td>
                                <div class="card-status">
                                    <p class="status-text">Verification RT/RW</p>
                                </div>
                            </td>
                            <td>
                                <a href="/beranda"
                                    style="color:#3AB7D7; font-family:Georgia, 'Times New Roman', Times, serif">View</a>
                            </td>
                        </tr>
                        <tr class="text-left">
                            <td scope="row">Testing</td>
                            <td>Pembuatan surat pengantar ke instansi tertentu</td>
                            <td>4/5</td>
                            <td>23 Oct 2022</td>
                            <td>
                                <div class="card-status">
                                    <p class="status-text">Verification RT/RW</p>
                                </div>
                            </td>
                            <td>
                                <a href="/beranda"
                                    style="color:#3AB7D7; font-family:Georgia, 'Times New Roman', Times, serif">View</a>
                            </td>
                        </tr>
                        <tr class="text-left">
                            <td scope="row">Testing</td>
                            <td>Pembuatan surat pengantar ke instansi tertentu</td>
                            <td>4/5</td>
                            <td>23 Oct 2022</td>
                            <td>
                                <div class="card-status">
                                    <p class="status-text">Verification RT/RW</p>
                                </div>
                            </td>
                            <td>
                                <a href="/beranda"
                                    style="color:#3AB7D7; font-family:Georgia, 'Times New Roman', Times, serif">View</a>
                            </td>
                        </tr>
                        <tr class="text-left">
                            <td scope="row">Testing</td>
                            <td>Pembuatan surat pengantar ke instansi tertentu</td>
                            <td>4/5</td>
                            <td>23 Oct 2022</td>
                            <td>
                                <div class="card-status">
                                    <p class="status-text">Verification RT/RW</p>
                                </div>
                            </td>
                            <td>
                                <a href="/beranda"
                                    style="color:#3AB7D7; font-family:Georgia, 'Times New Roman', Times, serif">View</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>



    </div>
@endsection
