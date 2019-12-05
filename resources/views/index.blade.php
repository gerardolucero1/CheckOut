@section('title') 
Neon - Home
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
            <h4 class="xp-page-title">Dashboard</h4>
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
                <div class="card bg-info-gradient m-b-30">
                    <div class="card-body">
                        <div class="xp-widget-box text-white text-center pt-3">
                           
                            <h4 class="mb-2 font-20">42%</h4>
                            <p class="mb-3">Available rooms</p>
                            <button class="btn btn-white btn-rounded text-info">See Rooms</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="card bg-info-gradient m-b-30">
                    <div class="card-body">
                        <div class="xp-widget-box text-white text-center pt-3">
                            
                            <h4 class="mb-2 font-20">18%</h4>
                            <p class="mb-3">Check out</p>
                            <button class="btn btn-white btn-rounded text-info">See Rooms</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="card bg-info-gradient m-b-30">
                    <div class="card-body">
                        <div class="xp-widget-box text-white text-center pt-3">
                            
                            <h4 class="mb-2 font-20">33%</h4>
                            <p class="mb-3">Stay Over</p>
                            <button class="btn btn-white btn-rounded text-info">See Rooms</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="card bg-info-gradient m-b-30">
                    <div class="card-body">
                        <div class="xp-widget-box text-white text-center pt-3">
                            
                            <h4 class="mb-2 font-20">6%</h4>
                            <p class="mb-3">Out of order</p>
                            <button class="btn btn-white btn-rounded text-info">See Rooms</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-12 col-xl-7">
            <!-- Start XP Row -->
            <div class="row">                             
                <!-- Start XP Col -->
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card m-b-30">
                        <div class="card-header bg-white">
                            <h5 class="card-title text-black mb-0">Weekly Revenue</h5>
                        </div>
                        <div class="card-body">
                            <div class="xp-chart-label">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <p class="text-black">Current Month</p>
                                        <h4 class="text-primary-gradient mb-3"><i class="icon-wallet mr-2"></i>78,254</h4>
                                    </li>
                                    <li class="list-inline-item">
                                        <p class="text-black">Previous Month</p>
                                        <h4 class="text-success-gradient mb-3"><i class="icon-wallet mr-2"></i>58,605</h4>
                                    </li>
                                </ul>
                            </div>
                            <div id="xp-chartist-series-overrides" class="ct-chart ct-golden-section xp-chartist-simple-line"></div>
                        </div>
                    </div>
                </div>
                <!-- End XP Col --> 
            </div>
            <!-- End XP Row -->
        </div>          
        <!-- End XP Col -->
        <!-- Start XP Col -->
       
        <div class="col-md-12 col-lg-12 col-xl-5">
            <!-- Start XP Row -->
            <div class="row">
                <!-- Start XP Col -->
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card bg-primary-gradient m-b-30">
                        <div class="card-body">                                            
                            <div class="xp-widget-box text-white">
                                <div class="row">
                                    <div class="col-md-6 col-lg-5 align-self-center">
                                        <p class="xp-icon-timer mb-5"><i class="icon-hourglass"></i></p>
                                        <h4 class="mb-0 font-26">23.3 min</h4>
                                        <p class="mb-2">
                                            Average Cleaning Time Per Room</p>
                                        <p class="mb-0"><span class="f-w-7">+10.68%</span> <span class="font-12">vs in last 7 days</span></p>   
                                    </div>
                                    
                                    <div class="card-body" style="margin-left:-10%;">  
                                            <div id="xp-chartist-svg-path-animations" class="ct-chart ct-golden-section xp-chartist-svg-path-animations"></div>
                                    </div>                                       
                                    
                                    </div>                                            
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End XP Col -->
                <!-- Start XP Col -->                       
               
                <!-- End XP Col -->
                <!-- Start XP Col -->
               
                <!-- End XP Col -->
            </div>
            <!-- End XP Row -->
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-8">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Revenue</h5>
                </div>
                <div class="card-body">
                    <div class="xp-chart-label">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <p class="text-black">Today's</p>
                                <h4 class="text-primary-gradient mb-3"><i class="icon-wallet mr-2"></i>8,390</h4>
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
                    <h5 class="card-title text-black mb-0">Rooms</h5>
                </div>
                <div class="card-body">                                    
                    <div id="xp-chartist-donut-fill-rather-chart" class="ct-chart ct-golden-section xp-chartist-donut-fill-rather-chart"></div>
                    <div class="xp-chart-label mt-3">                                        
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <p class="mb-0"><i class="mdi mdi-circle-outline text-primary"></i>Aviable</p>
                                <span class="badge badge-primary badge-pill">45%</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <p class="mb-0"><i class="mdi mdi-circle-outline text-success"></i>Checkouts</p>
                                <span class="badge badge-success badge-pill">35%</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <p class="mb-0"><i class="mdi mdi-circle-outline text-danger"></i>Stay Over</p>
                                <span class="badge badge-danger badge-pill">20%</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-md-12 col-lg-12 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Actions History</h5>
                </div>
                <div class="card-body">
                    <div class="xp-actions-history">


                        <div id="square" class="xp-actions-history-list animated bounceInLeft delay-1s">
                            <div class="xp-actions-history-item">                                            
                                <h6 class="mb-1 text-black">Room #12</h6>
                                <p class="text-muted font-12">5 mins ago</p>
                                <p class="m-b-30">Start Cleaning</p>
                            </div>
                        </div>

                        <div id="square2" class="xp-actions-history-list animated bounceInLeft delay-2s">
                            <div class="xp-actions-history-item">                                            
                                <h6 class="mb-1 text-black">Room #22</h6>
                                <p class="text-muted font-12">15 mins ago</p>
                                <p class="m-b-30">Start Cleaning</p>
                            </div>
                        </div>
                        
                        <div id="square3" class="xp-actions-history-list animated bounceInLeft delay-3s">
                            <div class="xp-actions-history-item">                                            
                                <h6 class="mb-1 text-black">Room #33</h6>
                                <p class="text-muted font-12">45 mins ago</p>
                                <p class="m-b-30">Cleaning Finished</p>
                            </div>
                        </div>
                    

                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black mb-0">Employee of the Month</h5>
                </div>
                <div class="card-body">
                    <div class="xp-social-profile">
                        <div class="xp-social-profile-img">
                            
                        </div>
                        <div class="xp-social-profile-top">
                            <div class="row">
                                <div class="col-3">
                                    <div class="xp-social-profile-star py-3">
                                        <i class="icon-star font-20"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="xp-social-profile-avatar text-center">
                                        <img src="https://www.greycoatlumleys.co.uk/ugc/images/roles/housekeeper.jpg" alt="user-profile" class="rounded-circle img-fluid"><span class="xp-social-profile-live"></span>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="xp-social-profile-menu text-right py-3">
                                        <i class="icon-options font-20"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xp-social-profile-middle text-center">
                            <div class="row">
                                <div class="col-12">
                                    <div class="xp-social-profile-title">
                                        <h5 class="my-1 text-black">karina Simons</h5>
                                    </div>
                                    <div class="xp-social-profile-subtitle">
                                        <p class="mb-3 text-muted">Housekeeper</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xp-social-profile-bottom text-center">
                            <div class="row">
                                <div class="col-4">
                                    <div class="xp-social-profile-media pt-3">
                                        <h5 class="text-black my-1">4</h5>
                                        <p style="font-size:10px;" class="mb-0 text-muted">Rooms Today</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="xp-social-profile-followers pt-3">
                                        <h5 class="text-black my-1">275</h5>
                                        <p style="font-size:10px;" class="mb-0 text-muted">Total Rooms</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="xp-social-profile-following pt-3">
                                        <h5 class="text-black my-1">15:45</h5>
                                        <p style="font-size:10px;" class="mb-0 text-muted">Average Time</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->                       
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
        <div class="col-md-6 col-lg-6 col-xl-6 align-self-center">
            <div class="card bg-white m-b-30">
                <div class="card-header bg-white">
                    <h5 style="text-align:center;" class="card-title text-black mb-0">Current Tickets</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr style="text-align:center;">
                                    <th class="border-top-0">Room</th>
                                    <th class="border-top-0">Status</th>
                                    <th class="border-top-0">Date</th>
                                    <th class="border-top-0">Total(Days)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="text-align:center;">
                                    <td>503</td>
                                    <td>
                                        <a href="javascript:void(0);">rady to check</a>
                                    </td>
                                                                    
                                    <td>01/12/2019</td>
                                    <td>5 Days</td>
                                  
                                </tr>
                                <tr style="text-align:center;">
                                    <td>102</td>
                                    <td>
                                        <a href="javascript:void(0);">In process</a>
                                    </td>
                                                                   
                                    <td>01/12/2019</td>
                                    <td>3 Days</td>
                                   
                                </tr>
                                <tr style="text-align:center;">
                                    <td>105</td>
                                    <td>
                                        <a href="javascript:void(0);">In process</a>
                                    </td>
                                                                   
                                    <td>05/12/2019</td>
                                    <td>1 Days</td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td>119</td>
                                    <td>
                                        <a href="javascript:void(0);">rady to check</a>
                                    </td>
                                                                   
                                    <td>03/12/2019</td>
                                    <td>3 Days</td>
                                 
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-lg-6 col-xl-6 align-self-center">
            <div class="card bg-white m-b-30">
                <div class="card-header bg-white">
                    <h5 style="text-align:center;" class="card-title text-black mb-0">Currently Working</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr style="text-align:center;">
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Current Room</th>
                                    <th class="border-top-0">Rooms</th>
                                    <th class="border-top-0">Total Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="text-align:center;">
                                    <td> <a href="javascript:void(0);">Ada Lima</a></td>
                                    <td>
                                       4
                                    </td>
                                                                    
                                    <td>4/16</td>
                                    <td>34min</td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td><a href="javascript:void(0);">Ana Aparicio</a></td>
                                    <td>
                                        1
                                    </td>
                                                                   
                                    <td>1/16</td>
                                    <td>50min</td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td> <a href="javascript:void(0);">Rogelio Martinez</a></td>
                                    <td>
                                       3
                                    </td>
                                                                   
                                    <td>3/16</td>
                                    <td>40min</td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td><a href="javascript:void(0);">Alan Diaz</a></td>
                                    <td>
                                        3
                                    </td>
                                                                   
                                    <td>3/16</td>
                                    <td>43min</td>

                                 
                                </tr>
                               
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
            <callendar-component></callendar-component>
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