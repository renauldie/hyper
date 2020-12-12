@extends('layouts.admin')

@section('content')
<div class="row page-titles mx-0">
  <div class="col p-md-0">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('weight.index') }}">Weight Pressure</a></li>
      <li class="breadcrumb-item active"><a href="{{ route('weight.create') }}">Create</a></li>
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
          <h4 class="card-title">Edit Weight Pressure</h4>

          <form action="{{ route('weight.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-md-6 col-lg-6 col-sm-6">
                <div class="form-group">
                  <label for="" class="font-weight-bold">Weight Start</label>
                  <input type="number" class="form-control input-default" value="{{ $item->start_weight }}"
                    placeholder="Input weight Start" name="start_weight" required>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 col-sm-6">
                <div class="form-group">
                  <label for="" class="font-weight-bold">Weight End</label>
                  <input type="number" class="form-control input-default" value="{{ $item->end_weight }}"
                    placeholder="Input weight End" name="end_weight" required>
                </div>
              </div>
            </div>

            <button class="btn btn-primary btn-md">
              Edit Data
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- #/ container -->
@endsection