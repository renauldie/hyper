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
    <form action="#">
      <div class="row justify-content-between align-items-center">
        <div class="col-md-6 col-lg-6">
          <div class="about_us_img">
            <h3 class="mb-30">Check Your Condition</h3>
            <div class="input-group-icon mt-10">
              <div class="icon"><i class="fa fa-heartbeat" aria-hidden="true"></i></div>
              <div class="form-select" id="default-select_1">
                <select>
                  <option value="1" selected disabled>choose your blood pressure</option>
                  @foreach ($bloods as $blood)
                  <option value="{{ $blood->id }}">{{ $blood->sistolic_start }} - {{ $blood->sistolic_end }} /
                    {{ $blood->diastolic_start }} - {{ $blood->diastolic_end }}</option>
                  @endforeach
                </select>
              </div>
              <div class="mt-10">
                <input type="text" name="ages" placeholder="{{ Auth::user()->ages }}" onfocus="this.placeholder = ''"
                  onblur="this.placeholder = '{{ Auth::user()->ages }}'" value="{{ Auth::user()->ages }}" disabled
                  class="single-input-primary">
              </div>
              <div class="mt-10">
                <input type="text" name="first_name" placeholder="Body Weight" onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Body Weight'" required class="single-input-accent">
              </div>
            </div>
          </div>
          <button class="genric-btn info mt-5 radius">
            Proceess
          </button>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="about_us_text">
            <h3 class="mb-30">Do you have another disease?</h3>
            <div class="single-element-widget mt-30">
              @foreach ($diseases as $disease)
              <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-6">
                  <div class="switch-wrap d-flex justify-content-between mb-n4">
                    <p>{{ $disease->name }}</p>
                    <div class="confirm-checkbox">
                      <input type="checkbox" id="{{ $disease->id}}">
                      <label for="{{ $disease->id}}"></label>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>

@endsection