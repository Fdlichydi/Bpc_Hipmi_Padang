@extends('backend')
@section('title')

Jabatan
@endsection
@section('judul')

Jabatan
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
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($jabatan as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td> 

                                            <a data-toggle="modal" data-target="#jabatan-{{$item->id_jabatan}}" class="fas fa-pen"></a>
                                            <a href="/hapus-jabatan/{{$item->id_jabatan}}"
                                                onclick="return confirm('yakin dihapus?')"
                                                class="fas fa-trash"></a>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data jabatan belum Tersedia.
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
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/input-jabatan" method="POST" enctype="multipart/form-data">
          @method('Post')
          @csrf
          <div class="row">
              <div class="col mb-3">
                <label for="emailWithTitle" class="form-label">jabatan</label>
                <input type="text" name="nama" id="emailWithTitle" class="form-control"
                    placeholder="Masukan jabatan" />
              </div>
          </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary swalDefaultSuccess">Save</button>
      </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal Edit -->
@foreach ($jabatan as $item)
<div class="modal fade" id="jabatan-{{$item->id_jabatan}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="edit-jabatan/{{$item->id_jabatan}}" method="POST" enctype="multipart/form-data">
          {{-- @method('put') --}}
          @csrf
          <div class="row">
              <div class="col mb-3">
                <label for="emailWithTitle" class="form-label">jabatan</label>
                <input type="text" name="nama" value="{{ $item->nama }}" id="emailWithTitle" class="form-control"
                    placeholder="Masukan jabatan" />
              </div>
          </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endforeach
<!-- /.modal -->