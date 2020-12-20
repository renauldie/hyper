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
          <div class="row">
            <div class="col-md-6 col-xl-6">
              <h4 class="mt-4">Selected Disease</h4>
              @foreach ($dets as $det)
              <div class="row">
                <col-md-4 class="col-lg-10">
                  <p>{{ $det->diseases->name}}</p>
                </col-md-4>
                <col-md-2 class="col-lg-2">
                  <a href="{{ route('disease-delete', $det->id) }}" class="btn">
                    <i class="fas fa-trash"></i>
                  </a>
                </col-md-2>
              </div>
              @endforeach
            </div>

            <div class="col-md-6 col-xl-6">
            </div>
          </div>
        </div>

        <div class="container">
          <h4 class="mt-4">Choose aonther disease that you have</h4>
          <form action={{ route('disease-add', $items->id) }} method="POST">
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

        <form action="{{ route('disease-result', $items->id) }}" method="GET">
          @csrf
          @foreach ($dets as $det)
          <div class="container row">
            <col-md-4 class="col-lg-10">
              <input type="number" name="disease_id[]" value="{{ $det->diseases->id }}" readonly hidden>
            </col-md-4>
          </div>
          @endforeach

          <div class="container-fluid col-6 text-center mb-4">
            <button type="submit" class="btn btn-block btn-primary btn-sm mt-5">Check Now !</button>
          </div>
        </form>
      </div>
    </div>
    <div class="card">

    </div>
  </div>
  </div>
</section>

@endsection