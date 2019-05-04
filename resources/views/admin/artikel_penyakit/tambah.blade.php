@extends('admin.base_admin')

@section('content')

<section class="content-header">
    <div class="row">
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li><a href="{{ route('Admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{ route('AdminPenyakit.tampilkan') }}"><i class="fa fa-dashboard"></i> Penyakit</a></li>
                @if(isset($idPenyakit))
                    <li><a href="{{ route('AdminArtikelPenyakit.tampilkan') . '?idpenyakit=' . $idPenyakit }}"><i class="fa fa-dashboard"></i> Artikel Penyakit</a></li>
                @endif
                <li class="active">Ubah</li>
            </ol>
        </div>
    </div>
</section>

    <!-- Main content -->
    <section class="content">
        <section class="main-section">
            <!-- Add Your Content Inside -->
            <div class="content">
                <!-- Remove This Before You Start -->
                <h1>Tambah Artikel Penyakit</h1>
                @php
                    $penyakit = App\Penyakit::all();
                @endphp
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
                <form action="{{ route('AdminArtikelPenyakit.tambahPost') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="penyakit">Penyakit:</label>
                        <select class="form-control" id="penyakit" name="id_penyakit">
                            @foreach($penyakit as $p)
                                <option value={{$p->id}} {{old('id_penyakit', isset($idPenyakit) ? $idPenyakit : null) == $p->id ? 'selected' : ''}}>{{$p->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul:</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}">
                    </div>
                    <div class="form-group">
                        <label for="konten">Konten:</label>
                        <textarea class="form-control" rows="5" id="konten" name="konten">{{ old('konten') }}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.content -->
        </section>
    <!-- /.main-section -->
    </section>
@endsection