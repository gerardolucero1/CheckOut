@section('title') 
Hotel - {{ $hotel->name }}
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
            <h4 class="xp-page-title">{{ $hotel->name }}</h4>
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
        <div class="col-md-12">
            <div class="block-content">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('hotels.index') }}">
                                    <i class="mdi mdi-arrow-left"></i>
                                    BACK
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mt-5">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="https://q-cf.bstatic.com/images/hotel/max1024x768/836/83691230.jpg" alt="Rounded Image" class="img-fluid rounded">
                        </div>
                        <div class="col-md-6">
                            <h5>{{ $hotel->name }}</h5>
                            <h6>{{ $hotel->adress }}</h5>
                            <h6>{{ $hotel->fiscalName }}</h5>
                            <h6>{{ $hotel->telephone }}</h5>
                            <h6>{{ $hotel->email }}</h5>
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-md-6 left">
                            <a href="{{ route('users.create', $hotel->id) }}" class="btn btn-rounded btn-success"><i class="mdi mdi-plus mr-2"></i> Add user</a>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="table-responsive">
                            <table id="xp-default-datatable" class="display table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>User Name</th>
                                        <th>State</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hotel->users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->roles->implode('name', ', ') }}</td>
                                            <td>DaffyDuckWizard</td>
                                            <td>active</td>
                                            <td class="text-center">
                                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-round btn-warning"><i class="mdi mdi-upload"></i></a>
                                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-round btn-primary"><i class="mdi mdi-send"></i> </a>
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
                                                                    document.getElementById('delete-hotel-{{ $user->id }}').submit();
                                                                    Swal.fire(
                                                                    'Deleted!',
                                                                    'The hotel has been deleted',
                                                                    'success'
                                                                    )
                                                                }
                                                            });
                                                        "
                                                        type="submit" class="btn btn-round btn-danger"><i class="mdi mdi-delete-sweep"></i></button>
                                                <form id="delete-hotel-{{ $user->id }}" action="{{ route('hotels.destroy', $user->id) }}" method="POST">
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
                                        <th>Type</th>
                                        <th>User Name</th>
                                        <th>State</th>
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