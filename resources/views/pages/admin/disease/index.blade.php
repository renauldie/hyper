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
          <a href="{{ route('disease.create')}}" class="btn btn-primary mr-4 float-right">
            Add Disease
          </a>
          <div class="table-responsive">
            <table class="table table-striped table-bordered zero-configuration">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Disease Name</th>
                  <th>Alias Name</th>
                  <th>Slug</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Disease Name</th>
                  <th>Alias Name</th>
                  <th>Slug</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach ($items as $item => $disease)
                <tr>
                  <th scope="row">{{ ++$item }}</th>
                  <td>{{ $disease -> name }}</td>
                  <td>{{ $disease -> alias }}</td>
                  <td>{{ $disease -> slug }}</td>
                  <td style="max-width: 400px">{{ $disease -> description }}</td>
                  <td style="width: 150px">
                    <a href="{{ route('disease.edit', $disease->id) }}" class="btn btn-info btn-sm">
                      <i class="icon-note menu-icon"></i>
                    </a>
                    <form action="{{ route('disease.destroy', $disease->id) }}" method="POST" class="d-inline">
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