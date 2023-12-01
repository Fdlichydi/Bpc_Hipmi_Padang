@extends('backend')
@section('title')

Ubah Berita
@endsection
@section('judul')

Ubah Berita
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Ubah berita
                </div>
                <div class="card-body">
                    <form action="/edit-berita/{{$berita->id_berita}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="nameWithTitle" class="form-label">Tanggal</label>
                                <input type="date" name="tgl" value="{{$berita->tgl}}" id="nameWithTitle" class="form-control"
                                    placeholder="Enter Name" />
                            </div>
                            <div class="col mb-3">
                                <label class="font-weight-bold">Kategori berita</label>
                                <select class="select2-single form-control" name="id_kategori"
                                    aria-label="Default select example">
                                    <option value="{{$berita->id_kategori}}">{{$berita->nama}}</option>
                                    @foreach ($kategori as $k)
                                    <option value="{{$k->id_kategori}}">{{$k->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Judul</label>
                                <input type="text" name="judul" value="{{$berita->judul}}" id="nameWithTitle" class="form-control"
                                    placeholder="Masukan Judul" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Isi berita</label>
                                <textarea class="form-control" name="isi" id="summernote" aria-label="With textarea">
                                    {{ $berita->isi }}
                                 </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <img src="{{asset('assets/images/'.$berita->gambar)}}" width="100px" alt="">
                                <label for="nameWithTitle" class="form-label">Gambar</label>
                                <input type="file" name="gambar" value="{{$berita->gambar}}" id="nameWithTitle" class="form-control"
                                    placeholder="Enter Name" />
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                            <a href="/berita" class="btn btn-sm btn-warning">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
