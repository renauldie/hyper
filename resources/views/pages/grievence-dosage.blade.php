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
<section class="about_us padding_top mb-5">
  <div class="row justify-content-center">
    <div class="col-7">
      <div class="card">
        <div class="card-header text-center">
          <h3 class="mt-4">Dosage Result</h3>
        </div>

        <div class="row">
          <div class="col-md-12 col-xl-12">
            <table class="table table-borderless text-center">
              <thead>
                <tr>
                  <th>Medicine</th>
                  <th>Dosage</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($dosages as $dosage)
                <tr>
                  <td>{{ $dosage->medicine_name }}</td>
                  <td>{{ $dosage->dosage }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection