<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $data['transaksis'] = Transaksi::with('transaksi')->get();
        return view('transaksi.index', $data);
    }
}
