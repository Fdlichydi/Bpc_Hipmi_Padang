@extends('frontend')
@section('title')
Kegiatan dan Agenda
@endsection
@section('content')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url({{asset('assets/frontend/assets/img/hero-carousel/2.jpg')}}">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Kegiatan Dan Agenda</h2>
      <ol>
        
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-5">

                <div class="col-lg-8">

                    <article class="blog-details">


                        <img src="{{asset('assets/images/'.$berita->gambar)}}" class="text-center" alt="..."
                            width="650px">
                        <h2 class="title">{{ $berita->judul }}</h2>
                        {{ $berita->tgl }}<p>
                            {{ $berita->nama }}
                            {{-- <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John
                        Doe</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time
                          datetime="2020-01-01">Jan 1, 2022</time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12
                        Comments</a></li>
                  </ul>
                </div><!-- End meta top --> --}}

                            <div class="content">
                                <p>
                                    {!! $berita->isi !!}
                                </p>



                            </div><!-- End post content -->


                    </article><!-- End blog post -->


                    <div class="comments">





                    </div><!-- End blog comments -->

                </div>

                <div class="col-lg-4">

                    <div class="sidebar">

                        {{-- <div class="sidebar-item search-form">
                            <h3 class="sidebar-title">Search</h3>
                            <form action="cari" class="mt-3">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn--> --}}

                        <div class="sidebar-item categories">
                            <h3 class="sidebar-title">Categories</h3>
                            <ul class="mt-3">
                                @foreach ($kategori as $item)
                                <li><a href="/kategori-berita/{{$item->nama}}">{{ $item->nama }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="sidebar-item recent-posts">
                            <h3 class="sidebar-title">Agenda</h3>
  
                            <div class="mt-3">
                                @foreach ($agenda as $item)
                                <div class="post-item mt-3">
                                    <img src="assets/img/blog/blog-recent-1.jpg" alt="">
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
    </section> <!-- End #main -->

    @endsection
