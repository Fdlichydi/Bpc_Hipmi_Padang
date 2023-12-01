@extends('backend')
@section('title')

user
@endsection
@section('judul')

user
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
                                    <th width="50px" class="text-center" scope="col">No</th>
                                    <th class="text-center" scope="col">Username</th>
                                    {{-- <th class="text-center" scope="col">Password</th> --}}
                                    <th class="text-center" scope="col">Nama</th>
                                    <th class="text-center" scope="col">No Hp</th>
                                    <th class="text-center" scope="col">Foto</th>
                                    <th class="text-center" scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($user as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->username }}</td>
                                    {{-- <td>{{ $item->password }}</td> --}}
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->no }}</td>
                                    <td><img src="{{asset('assets/images/'.$item->foto)}}" width="100px" alt=""></td>
                                    </td>
                                    <td> 

                                            <a data-toggle="modal" data-target="#user-{{$item->id_user}}" class="fas fa-pen"></a>
                                            <a href="/hapus-user/{{$item->id_user}}"
                                                onclick="return confirm('yakin dihapus?')"
                                                class="fas fa-trash"></a>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data user belum Tersedia.
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
                <form action="/input-user" method="POST" enctype="multipart/form-data">
                    @method('Post')
                    @csrf
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap"">
                    </div>
                    <div class=" form-group mb-3">
                        <label class="font-weight-bold">No Hp</label>
                        <input type="text" class="form-control" name="no" placeholder="Masukkan No Hp"">
                    </div>
                   <div class=" form-group mb-3">
                        <label class="font-weight-bold">Foto</label>
                        <input type="file" class="form-control" name="foto" placeholder="Masukkan Foto user">
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
@foreach ($user as $item)
<div class="modal fade" id="user-{{$item->id_user}}">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="edit-user/{{$item->id_user}}" method="POST" enctype="multipart/form-data">
                    {{-- @method('put') --}}
                    @csrf
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Username</label>
                        <input type="text" class="form-control" name="username" value="{{$item->username}}" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Password</label>
                        <input type="password" class="form-control" name="password" value="{{$item->password}}" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" value="{{$item->nama}}" placeholder="Masukkan Nama Lengkap"">
                    </div>
                    <div class=" form-group mb-3">
                        <label class="font-weight-bold">No Hp</label>
                        <input type="text" class="form-control" name="no" value="{{$item->no}}" placeholder="Masukkan No Hp"">
                    </div>
                   <div class=" form-group mb-3">
                        <label class="font-weight-bold">Foto</label>
                        <input type="file" class="form-control" name="foto" value="{{$item->foto}}" placeholder="Masukkan Foto user">
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
