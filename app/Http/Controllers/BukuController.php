<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index(){
        // $data_buku = Buku::all()->sortByDesc('id');

        $data_buku = Buku::orderBy('id', 'desc')->get();

        $jumlah_buku = Buku::count();
        $total_harga = $data_buku->sum('harga');

        return view('buku.index', compact('data_buku', 'jumlah_buku', 'total_harga'));

    }
}
