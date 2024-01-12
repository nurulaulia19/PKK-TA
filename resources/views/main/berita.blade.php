@extends('main.layout')

@section('title', 'Berita PKK | PKK Kab. Indramayu')

@section('container')


<section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <!-- <h2>Inner Page</h2> -->
        <ol>
          <li><a href="/">Home</a></li>
          <li>Berita PKK</li>
        </ol>
      </div>
      <br><br>
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

          <div class="row g-5">

            <div class="col-lg-12">

              <article class="blog-details">

                @foreach($berita as $l)

                @endforeach
                <div class="post-img">
                  <img src="/gambar/{{$l->gambar}}" alt="" class="img-fluid">
                </div>

                <h2 class="title">{{ $l->nama_berita }}</h2>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{ $l->penulis }}</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#">{{ \Carbon\Carbon::parse($l->tgl_publish)->isoFormat('D MMMM Y') }}</a></li>
                    {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">12 Comments</a></li> --}}
                  </ul>
                </div><!-- End meta top -->

                <div class="content">
                  <p>
                    {!!$l->desk!!}
                  </p>



                </div><!-- End post content -->



              </article><!-- End blog post -->



            </div>


          </div>

        </div>
      </section><!-- End Blog Details Section -->



    </div>
  </section>

@endsection
