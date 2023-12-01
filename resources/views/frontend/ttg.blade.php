@extends('frontend')
@section('title')
Tentang Kami
@endsection
@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url({{asset('assets/frontend/assets/img/hero-carousel/2.jpg')}}">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Kepengurusan</h2>
      <ol>
        
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->
   








<!-- ======= Our Team Section ======= -->
<section id="team" class="team">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Kepengurusan BPC HIPMI Padang</h2>
            <p>Komitmen pelayanan berkualitas Kami bangun dari pengalaman dan keahlian mendalam masing-masing tim dalam bidangnya.</p>
        </div>

        <div class="row gy-5">
            @foreach ($pengurus as $item)
            <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                    <img src="{{asset('assets/images/'.$item->foto)}}" width="" alt=""  class="img-fluid" >
                    <div class="social">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info text-center">
                    <h4><td>{{ $item->nama_pengurus }}</td></h4>
                    <span>{{ $item->nama }}</span>
                </div>
            </div><!-- End Team Member -->
@endforeach
        </div>

    </div>
</section><!-- End Our Team Section -->

 
 @endsection
