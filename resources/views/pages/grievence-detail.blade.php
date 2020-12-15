@extends('layouts.app-sub')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<section class="about_us padding_top">
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h4 class="mt-4">General Hypertension Information</h4>
      </div>
      <div class="card-body container">

        <div class="table-responsive text-center container">
          <table class="table" style="border: none;">
            <thead>
              <th>Name</th>
              <th>Age</th>
              <th>Blood Pressure</th>
              <th>Body Weight</th>
            </thead>
            <tbody>
              <td>{{ $items->user->name}}</td>
              <td>{{ $items->ages }} thn</td>
              <td>{{ $items->blood_pressure }} mmHg</td>
              <td>{{ $items->body_weight }} Kg</td>
            </tbody>
          </table>
        </div>

        <div class="container">
          <h4 class="mt-4">Selected Disease</h4>
          @foreach ($dets as $det)
          <div class="row">
            <col-md-4 class="col-lg-4">
              <p>{{ $det->diseases->name}}</p>
            </col-md-4>
            <col-md-2 class="col-lg-2">
              <button class="btn">
                <i class="fas fa-trash"></i>
              </button>
            </col-md-2>
          </div>
          @endforeach
        </div>

        <div class="container">
          <h4 class="mt-4">Choose aonther disease that you have</h4>
          <form action={{ route('disease-add', $items->id) }} method="GET">
            @csrf
            <div class="row">
              <div class="col-md-4 col-xl-6">
                <div class="input-group-icon mt-10">
                  <div class="icon"><i class="fas fa-disease" aria-hidden="true"></i></div>
                  <div class="form-select" id="default-select_1">
                    <select name="diseases_id">
                      @foreach ($diseases as $disease)
                      <option value="{{ $disease->id }}" selected>{{ $disease->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <input type="text" value="{{ $items->id }}" name="cosultations_id" hidden>

              <div class="col-md-3 col-xl-4 mt-3">
                <button type="submit" class="btn btn-danger btn-sm">Add this disease</button>
              </div>
            </div>
        </div>
        </form>



        <button type="submit" class="btn btn-primary btn-sm mt-3 float-right">Next Step</button>
      </div>
    </div>
    <div class="card">

    </div>
  </div>
  </div>
</section>

@endsection