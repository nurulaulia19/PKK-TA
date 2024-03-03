@extends('kader.layout')

@section('title' , 'Dashboard | Kader Dasawisma PKK Kab. Indramayu')
@section('bread' , 'Dashboard')

@section('container')

<!-- Content Wrapper. Contains page content -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
      @endif --}}
    <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
                <h3>{{ $keluarga }}</h3>

                <p>Data Keluarga</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker"></i>
              </div>
              <a href="/data_keluarga" class="small-box-footer"
                >Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $warga }}</h3>

                <p>Data Warga</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="/data_warga" class="small-box-footer"
                >Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
            <h3>{{ $kegiatan }}</h3>

                <p>Data Kegiatan Warga</p>
              </div>
              <div class="icon">
                <i class="ion ion-folder"></i>
              </div>
              <a href="/data_kegiatan" class="small-box-footer"
                >Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $industri }}</h3>

                <p>Data Industri Rumah Tangga</p>
              </div>
              <div class="icon">
                <i class="ion ion-home"></i>
              </div>
              <a href="/data_industri" class="small-box-footer"
                >Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>



          <!-- ./col -->
        </div>

        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-secondary">
                  <div class="inner">
                    <h3>{{ $pemanfaatan }}</h3>

                    <p>Data Pemanfaatan Tanah Pekarangan</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-folder"></i>
                  </div>
                  <a href="/data_pemanfaatan" class="small-box-footer"
                    >Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i
                  ></a>
                </div>
              </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
                <h3>{{ $rekap }}</h3>

                <p>Data Rekapitulasi Warga dan Catatan Keluarga</p>
              </div>
              <div class="icon">
                <i class="ion ion-filing"></i>
              </div>
              <a href="/rekap" class="small-box-footer">Lihat Selengkapnya
                <i class="fas fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
        </div>
      </div>
    </section>

  @endsection
