@extends('admin.base_admin')

@section('content')

<section class="content-header">
    <div class="row">
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li><a href="{{ route('Admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{ route('AdminPenyakit.tampilkan') . '?id=' . $idPenyakit }}"><i class="fa fa-dashboard"></i> Penyakit</a></li>
                <li class="active">Artikel Penyakit</li>
            </ol>
        </div>
        <div class="col-md-6">
            <form action="#" method="get">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</section>

    <!-- Main Section -->
<section class="content">
    <!-- search form -->
    
    <!-- Remove This Before You Start -->
    <h1>Artikel Penyakit</h1>

    @if(Session::has('notifikasi-admin'))
        @php $notifikasiAdmin = Session::get('notifikasi-admin'); @endphp
        <div class="alert alert-{{ $notifikasiAdmin['status'] }}">{{ $notifikasiAdmin['pesan'] }}</div>
    @endif
    <a href = "{{ route('AdminArtikelPenyakit.tambahGet') . "?idpenyakit=" . $idPenyakit}}" class = "btn btn-sm btn-primary">Tambah</a>
    <hr>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No.</th>
            <th>Id Penyakit</th>
            <th>Nama Penyakit</th>
            <th>Judul</th>
            <th>Konten</th>
            <th>Tanggal Dibuat</th>
            <th>Tanggal Diperbarui</th>
        </tr>
        </thead>
        <tbody>
        @php $no = 1; @endphp
        @foreach($artikelPenyakit as $p)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $p->id_penyakit }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->judul }}</td>
                <td>{{ $p->konten }}</td>
                <td>{{ $p->created_at }}</td>
                <td>{{ $p->updated_at }}</td>
                <td>
                    <a href="{{ route('AdminArtikelPenyakit.ubahGet') . "?id=" . $p->id }}" class=" btn btn-sm btn-primary">Edit</a>
                    <a href="{{ route('AdminArtikelPenyakit.hapusGet') . "?id=" . $p->id }}" class=" btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</section>

@endsection