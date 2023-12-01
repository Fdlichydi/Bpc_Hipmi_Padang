@extends('backend')
@section('title')

Lihat Berita
@endsection
@section('judul')

Lihat Berita
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $berita->judul }}</h5><p></p>
                    <div class="text-center"><img src="{{asset('assets/images/'.$berita->gambar)}}" width="250px" alt=""><p><p></div>
                        {{ $berita->nama }}<br>
                        {{ $berita->tgl }}
                            <p class="">{!! $berita->isi !!}</p>
                            <a href="/berita" class="btn btn-sm btn-warning">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
