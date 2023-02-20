@extends('layout.app')
@section('styles')
@endsection
<style>
  .jumbotron{
      padding: 2rem 1rem;
      margin-bottom: 2rem;
      background-color: #dfe2e5;
      border-radius: .3rem;
  }

  .display-3{
      font-size: 4.5rem;
  }
</style>
@section('content')

<div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Hello, Travelers!</h1>
      <p>Selamat menikmati hari - harimu, yuk berkeliling wisata yang ada di Indonesia</p>
      <p><a class="btn btn-primary btn-lg" href="{{url('form')}}" role="button">Book now</a></p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2>Bali</h2>
        <p>Bali adalah sebuah wilayah provinsi yang terletak di Indonesia. Ibu kotanya adalah Denpasar. Provinsi Bali terletak di bagian barat Kepulauan Nusa Tenggara.</p>
      </div>
      <div class="col-md-4">
        <h2>Lombok</h2>
        <p>Pulau Lombok adalah sebuah pulau di kepulauan Sunda Kecil atau Nusa Tenggara yang terpisahkan oleh Selat Lombok dari Bali di sebelah barat dan Selat Alas di sebelah timur dari Sumbawa.</p>
      </div>
      <div class="col-md-4">
        <h2>Bandung</h2>
        <p>Kota Bandung adalah ibu kota Provinsi Jawa Barat yang sekaligus menjadi pusat pemerintahan dan perekonomian dari Provinsi Jawa Barat, Indonesia. Kota Bandung juga merupakan kota terbesar ketiga di Indonesia setelah Jakarta dan Surabaya.</p>
      </div>
    </div>

    <hr>

  </div>
@endsection