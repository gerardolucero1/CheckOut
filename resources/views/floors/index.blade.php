@section('title') 
Floors
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

    <div class="row">
        <div class="col-md-6 col-lg-6">
            <h4 class="xp-page-title">Floors registered</h4>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="xp-breadcrumb">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addfloor">
                    Add floor
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addfloorxls">
                        <i class="fa fa-upload"></i> Upload XLS
                    </button>
            </div>
        </div>
    </div>
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
                    <h5 class="card-title text-black">List of Floors</h5>
                    <h6 class="card-subtitle">This are all the floors registered</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="xp-default-datatable" class="display table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Inventory</th>
                                    <th>Rooms</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    //dd(Auth::user()->hotel->floors);
                                @endphp
                                @foreach (Auth::user()->hotel->floors as $floor)
                                    <tr>
                                        <td>{{ $floor->id }}</td>
                                        <td>{{ $floor->name }}</td>
                                        <td>{{ $floor->subInventory->name }}</td>
                                        <td>{{ $floor->rooms }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('floors.edit', $floor->id) }}" class="btn btn-round btn-warning"><i class="mdi mdi-update"></i></a>
                                            <a href="{{ route('floors.show', $floor->id) }}" class="btn btn-round btn-primary"><i class="mdi mdi-eye"></i> </a>
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
                                                                document.getElementById('delete-floor-{{ $floor->id }}').submit();
                                                                Swal.fire(
                                                                'Deleted!',
                                                                'The floor has been deleted',
                                                                'success'
                                                                )
                                                            }
                                                        });
                                                    "
                                                    type="submit" class="btn btn-round btn-danger"><i class="mdi mdi-delete-sweep"></i></button>
                                            <form id="delete-floor-{{ $floor->id }}" action="{{ route('floors.destroy', $floor->id) }}" method="POST">
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
                                    <th>Inventory</th>
                                    <th>Rooms</th>
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



<!-- Modal add floor-->
<div class="modal fade" id="addfloor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new floor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @php
                    $inventories = Auth::user()->hotel->subInventories->pluck('name', 'id');
                @endphp
                <form action="{{ route('floors.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('rooms', 'Number of rooms') }}
                            {{ Form::text('rooms', null, ['class' => 'form-control', 'id' => 'rooms']) }}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            {{ Form::label('subInventory_id', 'Inventory') }}
                            {{ Form::select('subInventory_id', $inventories, null, ['class' => 'form-control', 'id' => 'subInventory_id']) }}
                        </div>
                        <div class="form-group col-md-6">
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
<!-- Modal add floor-->
<div class="modal fade" id="addfloorxls" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add new from xls document</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
            </div>
        </div>
    </div>
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