@extends('backend')
@section('title')

Sektor
@endsection
@section('judul')

Sektor
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
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($sektor as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>

                                            <a data-toggle="modal" data-target="#sektor-{{$item->id_sektor}}" class="fas fa-pen"></a>
                                            <a href="/hapus-sektor/{{$item->id_sektor}}"
                                                onclick="return confirm('yakin dihapus?')"
                                                class="fas fa-trash"></a>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data sektor belum Tersedia.
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
        <form action="/input-sektor" method="POST" enctype="multipart/form-data">
          @method('Post')
          @csrf
          <div class="row">
              <div class="col mb-3">
                <label for="emailWithTitle" class="form-label">Sektor</label>
                <input type="text" name="nama" id="emailWithTitle" class="form-control"
                    placeholder="Masukan sektor" />
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
@foreach ($sektor as $item)
<div class="modal fade" id="sektor-{{$item->id_sektor}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="edit-sektor/{{$item->id_sektor}}" method="POST" enctype="multipart/form-data">
          {{-- @method('put') --}}
          @csrf
          <div class="row">
              <div class="col mb-3">
                <label for="emailWithTitle" class="form-label">Sektor</label>
                <input type="text" name="nama" value="{{ $item->nama }}" id="emailWithTitle" class="form-control"
                    placeholder="Masukan sektor" />
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