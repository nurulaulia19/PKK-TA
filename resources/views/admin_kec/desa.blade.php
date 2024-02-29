@extends('admin_kec.layout')

@section('title' , 'Dashboard | Admin Kecamatan')
@section('bread' , 'Dashboard')
@section('container')

<section class="content">
  <div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
      @foreach ($desaAll as $desa)
        @php
          $randomColor = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6); // Generate a random hex color
        @endphp
        <div class="col">
          <div class="small-box" style="background-color: {{ $randomColor }};">
            <div class="inner">
              <p class="text-white text-bold">{{ $desa->nama_desa }}</p>
            </div>
            <div class="icon">
              <i class="ion ion-folder"></i>
              <div class="notification-badge">3</div>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            <a href="{{ route('dashboard_kec.rekapitulasi', $desa->id) }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      @endforeach

      <!-- Add more cards as needed -->
    </div>
  </div>
  <!-- /.container-fluid -->
</section>



  @endsection
