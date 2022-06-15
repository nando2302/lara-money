@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">Setting Company Profile</div>
        <div class="card-body">
            <form method="POST" {{ route('routeName', ['id'=>1]) }}>
                @csrf
                @foreach ($profilecompany as $data)
                <div class="row">
                    <div class=" col-md-6">
                        <label for="companyname" class="form-label">Company Name</label>
                        <input type="input" class="form-control" id="companyname" aria-describedby="emailHelp"
                            value="{{$data()->namecompany}}">
                    </div>
                    <div class="col-md-6">
                        <label for="phonecompany" class="form-label">Phone Company</label>
                        <input type="input" class="form-control" id="phonecompany">
                    </div>
                    <div class="col-md-6">
                        <label for="emailcompany" class="=form-label">Email Company</label>
                        <input type="email" class="form-control" id="phonecompany">
                    </div>
                    <div class="col-md-6">
                        <label for="addresscompany" class="=form-label">Address Company</label>
                        <input type="input" class="form-control" id="addresscompany">
                    </div>
                    <div class="col-md-6">
                        <label for="logo" class="=form-label">Upload Logo Company</label>
                        <input type="file" class="form-control" id="logo">
                    </div>
                    <div class="col-md-6 form-floating mt-4">
                        <textarea name="" id="" class="form-control" style="height: 100px"></textarea>
                        <label for="emailcompany" class="=form-label">Description</label>
                    </div>
                </div>
                <div class="m-3 p-3">
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </div>
                @endforeach
            </form>

        </div>
    </div>
</div>
</div>
@endsection