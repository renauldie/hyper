@extends('layouts.admin')

@section('content')
<div class="row page-titles mx-0">
  <div class="col p-md-0">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
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
          <a href="{{ route('medicine.create')}}" class="btn btn-primary mr-4 float-right">
            Add Medication
          </a>
          <a href="{{ route('medicine-export')}}" target="_blank" class="btn btn-info mr-4 float-right">
            Export Medicine
          </a>
          <div class="table-responsive">
            <table class="table table-striped table-bordered zero-configuration">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th style="width: 540px">Description</th>
                  <th>Max Usage</th>
                  <th>Pharmacy Available Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th style="width: 25px">No</th>
                  <th>Name</th>
                  <th style="width: 700px">Description</th>
                  <th style="width: 190px">Max Usage</th>
                  <th style="width: 170px">Pharmacy Available Status</th>
                  <th style="width: 150px">Action </th>
                </tr>
              </tfoot>
              <tbody>
                @foreach ($items as $item => $medicine)
                <tr>
                  <td>{{ ++$item }}</td>
                  <td>{{ $medicine -> medicine_name }}</td>
                  <td>{{ $medicine -> description }}</td>
                  <td>{{ $medicine -> max_usage }} (mg/day)</td>
                  <td>{{ $medicine -> find_at_pharmacy ? 'Yes' : 'No' }}</td>
                  <td style="width: 150px">
                    <a href="{{ route('medicine.edit', $medicine->id) }}" class="btn btn-info btn-sm">
                      <i class="icon-note menu-icon"></i>
                    </a>
                    <form action="{{ route('medicine.destroy', $medicine->id) }}" method="POST" class="d-inline">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>
                      </button>
                    </form>
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