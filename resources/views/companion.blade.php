@extends('layouts.base')

<?php $valid = Route::current()->getName() == 'pesanan.edit'; ?>

@if ($valid)
    @section('title', 'Edit')
@else
    @section('title', 'My Companion')
@endif

@section('content')
    @if (Route::current()->getName() == 'home')
        <form method="POST" action="{{ route('pesanan.store') }}">
            @csrf
    @else
        <form method="POST" action="{{ route('pesanan.update', ['pesanan_id' => $pesanan->id]) }}">
            @csrf
            <input type="hidden" name="pesanan_id" value="{{ $pesanan->id }}">
    @endif
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <section class="container-xl" id="content">
        <div class="row my-4">
            <div class="text-center" style="font-family: 'Lobster', cursive;">
                <h1>Informasi Umum Warung Kopi Anda</h1>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-sm-12 col-xl-6 mb-4">
                <p class="fs-3 mb-0 text-center">Nama Warung Kopi Anda</p>
                <input type="text" name="warkop_name" class="form-control text-center fw-bold fs-4 mb-1"
                    @if ($valid) value="{{ $pesanan->warkop_name }}" @endif required>
                <p class="mb-0 px-2 text-center">Seluruh informasi yang anda simpan hanya akan tersimpan pada database
                    kami.
                    Kami berjanji untuk tidak menyebarkannya.</p>
                @if ($errors->has('warkop_name'))
                    <div class="error text-danger text-center">{{ $errors->first('warkop_name') }}</div>
                @endif
            </div>
            <div class="col-sm-12 col-xl-6 mb-4">
                <p class="fs-3 mb-0 text-center">Alamat Warung Kopi Anda</p>
                <input type="text" name="warkop_address" class="form-control text-center fw-bold fs-4 mb-1"
                    @if ($valid) value="{{ $pesanan->warkop_address }}" @endif required>
                <p class="mb-0 px-2 text-center">Seluruh informasi yang anda simpan hanya akan tersimpan pada database
                    kami.
                    Kami berjanji untuk tidak menyebarkannya.</p>
                @if ($errors->has('warkop_address'))
                    <div class="error text-danger text-center">{{ $errors->first('warkop_address') }}</div>
                @endif
            </div>
        </div>
    </section>
    <section class="container-xl min-vh-90" id="jasa">
        <div class="row my-4">
            <div class="text-center" style="font-family: 'Lobster', cursive;">
                <h1>Pesan Jasa Warkop Companion</h1>
            </div>
        </div>
        <div class="row text-center my-4">
            <div class="col-sm-12 col-xl-4 mb-4">
                <div class="card">
                    <img src="{{ URL::asset('assets/images/daan-evers-tKN1WXrzQ3s-unsplash.jpg') }}"
                        class="card-img-top" style="height: 250px; object-fit: cover;" alt="gambar-fitur">
                    <div class="card-body">
                        <p class="fs-5 mb-1">Jasa Desain Interior</p>
                        <div class="d-flex justify-content-center" style="height: 120px;">
                            <div class="d-flex justify-content-center" style="width: 350px">
                                <p>Kami akan melakukan desain interior berdasarkan ukuran dan model ruangan warung kopi
                                    anda.</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end" id="jasa_desain_interior">
                            @if ($valid and $pesanan->jasa_desain_interior)
                                <input type="hidden" name="jasa_desain_interior" value="1">
                                <a class="btn btn-danger" onclick="batalkanPesanan('jasa_desain_interior')">Batalkan
                                    Pesanan</a>
                            @else
                                <input type="hidden" name="jasa_desain_interior" value="0">
                                <a class="btn btn-success" onclick="pesan('jasa_desain_interior')">Pesan</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4 mb-4">
                <div class="card">
                    <img src="{{ URL::asset('assets/images/michal-parzuchowski-ItaV89TNkks-unsplash.jpg') }}"
                        class="card-img-top" style="height: 250px; object-fit: cover;" alt="gambar-fitur">
                    <div class="card-body">
                        <p class="fs-5 mb-1">Jasa Desain Menu & Branding</p>
                        <div class="d-flex justify-content-center" style="height: 120px;">
                            <div class="d-flex justify-content-center" style="width: 350px">
                                <p>Kami akan melakukan desain semua yang menyangkut dengan percetakan dan printing,
                                    disesuaikan kebutuhan warung kopi anda.</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end" id="jasa_desain_branding">
                            @if ($valid and $pesanan->jasa_desain_branding)
                                <input type="hidden" name="jasa_desain_branding" value="1">
                                <a class="btn btn-danger" onclick="batalkanPesanan('jasa_desain_branding')">Batalkan
                                    Pesanan</a>
                            @else
                                <input type="hidden" name="jasa_desain_branding" value="0">
                                <a class="btn btn-success" onclick="pesan('jasa_desain_branding')">Pesan</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4 mb-4">
                <div class="card">
                    <img src="{{ URL::asset('assets/images/patrick-schneider-mFnbFaCIu1I-unsplash.jpg') }}"
                        class="card-img-top" style="height: 250px; object-fit: cover;" alt="gambar-fitur">
                    <div class="card-body">
                        <p class="fs-5 mb-1">Jasa Desain Pencahayaan</p>
                        <div class="d-flex justify-content-center" style="height: 120px;">
                            <div class="d-flex justify-content-center" style="width: 350px">
                                <p>Kami akan melakukan desain pencahayaan yang dapat memikat para pelanggan untuk tetap
                                    berada di warung kopi anda.</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end" id="jasa_desain_pencahayaan">
                            @if ($valid and $pesanan->jasa_desain_pencahayaan)
                                <input type="hidden" name="jasa_desain_pencahayaan" value="1">
                                <a class="btn btn-danger" onclick="batalkanPesanan('jasa_desain_pencahayaan')">Batalkan
                                    Pesanan</a>
                            @else
                                <input type="hidden" name="jasa_desain_pencahayaan" value="0">
                                <a class="btn btn-success" onclick="pesan('jasa_desain_pencahayaan')">Pesan</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4 mb-4">
                <div class="card">
                    <img src="{{ URL::asset('assets/images/yao-hu-WEr6UFkNXiA-unsplash.jpg') }}" class="card-img-top"
                        style="height: 250px; object-fit: cover;" alt="gambar-fitur">
                    <div class="card-body">
                        <p class="fs-5 mb-1">Jasa Desain Exterior</p>
                        <div class="d-flex justify-content-center" style="height: 120px;">
                            <div class="d-flex justify-content-center" style="width: 350px">
                                <p>Kami akan melakukan desain exterior berdasarkan kondisi dan model luar ruangan warung
                                    kopi anda agar memikat banyak pelanggan.</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end" id="jasa_desain_exterior">
                            @if ($valid and $pesanan->jasa_desain_exterior)
                                <input type="hidden" name="jasa_desain_exterior" value="1">
                                <a class="btn btn-danger" onclick="batalkanPesanan('jasa_desain_exterior')">Batalkan
                                    Pesanan</a>
                            @else
                                <input type="hidden" name="jasa_desain_exterior" value="0">
                                <a class="btn btn-success" onclick="pesan('jasa_desain_exterior')">Pesan</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4 mb-4">
                <div class="card">
                    <img src="{{ URL::asset('assets/images/muhammad-raufan-yusup-rYRE6ju-2K8-unsplash.jpg') }}"
                        class="card-img-top" style="height: 250px; object-fit: cover;" alt="gambar-fitur">
                    <div class="card-body">
                        <p class="fs-5 mb-1">Jasa Pengurusan Internet</p>
                        <div class="d-flex justify-content-center" style="height: 120px;">
                            <div class="d-flex justify-content-center" style="width: 350px">
                                <p>Kami akan melakukan pengurusan internet untuk menjaga kualitas pelayanan di warung
                                    kopi anda.</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end" id="jasa_pengurusan_internet">
                            @if ($valid and $pesanan->jasa_pengurusan_internet)
                                <input type="hidden" name="jasa_pengurusan_internet" value="1">
                                <a class="btn btn-danger" onclick="batalkanPesanan('jasa_pengurusan_internet')">Batalkan
                                    Pesanan</a>
                            @else
                                <input type="hidden" name="jasa_pengurusan_internet" value="0">
                                <a class="btn btn-success" onclick="pesan('jasa_pengurusan_internet')">Pesan</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4 mb-4">
                <div class="card">
                    <img src="{{ URL::asset('assets/images/drew-coffman-jUOaONoXJQk-unsplash.jpg') }}"
                        class="card-img-top" style="height: 250px; object-fit: cover;" alt="gambar-fitur">
                    <div class="card-body">
                        <p class="fs-5 mb-1">Persediaan Furnitur</p>
                        <div class="d-flex justify-content-center" style="height: 120px;">
                            <div class="d-flex justify-content-center" style="width: 350px">
                                <p>Kami akan menyediakan furniture yang dibutuhkan oleh warung kopi anda. Furniture yang
                                    kami sediakan memiliki kualitas yang terbaik.</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end" id="furnitur">
                            @if ($valid and ($pesanan->persediaan_meja or $pesanan->persediaan_kursi or $pesanan->persediaan_lemari or $pesanan->persediaan_lampu or $pesanan->persediaan_kipas or $pesanan->persediaan_wire))
                                <a class="btn btn-danger" onclick="batalkanPesanFurnitur()">Batalkan Pesan</a>
                            @else
                                <a href="#persediaan" class="btn btn-success">Pesan</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-xl min-vh-90" id="persediaan">
        <div class="row my-4">
            <div class="text-center" style="font-family: 'Lobster', cursive;">
                <h1>Pesan Furnitur dari Warkop Companion</h1>
            </div>
        </div>
        <div class="row text-center my-4">
            <div class="col-sm-12 col-xl-4 mb-4">
                <div class="card">
                    <img src="{{ URL::asset('assets/images/mahbod-akhzami-jc9dkaaEYr4-unsplash.jpg') }}"
                        class="card-img-top" style="height: 250px; object-fit: cover;" alt="gambar-fitur">
                    <div class="card-body">
                        <p class="fs-5 mb-2">Persediaan Meja</p>
                        <div class="d-flex justify-content-end" id="persediaan_meja">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Jumlah</span>
                                <input type="number" name="persediaan_meja" class="form-control mb-0"
                                    placeholder="Masukkan Jumlah Pesanan Anda"
                                    value=@if ($valid) "{{ $pesanan->persediaan_meja }}"@else"0" @endif
                                    min="0" max="100" onchange="pesanFurnitur()">
                            </div>
                        </div>
                        <p class="px-2 mb-0">Maksimum Pesanan 100</p>
                        @if ($errors->has('persediaan_meja'))
                            <div class="error text-danger text-center">{{ $errors->first('persediaan_meja') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4 mb-4">
                <div class="card">
                    <img src="{{ URL::asset('assets/images/yu-carla-Or3zn5zbgzE-unsplash.jpg') }}"
                        class="card-img-top" style="height: 250px; object-fit: cover;" alt="gambar-fitur">
                    <div class="card-body">
                        <p class="fs-5 mb-2">Persediaan Kursi</p>
                        <div class="d-flex justify-content-end" id="persediaan_kursi">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Jumlah</span>
                                <input type="number" name="persediaan_kursi" class="form-control mb-0"
                                    placeholder="Masukkan Jumlah Pesanan Anda"
                                    value=@if ($valid) "{{ $pesanan->persediaan_kursi }}"@else"0" @endif
                                    min="0" max="400" onchange="pesanFurnitur()">
                            </div>
                        </div>
                        <p class="px-2 mb-0">Maksimum Pesanan 400</p>
                        @if ($errors->has('persediaan_kursi'))
                            <div class="error text-danger text-center">{{ $errors->first('persediaan_kursi') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4 mb-4">
                <div class="card">
                    <img src="{{ URL::asset('assets/images/rob-laughter-OnuBZcQbZEg-unsplash.jpg') }}"
                        class="card-img-top" style="height: 250px; object-fit: cover;" alt="gambar-fitur">
                    <div class="card-body">
                        <p class="fs-5 mb-2">Persediaan Lemari</p>
                        <div class="d-flex justify-content-end" id="persediaan_lemari">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Jumlah</span>
                                <input type="number" name="persediaan_lemari" class="form-control mb-0"
                                    placeholder="Masukkan Jumlah Pesanan Anda"
                                    value=@if ($valid) "{{ $pesanan->persediaan_lemari }}"@else"0" @endif
                                    min="0" max="50" onchange="pesanFurnitur()">
                            </div>
                        </div>
                        <p class="px-2 mb-0">Maksimum Pesanan 50</p>
                        @if ($errors->has('persediaan_lemari'))
                            <div class="error text-danger text-center">{{ $errors->first('persediaan_lemari') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4 mb-4">
                <div class="card">
                    <img src="{{ URL::asset('assets/images/pierre-chatel-innocenti-pxoZSTdAzeU-unsplash.jpg') }}" class="card-img-top"
                        style="height: 250px; object-fit: cover;" alt="gambar-fitur">
                    <div class="card-body">
                        <p class="fs-5 mb-2">Persediaan Lampu</p>
                        <div class="d-flex justify-content-end" id="persediaan_lampu">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Jumlah</span>
                                <input type="number" name="persediaan_lampu" class="form-control mb-0"
                                    placeholder="Masukkan Jumlah Pesanan Anda"
                                    value=@if ($valid) "{{ $pesanan->persediaan_lampu }}"@else"0" @endif
                                    min="0" max="50" onchange="pesanFurnitur()">
                            </div>
                        </div>
                        <p class="px-2 mb-0">Maksimum Pesanan 50</p>
                        @if ($errors->has('persediaan_lampu'))
                            <div class="error text-danger text-center">{{ $errors->first('persediaan_lampu') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4 mb-4">
                <div class="card">
                    <img src="{{ URL::asset('assets/images/bersam-XNETub7tjkE-unsplash.jpg') }}"
                        class="card-img-top" style="height: 250px; object-fit: cover;" alt="gambar-fitur">
                    <div class="card-body">
                        <p class="fs-5 mb-2">Persediaan Kipas</p>
                        <div class="d-flex justify-content-end" id="persediaan_kipas">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Jumlah</span>
                                <input type="number" name="persediaan_kipas" class="form-control mb-0"
                                    placeholder="Masukkan Jumlah Pesanan Anda"
                                    value=@if ($valid) "{{ $pesanan->persediaan_kipas }}"@else"0" @endif
                                    min="0" max="50" onchange="pesanFurnitur()">
                            </div>
                        </div>
                        <p class="px-2 mb-0">Maksimum Pesanan 50</p>
                        @if ($errors->has('persediaan_kipas'))
                            <div class="error text-danger text-center">{{ $errors->first('persediaan_kipas') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4 mb-4">
                <div class="card">
                    <img src="{{ URL::asset('assets/images/elena-mozhvilo-FBaJVyV_NvU-unsplash.jpg') }}"
                        class="card-img-top" style="height: 250px; object-fit: cover;" alt="gambar-fitur">
                    <div class="card-body">
                        <p class="fs-5 mb-2">Persediaan Wire</p>
                        <div class="d-flex justify-content-end" id="persediaan_wire">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Jumlah</span>
                                <input type="number" name="persediaan_wire" class="form-control mb-0"
                                    placeholder="Masukkan Jumlah Pesanan Anda"
                                    value=@if ($valid) "{{ $pesanan->persediaan_wire }}"@else"0" @endif
                                    min="0" max="50" onchange="pesanFurnitur()">
                            </div>
                        </div>
                        <p class="px-2 mb-0">Maksimum Pesanan 50</p>
                        @if ($errors->has('persediaan_wire'))
                            <div class="error text-danger text-center">{{ $errors->first('persediaan_wire') }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="floating-container">
        @if ($valid)
            <button class="btn btn-coffee">Edit Pesanan <i class="fa fa-check-circle ms-1" aria-hidden="true"></i></button>
        @else
            <button class="btn btn-coffee">Buat Pesanan <i class="fa fa-plus-circle ms-1" aria-hidden="true"></i></button>
        @endif
    </div>
    </form>

    <script src="{{ URL::asset('assets/scripts/pemesanan.js') }}"></script>
@endsection
