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

          <form action="{{ route('medicine-rule-detail.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="medicine_rule_id" class="font-weight-bold">Rule Name</label>
              <select name="medicine_rule_id" id="" class="form-control">
                <option value="#" disabled selected>choose 1</option>
                @foreach ($rules as $rule)
                <option value="{{ $rule->id }}">{{ $rule->name }} - {{ $rule->description }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="diesase_id" class="font-weight-bold">Disease Name</label>
              <select name="disease_id" id="" class="form-control">
                <option value="#" disabled selected>choose 1</option>
                @foreach ($diseases as $disease)
                <option value="{{ $disease->id }}">{{ $disease->name }}</option>
                @endforeach
              </select>
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