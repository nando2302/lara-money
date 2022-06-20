@extends('layouts.dashboard')
@section('title','form edit kategori ')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="h4">Form Edit Kategori</h4>
            <a href="{{route('kategori.index')}}" class="btn btn-danger btn-sm float-end mb-2 p-4"><i
                    class="bi bi-arrow-90deg-left"></i> Kembali
            </a>
        </div>
        <div class="card-body">
            <form action="{{route('kategori.update',$kategori->id)}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="namaKategori" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control" name="namaKategori"
                        value="{{old('namaKategori',$kategori->namaKategori)}}" placeholder="Masukan nama Kategori yang anda inginkan ...
                    ">
                </div>
                <div class="form-group">
                    <label for="Desckategori" class="form-label">Deskription Kategori</label>
                    <input type="text" class="form-control" name="Desckategori"
                        value="{{old('Desckategori',$kategori->Desckategori)}}" placeholder="Menambahkan Keterangan dari kategori yang anda buat
                    ">
                    <button type="submit" class="btn btn-success btn-sm p-4 m-4">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection