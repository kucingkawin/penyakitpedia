@extends('admin.base_admin')

@section('content')

<section class="content-header">
    <div class="row">
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li><a href="{{ route('Admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{ route('AdminPenyakit.tampilkan') }}"><i class="fa fa-dashboard"></i> Penyakit</a></li>
                <li class="active">Ubah</li>
            </ol>
        </div>
    </div>
</section>

    <!-- Main content -->
    <section class="content">
        <!-- Remove This Before You Start -->
        <h1>Ubah Penyakit</h1>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <hr>
        <form action="{{ route('AdminPenyakit.ubahPost') . '?id=' . urlencode($penyakit->id)}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $penyakit->nama) }}">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ old('deskripsi', $penyakit->deskripsi) }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
            </div>
        </form>
    </section>
@endsection