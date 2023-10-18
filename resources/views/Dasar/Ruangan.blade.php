@extends('Dasar.navbar')
@section('isi')
    <div class="container ">
            <div class="row align-items-center mt-5">
                <div class="col">
                <h1 > @yield('judul_ruangan') </h1>
                </div>
                <div class="col">
                    <form class="d-flex " role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        <div class="container w-75 ">
            <h4 class="row gap-3 mt-5">
                <a class="btn btn-primary col rounded-pill" href="@yield('arah')" role="button">Link</a>
                <a class="btn btn-primary col rounded-pill" href="@yield('arah')" role="button">Link</a>
                <a class="btn btn-primary col rounded-pill" href="@yield('arah')" role="button">Link</a>
                <a class="btn btn-primary col rounded-pill" href="@yield('arah')" role="button">Link</a>
            </h4>
        </div>
    </div>
@endsection
