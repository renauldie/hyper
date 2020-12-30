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

        <div class="container">
          <div class="row">
            <col-md-12 class="col-lg-12">
              <table class="table table-borderless">
                <tr>
                  <th class="pl-5">Name</th>
                  <td class="pr-5 mt-1 text-right">{{ $items->user->name }}</td>
                </tr>
                <tr>
                  <th class="pl-5">Blood Pressure</th>
                  <td class="pr-5 mt-1 text-right">{{ $items->blood_pressure }} MmHg</td>
                </tr>
                <tr>
                  <th class="pl-5">Age</th>
                  <td class="pr-5 mt-1 text-right">{{ $items->ages }} Y.O</td>
                </tr>
                <tr>
                  <th class="pl-5">Body Weight</th>
                  <td class="pr-5 mt-1 text-right">{{ $items->body_weight }} Kg</td>
                </tr>
              </table>
            </col-md-12>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-6 col-xl-6">
              <h4 class="mt-4">Selected Disease</h4>
              @forelse ($dets as $det)
              <div class="row pl-4">
                <col-md-4 class="col-lg-10">
                  <p>{{ $det->diseases->name}}</p>
                </col-md-4>
              </div>
              @empty
              <div class="row">
                <col-md-4 class="col-lg-10">
                  <p>Choose Normal First</p>
                </col-md-4>
              </div>
              @endforelse
            </div>

            <div class="col-md-6 col-xl-6">
            </div>
          </div>
        </div>

        <div class="row p-2">
          <h4 class="mt-4 ml-4">Dosage of Medicine</h4>
          <div class="col-md-12 col-xl-12">
            <table class="table table-borderless text-center">
              <thead>
                <tr>
                  <th>Medicine</th>
                  <th>Dosage</th>
                  <th>Paramechy Available </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($dosages as $dosage)
                <tr>
                  <td>{{ $dosage->medicine_name }}</td>
                  <td>{{ $dosage->dosage }} Mg</td>
                  <td>
                    @if ($dosage->find_at_pharmacy == 1)
                    Yes
                    @else
                    No
                    @endif
                  </td>
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