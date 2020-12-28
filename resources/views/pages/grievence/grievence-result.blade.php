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
    <div class="col-6">
      <div class="card">
        <div class="card-header text-center">
          <h3 class="mt-4">Medicine You Can Consume</h3>
        </div>
        <div class="card-body">
          <form action="{{ route('dosage-result', $items->id)}}" method="GET">
            @csrf
            <div class="table-responsive text-center">
              <table class="table table-borderless" style="border: none;">
                <thead>
                  <th>Medicine Name</th>
                  <th>Pharmacy Available</th>
                </thead>
                <tbody>
                  @foreach ($result as $result => $main)
                  <tr>
                    <td>
                      {{ $main -> medicine_name }}
                      <input type="text" value="{{ $main->id }}" name="medicine_id[]" readonly hidden>
                    </td>
                    @if ($main -> find_at_pharmacy = 1)
                    <td style="color: green">Yes</td>
                    @else
                    <td>No</td>
                    @endif
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <div class="container-fluid col-6 text-center mb-4">
              <button type="submit" class="btn btn-block btn-primary btn-sm mt-5">Detail Medicine</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection