@extends('frontend')
@section('title')
Home
@endsection
@section('content')
{{-- <!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url({{asset('assets/frontend/assets/img/hero-carousel/1.jpg')}})"
>
<div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2></h2>


</div>
</div><!-- End Breadcrumbs --> --}}
<section id="hero" class="hero">

    <div class="info d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2 data-aos="fade-down">BANGKIT BERSAMA<br><span>HIPMI PADANG</span></h2>
                    <p data-aos="fade-up">Bergabunglah bersama organisasi pengusaha muda terbesar di Indonesia.</p>
                    <a data-aos="fade-up" data-aos-delay="200" href="https://api.whatsapp.com/send?phone=6283801785589" class="btn-get-started">
                        <i class="fa-brands fa-whatsapp"></i>  Daftar</a>
                </div>
            </div>
        </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active"
            style="background-image: url({{asset('assets/frontend/assets/img/hero-carousel/2.jpg')}})">
        </div>
    </div>

</section><!-- End Hero Section -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row position-relative">

            <div class="col-lg-7 about-img" style="background-image: url(assets/frontend/assets/img/2.jpeg);"></div>

            <div class="col-lg-7">
                <h2>Himpunan Pengusaha Muda Indonesia (HIPMI) Padang</h2>
                <div class="our-story">
                    <p> Sejak 1972, HIPMI Padang membina pengusaha muda untuk berjuang,
                        bukan hanya untuk kesuksesan diri dan usahanya, tapi juga untuk bangsa.
                        Organisasi ini berawal dari sekelompok pengusaha yang ingin mencapai cita-cita kemandirian
                        ekonomi bangsa,
                        salah satunya dengan menumbuhkan semangat kewirausahaan di kalangan anak muda.
                        Pembentukan HIPMI diniatkan sebagai wadah yang dapat menampung dan menghimpun aspirasi pengusaha
                        muda Indonesia,
                        juga menjadi rumah untuk tumbuh, berkembang, dan berjuang bersama demi kemandirian bangsa.</p>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End About Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h3>- Kami terus berkolaborasi demi kemajuan ekosistem pengusaha muda di Padang -</h3>
        </div>

        <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item  position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-mountain-city"></i>
                    </div>
                    <p>Organisasi non pemerintah, independen/non politik bergerak dibidang perekonomian sesuai dengan
                        Undang-Undang No.1 Tahun 1987
                        tentang Kamar Dagang dan Industri serta perundang-undangan dunia usaha lainnya.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-compass-drafting"></i>
                    </div>
                    <p>Memposisikan diri sebagai pelayanan dan faktor mempromosikan dalam pembangunan ekonomi dan bisnis
                        Indonesia di masa depan sesuai visi misi strategi HIPMI.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                    </div>
                    <p>mempertemukan antar ribuan anggota lainnya, lintas generasi dan daerah. Perluas jangkauan koneksi
                        untuk menyelesaikan tantangan kewirausahaan Anda.</p>
                </div>
            </div><!-- End Service Item -->

        </div>

    </div>
</section><!-- End Services Section -->




<!-- ======= Stats Counter Section ======= -->
<section id="stats-counter" class="stats-counter section-bg">
    <div class="container">

        <div class="row">

            {{-- <div class="col-lg-3 col-md-6">
                <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="2009" data-purecounter-duration="10"
                            class="purecounter"></span>
                        <p>Since</p>
                    </div>
                </div>
            </div><!-- End Stats Item --> --}}

            <div class="col-lg-6 col-md-6">
                <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="2009" data-purecounter-duration="0"
                            class="purecounter"></span>
                        <p>Sejak</p>
                    </div>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-6 col-md-6">
                <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-people color-green flex-shrink-0"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="{{$usaha->count()}}" data-purecounter-duration="0"
                            class="purecounter"></span>
                        <p>Usaha Tergabung</p>
                    </div>
                </div>
            </div><!-- End Stats Item -->
{{-- 
            <div class="col-lg-3 col-md-6">
                <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-people color-pink flex-shrink-0"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hard Workers</p>
                    </div>
                </div>
            </div><!-- End Stats Item --> --}}

        </div>

    </div>
</section><!-- End Stats Counter Section -->



<!-- ======= Visi misi ======= -->
<section id="services-cards" class="services-cards">
    <div class="container" data-aos="fade-up">

        <div class="row gy-12">

            <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <h3 class="text-center">Visi</h3>
                <p>
                    <p>Menjadikan HIPMI Padang sebagai organisasi pencetak pengusaha muda dan pembentuk ekosistem
                        wirausaha terbaik
                        di Padang melalui program kerja yang tepat inovatif dengan semangat dan marwah organisasi HIPMI
                        Padang</p>
            </div><!-- End feature item-->

            <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <h3 class="text-center">Misi</h3>
                <ul>
                    <li><i class="bi bi-check2"></i> <span>Bangun koneksi dan kolaborasi dengan semangat inovasi dan
                            optimalisasi</span></li>
                    <li><i class="bi bi-check2"></i> <span>Pengembangan ilmu dan kompetensi untuk anggota</span></li>
                    <li><i class="bi bi-check2"></i> <span>Membantu solusi modal dan akses pasar untuk anggota</span>
                    </li>
                    <li><i class="bi bi-check2"></i> <span>Menyebarkan semangat kewirausahaan di Padang</span></li>
                </ul>
            </div><!-- End feature item-->



        </div>

    </div>
</section><!-- End Servie Cards Section -->


<!-- berita Section -->

{{-- <section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
        <div class=" section-header">
            <h2>Kegiatan dan Agenda</h2>
        </div>
        <div class="row gy-5">
            @foreach($berita as $item)
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="post-item position-relative h-100">
                    <div class="post-img position-relative overflow-hidden">
                        <img src="{{asset('assets/images/'.$item->gambar)}}" class="img-fluid">
                        <span class="post-date">{{ $item->tgl }}</span>
                    </div>
                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">{{ $item->judul }}</h3>
                        <hr>
                            <div class="d-flex align-items-center">
                              <i class="bi bi-folder2"></i> <span class="ps-2">{{ $item->nama }}</span>
                            </div>
                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
               
            </div><!-- End post item --> @endforeach
        </div>
    </div>
</section> --}}

<!-- End Recent Blog Posts Section -->



<!-- ======= Our Team Section ======= -->
{{-- <section id="team" class="team">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Kepengurusan BPC HIPMI Padang</h2>
            <p>Komitmen pelayanan berkualitas Kami bangun dari pengalaman dan keahlian mendalam masing-masing tim dalam bidangnya.</p>
        </div>

        <div class="row gy-5">
            @foreach ($pengurus as $item)
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                    <img src="{{asset('assets/images/'.$item->foto)}}" width="" alt="" class="img-fluid" >
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
</section><!-- End Our Team Section --> --}}

 <!-- ======= Features Section ======= -->
 <section id="features" class="features section-bg">
    <div class="container" data-aos="fade-up">

      <ul class="nav nav-tabs row  g-2 d-flex">


      </ul>

      <div class="tab-content">

        <div class="tab-pane active show" id="tab-1">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
              data-aos="fade-up" data-aos-delay="100">
              <h3>Usaha</h3>
              <p class="fst-italic">
                Kembangkan usahamu dengan memperluas jejaring dan koneksi melalui HIPMI. Dengan terdaftar sebagai anggota HIPMI, Anda akan memiliki kesempatan untuk terlibat dalam usaha-usaha organisasi memajukan ekosistem perekonomian nasional.
              </p>
              <p class="fst-italic">
                HIPMI terbuka bagi seluruh pengusaha muda, apapun bidangnya: Eksportir lintas-benua, penyedia konveksi, hingga perintis bisnis digital semua bisa bergabung bersama.
              </p>
              
            </div>
            {{-- <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/features-1.jpg" alt="" class="img-fluid">
            </div> --}}
            <div class="col-lg-5 order-2 order-lg-4 mx-4 text-center row" style="">
            @foreach($usaha1 as $item)
                <div class="col-lg-4 my-3">
                    <div class="portfolio-content h-100">
                        {{-- <img src="assets/img/projects/remodeling-1.jpg" class="img-fluid" alt=""> --}}
                        <img src="{{asset('assets/images/'.$item->logo)}}" alt="" style="height: 100px;width: 100px"  class="">
                        
                    </div>
                </div><!-- End Projects Item -->
                @endforeach
            </div><!-- End Projects Item -->
          </div>
        </div><!-- End tab content item -->


      </div>

    </div>
  </section><!-- End Features Section -->


@endsection
