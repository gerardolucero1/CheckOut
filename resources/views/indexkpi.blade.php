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
                <div class="card bg-success-gradient m-b-30">
                    <div class="card-body">
                        <div class="xp-widget-box text-white text-center pt-3">
                            <p class="xp-icon-timer mb-4"><i class="fas fa-door-closed"></i></p>
                            <h4 class="mb-2 font-20">2.5</h4>
                            <p class="mb-3">Rooms per minute</p>
                            <button class="btn btn-white btn-rounded text-success">Download Report</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="card bg-danger-gradient m-b-30">
                    <div class="card-body">
                        <div class="xp-widget-box text-white text-center pt-3">
                            <p class="xp-icon-timer mb-4"><i class="fas fa-calendar-check"></i></i></p>
                            <h4 class="mb-2 font-20">$11</h4>
                            <p class="mb-3">Cost per room</p>
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
                            <h4 class="mb-2 font-20">19</h4>
                            <p class="mb-3">Maintenance Tickets</p>
                            <button class="btn btn-white btn-rounded text-success">Download Report</button>
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
            <label for="">Room cleaning progress today 73%</label>
                <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                        aria-valuemin="0" aria-valuemax="100" style="width:73%">
                          <span class="sr-only">73% Complete</span>
                        </div>
                      </div>

                      <label for="" style="padding-top: 30px">
                            Progress of finished tickets 23%</label>
                      <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="70"
                              aria-valuemin="0" aria-valuemax="100" style="width:23%">
                                <span class="sr-only">23% Complete</span>
                              </div>
                            </div>
            <label for="" style="padding-top: 30px">
                            Progress of requests attended 88%</label>
                      <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="70"
                              aria-valuemin="0" aria-valuemax="100" style="width:88%">
                                <span class="sr-only">88% Complete</span>
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
                            <h5 class="card-title text-black mb-0">Monthly OOO</h5>
                        </div>
                        <div class="card-body">
                            <div class="xp-chart-label">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <p class="text-black">Current month</p>
                                        <h4 class="text-primary-gradient mb-3"><i class="icon-wallet mr-2"></i>23</h4>
                                    </li>
                                    <li class="list-inline-item">
                                        <p class="text-black">Previous month</p>
                                        <h4 class="text-success-gradient mb-3"><i class="icon-wallet mr-2"></i>28</h4>
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
                <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="card bg-success-gradient m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box text-white text-center pt-3">
                                    <p class="xp-icon-timer mb-4"><i class="icon-trophy"></i></p>
                                    <h4 class="mb-2 font-20">2354</h4>
                                    <p class="mb-3">Room with more maintenance tickets</p>
                                    <button class="btn btn-white btn-rounded text-success">See all tickets</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Col -->
                    <!-- Start XP Col -->
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="card bg-danger-gradient m-b-30">
                            <div class="card-body">
                                <div class="xp-widget-box xp-widget-newsletter text-white text-center pt-3">
                                    <p class="xp-icon-timer mb-4"><i class="icon-paper-plane"></i></p>
                                    <h4 class="mb-2 font-20">Low Product</h4>
                                    <p class="mb-3"><span style="font-weight: bold">Toilet Paper </span><br>Please,  Stock product.</p>
                                    <form>
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Qty" aria-label="Search" aria-describedby="button-addon-news">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon-news">Supply</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card bg-primary-gradient m-b-30">
                        <div class="card-body">                                            
                            <div class="xp-widget-box text-white">
                                <div class="row">
                                    <div class="col-md-6 col-lg-5 align-self-center">
                                        <p class="xp-icon-timer mb-5"><i class="icon-hourglass"></i></p>
                                        <h4 class="mb-0 font-26">31.8 minutes</h4>
                                        <p class="mb-2">Avg cleaning per room</p>
                                        <p class="mb-0"><span class="f-w-7">+18.68%</span> <span class="font-12">vs in last 7 days</span></p>   
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
                                <p class="mb-0"><i class="mdi mdi-circle-outline text-primary"></i>Disponibles</p>
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
                            <div class="row">
                                <div class="col-4 px-1">
                                    <img src="https://www.thispersondoesnotexist.com/image" class="rounded img-fluid" alt="img">
                                </div>
                                <div class="col-4 px-1">
                                    <img src="https://www.thispersondoesnotexist.com/image" class="rounded img-fluid" alt="img">
                                </div>
                                <div class="col-4 px-1">
                                    <img src="https://www.thispersondoesnotexist.com/image" class="rounded img-fluid" alt="img">
                                </div>
                            </div>
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
                                        <img src="https://www.thispersondoesnotexist.com/image" alt="user-profile" class="rounded-circle img-fluid"><span class="xp-social-profile-live"></span>
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
                                        <h5 class="my-1 text-black">karina_simons</h5>
                                    </div>
                                    <div class="xp-social-profile-subtitle">
                                        <p class="mb-3 text-muted">Karina Simons</p>
                                    </div>
                                    <div class="xp-social-profile-desc">
                                        <p class="text-muted mb-1">Lifestyle coach and photographer <br />delivering best images only...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xp-social-profile-bottom text-center">
                            <div class="row">
                                <div class="col-4">
                                    <div class="xp-social-profile-media pt-3">
                                        <h5 class="text-black my-1">45</h5>
                                        <p style="font-size:10px;" class="mb-0 text-muted">Wipers today</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="xp-social-profile-followers pt-3">
                                        <h5 class="text-black my-1">27</h5>
                                        <p style="font-size:10px;" class="mb-0 text-muted">Average</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="xp-social-profile-following pt-3">
                                        <h5 class="text-black my-1">552</h5>
                                        <p style="font-size:10px;" class="mb-0 text-muted">Total</p>
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
        <div class="col-md-12 col-lg-12 col-xl-12 align-self-center">
            <div class="card bg-white m-b-30">
                <div class="card-header bg-white">
                    <h5 style="text-align:center;" class="card-title text-black mb-0">Our Projects</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr style="text-align:center;">
                                    <th class="border-top-0">Room number</th>
                                    <th class="border-top-0">Who deposit</th>
                                    <th class="border-top-0">When</th>
                                    <th class="border-top-0">Total(Days)</th>
                                    <th class="border-top-0">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="text-align:center;">
                                    <td>1</td>
                                    <td>
                                        <a href="javascript:void(0);">Diego</a>
                                    </td>
                                                                    
                                    <td>01/05/2018</td>
                                    <td>30</td>
                                    <td><button type="button" class="btn btn-success">Info</button></td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td>12</td>
                                    <td>
                                        <a href="javascript:void(0);">Samuel</a>
                                    </td>
                                                                   
                                    <td>01/05/2018</td>
                                    <td>8</td>
                                    <td><button type="button" class="btn btn-success">Info</button></td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td>10</td>
                                    <td>
                                        <a href="javascript:void(0);">Gerardo</a>
                                    </td>
                                                                   
                                    <td>01/05/2018</td>
                                    <td>12</td>
                                    <td><button type="button" class="btn btn-success">Info</button></td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td>11</td>
                                    <td>
                                        <a href="javascript:void(0);">Talita</a>
                                    </td>
                                                                   
                                    <td>01/05/2018</td>
                                    <td>55</td>
                                    <td><button type="button" class="btn btn-success">Info</button></td>
                                 
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