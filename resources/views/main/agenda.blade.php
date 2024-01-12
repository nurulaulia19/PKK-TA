@extends('main.layout')

@section('title', 'Agenda Kegiatan PKK | PKK Kab. Indramayu')

<style type="text/css">
	[aria-expanded="false"] > .expanded, [aria-expanded="true"] > .collapsed {
		display: none;
	}
</style>
@section('container')


<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
        <!-- <h2>Inner Page</h2> -->
            <ol>
                <li><a href="/">Home</a></li>
                <li>Agenda Kegiatan PKK</li>
            </ol>
        </div>

      <br><br>
        <div class="content">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                      Agenda Kegiatan
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        @foreach ($agenda as $i)
                            <h5 style="font-family: 'Times New Roman', Times, serif"><li>{{$i->judul_agenda}}</li></h5>
                            <h5 style="font-family: 'Times New Roman', Times, serif"> Tema : {{ $i->tema }}</h5>
                            <h5 style="font-family: 'Times New Roman', Times, serif" id="tgl"> Tanggal : {{\Carbon\Carbon::parse($i->tgl_pelaksana)->isoFormat('D MMMM Y')}}</h5>
                            <h5 style="font-family: 'Times New Roman', Times, serif"> Waktu : {{$i->waktu}}</h5>
                            @if ($i->status == 1)
                                <button class="btn btn-primary">
                                    Belum Terlaksana <br>
                                </button>
                            @elseif ($i->status == 2)
                                <button class="btn btn-success">
                                    Sedang Terlaksana <br>
                                </button>
                            @else
                                <button class="btn btn-danger">
                                    Sudah Terlaksana <br>
                                </button>
                            @endif <br><br>

                        @endforeach

                      </blockquote>
                    </div>
                  </div>
            </div>

        </div><!-- /.container-fluid -->
    </div>

</section>

@endsection

@push('script-addon')


@endpush
