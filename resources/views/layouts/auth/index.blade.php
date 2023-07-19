<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">

    <title>Easy Desa</title>

</head>

<body>

    <div class="row m-0">


        <div class="col-8 p-0">
            <img class="bg-image" src="{{ asset('assets/background_simokerto.png') }}" alt="banner-bg">

        </div>
        <div class="col-4 form-layout" style="height: 100vh">
            <h3 style="font-weight: 700">
                Selamat Datang
            </h3>

            <p style="color:#B2B2B2">Masukan akun pegawai yang sudah terdaftar, mulai berikan pelayanan yang terbaik
            </p>
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
            <form action="/login" method="post">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label label mb-2">Username</label>
                    <input type="username" class="form-control form" id="username" name="username"
                        aria-describedby="usernameHelp">
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label label mb-2">Password</label>
                    <input type="password" class="form-control form" id="password" name="password">
                </div>
                <div class="container m-0 p-0" style="text-align:right">
                    <a href="#" class="label" style="color: #3AB7D7">Lupa Katasandi? </a>
                </div>
                <button type="submit" class="mt-4">Submit</button>
            </form>

            <h5 class="text-center text-logo" style="margin-top: 30%">E-Desa</h5>

        </div>
    </div>




</body>

</html>
