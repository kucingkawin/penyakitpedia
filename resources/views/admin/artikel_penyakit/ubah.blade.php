@extends('admin.base_admin')

@section('content')

<section class="content-header">
    <div class="row">
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li><a href="{{ route('Admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{ route('AdminPenyakit.tampilkan') }}"><i class="fa fa-dashboard"></i> Penyakit</a></li>
                <li><a href="{{ route('AdminArtikelPenyakit.tampilkan') . '?idpenyakit=' . $artikelPenyakit->id_penyakit }}"><i class="fa fa-dashboard"></i> Artikel Penyakit</a></li>
                <li class="active">Ubah</li>
            </ol>
        </div>
    </div>
</section>

@php
    $penyakit = App\Penyakit::all();
@endphp

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
    <form action="{{ route('AdminArtikelPenyakit.ubahPost') . '?id=' . $artikelPenyakit->id}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="penyakit">Penyakit:</label>
            <select class="form-control" id="penyakit" name="id_penyakit">
                @foreach($penyakit as $p)
                    <option value={{$p->id}} {{old('id_penyakit', $artikelPenyakit->id_penyakit) == $p->id ? 'selected' : ''}}>{{$p->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $artikelPenyakit->judul) }}">
        </div>
        <div class="form-group">
            <label for="konten">Konten:</label>
            <textarea class="form-control" rows="5" id="konten" name="konten">{{ old('konten', $artikelPenyakit->konten) }}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
        </div>
    </form>
</section>
@endsection