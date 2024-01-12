@extends('main.layout')

@section('title', 'Beranda | PKK Kab. Indramayu')

@section('container')



<main id="main">
    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
          <img src="/image/remove.png" class="img-fluid animated" width="200px">
          <h4>TENTANG PEMBERDAYAAN & KESEJAHTERAAN KELUARGA (PKK) KAB. INDRAMAYU</h4>
          <div class="d-flex">
            <a href="/about" class="btn-get-started scrollto">Baca Selengkapnya</a>
          </div>
        </div>
      </section>



    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-5">
            <div class="about-img">
              <img src="/image/6.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div
                    class="col-lg-6 pt-3 pt-lg-0 content"
                    data-aos="fade-left"
                    data-aos-delay="100"
                >
                    <h3>Tim Penggerak PKK Kabupaten Indramayu</h3>

                    <p>Keluarga sebagai unit terkecil dalam masyarakat  mempunyai  peranan yang besar dalam proses pembangunan, karena kondisi suatu keluarga dapat dijadikan sebagai tolok ukur terhadap kesejahteraan masyarakat pada umumnya. Untuk dapat membina keluarga secara langsung dan menjangkau sasaran sebanyak mungkin, dibentuk Gerakan Pemberdayaan dan Kesejahteraan Keluarga (PKK), yang mekanisme gerakannya dikelola dan dilaksanakan oleh Tim Penggerak PKK di setiap jenjang.</p>
                </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio" data-aos="fade-up">

      <div class="container">

        <div class="section-header">
          <h2>Galeri Kegiatan</h2>
        </div>

      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          {{-- <ul class="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul><!-- End Portfolio Filters --> --}}

          <div class="row g-0 portfolio-container">
            @foreach ($galeris as $i)

                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="/galeri/{{$i->gambar}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>{{$i->nama_gambar}}</h4>
                    <p>{{$i->nama_kegiatan}}</p>
                    <a href="/galeri/{{$i->gambar}}" title="{{$i->nama_kegiatan}}" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
                </div><!-- End Portfolio Item -->
            @endforeach


          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Berita PKK</h2>
        </div>

        <div class="row">
            @foreach($berita as $l)
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="post-box">
                    <div class="post-img"><img src="/gambar/{{$l->gambar}}" class="img-fluid" alt=""></div>
                    <div class="meta">
                        <span class="post-date">{{ \Carbon\Carbon::parse($l->tgl_publish)->isoFormat('D MMMM Y') }} </span>
                        <span class="post-author"> / {{$l->penulis}}</span>
                    </div>
                    <h3 class="post-title">{{ $l->nama_berita }}</h3>
                    <p style="font-family: 'Times New Roman', Times, serif;overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{!!$l->desk !!}</p>
                    <a href="{{ url('berita/'.$l->id) }}" class="readmore stretched-link"><span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            @endforeach

        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

      <div class="section-header">
        <h2>Lokasi</h2>
      </div>

    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5108766333938!2d108.3217551141946!3d-6.327781163676679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ebbfd9e802a75%3A0x306e051d08ef52f2!2sJl.%20Wiralodra%20No.53%2C%20Lemahabang%2C%20Kec.%20Indramayu%2C%20Kabupaten%20Indramayu%2C%20Jawa%20Barat%2045212!5e0!3m2!1sid!2sid!4v1658315065405!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="container">

  </main><!-- End #main -->

@endsection

@push('script-addon')

<script type="text/javascript">
    function initMap() {
      const myLatLng = { lat: 22.2734719, lng: 70.7512559 };
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 5,
        center: myLatLng,
      });

      new google.maps.Marker({
        position: myLatLng,
        map,
        title: "Hello Rajkot!",
      });
    }

    window.initMap = initMap;
</script>

<script type="text/javascript"
src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>

@endpush
