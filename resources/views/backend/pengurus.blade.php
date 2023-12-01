@extends('backend')
@section('title')

Pengurus
@endsection
@section('judul')

Pengurus
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
                                    <th>Jabatan</th>
                                    <th>Nama Pengurus</th>
                                    {{-- <th>Foto</th> --}}
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pengurus as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->nama_pengurus }}</td>
                                    {{-- <td><img src="{{asset('assets/images/'.$item->foto)}}" width="100px" alt=""> --}}
                                    </td>
                                    <td> 
                                        <a data-toggle="modal" data-target="#pengurus-{{$item->id_pengurus}}" class="fas fa-pen"></a>
                                        <a href="/hapus-pengurus/{{$item->id_pengurus}}"
                                            onclick="return confirm('yakin dihapus?')"
                                            class="fas fa-trash"></a>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data pengurus belum Tersedia.
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
                <form action="/input-pengurus" method="POST" enctype="multipart/form-data">
                    @method('Post')
                    @csrf
                    <div class="row">
                        <div class="col mb-3">
                            <label class="font-weight-bold">Jabatan pengurus</label>
                            <select class="select2-single form-control" name="id_jabatan"
                                aria-label="Default select example">
                                <option value="">pilih jabatan</option>
                                @foreach ($jabatan as $k)
                                <option value="{{$k->id_jabatan}}">{{$k->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Nama Pengurus</label>
                            <input type="text" name="nama_pengurus" id="nameWithTitle" class="form-control"
                                placeholder="Masukan Judul" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Foto</label>
                            <input type="file" name="foto" id="nameWithTitle" class="form-control"
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
@foreach ($pengurus as $item)
<div class="modal fade" id="pengurus-{{$item->id_pengurus}}">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="edit-pengurus/{{$item->id_pengurus}}" method="POST" enctype="multipart/form-data">
                    {{-- @method('put') --}}
                    @csrf
                    <div class="row">
                        <div class="col mb-3">
                            <label class="font-weight-bold">Jabatan pengurus</label>
                            <select class="select2-single form-control" name="id_jabatan"   aria-label="Default select example">
                                <option value="{{ $item->id_jabatan }}">{{ $item->nama }}</option>
                                @foreach ($jabatan as $k)
                                <option value="{{$k->id_jabatan}}">{{$k->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col mb-3">
                            <label for="nameWithTitle" class="form-label">Nama Pengurus</label>
                            <input type="text" name="nama_pengurus"  value="{{ $item->nama_pengurus }}" id="nameWithTitle" class="form-control"
                                placeholder="Masukan Judul" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <img src="{{asset('assets/images/'.$item->foto)}}" width="100px" alt="">
                            <input type="file" name="foto" value="{{ $item->foto }}"  id="nameWithTitle" class="form-control"
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
