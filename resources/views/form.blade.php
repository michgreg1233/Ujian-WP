@extends('layout.app')
@section('styles')
    <style>
        .row{
            margin-left: 15px;
        }
    </style>
@endsection
@section('content')
<div class="containter">  
    <div class="row">
        <form method="post" action="/form">
          @csrf
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="qty">Jumlah anggota</label>
                <input type="text" class="form-control" id="qty" name="qty" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="asal">Kota Asal</label>
                <input type="text" class="form-control" id="asal" name="asal" required>
              </div>
              <div class="col-md-3 mb-3">
                <label for="dest">Tujuan</label>
                <select class="custom-select" id="dest" name="dest" required>
                  <option selected disabled value="">Destination...</option>
                  <option value="Bali">Bali</option>
                  <option value="Lombok">Lombok</option>
                  <option value="Bandung">Bandung</option>
                </select>
              </div>
              <div class="col-md-3 mb-3">
                <label for="duration">Lama Menginap</label>
                <select class="custom-select" id="duration" name="duration" required>
                  <option selected disabled value="">Duration...</option>
                  <option>3 Hari</option>
                  <option>5 Hari</option>
                  <option>7 Hari</option>
                </select>
              </div>
            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="transport">Jenis Transportasi</label>
                    <select class="custom-select" id="transport" name="transport" required>
                      <option selected disabled value="">Transport...</option>
                      <option>Pesawat</option>
                      <option>Kereta</option>
                      <option>Kapal Laut</option>
                      <option>Bus Kota</option>
                    </select>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="hotel">Pilihan Penginapan</label>
                    <select class="custom-select" id="hotel" name="hotel" required>
                      <option selected disabled value="">Choose...</option>
                      <option>Hotel</option>
                      <option>Villa</option>
                      <option>Guest Home</option>
                    </select>
                  </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
    </div>
</div>
@endsection