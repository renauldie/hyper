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
          <h4 class="card-title">Edit Blood Pressure</h4>

          <form action="{{ route('blood-pressure.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="" class="font-weight-bold">Classification</label>
              <input type="text" class="form-control input-default" placeholder="Input Default" name="classification"
                value="{{ $item->classification }}" required>
            </div>

            <div class="form-group">
              <label for="" class="font-weight-bold">Sistolik</label>
              <input type="text" class="form-control input-default" placeholder="Input Default" name="sistolic"
                value="{{ $item->sistolic }}" required>
            </div>

            <div class="form-group">
              <label for="" class="font-weight-bold">Disatolik</label>
              <input type="text" class="form-control input-default" placeholder="Input Default" name="disatolic"
                value="{{ $item -> disatolic }}" required>
            </div>

            <div class="form-group">
              <label for="" class="font-weight-bold">Description</label>
              <input type="text" class="form-control input-default" placeholder="Input Default" name="description"
                value="{{ $item->description }}" required>
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