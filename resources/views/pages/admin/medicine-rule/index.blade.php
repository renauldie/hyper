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
          <h4 class="card-title">Medicine Rule List</h4>
          <a href="{{ route('medicine-rule.create')}}" class="btn btn-primary mr-4 float-right">
            Add Rule
          </a>
          <div class="table-responsive">
            <table class="table table-striped table-bordered zero-configuration">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Medicine Rule</th>
                  <th>Description</th>
                  <th>Medicine</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Medicine Name</th>
                  <th>Description</th>
                  <th>Medicine</th>
                  <th>Action</th>
                </tr>
              </tfoot>

              <tbody>
                @foreach ($items as $item => $main)
                <tr>
                  <td style="width: 50px">{{ ++$item }}</td>
                  <td>{{ $main->name }}</td>
                  <td>{{ $main->description }}</td>
                  <td>{{ $main->medicine->medicine_name }}</td>
                  <td style="width: 150px">
                    <a href="{{ route('medicine-rule.edit', $main->id) }}" class="btn btn-info btn-sm">
                      <i class="icon-note menu-icon"></i>
                    </a>
                    <form action="{{ route('medicine-rule.destroy', $main->id) }}" method="POST" class="d-inline">
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