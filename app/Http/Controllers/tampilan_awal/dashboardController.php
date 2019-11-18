<?php

namespace App\Http\Controllers\tampilan_awal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jenis_barang;

class dashboardController extends Controller
{
    public function index()
    {

        $jenisbarang = Jenis_barang::all();
        // mengambil data dari table pegawai
        //$jenisbarang = DB::table('jenis_barang')->get();
        
        // mengirim data pegawai ke view index
        return view('pergudangan/index',['jenis_barang' => $jenisbarang]);
    }
}
