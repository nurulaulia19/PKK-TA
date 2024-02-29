@extends('admin_desa.layout')

@section('title' , 'Dashboard | Admin Desa')
@section('bread' , 'Dashboard')

@section('container')

<!-- Content Wrapper. Contains page content -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          {{-- <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <p>Rekapitulasi Catatan Data dan
                    <br>Kegiatan Warga Kelompok Dasawisma
                </p>
              </div>
              <div class="icon">
                <i class="ion ion-folder"></i>
              </div>
              <a href="/data_kelompok_dasa_wisma" class="small-box-footer"
                >Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div> --}}
          <div class="col-lg-3 col-6" style="position: relative;">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <p>Rekapitulasi Catatan Data dan
                        <br>Kegiatan Warga Kelompok Dasawisma
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-folder"></i>
                </div>
                <!-- Notifikasi jumlah rekapan baru -->
                <div class="notification-badge">3</div>
                <a href="/data_kelompok_dasa_wisma" class="small-box-footer">
                    Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                {{-- <h3>44</h3> --}}

                <p>Rekapitulasi Catatan Data dan
                    <br>Kegiatan Warga Kelompok PKK RT
                </p>
              </div>
              <div class="icon">
                <i class="ion ion-folder"></i>
                <div class="notification-badge">3</div>
              </div>
              <a href="/data_kelompok_pkk_rt" class="small-box-footer"
                >Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                {{-- <h3>65</h3> --}}

                <p>Rekapitulasi Catatan Data dan
                    <br>Kegiatan Warga Kelompok PKK RW</p>
              </div>
              <div class="icon">
                <i class="ion ion-folder"></i>
                <div class="notification-badge">3</div>
              </div>
              <a href="/data_kelompok_pkk_rw" class="small-box-footer"
                >Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                {{-- <h3>150</h3> --}}

                <p>Rekapitulasi Catatan Data dan
                    <br>Kegiatan Warga Kelompok PKK Dusun</p>
              </div>
              <div class="icon">
                <i class="ion ion-folder"></i>
                <div class="notification-badge">3</div>
              </div>
              <a href="/data_kelompok_pkk_dusun" class="small-box-footer"
                >Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>

          <!-- ./col -->
        </div>

        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                {{-- <h3>150</h3> --}}

                <p>Rekapitulasi Catatan Data dan
                    <br>Kegiatan Warga Kelompok <br> TP PKK Desa/Kelurahan</p>
              </div>
              <div class="icon">
                <i class="ion ion-folder"></i>
                <div class="notification-badge">3</div>
              </div>
              <a href="/data_kelompok_pkk_desa" class="small-box-footer"
                >Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $kader }}</h3>

                <p>Data Kader Dasawisma </p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
                <div class="notification-badge">3</div>
              </div>
              <a href="/data_kader" class="small-box-footer"
                >Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>
          <!-- ./col -->
          {{-- <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h3>{{ $dasaWismas }}</h3>

                <p>Data Dasawisma</p>
              </div>
              <div class="icon">
                <i class="ion ion-folder"></i>
              </div>
              <a href="/data_dasawisma" class="small-box-footer"
                >Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div> --}}
          <div class="col-lg-3 col-6" style="position: relative;">
            <!-- small box -->
            <div class="small-box bg-light">
                <div class="inner">
                    <h3>{{ $dasaWismas }}</h3>
                    <p>Data Dasawisma</p>
                </div>
                <div class="icon">
                    <i class="ion ion-folder"></i>
                    <div class="notification-badge">3</div>
                </div>
                <!-- Notifikasi jumlah rekapan baru -->
                <div class="notification-badge">3</div>
                <a href="/data_kelompok_dasa_wisma" class="small-box-footer">
                    Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
          </div>

          <!-- ./col -->
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->

  @endsection
