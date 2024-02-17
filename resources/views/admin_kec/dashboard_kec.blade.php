@extends('admin_kec.layout')

@section('title' , 'Dashboard | Admin Kecamatan')
@section('bread' , 'Dashboard')
@section('container')

<section class="content">
  <div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
      <div class="col">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $desaTotal }}</h3>
            <p>Total Desa</p>
          </div>
          <div class="icon">
            <i class="ion ion-folder"></i>
          </div>
          <a href="#" class="small-box-footer">More infony mau ngapain ya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      
      <!-- Add more cards as needed -->
    </div>
  </div>
  <!-- /.container-fluid -->
</section>
@endsection
