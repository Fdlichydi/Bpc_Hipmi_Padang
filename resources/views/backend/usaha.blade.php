@extends('backend')
@section('title')

usaha
@endsection
@section('judul')

usaha
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('alert')
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-default " data-toggle="modal" data-target="#modal-default">
                            Tambah
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Sektor</th>
                                    <th>Nama Usaha</th>
                                    <th>Deskripsi</th>
                                    {{-- <th>Logo</th> --}}
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($usaha as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->nama_usaha }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    {{-- <td><img src="{{asset('assets/images/'.$item->logo)}}" width="100px" alt=""> --}}
                                    </td>
                                    <td> 

                                            <a data-toggle="modal" data-target="#usaha-{{$item->id_usaha}}" class="fas fa-pen"></a>
                                        <a href="/hapus-usaha/{{$item->id_usaha}}"
                                            onclick="return confirm('yakin dihapus?')"
                                            class="fas fa-trash"></a>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data usaha belum Tersedia.
                                </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->


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
                <form action="/input-usaha" method="POST" enctype="multipart/form-data">
                    @method('Post')
                    @csrf
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label class="font-weight-bold">sektor usaha</label>
                            <select class="select2-single form-control" name="id_sektor"
                                aria-label="Default select example">
                                <option value="">pilih sektor</option>
                                @foreach ($sektor as $k)
                                <option value="{{$k->id_sektor}}">{{$k->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Nama Usaha</label>
                            <input type="text" name="nama_usaha" id="nameWithTitle" class="form-control"
                                placeholder="Masukan Nama Usaha" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">Deskripsi Usaha</label>
                            <textarea class="form-control" name="deskripsi" aria-label="With textarea"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Logo</label>
                            <input type="file" name="logo" id="nameWithTitle" class="form-control"
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

<!-- Modal Edit -->
@foreach ($usaha as $item)
<div class="modal fade" id="usaha-{{$item->id_usaha}}">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="edit-usaha/{{$item->id_usaha}}" method="POST" enctype="multipart/form-data">
                    {{-- @method('put') --}}
                    @csrf
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label class="font-weight-bold">sektor usaha</label>
                            <select class="select2-single form-control" name="id_sektor"
                                aria-label="Default select example">
                                <option value="{{$item->id_sektor}}">{{$item->nama}}</option>
                                @foreach ($sektor as $k)
                                <option value="{{$k->id_sektor}}">{{$k->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Nama Usaha</label>
                            <input type="text" name="nama_usaha" value="{{$item->nama_usaha}}" id="nameWithTitle" class="form-control"
                                placeholder="Masukan Nama Usaha" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">Deskripsi usaha</label>
                            <textarea class="form-control" name="deskripsi" aria-label="With textarea">{{$item->deskripsi}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <img src="{{asset('assets/images/'.$item->logo)}}" width="100px" alt="">
                            <label for="nameWithTitle" class="form-label">Logo</label>
                            <input type="file" name="logo" value="{{$item->logo}}" id="nameWithTitle" class="form-control"
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
@endforeach
<!-- /.modal -->
