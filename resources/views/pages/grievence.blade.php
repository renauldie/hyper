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
        <h4>Insert General Information</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('process-consultation') }}" method="POST">
          @csrf
          <h6 class="card-title">Input Blood Pressure</h6>
          <input type="number" name="blood_pressure" placeholder="Blood Pressure" min="120"
            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Input blood pressure'" required
            class="single-input rounded-25">

          <h6 class="card-title mt-4">Input Age</h6>
          <input type="number" name="ages" placeholder="Age" onfocus="this.placeholder = ''"
            onblur="this.placeholder = 'Input your age'" required class="single-input">

          <h6 class="card-title mt-4">Body Weight</h6>
          <input type="number" name="body_weight" placeholder="Body Weight" onfocus="this.placeholder = ''"
            onblur="this.placeholder = 'Input body weight'" required class="single-input">

          <button type="submit" class="btn btn-primary btn-sm mt-3 float-right">Next Step</button>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection