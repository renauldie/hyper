@extends('layouts.admin')

@section('content')
<div class="row page-titles mx-0">
  <div class="col p-md-0">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('dosage-detail.index') }}">Medication</a></li>
      <li class="breadcrumb-item active"><a href="{{ route('dosage-detail.create') }}">Create</a></li>
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
          <h4 class="card-title">Add Dosage Detail</h4>

          <form action="{{ route('dosage-detail.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="dosages_id" class="font-weight-bold">Dosage</label>
              <select name="dosages_id" id="" class="form-control">
                <option value="#" disabled selected>choose Dosage</option>
                @foreach ($dosages as $dosage)
                <option name="dosages_id" value="{{ $dosage->id }}">{{ $dosage->dosage_rule }}</option>
                @endforeach
              </select>
            </div>

            <div class="row">
              <div class="form-group col-xl-6 col-md-6">
                <select name="ages_id" id="" class="form-control">
                  <option value="#" disabled selected>choose Age</option>
                  @foreach ($ages as $age)
                  <option name="ages_id" value="{{ $age->id }}">{{ $age->start_age }} - {{ $age->end_age }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-xl-6 col-md-6">
                <select name="weights_id" id="" class="form-control">
                  <option value="#" disabled selected>choose Weight</option>
                  @foreach ($weights as $weight)
                  <option name="weights_id" value="{{ $weight->id }}">{{ $weight->start_weight }} -
                    {{ $weight->end_weight }}
                  </option>
                  @endforeach
                </select>
              </div>
            </div>

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