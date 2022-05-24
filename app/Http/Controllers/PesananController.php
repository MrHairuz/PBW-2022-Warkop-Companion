<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show all pesanan of a user.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pesanan');
    }

    public function edit($pesanan_id)
    {
        $pesanan = Pesanan::where('id', $pesanan_id)->first();
        return view('companion', ['pesanan' => $pesanan]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'warkop_name'              => 'required|min:1|max:255',
            'warkop_address'           => 'required|min:1|max:255',
            "jasa_desain_interior"     => 'required|boolean',
            "jasa_desain_branding"     => 'required|boolean',
            "jasa_desain_pencahayaan"  => 'required|boolean',
            "jasa_desain_exterior"     => 'required|boolean',
            "jasa_pengurusan_internet" => 'required|boolean',
            "persediaan_meja"          => 'required|min:0|max:100',
            "persediaan_kursi"         => 'required|min:0|max:400',
            "persediaan_lemari"        => 'required|min:0|max:50',
            "persediaan_lampu"         => 'required|min:0|max:50',
            "persediaan_kipas"         => 'required|min:0|max:50',
            "persediaan_wire"          => 'required|min:0|max:50',
        ]);

        $validate['user_id'] = $request->user_id;

        Pesanan::create($validate);

        return view('pesanan')->with('Success','Pesanan Berhasil Dibuat!');
    }

    public function update(Request $request)
    {
        $pesanan = Pesanan::where('id', $request->pesanan_id)->first();

        $validate = $request->validate([
            'warkop_name'              => 'required|min:1|max:255',
            'warkop_address'           => 'required|min:1|max:255',
            "jasa_desain_interior"     => 'required|boolean',
            "jasa_desain_branding"     => 'required|boolean',
            "jasa_desain_pencahayaan"  => 'required|boolean',
            "jasa_desain_exterior"     => 'required|boolean',
            "jasa_pengurusan_internet" => 'required|boolean',
            "persediaan_meja"          => 'required|min:0|max:100',
            "persediaan_kursi"         => 'required|min:0|max:400',
            "persediaan_lemari"        => 'required|min:0|max:50',
            "persediaan_lampu"         => 'required|min:0|max:50',
            "persediaan_kipas"         => 'required|min:0|max:50',
            "persediaan_wire"          => 'required|min:0|max:50',
        ]);

        $validate['user_id'] = $request->user_id;

        $pesanan->update($validate);

        return redirect()->route('pesanan')->with('Success', 'Ketersediaan updated!');
    }

    public function stores(Request $request)
    {
        dd($request->all());
    }
}
