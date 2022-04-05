@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h3 >TAMBAH OBAT</h3>
            <div class="row mt-3">
                <div class="col-lg-8">
                    <form action="{{url('/store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Obat</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Deskripsi</label>
                            <textarea type="text" name="deskripsi" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nama">Tipe</label>
                            <input type="text" name="tipe" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">jumlah</label>
                            <input type="text" name="jumlah" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Harga satuan</label>
                            <input type="integer" name="harga_satuan" class="form-control">
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">Tambah Obat</button>
                        </div>
                        <div class="form-group mt-2">
                            <a href="{{ url('/')}}" class="btn btn-danger">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection