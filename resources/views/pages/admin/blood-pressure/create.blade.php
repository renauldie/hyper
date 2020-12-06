@extends('layouts.admin')

@section('content')
<div class="row page-titles mx-0">
  <div class="col p-md-0">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('blood-pressure.index') }}">Blood Pressure</a></li>
      <li class="breadcrumb-item active"><a href="{{ route('blood-pressure.create') }}">Create</a></li>
    </ol>
  </div>
</div>
<!-- row -->

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add Blood Pressure</h4>

          <form action="{{ route('blood-pressure.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="" class="font-weight-bold">Classification</label>
              <input type="text" class="form-control input-default" placeholder="Input Classification"
                name="classification" required>
            </div>

            <div class="row">
              <div class="col-md-6 col-lg-6 col-sm-6">
                <div class="form-group">
                  <label for="" class="font-weight-bold">Sistolik Start</label>
                  <input type="number" class="form-control input-default" placeholder="Input Sistolik Start"
                    name="sistolic_start" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-6">
                <div class="form-group">
                  <label for="" class="font-weight-bold">Sistolik End</label>
                  <input type="number" class="form-control input-default" placeholder="Input Sistolik End"
                    name="sistolic_end" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 col-lg-6 col-sm-6">
                <div class="form-group">
                  <label for="" class="font-weight-bold">Diastolik Start</label>
                  <input type="number" class="form-control input-default" placeholder="Input Diastolik Start"
                    name="diastolic_start" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-6">
                <div class="form-group">
                  <label for="" class="font-weight-bold">Diastolik End</label>
                  <input type="number" class="form-control input-default" placeholder="Input Diastolik End"
                    name="diastolic_end" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="" class="font-weight-bold">Description</label>
              <input type="text" class="form-control input-default" placeholder="Input Description" name="description"
                required>
            </div>
            <button class="btn btn-primary btn-md">
              Save Data
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- #/ container -->
@endsection