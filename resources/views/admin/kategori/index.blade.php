@extends('layouts.dashboard')
@section('title','Kategori list')
@section('content')
<div class="container">
    <div class=" card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="h4 text-primary">Kategori list</h4>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-2">
                    <a href="{{route('kategori.create')}}" class="btn btn-sm btn-info me-12"> Tambah Data</a>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive""></div>
            <table class=" table align-items-center mb-0">
                <thead class="table">
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Kategori
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description
                            Kategori</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategori as $kategori)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$kategori->namaKategori}}</td>
                        <td>{{$kategori->Desckategori}}</td>
                        <td>
                            <form action="{{route('kategori.destroy',$kategori->id)}}" method="post">
                                <a href="{{route('kategori.edit', $kategori->id)}}"
                                    class="btn btn-warning btn-sm shadow">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>

                            </form>
                            {{-- <button class="btn btn-danger btn-sm">Hapus </button> --}}
                        </td>
                    </tr>
                    @endforeach

                </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

@endsection