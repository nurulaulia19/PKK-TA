@extends('main.layout')

@section('title', 'Bagan Mekanisme Kelurahan | PKK Kab. Indramayu')

@section('container')

<section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <!-- <h2>Inner Page</h2> -->
        <ol>
          <li><a href="/">Home</a></li>
          <li>Bagan Mekanis Gerakan PKK Di Kelurahan </li>
        </ol>
      </div>
    </div>
  </section>

  <section class="inner-page">
    <div class="container">
      <div class="card">
        <div class="card-body">
          <img src="{{ url('../image/bagan_desa.jpg') }}" alt="">
        </div>
      </div>
    </div>
  </section>
@endsection
