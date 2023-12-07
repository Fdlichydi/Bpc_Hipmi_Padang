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
                                    <th class="text-center" scope="col">Name</th>
                                    {{-- <th class="text-center" scope="col">Password</th> --}}
                                    <th class="text-center" scope="col">Email</th>
                                    {{-- <th class="text-center" scope="col">email_verified_at</th> --}}
                                    {{-- <th class="text-center" scope="col">password</th> --}}
                                    {{-- <th class="text-center" scope="col">remember_token</th> --}}
                                    {{-- <th class="text-center" scope="col">created_at</th> --}}
                                    {{-- <th class="text-center" scope="col">updated_at</th> --}}
                                    <th class="text-center" scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($user as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    {{-- <td>{{ $item->email_verified_at }}</td> --}}
                                    {{-- <td>{{ $item->password }}</td> --}}
                                    {{-- <td>{{ $item->remember_token }}</td> --}}
                                    {{-- <td>{{ $item->created_at }}</td> --}}
                                    {{-- <td>{{ $item->updated_at }}</td> --}}
                                    <td> 

                                            <a data-toggle="modal" data-target="#user-{{$item->id}}" class="fas fa-pen"></a>
                                            <a href="/hapus-user/{{$item->id}}"
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
                        <label class="font-weight-bold">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">email</label>
                        <input type="email" class="form-control" name="email" placeholder="Masukkan email">
                    </div>
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan password"">
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
<div class="modal fade" id="user-{{$item->id}}">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="edit-user/{{$item->id}}" method="POST" enctype="multipart/form-data">
                    {{-- @method('put') --}}
                    @csrf
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$item->name}}" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">email</label>
                        <input type="email" class="form-control" name="email" value="{{$item->email}}" placeholder="Masukkan email">
                    </div>
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">password</label>
                        <input type="password" class="form-control" name="password" value="{{$item->password}}" placeholder="Masukkan password"">
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
