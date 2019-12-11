@section('title') 
Dashboard - Maintenance
@endsection 
@extends('layouts.main')
@section('style')
<!-- Chartist Chart CSS -->
<link href="{{ asset('assets/plugins/chartist-js/chartist.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Datepicker CSS -->
<link href="{{ asset('assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <h4 class="xp-page-title">Dashboard Maintenance</h4>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="xp-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>          
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row"> 
        <!-- Start XP Col -->   
        <div class="col-md-12 row">
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="card bg-success-gradient m-b-30">
                    <div class="card-body">
                        <div class="xp-widget-box text-white text-center pt-3">
                            <p class="xp-icon-timer mb-4"><i class="fas fa-door-closed"></i></p>
                            <h4 class="mb-2 font-20">12</h4>
                            <p class="mb-3">Open Tickets</p>
                            <button class="btn btn-white btn-rounded text-success">See Tickets</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="card bg-danger-gradient m-b-30">
                    <div class="card-body">
                        <div class="xp-widget-box text-white text-center pt-3">
                            <p class="xp-icon-timer mb-4"><i class="fas fa-calendar-check"></i></i></p>
                            <h4 class="mb-2 font-20">25</h4>
                            <p class="mb-3">Rooms Out Of Service</p>
                            <button class="btn btn-white btn-rounded text-success">Download Report</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="card bg-warning-gradient m-b-30">
                    <div class="card-body">
                        <div class="xp-widget-box text-white text-center pt-3">
                            <p class="xp-icon-timer mb-4"><i class="fas fa-bed"></i></p>
                            <h4 class="mb-2 font-20">18</h4>
                            <p class="mb-3">Tasks In Calendar</p>
                            <button class="btn btn-white btn-rounded text-success">See Calendar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="card bg-primary-gradient m-b-30">
                    <div class="card-body">
                        <div class="xp-widget-box text-white text-center pt-3">
                            <p class="xp-icon-timer mb-4"><i class="fas fa-exclamation-circle"></i></p>
                            <h4 class="mb-2 font-20">250</h4>
                            <p class="mb-3">Tickets Resolved</p>
                            <button class="btn btn-white btn-rounded text-success">Download Report</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-12 col-lg-12 col-xl-12" style="padding:30px">
                      <label for="" style="padding-top: 30px">
                            Progress of finished tickets 34%</label>
                      <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="70"
                              aria-valuemin="0" aria-valuemax="100" style="width:34%">
                                <span class="sr-only">34% Complete</span>
                              </div>
                            </div>
        </div>
    </div>
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-8">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Maintenance Expenses</h5>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p class="text-black">Today's</p>
                                <h4 class="text-primary-gradient mb-3"><i class="icon-wallet mr-2"></i>0</h4>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-black">Last Month</p>
                                <h4 class="text-success-gradient mb-3"><i class="icon-wallet mr-2"></i>24,420</h4>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-black">Last Year</p>
                                <h4 class="text-danger-gradient mb-3"><i class="icon-wallet mr-2"></i>3,25,780</h4>
                            </li>
                        </ul>
                    </div>
                    <div id="xp-chartist-stacked-bar" class="ct-chart ct-golden-section xp-chartist-stacked-bar"></div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Common Tickets</h5>
                </div>
                <div class="card-body">                                    
                    <div id="xp-chartist-donut-fill-rather-chart" class="ct-chart ct-golden-section xp-chartist-donut-fill-rather-chart"></div>
                    <div class="xp-chart-label mt-3">                                        
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <p class="mb-0"><i class="mdi mdi-circle-outline text-primary"></i>Repair</p>
                                <span class="badge badge-primary badge-pill">45%</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <p class="mb-0"><i class="mdi mdi-circle-outline text-success"></i>Replacement</p>
                                <span class="badge badge-success badge-pill">35%</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <p class="mb-0"><i class="mdi mdi-circle-outline text-danger"></i>Others</p>
                                <span class="badge badge-danger badge-pill">20%</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
                             
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">To do Lists</h5>
                </div>
                <div class="card-body">
                    <div class="xp-to-do-list">
                        <ul id="list-group" class="list-group list-group-flush"></ul>
                        <form class="add-items">
                            <div class="input-group mt-3">
                                <input type="text" class="form-control" id="todo-list-item" placeholder="What do you need to do today?" aria-label="What do you need to do today?" aria-describedby="button-addon-to-do-list">
                                <div class="input-group-append">
                                    <button class="btn btn-primary add" onclick="displayDate()" id="button-addon-to-do-list" type="submit">Add to List</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-12 align-self-center">
            <div class="card bg-white m-b-30">
                <div class="card-header bg-white">
                    <h5 style="text-align:center;" class="card-title text-black mb-0">Tickets</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr style="text-align:center;">
                                    <th class="border-top-0">Room number</th>
                                    <th class="border-top-0">Reported by</th>
                                    <th class="border-top-0">When</th>
                                    <th class="border-top-0">Total(Days)</th>
                                    <th class="border-top-0">Evidence</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tickets as $ticket)
                                    <tr style="text-align:center;">
                                        <td>{{ $ticket->numRoom }}</td>
                                        <td>
                                            <a href="javascript:void(0);">{{ Auth::user()->name }}</a>
                                        </td>
                                                                        
                                        <td>{{ \Carbon\Carbon::parse($ticket->created_at)->toFormattedDateString() }}</td>
                                        @php
                                            $date = \Carbon\Carbon::parse($ticket->created_at);
                                            $fechaHoy = \Carbon\Carbon::now();
                                            $diff = $date->diffInDays($fechaHoy);
                                            //dd($diff);
                                        @endphp
                                        @if (\Carbon\Carbon::parse($ticket->created_at)->toFormattedDateString() == \Carbon\Carbon::now()->toFormattedDateString())
                                            <td>Today</td>
                                        @else
                                            <td>{{ $diff + 1 }}</td>
                                        @endif
                                        <td>
                                            <button type="button" class="btn btn-success">
                                                <i class="fa fa-camera"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-12 align-self-center">
            <div class="card bg-white m-b-30">
                <div class="card-header bg-white">
                    <h5 style="text-align:center;" class="card-title text-black mb-0">Tasks</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr style="text-align:center;">
                                    <th class="border-top-0">Task number</th>
                                    <th class="border-top-0">Details</th>
                                    <th class="border-top-0">When</th>
                                    <th class="border-top-0">Total(Days)</th>
                                    <th class="border-top-0">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr style="text-align:center;">
                                        <td>{{ $task->id }}</td>
                                        <td>
                                            <p class="small">
                                                {{ $task->message }}
                                            </p>
                                        </td>
                                                                        
                                        <td>{{ \Carbon\Carbon::parse($task->created_at)->toFormattedDateString() }}</td>
                                        @php
                                            $date = \Carbon\Carbon::parse($task->created_at);
                                            $fechaHoy = \Carbon\Carbon::now();
                                            $diff = $date->diffInDays($fechaHoy);
                                            //dd($diff);
                                        @endphp
                                        @if (\Carbon\Carbon::parse($task->created_at)->toFormattedDateString() == \Carbon\Carbon::now()->toFormattedDateString())
                                            <td>Today</td>
                                        @else
                                            <td>{{ $diff + 1 }}</td>
                                        @endif
                                        <td>
                                            <button type="button" class="btn btn-success">
                                                <i class="fa fa-camera"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
       
        <!-- End XP Col -->
    </div> 
    <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card m-b-30">
                        <div class="card-header bg-white">
                            <h5 class="card-title text-black mb-0">Calender</h5>
                        </div>
                        <div class="card-body">
                            <div data-language="en" class="datepicker-here" ></div>
                            {{-- <calendar-component></calendar-component> --}}
                        </div>
                    </div>
                </div>
            </div>  
            <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-12 align-self-center">
                <div class="card bg-white m-b-30">
                    <div class="card-header bg-white">
                        <h5 style="text-align:center;" class="card-title text-black mb-0">Supply</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr style="text-align:center;">
                                        <th class="border-top-0">Product ID</th>
                                        <th class="border-top-0">Product Name</th>
                                        <th class="border-top-0">Amount in Inventory</th>
                                        <th class="border-top-0">Amount Needed</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="text-align:center;">
                                        <td>1</td>
                                        <td>
                                            <a >Pens</a>
                                        </td>
                                                                        
                                        <td style="color:red;">18</td>
                                        <td>30</td>
                                    </tr>
                                    <tr style="text-align:center;">
                                        <td>12</td>
                                        <td>
                                            <a >Laundry Soap</a>
                                        </td>
                                                                       
                                        <td style="color:red;">4</td>
                                        <td>8</td>
                                    </tr>
                                    <tr style="text-align:center;">
                                        <td>10</td>
                                        <td>
                                            <a >Towels</a>
                                        </td>
                                                                       
                                        <td style="color:red;">11</td>
                                        <td>12</td>
                                    </tr>
                                    <tr style="text-align:center;">
                                        <td>11</td>
                                        <td>
                                            <a >Toilet Paper</a>
                                        </td>
                                                                       
                                        <td style="color:red;">5</td>
                                        <td>55</td>
                                     
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End XP Row -->
</div>
<!-- End XP Contentbar -->
@endsection 
@section('script')
<script>
$(document).ready(function(){

setTimeout(function(){   
     $('#square3').addClass('bounceOutRight')
},2000);

setTimeout(function(){
     $('#square3').addClass('highlight');
},6000);

setTimeout(function(){
     $('#square2').addClass('bounceOutRight')
},6000);
setTimeout(function(){
     $('#square2').addClass('highlight');
},10000);
setTimeout(function(){
     $('#square').addClass('bounceOutRight')
},8000);
setTimeout(function(){
     $('#square').addClass('highlight');
},12000);

setTimeout(function(){
    $('#square').removeClass('bounceOutRight highlight')
     $('#square').addClass('highlight-back')         
},13000);

setTimeout(function(){
    $('#square2').removeClass('bounceOutRight highlight')
     $('#square2').addClass('highlight-back')
},14000);
setTimeout(function(){
    $('#square3').removeClass('bounceOutRight highlight')
     $('#square3').addClass('highlight-back')
},15000);

setTimeout(function(){
  
    displayDate()
},15000);
setTimeout(function(){
   
    displayDate()
},25000);
setTimeout(function(){
    
    displayDate()
},50000);
setTimeout(function(){
    
    displayDate()
},100000);
setTimeout(function(){
    
    displayDate()
},200000);




});
</script>
<script>
function displayDate() {
 
setTimeout(function(){   
     $('#square3').addClass('bounceOutRight')
},2000);

setTimeout(function(){
     $('#square3').addClass('highlight');
},6000);

setTimeout(function(){
     $('#square2').addClass('bounceOutRight')
},6000);
setTimeout(function(){
     $('#square2').addClass('highlight');
},10000);
setTimeout(function(){
     $('#square').addClass('bounceOutRight')
},8000);
setTimeout(function(){
     $('#square').addClass('highlight');
},12000);

setTimeout(function(){
    $('#square').removeClass('bounceOutRight highlight')
     $('#square').addClass('highlight-back')         
},13000);

setTimeout(function(){
    $('#square2').removeClass('bounceOutRight highlight')
     $('#square2').addClass('highlight-back')
},14000);
setTimeout(function(){
    $('#square3').removeClass('bounceOutRight highlight')
     $('#square3').addClass('highlight-back')
},15000);

}
</script>
<!-- Chartist Chart JS -->
<script src="{{ asset('assets/plugins/chartist-js/chartist.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chartist-js/chartist-plugin-tooltip.min.js') }}"></script>
<!-- To Do List JS -->
<script src="{{ asset('assets/js/init/to-do-list-init.js') }}"></script>
<!-- Datepicker JS -->
<script src="{{ asset('assets/plugins/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datepicker/i18n/datepicker.en.js') }}"></script>
<!-- Dashboard JS -->
<script src="{{ asset('assets/js/init/dashborad.js') }}"></script>
@endsection