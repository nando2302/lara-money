@extends('layouts.dashboard')
@section('title','Setting')


@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <p>General Setting</p>
        </div>
        <div class="card-body">
            <form action="{{ route('setting.update') }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label for="appname" class=" form-label">Nama Aplikasi </label>
                        <input type="text" class=" form-control" name="appname" id="appname"
                            value=" {{ $setting->appname }}">
                    </div>
                    <div class="col-md-12">
                        <label for="nameCompany" class=" form-label">Nama Perusahaan </label>
                        <input type="text" class=" form-control" name="nameCompany" id="nameCompany"
                            value="{{ $setting->nameCompany }}">
                    </div>
                    <div class="col-md-12">
                        <label for="phoneCompany" class=" form-label">Nomor Telpon Perusahaan </label>
                        <input type="text" class=" form-control" name="phoneCompany" id="phoneCompany"
                            value="{{ $setting->phoneCompany }}">
                    </div>
                    <div class="col-md-12">
                        <label for="emailCompany" class=" form-label">Email Perusahaab </label>
                        <input type="text" class=" form-control" name="emailCompany" id="emailCompany"
                            value="{{ $setting->emailCompany }}">
                    </div>
                    <div class="col-md-12">
                        <label for="addressCompany" class=" form-label">Alamat Perusahaan </label>
                        <input type="text" class=" form-control" name="addressCompany" id="addressCompany"
                            value="{{  $setting->addressCompany }}">
                    </div>
                    <div class="col-md-12">
                        <label for="descCompany" class=" form-label">Desctiption Perusahaan </label>
                        <input type="text" class=" form-control" name="descCompany" id="descCompany"
                            value="{{ $setting->descCompany }}">
                    </div>
                    <div class="col-md-12">
                        <label for="logoCompany" class=" form-label">Alamat Perusahaan </label>
                        <input type="file" class=" form-control" name="logoCompany" id="logoCompany"
                            value="{{$setting->logoCompany}}" onchange="readURL">
                    </div>
                    <div>
                        <img src="{{url('/Storage/image/').$setting->logoCompany}}" alt="logoCompany"
                            style="height:100px; width:60px;">
                        <img src="" class="img card-img" id="logoCompany" alt="logoCompany" style=" max-height:200px">
                    </div>

                </div>
                <button type="submit" class="btn btn-success mt-4"> Update </button>
            </form>
        </div>
    </div>

</div>
<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#logoCompany')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
@endsection