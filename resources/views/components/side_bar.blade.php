{{-- //TODO: icons diperbaiki lagi --}}
<div class="col-md-4 col-lg-2 flex-shrink-0 p-3 text-white bg-light body-sidebar border-end"
    style=" height:100vh; position:fixed; background-color:white">
    <form action="/beranda">
        <button class="text-logo m-0 p-0 text-left" style="background-color: transparent; width:85px">
            E-Desa
        </button>
    </form>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item mb-3">
            <a href="/beranda" class="nav-link text-white rounded-10" style="background-color: #3AB7D7">
                {{-- <i class="fa-duotone fa-grid-2"></i> --}}
                {{-- <img src="{{ asset('icons/beranda.png') }}" alt="icon-beranda" height="24" width="24"> --}}
                Beranda
            </a>
        </li>
        <li class="nav-item mb-3">
            <a href="/document" class="nav-link text-white rounded-10" style="background-color: #3AB7D7">
                {{-- <img src="{{ asset('icons/document.png') }}" alt="icon-beranda" height="24" width="24"
                    style="color: white"> --}}
                Pengajuan
            </a>

        </li>
        <li class="nav-item mb-3">
            <a href="/messager" class="nav-link text-white rounded-10" style="background-color: #3AB7D7">
                {{-- <img src="{{ asset('icons/messager.png') }}" alt="icon-beranda" height="24" width="24"
                    style="color: white"> --}}
                Warga Tanya
            </a>

        </li>
        <li class="nav-item mb-3">
            <a href="/pengumumman" class="nav-link text-white rounded-10" style="background-color: #3AB7D7">
                {{-- <img src="{{ asset('icons/volume.png') }}" alt="icon-beranda" height="24" width="24"
                    style="color: white"> --}}
                Pengumuman
            </a>

        </li>
        <li class="nav-item mb-3">
            <a href="/account" class="nav-link text-white rounded-10" style="background-color: #3AB7D7">
                {{-- <img src="{{ asset('icons/profile.png') }}" alt="icon-beranda" height="24" width="24"
                    style="color: white"> --}}
                Akun Saya
            </a>

        </li>

    </ul>
    <hr>
    <form action="/logout" method="POST">
        @csrf
        <div class="dropdown" style="align: bottom">
            <button type="submit" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                    class="rounded-circle me-2">
                <strong>mdo</strong>
            </button>
            <ul class="dropdown-menu dropdown-menu-light text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </form>
</div>
