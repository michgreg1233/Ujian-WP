@extends('layout.app')
@section('content')
<div class="container">
    <div>
        <h3>Detail Pesanan</h3>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Anggota</th>
                <th scope="col">Kota Asal</th>
                <th scope="col">Kota Tujuan</th>
                <th scope="col">Durasi Menginap</th>
                <th scope="col">Jenis Transportasi</th>
                <th scope="col">Pilihan Penginapan</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
                <tr>
                  <th scope="row">{{ $item->id }}</th>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->qty }}</td>
                  <td>{{ $item->asal }}</td>
                  <td>{{ $item->dest }}</td>
                  <td>{{ $item->duration }}</td>
                  <td>{{ $item->transport }}</td>
                  <td>{{ $item->hotel }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection