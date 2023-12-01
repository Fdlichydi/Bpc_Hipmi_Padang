@extends('backend')
@section('title')

Agenda
@endsection
@section('judul')

Agenda
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
                                    <th>Tanggal</th>
                                    <th>Judul</th>
                                    <th>Jam</th>
                                    <th>Lokasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($agenda as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->tgl }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->jam }} - Selesai</td>
                                    <td>{{ $item->lokasi }}</td>
                                    <td>    <a data-toggle="modal" data-target="#agenda-{{$item->id_agenda}}" class="fas fa-pen"></a>
                                            <a href="/hapus-agenda/{{$item->id_agenda}}"
                                                onclick="return confirm('yakin dihapus?')"
                                                class="fas fa-trash"></a> 
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data agenda belum Tersedia.
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
        <form action="/input-agenda" method="POST" enctype="multipart/form-data">
          @method('Post')
          @csrf
          <div class="row">
              <div class="col mb-3">
                <label for="emailWithTitle" class="form-label">Tanggal</label>
                <input type="date" name="tgl" id="emailWithTitle" class="form-control"
                    placeholder="Masukan " />
              </div>
            </div>
            <div class="row">
              <div class="col mb-3">
                <label for="emailWithTitle" class="form-label">Judul</label>
                <input type="text" name="judul" id="emailWithTitle" class="form-control"
                    placeholder="Masukan Judul" />
              </div>
            </div>
            <div class="row">
              <div class="col mb-3">
                <label for="emailWithTitle" class="form-label">Jam</label>
                <input type="time" name="jam" id="emailWithTitle" class="form-control"
                    placeholder="Masukan agenda" />
              </div>
            </div>
            <div class="row">
              <div class="col mb-3">
                <label for="emailWithTitle" class="form-label">Lokasi</label>
                <input type="text" name="lokasi" id="emailWithTitle" class="form-control"
                    placeholder="Masukan Lokasi" />
              </div>
            </div>
          </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary swalDefaultSuccess">Save</button>
      </div>
    </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal Edit -->
@foreach ($agenda as $item)
<div class="modal fade" id="agenda-{{$item->id_agenda}}">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="edit-agenda/{{$item->id_agenda}}" method="POST" enctype="multipart/form-data">
          {{-- @method('put') --}}
          @csrf
          <div class="row">
              <div class="col mb-3">
                <label for="emailWithTitle" class="form-label">Tanggal</label>
                <input type="date" name="tgl" value="{{ $item->tgl }}" id="emailWithTitle" class="form-control"
                    placeholder="Masukan agenda" />
              </div>
            </div>
              <div class="row">
              <div class="col mb-3">
                <label for="emailWithTitle" class="form-label">Judul</label>
                <input type="text" name="judul" value="{{ $item->judul }}" id="emailWithTitle" class="form-control"
                    placeholder="Masukan judul" />
              </div>
            </div>
            <div class="row">
              <div class="col mb-3">
                <label for="emailWithTitle" class="form-label">Jam</label>
                <input type="time" name="jam" value="{{ $item->jam }}" id="emailWithTitle" class="form-control"
                    placeholder="Masukan agenda" />
              </div>
            </div>
            <div class="row">
              <div class="col mb-3">
                <label for="emailWithTitle" class="form-label">Lokasi</label>
                <input type="text" name="lokasi" value="{{ $item->lokasi }}" id="emailWithTitle" class="form-control"
                    placeholder="Masukan lokasi" />
              </div>
          </div>
      
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endforeach
<!-- /.modal -->