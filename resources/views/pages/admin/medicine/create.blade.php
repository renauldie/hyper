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
          <h4 class="card-title">Add Medicine</h4>

          <form action="{{ route('medicine.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="" class="font-weight-bold">Medicine Name</label>
              <input type="text" class="form-control input-default" placeholder="Input Default" name="medicine_name"
                required>
            </div>
            <div class="form-group">
              <label for="" class="font-weight-bold">Description</label>
              <input type="text" class="form-control input-default" placeholder="Input Default" name="description"
                required>
            </div>
            <div class="form-group">
              <label for="" class="font-weight-bold">Max Usage/Mg</label> <br>
              <label for="" class="font-weight-light">example: 10</label>
              <input type="number" min="3" class="form-control input-default" placeholder="Input Default"
                name="max_usage" required>
            </div>
            <div class="form-group">
              <label for="" class="font-weight-bold">Can be Fined at Pharmacy</label>
              <select class="form-control input-default" name="find_at_pharmacy" id="find_at_pharmacy" required>
                <option value="choose" selected disabled>chose one</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
              </select>
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