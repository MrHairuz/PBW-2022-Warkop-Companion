@extends('layouts.base')

@section('title', 'My Companion')

@section('content')
    <section class="container-xl min-vh-90" id="jasa">
        <div class="row my-4">
            <div class="text-center" style="font-family: 'Lobster', cursive;">
                <h1>Pesan Jasa Warkop Companion</h1>
            </div>
        </div>
        <div class="row text-center my-4">
            <div class="col-sm-12 col-xl-4 mb-4">
                <div class="card">
                    <img src="{{ URL::asset('assets/images/daan-evers-tKN1WXrzQ3s-unsplash.jpg') }}" class="card-img-top"
                        style="height: 250px; object-fit: cover;" alt="gambar-fitur">
                    <div class="card-body">
                        <p class="fs-5 mb-1">Jasa Desain Interior</p>
                        <div class="d-flex justify-content-center" style="height: 120px;">
                            <div class="d-flex justify-content-center" style="width: 350px">
                                <p>Kami akan melakukan desain interior berdasarkan ukuran dan model ruangan warung kopi
                                    anda.</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end" id="jasa_desain_interior">
                            <input type="hidden" name="jasa_desain_interior" value="0">
                            <a class="btn btn-success" onclick="pesan('jasa_desain_interior')">Pesan</a>
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
                            <input type="hidden" name="jasa_desain_branding" value="0">
                            <a class="btn btn-success" onclick="pesan('jasa_desain_branding')">Pesan</a>
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
                            <input type="hidden" name="jasa_desain_pencahayaan" value="0">
                            <a class="btn btn-success" onclick="pesan('jasa_desain_pencahayaan')">Pesan</a>
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
                            <input type="hidden" name="jasa_desain_exterior" value="0">
                            <a class="btn btn-success" onclick="pesan('jasa_desain_exterior')">Pesan</a>
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
                                <p>Kami akan melakukan pengurusan internet untuk menjaga kualitas pelayanan di warung kopi
                                    anda.</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end" id="jasa_pengurusan_internet">
                            <input type="hidden" name="jasa_pengurusan_internet" value="0">
                            <a class="btn btn-success" onclick="pesan('jasa_pengurusan_internet')">Pesan</a>
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
                            <a href="#persediaan" class="btn btn-success">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-xl min-vh-90" id="persediaan">
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
                        <div class="d-flex justify-content-end" id="jasa_desain_interior">
                            <input type="hidden" name="jasa_desain_interior" value="0">
                            <a class="btn btn-success" onclick="pesan('jasa_desain_interior')">Pesan</a>
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
                        <div class="d-flex justify-content-end" id="jasa_desain_branding">
                            <input type="hidden" name="jasa_desain_branding" value="0">
                            <a class="btn btn-success" onclick="pesan('jasa_desain_branding')">Pesan</a>
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
                        <div class="d-flex justify-content-end" id="jasa_desain_pencahayaan">
                            <input type="hidden" name="jasa_desain_pencahayaan" value="0">
                            <a class="btn btn-success" onclick="pesan('jasa_desain_pencahayaan')">Pesan</a>
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
                        <div class="d-flex justify-content-end" id="jasa_desain_exterior">
                            <input type="hidden" name="jasa_desain_exterior" value="0">
                            <a class="btn btn-success" onclick="pesan('jasa_desain_exterior')">Pesan</a>
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
                        <div class="d-flex justify-content-end" id="jasa_pengurusan_internet">
                            <input type="hidden" name="jasa_pengurusan_internet" value="0">
                            <a class="btn btn-success" onclick="pesan('jasa_pengurusan_internet')">Pesan</a>
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
                        <div class="d-flex justify-content-end" id="furnitur">
                            <a href="#persediaan" class="btn btn-success">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    persediaan_meja
    persediaan_kursi
    persediaan_lemari
    persediaan_lampu
    persediaan_kipas
    persediaan_wire

    <script src="{{ URL::asset('assets/scripts/pemesanan.js') }}"></script>
@endsection
