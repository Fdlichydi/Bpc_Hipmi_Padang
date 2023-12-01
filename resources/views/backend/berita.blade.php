@extends('backend')
@section('title')

Berita
@endsection
@section('judul')

Berita
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <button type="button" class="btn btn-default " data-toggle="modal" data-target="#modal-default">
                            Tambah
                        </button>
                        <table id="example2" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Judul</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($berita as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->tgl }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td> <img src="{{asset('assets/images/'.$item->gambar)}}" width="100px" alt=""></td>
                                    <td><a href="/lihat1-berita/{{$item->id_berita}}" class="far fa-eye"></a>
                                        <a href="/ubah-berita/{{$item->id_berita}}" class="fas fa-pen"></a>
                                        <a href="/hapus-berita/{{$item->id_berita}}"
                                            onclick="return confirm('yakin dihapus?')" class="fas fa-trash"></a> </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection



<!-- Modal Tambah -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/input-berita" method="POST" enctype="multipart/form-data">
                    @method('Post')
                    @csrf
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="nameWithTitle" class="form-label">Tanggal</label>
                            <input type="date" name="tgl" id="nameWithTitle" class="form-control"
                                placeholder="Enter Name" />
                        </div>
                        <div class="col mb-3">
                            <label class="font-weight-bold">Kategori berita</label>
                            <select class="select2-single form-control" name="id_kategori"
                                aria-label="Default select example">
                                <option value="">pilih Kategori</option>
                                @foreach ($kategori as $k)
                                <option value="{{$k->id_kategori}}">{{$k->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Judul</label>
                            <input type="text" name="judul" id="nameWithTitle" class="form-control"
                                placeholder="Masukan Judul" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">Isi berita</label>
                            <textarea id="summernote" class="form-control" name="isi"
                                aria-label="With textarea"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Gambar</label>
                            <input type="file" name="gambar" id="nameWithTitle" class="form-control"
                                placeholder="Enter Name" />
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary swalDefaultSuccess">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.modal -->
