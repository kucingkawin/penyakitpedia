<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ArtikelPenyakit;

class AdminArtikelPenyakitController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function tampilkan(Request $request)
    {
        if(empty($request->input('idpenyakit')))
            return 'Tidak ada parameter id penyakit.';
        else
        {
            $idPenyakit = $request->input('idpenyakit');
            $artikelPenyakit = DB::table('vw_artikel_penyakit')->where("id_penyakit", "=", $idPenyakit)->get();
            return view('admin.artikel_penyakit.utama', ['artikelPenyakit' => $artikelPenyakit, 'idPenyakit' => $idPenyakit]);
        }
    }

    public function tambahGet(Request $request)
    {
        if(empty($request->input('idpenyakit')))
            return view('admin.artikel_penyakit.tambah');
        else 
            return view('admin.artikel_penyakit.tambah', ['idPenyakit' => $request->input('idpenyakit')]);
    }

    public function tambahPost(Request $request)
    {
        $this->validate($request, [
            'id_penyakit' => 'required',
            'judul' => 'required',
            'konten' => 'required'
        ]);
        
        $artikelPenyakit = new ArtikelPenyakit();
        $artikelPenyakit->id_penyakit = $request->input('id_penyakit');
        $artikelPenyakit->judul = $request->input('judul');
        $artikelPenyakit->konten = $request->input('konten');
        $artikelPenyakit->save();
        $request->session()->flash('notifikasi-admin', ['status' => 'info', 'pesan' => 'Artikel penyakit berhasil ditambah.']);
        return redirect(route('AdminArtikelPenyakit.tampilkan') . "?idpenyakit=" . $artikelPenyakit->id_penyakit);
    }

    public function ubahGet(Request $request)
    {
        if(!empty($request->input('id')))
        {
            $artikelPenyakit = ArtikelPenyakit::where('id', '=', urldecode($request->input('id')))->first();
            if(!empty($artikelPenyakit))
                return view('admin.artikel_penyakit.ubah', ["artikelPenyakit" => $artikelPenyakit]);
            else
                return 'Data penyakit tidak ditemukan';
        }
        else
            return 'Parameter id kosong.';
    }

    public function ubahPost(Request $request)
    {
        $this->validate($request, [
            'id_penyakit' => 'required',
            'judul' => 'required',
            'konten' => 'required'
        ]);

        $artikelPenyakit = ArtikelPenyakit::where("id", "=", $request->input('id'))->first();
        $artikelPenyakit->judul = $request->input('judul');
        $artikelPenyakit->konten = $request->input('konten');
        $artikelPenyakit->save();
        $request->session()->flash('notifikasi-admin', ['status' => 'info', 'pesan' => 'Penyakit berhasil diubah']);
        $request->session()->get('notifikasi-admin', 'default');
        return redirect(route('AdminArtikelPenyakit.tampilkan') . "?idpenyakit=" . $artikelPenyakit->id_penyakit);
    }

    public function hapusGet(Request $request)
    {
        if(!empty($request->input('id')))
        {
            $artikelPenyakit = ArtikelPenyakit::where('id', '=', urldecode($request->input('id')))->first();
            if(!empty($artikelPenyakit))
            {
                $idPenyakit = $artikelPenyakit->id_penyakit;
                $artikelPenyakit->delete();
                $request->session()->flash('notifikasi-admin', ['status' => 'info', 'pesan' => 'Penyakit berhasil dihapus']);
                $request->session()->get('notifikasi-admin', 'default');
                return redirect(route('AdminArtikelPenyakit.tampilkan') . "?idpenyakit=" . $idPenyakit);
            }
            else
                return 'Data artikel penyakit tidak ditemukan';
        }
        else
            return 'Parameter id kosong.';
    }
}
