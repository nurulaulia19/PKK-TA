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
      <div class="row">
            @foreach($beritas as $l)
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="post-box">
                        <div class="post-img"><img src="/gambar/{{$l->gambar}}" class="img-fluid" alt=""></div>
                        <div class="meta">
                        <span class="post-date">{{ \Carbon\Carbon::parse($l->tgl_publish)->isoFormat('D MMMM Y') }} </span>
                        <span class="post-author"> / {{$l->penulis}}</span>
                    </div>
                    <h3 class="post-title">{{ $l->nama_berita }}</h3>
                    <p style="font-family: 'Times New Roman', Times, serif;overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{!!$l->desk!!}</p>
                    <a href="{{ url('berita/'.$l->id) }}" class="readmore stretched-link"><span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
  </section>

@endsection
