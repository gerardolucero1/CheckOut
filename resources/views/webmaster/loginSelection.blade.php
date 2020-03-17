@extends('layouts.app')

@section('style')
<!-- DataTables CSS -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="block-content">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    Select a hotel to start session
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="xp-default-datatable" class="display table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>location</th>
                                        <th>CP</th>
                                        <th>State</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hotels as $hotel)
                                        <tr>
                                            <td>{{ $hotel->id }}</td>
                                            <td>{{ $hotel->name }}</td>
                                            <td>{{ $hotel->adress }}</td>
                                            <td>{{ $hotel->CP }}</td>
                                            <td>active</td>
                                            <td class="d-flex justify-content-center">
                                                <form action="{{ route('webmaster.loginSelectionUpdate', $hotel->id) }}" method="POST">
                                                    @method('PUT')
                                                    @csrf
                                                    <input name="hotel" type="hidden" value="{{ $hotel->id }}">
                                                    <button type="submit" class="btn btn-round btn-info">
                                                        <i class="mdi mdi-eye"></i>
                                                    </button>
                                                </form>
                                                {{-- <a href="{{ route('webmaster.loginSelectionUpdate', $hotel->id) }}" class="btn btn-round btn-info">
                                                    <i class="mdi mdi-eye"></i>
                                                </a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>location</th>
                                        <th>CP</th>
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