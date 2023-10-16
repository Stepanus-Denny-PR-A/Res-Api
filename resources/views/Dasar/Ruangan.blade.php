@extends('Dasar.navbar')
@section('isi')
    <div class="container ">
        <div class="row align-items-center mt-4">
            <div class="col">
            <h1 class=""> @yield('judul_ruangan') </h1>
            </div>
            <div class="col">
                <form class="d-flex " role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row gap-3 mt-5">
            <button type="button" class="btn btn-primary col">Primary</button>
            <button type="button" class="btn btn-primary col">Primary</button>
            <button type="button" class="btn btn-primary col">Primary</button>
            <button type="button" class="btn btn-primary col">Primary</button>
        </div>
@endsection
