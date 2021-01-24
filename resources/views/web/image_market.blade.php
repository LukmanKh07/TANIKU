@extends('web.base')
@section('konten')

    <div class="hero-wrap hero-bread" style="background-image: url('{{ URL::asset('images/bg_1.jpg') }}');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Market</span></p>
            <h1 class="mb-0 bread">NAMA TOKO</h1>
          </div>
        </div>
      </div>
    </div>

    @yield('isi_konten')

@endsection