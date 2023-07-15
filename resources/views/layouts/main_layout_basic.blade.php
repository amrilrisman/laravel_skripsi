<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">

    <title>Easy Desa</title>

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            @include('components.side_bar')
            <div class="container" style="background-color: red" style="width: 100px; height:100px">

            </div>
        </div>

    </div>



</body>

</html>


{{-- <main class="col-md-9 ms-sm-auto col-lg-10 p-0 m-0" style="background-color: red, height:100%">
    <div style="background-color: red">
        sss
    </div>

</main> --}}
