@extends('main.layout')

@section('title', 'Galeri PKK | PKK Kab. Indramayu')

@section('container')


<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
        <!-- <h2>Inner Page</h2> -->
            <ol>
            <li><a href="/">Home</a></li>
            <li>Galeri PKK</li>
            </ol>
        </div>
      <br><br>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <!-- ======= Portfolio Section ======= -->
                    <section id="portfolio" class="portfolio">
                        <div class="container" data-aos="fade-up">
                            <div class="section-title">
                                <h2>Galeri</h2>
                                {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                            </div>

                            <div class="row g-0 portfolio-container">
                                @foreach ($galeri as $i)

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
                    </section><!-- End Portfolio Section -->
                </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    </div>
</section>

@endsection
