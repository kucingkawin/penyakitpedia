@extends('admin.base_admin')

@section('content')

<section class="content-header">
    <div class="row">
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li><a href="{{ route('Admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Penyakit</li>
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
    <h1>Jenis Penyakit</h1>
    @if(Session::has('notifikasi-admin'))
        @php $notifikasiAdmin = Session::get('notifikasi-admin'); @endphp
        <div class="alert alert-{{ $notifikasiAdmin['status'] }}">{{ $notifikasiAdmin['pesan'] }}</div>
    @endif
    <a href = "{{ route('AdminPenyakit.tambahGet') }}" class = "btn btn-sm btn-primary">Tambah</a>
    <hr>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @php $no = 1; @endphp
        @foreach($penyakit as $p)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->deskripsi }}</td>
                <td>
                    <a href="{{ route('AdminPenyakit.ubahGet') . "?id=" . $p->id }}" class=" btn btn-sm btn-primary">Edit</a>
                    <a href="{{ route('AdminPenyakit.hapusGet') . "?id=" . $p->id }}" class=" btn btn-sm btn-danger">Hapus</a>
                    <a href="{{ route('AdminArtikelPenyakit.tampilkan') . "?idpenyakit=" . $p->id }}" class=" btn btn-sm btn-warning">Artikel</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</section>

@endsection