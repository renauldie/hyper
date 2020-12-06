@extends('layouts.admin')

@section('content')
<div class="row page-titles mx-0">
  <div class="col p-md-0">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('medicine-rule.index') }}">Medication</a></li>
      <li class="breadcrumb-item active"><a href="{{ route('medicine-rule.create') }}">Create</a></li>
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
          <h4 class="card-title">Add Rule</h4>

          <form action="{{ route('medicine-rule.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="" class="font-weight-bold">Rule Name</label>
              <input type="text" class="form-control input-default" placeholder="Input Default" name="name" required>
            </div>

            <div class="form-group">
              <label for="" class="font-weight-bold">Description</label>
              <textarea class="form-control h-150px" rows="6" id="description" name="description"
                placeholder="Input Description" required></textarea>
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