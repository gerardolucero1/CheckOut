@section('title') 
Floor - {{ $floor->name }}
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
            <h4 class="xp-page-title">{{ $floor->name }}</h4>
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
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="https://kprofiles.com/wp-content/uploads/2017/07/april.jpg" alt="Rounded Image" class="img-fluid rounded">
                        </div>
                        <div class="col-md-6">
                            <h5>{{ $floor->name }}</h5>
                            <h6>Floor room's: {{ $floor->rooms }}</h6>
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-md-6 left">
                            @if (count($floor->rooms_floor) < $floor->rooms)
                                <button type="button" data-toggle="modal" data-target="#addRoom" class="btn btn-rounded btn-success"><i class="mdi mdi-plus mr-2"></i> Add room</button>
                                <button onclick="event.preventDefault();
                                                            Swal.fire({
                                                                title: '¿Are you sure?',
                                                                text: 'This will make all the rooms',
                                                                type: 'warning',
                                                                showCancelButton: true,
                                                                confirmButtonColor: '#3085d6',
                                                                cancelButtonColor: '#d33',
                                                                confirmButtonText: 'OK'
                                                                }).then((result) => {
                                                                if (result.value) {
                                                                    document.getElementById('all-rooms').submit();
                                                                    Swal.fire(
                                                                    'Success!',
                                                                    'The rooms has been created',
                                                                    'success'
                                                                    )
                                                                }
                                                            });
                                                        "
                                                        type="submit" class="btn btn-rounded btn-info"><i class="mdi mdi-plus mr-2"></i> Add all rooms</button>
                                <form id="all-rooms" action="{{ route('rooms.store') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" name="floor_id" value="{{ $floor->id }}">
                                    <input type="hidden" name="type" value="all">
                                    <input type="hidden" name="number" value="{{ $floor->rooms - count($floor->rooms_floor) }}">
                                </form>
                            @endif
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="table-responsive">
                            <table id="xp-default-datatable" class="display table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Floor</th>
                                        <th>Type</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($floor->rooms_floor as $room)
                                        <tr>
                                            <td>{{ $room->id }}</td>
                                            <td>{{ $room->name }}</td>
                                            <td>{{ $room->floor->name }}</td>
                                            <td>{{ $room->type }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-round btn-warning"><i class="mdi mdi-upload"></i></a>
                                                <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-round btn-primary"><i class="mdi mdi-send"></i> </a>
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
                                                                    document.getElementById('delete-room-{{ $room->id }}').submit();
                                                                    Swal.fire(
                                                                    'Deleted!',
                                                                    'The floor has been deleted',
                                                                    'success'
                                                                    )
                                                                }
                                                            });
                                                        "
                                                        type="submit" class="btn btn-round btn-danger"><i class="mdi mdi-delete-sweep"></i></button>
                                                <form id="delete-room-{{ $room->id }}" action="{{ route('rooms.destroy', $room->id) }}" method="POST">
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
                                        <th>Floor</th>
                                        <th>Type</th>
                                        <th>Options</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->

    <!-- Modal add floor-->
    <div class="modal fade" id="addRoom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add new room</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('rooms.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
                            </div>
                            <div class="form-group col-md-6">
                                {{ Form::label('rooms', 'Type of room') }}
                                {{ Form::select('type', [
                                    'sencilla' => 'Sencilla', 
                                    'doble' => 'Doble',
                                    'matrimonial' => 'Matrimonial',
                                    ],null, ['class' => 'form-control', 'id' => 'rooms']) }}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                {{ Form::hidden('floor_id', $floor->id) }}
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