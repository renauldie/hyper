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
  <a href="{{ route('medicine-gallery.create')}}" class="btn btn-md btn-primary mb-4 mr-2">
    Add Medicine Image
  </a>
  <div class="row">
    <div class="col-12 m-b-30">
      <div class="row">
        @forelse ($items as $item)
        <div class="col-md-6 col-lg-3 mb-5">
          <h4 class="d-inline">{{ $item->medicine->medicine_name }}</h4>
          <img src="{{ Storage::url($item->image) }}" class="img-thumbnail img-fluid" style="" alt="Responsive image">
          <a href="{{ route('medicine-gallery.edit', $item->id) }}" class="btn btn-info btn-md mt-2">
            <i class="icon-note menu-icon"></i>
          </a>
          <form action="{{ route('medicine-gallery.destroy', $item->id) }}" method="POST" class="d-inline">
            @csrf
            @method('delete')
            <button class="btn btn-danger btn-md mt-2">
              <i class="fa fa-trash"></i>
            </button>
          </form>
        </div>
        @empty
        <p>kosong ndan</p>
        @endforelse
        <!-- End Col -->
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