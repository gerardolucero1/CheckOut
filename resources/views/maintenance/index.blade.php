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
                                    <th class="border-top-0">Who deposit</th>
                                    <th class="border-top-0">When</th>
                                    <th class="border-top-0">Total(Days)</th>
                                    <th class="border-top-0">Evidence</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="text-align:center;">
                                    <td>1</td>
                                    <td>
                                        <a href="javascript:void(0);">Ada Lima</a>
                                    </td>
                                                                    
                                    <td>01/05/2018</td>
                                    <td>30</td>
                                    <td><button type="button" class="btn btn-success">
                                            <i class="fa fa-camera"></i>    
                                    </button></td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td>12</td>
                                    <td>
                                        <a href="javascript:void(0);">Ana Aparicio</a>
                                    </td>
                                                                   
                                    <td>01/05/2018</td>
                                    <td>8</td>
                                    <td><button type="button" class="btn btn-success">
                                            <i class="fa fa-camera"></i>   
                                    </button></td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td>10</td>
                                    <td>
                                        <a href="javascript:void(0);">Dora Ortiz</a>
                                    </td>
                                                                   
                                    <td>01/05/2018</td>
                                    <td>12</td>
                                    <td><button type="button" class="btn btn-success">
                                        <i class="fa fa-camera"></i>
                                    </button></td>
                                </tr>
                             
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Maintenance</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
             <p>Some kind of maintenance</p>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
      </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
       
        <!-- End XP Col -->
    </div> 
    <div class="container">
            <calendar-component></calendar-component>
    </div>
<br>
<br>
<br>

    
</div>
<!-- End XP Contentbar -->
@endsection 
@section('script')
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