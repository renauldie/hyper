@extends('layouts.admin')

@section('content')
<div class="row page-titles mx-0">
  <div class="col p-md-0">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('dosage-detail.index') }}">Medication</a></li>
      <li class="breadcrumb-item active"><a href="{{ route('dosage-detail.create') }}">Edit</a></li>
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
          <h4 class="card-title">Edit Dosage Detail</h4>

          <form action="{{ route('dosage-detail.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="dosages_id" class="font-weight-bold">Dosage Rule</label>
              <input type="text" class="form-control input-default" value="{{ $item->dosages_id }}"
                placeholder="{{ $item->dosage->dosage_rule }}" name="dosages_id" readonly>
            </div>

            <div class="row">
              <div class="form-group col-xl-6 col-md-6">
                <label for="dosages_id" class="font-weight-bold">Age</label>
                <select name="ages_id" id="" class="form-control">
                  <option value="{{ $item->ages_id }}" aria-readonly="true" selected>{{ $item-> age -> start_age }} -
                    {{ $item->age->end_age }} (Thn)</option>
                  @foreach ($ages as $age)
                  <option name="ages_id" value="{{ $age->id }}">{{ $age->start_age }} - {{ $age->end_age }} (Thn)
                  </option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-xl-6 col-md-6">
                <label for="dosages_id" class="font-weight-bold">Weight</label>
                <select name="weights_id" id="" class="form-control">
                  <option value="{{ $item->weights_id }}" aria-readonly="true" selected>
                    {{ $item -> weight -> start_weight }} -
                    {{ $item -> weight -> end_weight }} (Kg)
                  </option>
                  @foreach ($weights as $weight)
                  <option name="weights_id" value="{{ $weight->id }}">{{ $weight->start_weight }} -
                    {{ $weight->end_weight }} (Kg)
                  </option>
                  @endforeach
                </select>
              </div>
            </div>
        </div>
        <button class="btn btn-primary btn-md">
          Update
        </button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- #/ container -->
@endsection