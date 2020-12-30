@extends('layouts.admin')

@section('content')
<div class="row page-titles mx-0">
  <div class="col p-md-0">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">User Consultation</a></li>
    </ol>
  </div>
</div>
<!-- row -->

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Data Table</h4>
          <a href="{{ route('consultation-export') }}" class="btn btn-info btn-md float-right" target="_blank">Export
            Excel</a>
          <div class="table-responsive">
            <table class="table table-striped table-bordered zero-configuration">
              <thead>
                <tr>
                  <th>No</th>
                  <th>User</th>
                  <th>Blood Pressure</th>
                  <th>Body Weight</th>
                  <th>Age</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>User</th>
                  <th>Blood Pressure</th>
                  <th>Body Weight</th>
                  <th>Age</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach ($items as $item => $main)
                <tr>
                  <td style="width: 50px">{{ ++$item }}</td>
                  <td>{{ $main -> user -> name }}</td>
                  <td>{{ $main -> blood_pressure }} MmHg</td>
                  <td>{{ $main -> body_weight }} Kg</td>
                  <td>{{ $main -> ages }} Y.O</td>
                  <td>{{ $main -> created_at -> format('Y-m-d') }}</td>
                  <td>
                    <div class="text-center">
                      <a href="#" class="btn btn-sm btn-primary">
                        <i class="fas fa-info"></i>
                      </a>
                    </div>
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
</div>
<!-- #/ container -->
@endsection

@push('addon-script')
<script src="{{ url('backend/./plugins/tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('backend/./plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ url('backend/./plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script>
@endpush