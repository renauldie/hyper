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
              <th>Number</th>
              <th>Date</th>
              <th>Name</th>
              <th>Age</th>
              <th>Blood Pressure</th>
              <th>Body Weight</th>
              <th>Action</th>
            </thead>
            <tbody>
              @foreach ($items as $item => $main)
              <tr>
                <td>{{ ++$item }}</td>
                <td>{{ $main -> created_at -> format('Y-m-d') }}</td>
                <td>{{ $main -> user -> name }}</td>
                <td>{{ $main -> ages }}</td>
                <td>{{ $main -> blood_pressure }}</td>
                <td>{{ $main -> body_weight }}</td>
                <td style="width: 150px">
                  <a href="{{ route('choose-disease', $main->id) }}" class="btn btn-sm btn-primary">
                    <i class="fas fa-info-circle"></i>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
    <div class="card">

    </div>
  </div>
  </div>
</section>

@endsection