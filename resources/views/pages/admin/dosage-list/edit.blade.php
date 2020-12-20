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
          <h4 class="card-title">Edit Dosage List</h4>

          <form action="{{ route('dosage-list.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="medicine_rule_id" class="font-weight-bold">Dosage Rule</label>
              <input type="text" class="form-control input-default" value="{{ $item->dosage_rule }}"
                placeholder="Input dosage rule" name="dosage_rule" readonly>
            </div>

            <div class="form-group">
              <label for="medicine_rule_id" class="font-weight-bold">Dosage</label>
              <input type="number" class="form-control input-default" value="{{ $item->dosage }}"
                placeholder="Input Dosage" name="dosage" required>
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