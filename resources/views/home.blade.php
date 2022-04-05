@extends('layouts.default')

@section('content')
  <section>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-8">
          <h3>DATA OBAT</h3>
          <a href="{{url('create')}}" class="btn btn-primary">+ Tambah Obat</a>
        </div>
        <div class="col-lg-8">
          <table class="table-bordered mt-4 text-center text text">
            <tr>
              <th style="width: 100px">Edit</th>
              <th style="width: 100px">Delete</th>
              <th style="width: 280px">Kode</th>
              <th style="width: 280px">Nama</th>
              <th style="width: 280px">Deskripsi</th>
              <th style="width: 280px">Tipe</th>
              <th style="width: 280px">Jumlah</th>
              <th style="width: 280px">Harga satuan</th>
            </tr>
            @foreach ($data as $item)
            <tr>
              <td><a href="{{url('/show/'.$item->id)}}" class="btn btn-warning">Edit</a></td>
              <td><a href="{{url('/destroy/'.$item->id)}}" class="btn btn-danger">Delete</a></td>
              <td>{{$item->id}}</td>
              <td>{{$item->nama}}</td>
              <td>{{$item->deskripsi}}</td>
              <td>{{$item->tipe}}</td>
              <td>{{$item->jumlah}}</td>
              <td>{{$item->harga_satuan}}</td>
          </tr>
          @endforeach
          </table>
        </div>
      </div>
    </div>
  </section>
@endsection