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

    public function store($pesanan_id)
    {
        $pesanan = Pesanan::where('id', $pesanan_id)->first();
        return view('companion', ['pesanan' => $pesanan]);
    }
}
