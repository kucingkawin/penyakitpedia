<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Penyakit;
use App\ArtikelPenyakit;

class PenyakitController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function dapatkanArtikelPenyakitBerdasarkanId($idPenyakit)
    {
        $dataPenyakit = Penyakit::where('id', $idPenyakit)->first();
        $daftarArtikelPenyakit = ArtikelPenyakit::where('id_penyakit', $idPenyakit)->get();
        return view('daftar_artikel_penyakit', ["dataPenyakit" => $dataPenyakit, "daftarArtikelPenyakit" => $daftarArtikelPenyakit]);
    }

    public function dapatkanIsiArtikelPenyakit($idPenyakit, $idArtikelPenyakit)
    {
        $daftarArtikelPenyakit = DB::table('vw_artikel_penyakit')->where('id', "=", $idPenyakit)->where("id_penyakit", "=", $idArtikelPenyakit)->first();
        if(empty($daftarArtikelPenyakit))
            return 'Tidak ada artikel';
        else
            return 'Artikel ditemukan: ' . $daftarArtikelPenyakit->Judul;

        //return view('daftar_artikel_penyakit', ["dataPenyakit" => $daftarArtikelPenyakit, "daftarArtikelPenyakit" => $daftarArtikelPenyakit]);
    }
}
