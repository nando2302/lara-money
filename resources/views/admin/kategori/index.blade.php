@extends('layouts.dashboard')
@section('title','Kategori list')
@section('content')
<div class="container">
    <div class=" card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Kategori list</h3>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-2">
                    <button class="btn btn-sm btn-warning me-12"> Tambah Data</button>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive""></div>
            <table class=" table align-items-center mb-0">
                <thead class="table">
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Description Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategori as $kategori)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$kategori->namaKategori}}</td>
                        <td>{{$kategori->Desckategori}}</td>
                        <td>aksi</td>
                    </tr>
                    @endforeach

                </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

@endsection