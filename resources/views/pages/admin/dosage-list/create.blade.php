@extends('layouts.admin')

@section('content')
<div class="row page-titles mx-0">
  <div class="col p-md-0">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('dosage-list.index') }}">Medication</a></li>
      <li class="breadcrumb-item active"><a href="{{ route('dosage-list.create') }}">Create</a></li>
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
          <h4 class="card-title">Add Dosage List</h4>

          <form action="{{ route('dosage-list.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="medicine_rule_id" class="font-weight-bold">Dosage Rule</label>
              <input type="text" class="form-control input-default" placeholder="Input dosage rule" name="dosage_rule"
                required>
            </div>

            <div class="form-group">
              <label for="medicine_rule_id" class="font-weight-bold">Choose Medicine</label>
              <select name="medicine_id" id="" class="form-control">
                <option value="#" disabled selected>Choose Medicine</option>
                @foreach ($medicines as $medicine)
                <option name="medicine_id" value="{{ $medicine->id }}">{{ $medicine->medicine_name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="medicine_rule_id" class="font-weight-bold">Dosage</label>
              <input type="number" class="form-control input-default" placeholder="Input dosage" name="dosage" required>
            </div>


            <button class="btn btn-primary btn-md">
              Simpan
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- #/ container -->
@endsection