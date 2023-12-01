@if(session()->has('tambah'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {{session('tambah')}}
</div>
@endif

@if(session()->has('ubah'))
<div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {{session('ubah')}}
</div>
@endif

@if(session()->has('hapus'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {{session('hapus')}}
</div>
@endif


@if(session()->has('login'))
<div class="alert alert-danger" role="alert">
    {{session('login')}}
</div>
@endif

@if(session()->has('isi'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {{session('isi')}}
</div>
@endif
