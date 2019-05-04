@extends('base_user', ["hilangkanFooter" => true])

@section('konten')
    <section>
        <div class="container">
            @if(!empty($dataPenyakit))
                <h1>{{ $dataPenyakit->nama }}</h1>
                @if(sizeof($daftarArtikelPenyakit) > 0)
                    <ul class="lead">
                        @foreach($daftarArtikelPenyakit as $artikelPenyakit)
                            <li>{{ $artikelPenyakit->judul }}</li>
                        @endforeach
                    </ul>
                @else
                    <p class="lead">Tidak ada artikel disini</p>               
                @endif
            @else
                <h1>Penyakit Tidak Ada</h1>
                <p class="lead">Nama penyakit tidak ditemukan.</p>
            @endif
        </div>
    </section>
@endsection