@extends('layouts.base')

@section('title', 'Home')

@section('navbar')
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#content">Home</a>
    </li>
    <li class="nav-item me-2">
        <a class="nav-link active" aria-current="page" href="#features">Features</a>
    </li>
@endsection

@section('content')

    <section class="container-xl min-vh-90 vh-90" id="content">
        <div class="row d-flex align-items-center h-100">
            <div class="col-sm-12 col-xl-6">
                <div style="font-family: 'Lobster', cursive;">
                    <h1 style="font-size: 4em">Hello!</h1>
                    <h3 style="font-size: 3em">We're your <span class="text-coffee">Warkop Companion!</span></h3>
                    <h3 class="mb-4" style="font-size: 2em">Ready To Help Your Warung Kopi To Perfection!</h3>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="d-flex justify-content-center">
                    <img class="img-fluid" src="{{ URL::asset('assets/images/coffee-1.png') }}" alt="gambar-kopi" style="max-width: 75%">
                </div>
            </div>
        </div>
    </section>

    <section class="container-xl min-vh-90" id="features">
        <div class="row my-4">
            <div class="text-center">
                <h1 style="font-family: 'Lobster', cursive;">Fitur Warkop Companion</h1>
                <p class="fs-4">Kami menyediakan jasa untuk membantu Warung Kopi Anda agar dapat segera beroperasi.</p>
            </div>
        </div>
        <div class="row text-center my-4">
            <div class="col-sm-12 col-xl-4 mb-4">
                <img class="img-fluid img-thumbnail p-2 mb-2" src="{{ URL::asset('assets/images/daan-evers-tKN1WXrzQ3s-unsplash.jpg') }}" alt="gambar-fitur" style="height: 250px; width: 360px; object-fit: cover;">
                <p class="fs-5">Jasa Desain Interior</p>
            </div>
            <div class="col-sm-12 col-xl-4 mb-4">
                <img class="img-fluid img-thumbnail p-2 mb-2" src="{{ URL::asset('assets/images/michal-parzuchowski-ItaV89TNkks-unsplash.jpg') }}" alt="gambar-fitur" style="height: 250px; width: 360px; object-fit: cover;">
                <p class="fs-5">Jasa Desain Menu & Branding</p>
            </div>
            <div class="col-sm-12 col-xl-4 mb-4">
                <img class="img-fluid img-thumbnail p-2 mb-2" src="{{ URL::asset('assets/images/patrick-schneider-mFnbFaCIu1I-unsplash.jpg') }}" alt="gambar-fitur" style="height: 250px; width: 360px; object-fit: cover;">
                <p class="fs-5">Jasa Pengaturan Pencahayaan</p>
            </div>
            <div class="col-sm-12 col-xl-4 mb-4">
                <img class="img-fluid img-thumbnail p-2 mb-2" src="{{ URL::asset('assets/images/yao-hu-WEr6UFkNXiA-unsplash.jpg') }}" alt="gambar-fitur" style="height: 250px; width: 360px; object-fit: cover;">
                <p class="fs-5">Jasa Desain Exterior</p>
            </div>
            <div class="col-sm-12 col-xl-4 mb-4">
                <img class="img-fluid img-thumbnail p-2 mb-2" src="{{ URL::asset('assets/images/muhammad-raufan-yusup-rYRE6ju-2K8-unsplash.jpg') }}" alt="gambar-fitur" style="height: 250px; width: 360px; object-fit: cover;">
                <p class="fs-5">Jasa Pengurusan Internet</p>
            </div>
            <div class="col-sm-12 col-xl-4 mb-4">
                <img class="img-fluid img-thumbnail p-2 mb-2" src="{{ URL::asset('assets/images/drew-coffman-jUOaONoXJQk-unsplash.jpg') }}" alt="gambar-fitur" style="height: 250px; width: 360px; object-fit: cover;">
                <p class="fs-5">Persediaan Furnitur</p>
            </div>
        </div>
    </section>
@endsection
