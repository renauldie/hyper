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
              <td>{{ Auth::user()->name}}</td>
              <td>{{ $items->ages }} thn</td>
              <td>{{ $items->blood_pressure }} mmHg</td>
              <td>{{ $items->body_weight }} Kg</td>
            </tbody>
          </table>
        </div>

        <div class="container">
          <h4 class="mt-4">Selected Disease</h4>
          @foreach ($items->consultation_detail as $item)
          <p>{{ $item->cosultations_id }}</p>
          @endforeach
        </div>

        <div class="container">
          <h4 class="mt-4">Choose aonther disease that you have</h4>
          <form action="#" method="POST">
            @csrf
            <div class="row">
              <div class="col-md-4 col-xl-6">
                <div class="input-group-icon mt-10">
                  <div class="icon"><i class="fas fa-disease" aria-hidden="true"></i></div>
                  <div class="form-select" id="default-select_1">
                    <select>
                      @foreach ($diseases as $disease)
                      <option value="{{ $disease->id }}" selected>{{ $disease->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-xl-4 mt-3">
                <button type="submit" class="btn btn-danger btn-sm">Add this disease</button>
              </div>
            </div>
        </div>
        </form>



        <button type="submit" class="btn btn-primary btn-sm mt-3 float-right">Next Step</button>
      </div>
    </div>
  </div>
</section>

@endsection