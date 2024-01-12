@extends('admin_kab.layout')

@section('title' , 'Dashboard | Admin Kabupaten')
@section('bread' , 'Dashboard')

@section('container')

<!-- Content Wrapper. Contains page content -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$berita}}</h3>

                <p>Data Berita</p>
              </div>
              <div class="icon">
                <i class="ion ion-folder"></i>
              </div>
              <a href="/beritaKab" class="small-box-footer"
                >Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
                <h3>{{ $desa }}</h3>

                <p>Data Desa</p>
              </div>
              <div class="icon">
                <i class="ion ion-map"></i>
              </div>
              <a href="/data_desa" class="small-box-footer"
                >Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h3>{{ $kecamatan }}</h3>

                <p>Data Kecamatan</p>
              </div>
              <div class="icon">
                <i class="ion ion-map"></i>
              </div>
              <a href="/data_kecamatan" class="small-box-footer"
                >Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$agenda}}</h3>

                <p>Data Agenda Kegiatan</p>
              </div>
              <div class="icon">
                <i class="ion ion-calendar"></i>
              </div>
              <a href="agendaKeg" class="small-box-footer"
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
                <h3>{{ $galeri }}</h3>

                <p>Data Galeri Kegiatan</p>
              </div>
              <div class="icon">
                <i class="ion ion-images"></i>
              </div>
              <a href="galeriKeg" class="small-box-footer"
                >Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>
          <!-- ./col -->

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Data Pengguna</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/data_pengguna_super" class="small-box-footer"
                >Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
                {{-- <h3>44</h3> --}}

                <p>Rekapitulasi Catatan dan <br>
                    Kegiatan Warga Kelompok <br> TP PKK Kecamatan</p>
              </div>
              <div class="icon">
                <i class="ion ion-folder"></i>
              </div>
              <a href="/data_kelompok_pkk_kec" class="small-box-footer"
                >Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
                {{-- <h3>44</h3> --}}

                <p>Rekapitulasi Catatan dan <br>
                    Kegiatan Warga Kelompok <br> TP PKK Kabupaten</p>
              </div>
              <div class="icon">
                <i class="ion ion-folder"></i>
              </div>
              <a href="#" class="small-box-footer"
                >Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>

        </div>

      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->

  @endsection
