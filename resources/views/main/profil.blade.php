@extends('main.layout')

@section('title', 'Profil Pembina dan Ketua PKK | PKK Kab. Indramayu')

@section('container')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          {{-- <h2>Profil Pembina dan Ketua TP PKK</h2> --}}
          <ol>
            <li><a href="/">Home</a></li>
            <li>Profil Pembina dan Ketua TP PKK</li>
          </ol>
        </div>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <h1>Profil Pembina</h1>
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                {{-- <div class="swiper-slide"> --}}
                  <img src="/image/Nina_Agustina.jpg" height="800px" />
                {{-- </div> --}}

              </div>
              {{-- <div class="swiper-pagination"></div> --}}
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Biodata</h3>
              <ul>
                <li><strong>Nama Lengkap</strong>: Hj. Hajjah Nina Agustina, S.H., M.H., C.R.A.</li>
                <li><strong>Tanggal lahir </strong>: 17 Agustus 1973</li>
                <li><strong>Masa Jabatan periode</strong>: 2021-2026</li>
                <li>
                  <strong>Riwayat Pendidikan</strong>:
                  <ul>
                    <li>SD Kemala Bhayangkari (1981-1986)</li>
                    <li>SMP Negeri 1 Blora (1986-1989)</li>
                    <li>SMA Negeri 1 Klaten (1989-1992)</li>
                    <li>S1 UPN Veteran Jakarta (1992-2012)</li>
                    <li>S2 UPN Veteran Jakarta (2012-2015)</li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="portfolio-description">
              <strong>Riwayat Pekejaan</strong>:
              <ul>
                <li>Ketua Yayasan Dai An Nur, Losarang, Indramayu (2017-sekarang)</li>
                <li>Direktur CV Dinda Abadi (2009-sekarang)</li>
                <li>Komisaris PT Dinda Abadi (2009-sekarang)</li>
                <li>Direktur Utama PT Delta Buana Pratama (2013-sekarang)</li>
                <li>Managing Partner di NDB Law Firm & Partners (2018-sekarang)[2]</li>
              </ul>
            </div>
          </div>
        </div>
<br><br>
        <h1>Ketua TP PKK</h1>
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                {{-- <div class="swiper-slide"> --}}
                    <img src="/image/9.png" height="100%" />
                {{-- </div> --}}


              </div>
              {{-- <div class="swiper-pagination"></div> --}}
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Biodata</h3>
              <ul>
                <li><strong>Nama Lengkap</strong>: Dr. Runisah, M.Pd.</li>
                <li><strong>Tanggal lahir </strong>: Bandung, 28 Juli 1969</li>
                <li><strong>Masa Jabatan periode</strong>: 2021-2026</li>
                <li>
                  <strong>Riwayat Pendidikan</strong>:
                  <ul>
                    <li>SD N Raya Barat VI Bandung tahun 1982</li>
                    <li>SMP N 24 Bandung tahun 1985</li>
                    <li>SMA N 4 Bandung tahun 1988</li>
                    <li>S-1 Pendidikan Matematika IKIP Bandung tahun 1993</li>
                    <li>S-2 Pendidikan Matematika UPI Bandung  tahun 2006</li>
                    <li>S-3 Pendidikan Matematika UPI Bandung tahun 2016</li>
                  </ul>
                </li>
              </ul>
            </div>
            {{-- <div class="portfolio-description">
              <h2>This is an example of portfolio detail</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos
                itaque inventore commodi labore quia quia. Exercitationem
                repudiandae officiis neque suscipit non officia eaque itaque
                enim. Voluptatem officia accusantium nesciunt est omnis
                tempora consectetur dignissimos. Sequi nulla at esse enim cum
                deserunt eius.
              </p>
            </div> --}}
          </div>
        </div>
      </div>
    </section>
    <!-- End Portfolio Details Section -->
  </main>


@endsection
