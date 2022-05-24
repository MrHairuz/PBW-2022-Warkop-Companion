@extends('layouts.base')

@section('title', 'Pesanan')

@section('content')
    <div class="container-xl">
        <div class="row">
            @foreach (Auth::user()->pesanan as $pesanan)
                <div class="col-md-6 mb-3 px-2">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-center" style="font-family: 'Comfortaa', sans-serif;">
                                <a href="{{ route('pesanan.edit', ['pesanan_id' => $pesanan->id]) }}" class="fs-4 my-2 text-decoration-none text-dark">Pesanan {{ $pesanan->warkop_name }}</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="text-center mb-2">
                                    {{ __('Informasi Warung Kopi') }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    {{ __('Pemilik Warung Kopi') }}
                                </div>
                                <div class="col text-end">
                                    {{ $pesanan->user->name }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    {{ __('ID Pesanan') }}
                                </div>
                                <div class="col text-end">
                                    {{ __('WAC') . str_pad($pesanan->id, 6, '0', STR_PAD_LEFT) }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    {{ __('Nama Warung Kopi') }}
                                </div>
                                <div class="col text-end">
                                    {{ $pesanan->warkop_name }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    {{ __('Alamat Warung Kopi') }}
                                </div>
                                <div class="col text-end">
                                    {{ $pesanan->warkop_address }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="text-center mb-2">
                                    {{ __('Pemesanan Jasa') }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    {{ __('Jasa Desain Interior') }}
                                </div>
                                <div class="col text-end">
                                    @if ($pesanan->jasa_desain_interior)
                                        <i class="fas fa-check-circle text-success"></i>
                                    @else
                                        <i class="fas fa-times-circle text-danger"></i>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    {{ __('Jasa Desain Branding') }}
                                </div>
                                <div class="col text-end">
                                    @if ($pesanan->jasa_desain_branding)
                                        <i class="fas fa-check-circle text-success"></i>
                                    @else
                                        <i class="fas fa-times-circle text-danger"></i>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    {{ __('Jasa Desain Pencahayaan') }}
                                </div>
                                <div class="col text-end">
                                    @if ($pesanan->jasa_desain_pencahayaan)
                                        <i class="fas fa-check-circle text-success"></i>
                                    @else
                                        <i class="fas fa-times-circle text-danger"></i>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    {{ __('Jasa Desain Exterior') }}
                                </div>
                                <div class="col text-end">
                                    @if ($pesanan->jasa_desain_exterior)
                                        <i class="fas fa-check-circle text-success"></i>
                                    @else
                                        <i class="fas fa-times-circle text-danger"></i>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    {{ __('Jasa Pengurusan Internet') }}
                                </div>
                                <div class="col text-end">
                                    @if ($pesanan->jasa_pengurusan_internet)
                                        <i class="fas fa-check-circle text-success"></i>
                                    @else
                                        <i class="fas fa-times-circle text-danger"></i>
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="text-center mb-2">
                                    {{ __('Pemesanan Barang') }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    {{ __('Persediaan Meja') }}
                                </div>
                                <div class="col text-end">
                                    {{ $pesanan->persediaan_meja }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    {{ __('Persediaan Kursi') }}
                                </div>
                                <div class="col text-end">
                                    {{ $pesanan->persediaan_kursi }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    {{ __('Persediaan Lemari') }}
                                </div>
                                <div class="col text-end">
                                    {{ $pesanan->persediaan_lemari }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    {{ __('Persediaan Lampu') }}
                                </div>
                                <div class="col text-end">
                                    {{ $pesanan->persediaan_lampu }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    {{ __('Persediaan Kipas') }}
                                </div>
                                <div class="col text-end">
                                    {{ $pesanan->persediaan_kipas }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    {{ __('Persediaan Wire') }}
                                </div>
                                <div class="col text-end">
                                    {{ $pesanan->persediaan_wire }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
