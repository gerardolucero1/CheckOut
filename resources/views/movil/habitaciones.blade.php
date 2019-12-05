@section('title') 
Hotels
@endsection
@extends('layouts.main')
@section('style')
<!-- DataTables CSS -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<style>
.xp-topbar{
    display: none !important;
}
.xp-breadcrumbbar{
    display: none !important;
}
.xp-footerbar{
    display: none !important;
}
.contenedor-menu{
    -webkit-box-shadow: 0px 0px 5px 0px rgba(166,166,166,1);
-moz-box-shadow: 0px 0px 5px 0px rgba(166,166,166,1);
box-shadow: 0px 0px 5px 0px rgba(166,166,166,1);
position: fixed; 
bottom: 0; 
width: 100vw; 
padding: 0; 
padding:0px 25px 0px 25px; 
border-top:solid; 
border-top-width: 1px; 
padding-top: 8px;
background: white;
z-index: 10;
}
.num-cuarto{
    text-align: center; 
    position: absolute; 
    right: 51px; 
    font-weight: bold;
    color: gray;
}
</style>
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar">

</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="container-fluid h-100" style="padding: 0; background: white">
    <!-- Start XP Row -->
    <div style="width: 100%; position: relative; background: white">
        <img src="{{asset('assets/images/iconopuerta.png')}}" alt="" style="position:absolute; margin-left: 28.5%; top: 40px; z-index: 10" width="45%">
        <img style="width: 100%" src="{{asset('assets/images/cabecera.png')}}">
    </div>
    <div class="contenedor-menu">
        <div class="row">
            <div class="col-4" style="padding-bottom: 8px">
                <a href="{{ route('checklist.index') }}"><img src="{{asset('assets/images/menu1.png')}}" style="width: 60%; margin-left: 20%" alt=""></a>
            </div>
            <div class="col-4" style="padding-bottom: 8px">
                <a href="{{ route('inicio.index') }}"><img src="{{asset('assets/images/menu2.png')}}" style="width: 60%; margin-left: 20%" alt=""></a>
            </div>
            <div class="col-4" style="padding-bottom: 8px">
                <a href="{{ route('chat.index') }}"><img src="{{asset('assets/images/menu3.png')}}" style="width: 60%; margin-left: 20%" alt=""></a>
            </div>
        </div>
    </div>

    <div class="row" style="padding: 15px; width: 100%; max-height: 65vh; overflow: scroll; background: white; padding-bottom: 50px; padding-top:40px; margin-left: 0; margin-right: 0;">
        <p style="text-align: center; width: 100%; font-size: 18px; padding-bottom: 15px;">CHECK OUTS</p>
        <div class="col-4"><a href="{{ route('habitacion.index') }}">
                <div class="num-cuarto">100</div>
            <img src="{{asset('assets/images/iconoVD.png')}}" width="90%" style="margin-left: 5%" alt="">
            </a>
        </div>
        <div class="col-4">
            <div class="num-cuarto">102</div>
            <img src="{{asset('assets/images/iconoDND.png')}}" width="90%" style="margin-left: 5%" alt="">
        </div>
        <div class="col-4">
            <div class="num-cuarto">103</div>
            <img src="{{asset('assets/images/iconoOD.png')}}" width="90%" style="margin-left: 5%" alt="">
        </div>
        <!--Stay overs-->
        <p style="text-align: center; width: 100%; font-size: 18px; padding-bottom: 15px; padding-top: 25px">STAY OVERS</p>
        <div class="col-4">
            <div class="num-cuarto">104</div>
            <img src="{{asset('assets/images/iconoVD.png')}}" width="90%" style="margin-left: 5%" alt="">
        </div>
        <div class="col-4">
            <div class="num-cuarto">105</div>
            <img src="{{asset('assets/images/iconoVD.png')}}" width="90%" style="margin-left: 5%" alt="">
        </div>
        <div class="col-4">
            <div class="num-cuarto">106</div>
            <img src="{{asset('assets/images/iconoDND.png')}}" width="90%" style="margin-left: 5%" alt="">
        </div>
        <div class="col-4">
            <div class="num-cuarto">107</div>
            <img src="{{asset('assets/images/iconoDND.png')}}" width="90%" style="margin-left: 5%" alt="">
        </div>
        <div class="col-4">
            <div class="num-cuarto">108</div>
            <img src="{{asset('assets/images/iconoOD.png')}}" width="90%" style="margin-left: 5%" alt="">
        </div>
        <div class="col-4">
            <div class="num-cuarto">109</div>
            <img src="{{asset('assets/images/iconoOD.png')}}" width="90%" style="margin-left: 5%" alt="">
        </div>
        <div class="col-4">
            <div class="num-cuarto">110</div>
            <img src="{{asset('assets/images/iconoVD.png')}}" width="90%" style="margin-left: 5%" alt="">
        </div>
        <div class="col-4">
            <div class="num-cuarto">111</div>
            <img src="{{asset('assets/images/iconoVD.png')}}" width="90%" style="margin-left: 5%" alt="">
        </div>
        <div class="col-4">
            <div class="num-cuarto">112</div>
            <img src="{{asset('assets/images/iconoVD.png')}}" width="90%" style="margin-left: 5%" alt="">
        </div>
        <div class="col-4">
            <div class="num-cuarto">113</div>
            <img src="{{asset('assets/images/iconoVD.png')}}" width="90%" style="margin-left: 5%" alt="">
        </div>
        <div class="col-4">
            <div class="num-cuarto">114</div>
            <img src="{{asset('assets/images/iconoVD.png')}}" width="90%" style="margin-left: 5%" alt="">
        </div>
        <div class="col-4">
            <div class="num-cuarto">115</div>
            <img src="{{asset('assets/images/iconoVD.png')}}" width="90%" style="margin-left: 10%" alt="">
        </div>
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