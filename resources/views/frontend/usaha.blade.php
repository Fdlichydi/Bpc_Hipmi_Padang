@extends('frontend')
@section('title')
Usaha
@endsection
@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url({{asset('assets/frontend/assets/img/hero-carousel/2.jpg')}}">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Usaha</h2>
      <ol>
        
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->
   


<section id="projects" class="projects">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Usaha</h2>
            <p>Kembangkan usahamu dengan memperluas jejaring dan koneksi melalui HIPMI. Dengan terdaftar sebagai anggota HIPMI, Anda akan memiliki kesempatan untuk terlibat dalam usaha-usaha organisasi memajukan ekosistem perekonomian nasional.</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
            data-portfolio-sort="original-order">

            <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100"> 
                <li data-filter=".filter-remodeling" ><a href="/anggota">All</a></li>
                @foreach($sektor as $item)
                <li data-filter=".filter-remodeling"><a href="sektor/{{$item->nama}}">{{ $item->nama }}</a></li>
                @endforeach

            </ul><!-- End Projects Filters -->

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach($usaha as $item)
                <div class="col-lg-3 col-md-6 portfolio-item filter-remodeling">
                    <div class="portfolio-content h-100 text-center">
                        {{-- <img src="assets/img/projects/remodeling-1.jpg" class="img-fluid" alt=""> --}}
                        <img src="{{asset('assets/images/'.$item->logo)}}" style="height: 100px;width: 100px" alt="" class="">
                        <div class="portfolio-info">    
                            <p>{{ $item->nama_usaha }}</p>
                        </div>
                    </div>
                </div><!-- End Projects Item -->
                @endforeach

            </div><!-- End Projects Container -->

        </div>

    </div>
</section><!-- End Our Projects Section -->

@endsection
