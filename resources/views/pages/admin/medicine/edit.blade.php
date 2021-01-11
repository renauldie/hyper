@extends('layouts.admin')

@section('content')
<div class="row page-titles mx-0">
  <div class="col p-md-0">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('medicine.index') }}">Medication</a></li>
      <li class="breadcrumb-item active"><a href="{{ route('medicine.create') }}">Create</a></li>
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
          <h4 class="card-title">Edit Medicine</h4>

          <form action="{{ route('medicine.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="" class="font-weight-bold">Medicine Name</label>
              <input type="text" class="form-control input-default" placeholder="Input Default"
                value="{{ $item->medicine_name }}" name="medicine_name" required>
            </div>
            <div class="form-group">
              <label for="" class="font-weight-bold">Description</label>
              <input type="text" class="form-control input-default" placeholder="Input Default"
                value="{{ $item->description }}" name="description" required>
            </div>
            <div class="form-group">
              <label for="" class="font-weight-bold">Max Usage/Mg</label> <br>
              <label for="" class="font-weight-light">example: 10</label>
              <input type="number" min="3" class="form-control input-default" placeholder="Input Default"
                value="{{ $item->max_usage }}" name="max_usage" required>
            </div>
            <div class="form-group">
              <label for="" class="font-weight-bold">Can be Fined at Pharmacy</label>
              <input type="text" class="form-control input-default" placeholder="Input Default"
                value="{{$item->find_at_pharmacy}}" name="find_at_pharmacy" required>
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