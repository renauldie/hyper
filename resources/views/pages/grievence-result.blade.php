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
      <div class="card-header text-center">
        <h3 class="mt-4">Grievence Result</h3>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xl-12">
            <h4 class="mt-4">Detail Consultation</h4>
            <div class="row p-5">
              <div class="col-md-8">
                <div class="ml-5">
                  <p style="font-weight: bold">Name</p>
                  <p style="font-weight: bold">Age</p>
                  <p style="font-weight: bold">Body Weight</p>
                  <p style="font-weight: bold">Blood Pressure</p>
                </div>
              </div>
              <div class="col-md-4">
                <p>{{ $items->user->name}}</p>
                <p>{{ $items->ages }} thn</p>
                <p>{{ $items->blood_pressure }} mmHg</p>
                <p>{{ $items->body_weight }} Kg</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body container">
        <h4 class="mt-2">Recomended Medicine</h4>
        <div class="table-responsive text-center p-5">
          <table class="table" style="border: none;">
            <thead>
              <th>Medicine Name</th>
              <th>Pharmacy Available</th>
            </thead>
            <tbody>
              @foreach ($result as $result => $main)
              <tr>
                <td>{{ $main -> medicine_name }}</td>
                @if ($main -> find_at_pharmacy = 1)
                <td style="color: green">Yes</td>
                @else
                <td>No</td>
                @endif
              </tr>
              @endforeach
              {{-- <tr>
                <td>{{ $result -> medicine_name }}</td>
              @if ($result -> find_at_pharmacy = 1)
              <td style="color: green">Yes</td>
              @else
              <td>No</td>
              @endif
              </tr> --}}
            </tbody>
          </table>
        </div>
      </div>

      <div class="card-body container">
        <h4 class="mt-2">Medicine Dosage</h4>

      </div>
    </div>
  </div>
  </div>
</section>
@endsection