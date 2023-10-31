@extends('layouts.admin')

@section('content')

<section class="content">

    <h5 class="mb-2">Jumlah Data</h5>
    <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $siswas }}</h3>

              <p>Jumlah Siswa</p>
            </div>
            <div class="icon">
              <i class="fas fa-house-user"></i>
            </div>
            <a href="{{ url('/siswa') }}" class="small-box-footer">Ke Halaman Siswa <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $guru }}</h3>

              <p>Jumlah Guru</p>
            </div>
            <div class="icon">
              <i class="fas fa-hospital-user"></i>
            </div>
            <a href="{{ url('/guru') }}" class="small-box-footer">Ke Halaman Guru <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{ $mapel }}</h3>

              <p>Jumlah Mapel</p>
            </div>
            <div class="icon">
              <i class="fas fa-calendar-day"></i>
            </div>
            <a href="{{ url('/mapel') }}" class="small-box-footer">Ke Halaman Mapel <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{ $nilai }}</h3>

              <p>Nilai Siswa</p>
            </div>
            <div class="icon">
              <i class="fas fa-envelope-open-text"></i>
            </div>
            <a href="{{ url('/nilai') }}" class="small-box-footer">Ke Halaman Nilai Siswa <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

      </div>

{{-- chart --}}
<h5 class="mb-2">Tentang</h5>
<div class="row2">
    <div class="div">

    <div class="card card-danger card-tabs">
    <div class="card-header p-0 pt-1">
    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
    <li class="nav-item">
    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Admin Data Siswa</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Pesan</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Tujuan</a>
    </li>
    {{-- <li class="nav-item">
    <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Settings</a>
    </li> --}}
    </ul>
    </div>
    <div class="card-body">
    <div class="tab-content" id="custom-tabs-one-tabContent">
    <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
        Web Admin Data Siswa Adalah Suatu Aplikasi Berbasis Web Yang Digunakan Untuk Menginputkan Data - Data Siswa, Guru, Mapel, Nilai
        <br>
        Yang Membantu User Untuk Mendata Dengan Cepat dan Modern.
        <br>

    </div>
    <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
        Sistem Ini Sudah Dilengkapi Dengan Security Basic
        <br>
        Jadi Kemungkinan Untuk Data Anda Bocor Sangat Kecil.
    </div>
    <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
        Tujuan Web Admin Data Siswa Terutama Untuk Pengaplikasian Terhadap Nilai Siswa, Beserta Fundamental Lainya.
    </div>
    {{-- <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">

    </div> --}}
    </div>
    </div>

    </div>
    </div>

    {{-- Tambahan2 --}}
    <h5 class="mb-2">Didukung Oleh</h5>
    <div class="card card-success">
        <div class="card-body">
        <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-4">
        <div class="card mb-2 bg-gradient-dark">
        <img class="card-img-top" src="{{ asset('AdminLTE-3.2.0/dist/img/dasbor1.jpg') }}" alt="Dist Photo 1">
        <div class="card-img-overlay d-flex flex-column justify-content-end">
        {{-- <h5 class="card-title text-warning text-yellow">Powered By</h5>
        <p class="card-text text-warning text-yellow pb-2 pt-1">SMK NEGERI 1 BANGIL</p> --}}
        {{-- <a href="#" class="text-white">Last update 2 mins ago</a> --}}
        </div>
        </div>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-4">
        <div class="card mb-2">
        <img class="card-img-top" src="{{ asset('AdminLTE-3.2.0/dist/img/dasbor2.png') }}" alt="Dist Photo 2">
        <div class="card-img-overlay d-flex flex-column justify-content-center">
        {{-- <h5 class="card-title text-white mt-5 pt-2">Card Title</h5> --}}
        <p class="card-text pb-2 pt-1 text-white">
        {{-- Lorem ipsum dolor sit amet, <br>
        consectetur adipisicing elit <br>
        sed do eiusmod tempor. --}}
        </p>
        {{-- <a href="#" class="text-white">Last update 15 hours ago</a> --}}
        </div>
        </div>
        </div>

</div>


  {{-- </section> --}}


</section>
@endsection
