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
        <h4 class="mt-4">Grievence Result</h4>
      </div>
      <div class="card-body container">

        @foreach ($result as $result => $main)
        {{ $main -> medicine_name}}
        @endforeach
      </div>
    </div>
  </div>
  </div>
</section>
@endsection