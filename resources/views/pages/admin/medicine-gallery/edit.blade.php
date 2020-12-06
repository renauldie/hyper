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

          <form action="{{ route('medicine-gallery.update', $item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="medicines_id" class="font-weight-bold">Medicine Name</label>
              <select name="medicines_id" id="" class="form-control" disabled>
                <option value="{{ $item->medicine->id }}">{{ $item->medicine->medicine_name }}</option>
              </select>
            </div>

            <div class="form-group">
              <label for="image" class="font-weight-bold">Medicine Picture</label>
              <p class="font-italic ml-3">Image tidak boleh lebih dari 3 mb dan harus berekstensi jpg</p>
              <div class="basic-form">
                <div class="form-group">
                  <input type="file" class="form-control-file" name="image">
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