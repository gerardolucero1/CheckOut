@section('title') 
Sub Inventories
@endsection
@extends('layouts.main')
@section('style')
<!-- DataTables CSS -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <h4 class="xp-page-title">Sub inventories</h4>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="xp-breadcrumb">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProduct">
                    Add sub inventory
                </button>
            </div>
        </div>
    </div>
    
    @if (session('info'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('info') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (count($errors))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- End XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">List of Products</h5>
                    <h6 class="card-subtitle">This are all the products registered</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="xp-default-datatable" class="display table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Hotel</th>
                                    <th>Amount of products</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (Auth::user()->hotel->subInventories as $inventory)
                                    <tr>
                                        <td>{{ $inventory->id }}</td>
                                        <td>{{ $inventory->name }}</td>
                                        <td>{{ $inventory->hotel->name }}</td>
                                        <td>{{ count($inventory->products) }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('sub-inventories.edit', $inventory->id) }}" class="btn btn-round btn-warning"><i class="mdi mdi-upload"></i></a>
                                            <a href="{{ route('sub-inventories.show', $inventory->id) }}" class="btn btn-round btn-primary"><i class="mdi mdi-send"></i> </a>
                                            <button onclick="event.preventDefault();
                                                        Swal.fire({
                                                            title: '¿Are you sure?',
                                                            text: 'This will be permanent',
                                                            type: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Delete'
                                                            }).then((result) => {
                                                            if (result.value) {
                                                                document.getElementById('delete-inventory-{{ $inventory->id }}').submit();
                                                                Swal.fire(
                                                                'Deleted!',
                                                                'The inventory has been deleted',
                                                                'success'
                                                                )
                                                            }
                                                        });
                                                    "
                                                    type="submit" class="btn btn-round btn-danger"><i class="mdi mdi-delete-sweep"></i></button>
                                            <form id="delete-inventory-{{ $inventory->id }}" action="{{ route('sub-inventories.destroy', $inventory->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Hotel</th>
                                    <th>Amount of products</th>
                                    <th>Options</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
</div>



<!-- Modal add product-->
<div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new sub inventory</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('sub-inventories.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
                        </div>
                        <div class="form-group col-md-12">
                            {{ Form::hidden('hotel_id', Auth::user()->hotel->id) }}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')
<!-- Required Datatable JS -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/init/table-datatable-init.js') }}"></script>
@endsection 