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
          <h4 class="card-title">Edit Rule Detail</h4>

          <form action="{{ route('medicine-rule-detail.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="medicine_rule_id" class="font-weight-bold">Rule Name</label>
              <input type="text" class="form-control input-default" value="{{ $item->medicine_rule->name}}"
                placeholder="Input Default" name="name" readonly>
              <input type="text" class="form-control input-default" value="{{ $item->medicine_rule_id }}"
                placeholder="Input Default" name="medicine_rule_id" readonly>
            </div>

            <div class="form-group">
              <label for="diesase_id" class="font-weight-bold">Disease Name</label>
              <select name="disease_id" id="" class="form-control">
                <option value="{{ $item->disease_id }}" selected>{{ $item->disease_rule->name }}</option>
                @foreach ($diseases as $disease)
                <option value="{{ $disease->id }}">{{ $disease->name }}</option>
                @endforeach
              </select>
            </div>

            <button class="btn btn-primary btn-md">
              Update Data
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- #/ container -->
@endsection