@extends('frontend')
@section('title')
Kategori Kegiatan dan Agenda
@endsection
@section('content')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url({{asset('assets/frontend/assets/img/hero-carousel/2.jpg')}}">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Kegiatan Dan Agenda</h2>
      <ol>
        <li><a href=""></a></li>
        
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 posts-list">

                <div class="col-lg-8">

                    <section id="blog" class="blog">
                        <div class="container" data-aos="fade-up" data-aos-delay="100">

                            <div class="row gy-4 posts-list">


                                @foreach($berita as $item)
                                <div class="col-xl-4 col-md-6">
                                    <div class="post-item position-relative h-100">

                                        <div class="post-img position-relative overflow-hidden">
                                            
                                            <img src="{{asset('assets/images/'.$item->gambar)}}" width="" class="img-fluid"
                                                alt="">
                                            <span class="post-date">{{ $item->tgl }}</span>
                                        </div>
                                        <br>

                                        {{-- <div class="post-content d-flex flex-column"> --}}

                                            <h3 class="post-title" style="font-size: medium">{{ $item->judul }}</h3>

                                            <div class="meta d-flex align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-folder2"></i> <span
                                                        class="ps-2">{{ $item->nama }}</span>
                                                </div>
                                            </div>
                                            <hr>

                                            <a href="/lihat-berita/{{$item->slug}}"
                                                class="readmore stretched-link"><span>Read More</span><i
                                                    class="bi bi-arrow-right"></i></a>

                                        {{-- </div> --}}

                                    </div>
                                </div><!-- End post list item -->
                                @endforeach


                            </div><!-- End blog posts list -->

                            

                        </div>
                    </section><!-- End Blog Section -->


                </div>

                <div class="col-lg-4">

                    <div class="sidebar">

                        <div class="sidebar-item search-form">
                            <h3 class="sidebar-title">Search</h3>
                            <form action="cari" class="mt-3">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <div class="sidebar-item categories">
                            <h3 class="sidebar-title">Categories</h3>
                            <ul class="mt-3">
                                @foreach ($kategori as $item)
                                <li><a href="/kategori-berita/{{$item->nama}}">{{ $item->nama }}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- End sidebar categories-->

                        <div class="sidebar-item recent-posts">
                            <h3 class="sidebar-title">Agenda</h3>
  
                            <div class="mt-3">
                                @foreach ($agenda as $item)
                                <div class="post-item mt-3">
                                    {{-- <img src="assets/img/blog/blog-recent-1.jpg" alt=""> --}}
                                    {{-- <img src="{{asset('assets/images/'.$berita->gambar)}}" alt="..." > --}}
                                    <div>
                                        <h4><a href="">{{$item->judul}}</a></h4>
                                        <i class="fa-solid fa-calendar-days"></i> {{$item->tgl}} <br>
                                      <i class="fa-solid fa-clock"></i> {{$item->jam}} - Selesai <br>
                                      <i class="fa-solid fa-location-dot"></i> {{$item->lokasi}}
                                    </div>
                                </div><!-- End recent post item-->
                                @endforeach
  
                            </div>
  
                        </div><!-- End sidebar recent posts-->
                    </div><!-- End Blog Sidebar -->

                </div>
            </div>

        </div>
    </section><!-- End Blog Details Section -->

</main><!-- End #main -->





@endsection
