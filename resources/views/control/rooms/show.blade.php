@section('title') 
Rooms assigned - {{ $revision->room->name }}
@endsection
@extends('layouts.main')
@section('style')
<!-- DataTables CSS -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .box-item{
            width: 100%;
            height: 550px;
        }

        .box-item img{
            object-fit: cover;
            object-position: unset;
            width: 100%;
        }

        .info-room{
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
        }

        .info-user{
            display: flex;
            justify-content: center;
            align-items: flex-end;
            flex-direction: column;
        }

        .img-profile{
            border-radius: 50%;
        }

        .rate {
            float: left;
            height: 46px;
            padding-left: 10px;
            margin-top: -6px;
        }
        .rate:not(:checked) > input {
            position:absolute;
            top:-9999px;
        }
        .rate:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:20px;
            color:#ccc;
        }
        .rate:not(:checked) > label:before {
            content: '★ ';
        }
        .rate > input:checked ~ label {
            color: #ffc700;    
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
            color: #deb217;  
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }
    </style>
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    

<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar mt-5">
    <!-- Start XP Row -->
    <div class="row mt-3">
        <!-- End XP Col -->
        <div class="col-lg-12">
            @if ($revision->reviewed)
            <div class="card m-b-30">
                <div class="card-body">
                    <p style="font-size: 30px; text-align: center; padding:40px; color:blue">This room is now available</p>
                </div>
            </div>
            @else
            <div class="card m-b-30">
                <form id="freeRoom" action="{{ route('control.update.verification_room', $revision->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 info-room">
                                <p>Room: {{ $revision->room->name }}</p>
                                <p>Type: {{ $revision->room->type }}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <img class="img-profile" src="https://ae01.alicdn.com/kf/HTB1K.DYLFXXXXc.XpXXq6xXFXXXp/Hotel-uniforme-de-verano-femenino-del-Hotel-limpieza-ropa-trabajo-de-camarero-de-limpieza-personal-con.jpg" width="30%" alt="">
                            </div>
                            <div class="col-md-4 info-user">
                                <p>Name: {{ $revision->user->name }}</p>
                                <p>Email: {{ $revision->user->email }}</p>
                                <p></p>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 300px">
                                    <div class="carousel-inner">
                                        @php
                                            $flag = true;
                                        @endphp
                                        @foreach ($revision->photos as $photo)
                                            <div class="carousel-item box-item @if($flag) active @endif">
                                                <img src="{{ $photo->photo }}" class="" alt="...">
                                            </div>
                                            @php
                                                $flag =false;
                                            @endphp
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6>Room Status Before Cleaning: {{ $revision->statusRoom }}</h6>
                                <section class="d-flex">
                                    <h6>Rate Cleaning:</h6>
                            
                                    <div class="rate">
                                        <input required type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input required type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input required type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input required type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input required type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </section>
    
                                <section class="mt-5">
                                    <h5>Extras</h5>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Inventory</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($revision->extras as $extra)
                                                <tr>
                                                    <th scope="row">{{ $extra->id }}</th>
                                                    <td>{{ $extra->product->inventory->name}}</td>
                                                    <td>{{ $extra->amount }}</td>
                                                    <td>{{ $extra->product->subInventory->name}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6 offset-md-3">
                                <button onclick="event.preventDefault();
                                        Swal.fire({
                                            title: 'Can you release this room?',
                                            text: 'You wont be able to change this!',
                                            type: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Release'
                                            }).then((result) => {
                                            if (result.value) {
                                                document.getElementById('freeRoom').submit();
                                            }
                                        });
                                    " 
                                type="submit" class="btn btn-success btn-lg btn-block">Release Room</button>
                                <button onclick="event.preventDefault();
                                        Swal.fire({
                                            title: 'Can you cancel this room?',
                                            text: 'You wont be able to change this!',
                                            type: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Cancel',
                                            cancelButtonText: 'Close'
                                            }).then((result) => {
                                            if (result.value) {
                                                Swal.fire(
                                                    'Canceled!',
                                                    'The rooms has been canceled',
                                                    'success'
                                                )
                                            }
                                        });
                                    "
                                type="button" class="btn btn-danger btn-lg btn-block">Cancel this room</button>

                                <button onclick="event.preventDefault();
                                        Swal.fire({
                                            title: 'Create a new maintenance ticket',
                                            text: 'You wont be able to change this!',
                                            type: 'warning',
                                            html:'<p>Describe the problem</p><br><textarea></textarea>',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Finish',
                                            cancelButtonText: 'Cancel'
                                            }).then((result) => {
                                            if (result.value) {
                                                Swal.fire(
                                                    'New Ticket!',
                                                    'The ticket was sent to maintenance',
                                                    'success'
                                                )
                                            }
                                        });
                                    "
                                type="button" class="btn btn-warning btn-lg btn-block"><i class="fa fa-warning"></i> New Ticket <i class="fa fa-warning"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            @endif

            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>History</h4>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>12/03/2019</td>
                                        <td>5</td>
                                        <td>Alejandra Lozano</td>
                                        <td>05:00</td>
                                        <td>
                                            <button type="button" class="btn btn-rounded btn-primary"><i class="mdi mdi-send mr-2"></i> OPT</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>05/08/2019</td>
                                        <td>6</td>
                                        <td>John Doe</td>
                                        <td>03:00</td>
                                        <td>
                                            <button type="button" class="btn btn-rounded btn-primary"><i class="mdi mdi-send mr-2"></i> OPT</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>06/08/2019</td>
                                        <td>5</td>
                                        <td>Ada Lima</td>
                                        <td>08:00</td>
                                        <td>
                                            <button type="button" class="btn btn-rounded btn-primary"><i class="mdi mdi-send mr-2"></i> OPT</button>
                                        </td>
                                    </tr>
                                </tbody>
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