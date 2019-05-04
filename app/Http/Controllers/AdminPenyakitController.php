<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penyakit;

class AdminPenyakitController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function tampilkan()
    {
        $penyakit = Penyakit::all();
        return view('admin.penyakit.utama', ['penyakit' => $penyakit]);
    }

    public function tambahGet()
    {
        return view('admin.penyakit.tambah');
    }

    public function tambahPost(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required'
        ]);
        
        $penyakit = new Penyakit();
        $penyakit->nama = $request->input('nama');
        $penyakit->deskripsi = $request->input('deskripsi');
        $penyakit->save();
        $request->session()->flash('notifikasi-admin', ['status' => 'info', 'pesan' => 'Penyakit berhasil ditambah']);
        return redirect(route('AdminPenyakit.tampilkan'));
    }

    public function ubahGet(Request $request)
    {
        if(!empty($request->input('id')))
        {
            $penyakit = Penyakit::where('id', '=', urldecode($request->input('id')))->first();
            if(!empty($penyakit))
                return view('admin.penyakit.ubah', ["penyakit" => $penyakit]);
            else
                return 'Data penyakit tidak ditemukan';
        }
        else
            return 'Parameter id kosong.';
    }

    public function ubahPost(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required'
        ]);

        $penyakit = Penyakit::where("id", "=", $request->input('id'))->first();
        $penyakit->nama = $request->input('nama');
        $penyakit->deskripsi = $request->input('deskripsi');
        $penyakit->save();
        $request->session()->flash('notifikasi-admin', ['status' => 'info', 'pesan' => 'Penyakit berhasil diubah']);
        $request->session()->get('notifikasi-admin', 'default');
        return redirect(route('AdminPenyakit.tampilkan'));
    }

    public function hapusGet(Request $request)
    {
        if(!empty($request->input('id')))
        {
            $penyakit = Penyakit::where('id', '=', urldecode($request->input('id')))->first();
            if(!empty($penyakit))
            {
                $penyakit->delete();
                $request->session()->flash('notifikasi-admin', ['status' => 'info', 'pesan' => 'Penyakit berhasil dihapus']);
                $request->session()->get('notifikasi-admin', 'default');
                return redirect(route('AdminPenyakit.tampilkan'));
            }
            else
                return 'Data penyakit tidak ditemukan';
        }
        else
            return 'Parameter id kosong.';
    }
}
