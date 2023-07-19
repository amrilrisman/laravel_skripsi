@extends('layouts.main_layout_basic')

@section('body')
    <div class="col" style="width:100vh; height: 100vh">



        <div class="container px-4 py-4">
            <h4 class="title-tab">
                Buat Pengumuman
            </h4>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ Session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @elseif (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ Session('error') }}</strong>
                    <form action="{{ back() }}">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </form>
                </div>
            @endif

            <button type="button" class="mt-2" id="myBtn"
                style="background-color: transparent; color:#3AB7D7; border: 1px solid #3AB7D7; width:20%">
                Buat Pengumuman
            </button>

            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                    </div>
                    <form method="POST" action="">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Judul:</label>
                                <input type="text" class="form-control" id="recipient-name" name="title"
                                    placeholder="Berikan Judul Pengumuman">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="recipient-name" name="description"
                                    placeholder="Berikan deskripsi Pengumuman">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <span class="close">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                    style="background-color: #EB3454;border:none">Close</button>
                            </span>
                            <span class="close">
                                <button type="submit" class="btn btn-primary"
                                    style="background-color:#3AB7D7; border:none">Save
                                    changes</button>
                            </span>
                        </div>
                    </form>
                </div>

            </div>



            <div class="container m-0 p-0">
                <table class="table mt-3">
                    <thead style="border-bottom: none">
                        <tr class="text-left" style="background-color: #E3F9FF; border-bottom: none;">
                            <td scope="col ">No</td>
                            <td scope="col ">Judul</td>
                            <td scope="col ">Deskripsi</td>
                            <td scope="col ">Tanggal</td>
                            <td scope="col "></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr class="text-left">
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="/beranda"
                                        style="color:#3AB7D7; font-family:Georgia, 'Times New Roman', Times, serif">View</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>


    </div>
@endsection
