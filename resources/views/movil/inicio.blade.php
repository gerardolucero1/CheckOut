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
}
</style>
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar">

</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="container-fluid h-100" style="padding: 0;">
    <!-- Start XP Row -->
    <div style="width: 100%; position: relative">
        <img src="{{asset('assets/images/img-empleado.png')}}" alt="" style="position:absolute; margin-left: 28.5%; top: 40px" width="45%">
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
    
    <div class="row" style="padding-top: 35px; width: 80%; margin-left:10%">
    <p style="text-align: center; width: 100%; font-size: 18px; padding-bottom: 25px;">Ada Lima</p>
    <div class="col-4" style="position: relative">
        <div style="background: #FF2100; border-radius: 40px; color: white; text-align: center; padding: 6px; position: absolute; right: 10px; top:-10px; width: 35px">
            16
        </div>
        <a href="{{ route('habitaciones.index') }}"><img src="{{asset('assets/images/icono-limpieza.png')}}" alt="" style="width: 90%; margin-left: 5%"></a>
    </div>
    <div class="col-4">
        <a href="{{ route('chat.index') }}"> <img src="{{asset('assets/images/icono-mensajes.png')}}" alt="" style="width: 90%; margin-left: 5%"></a>
    </div>
    <div class="col-4">
        <a href="{{ route('checklist.index') }}"><img src="{{asset('assets/images/icono-checklist.png')}}" alt="" style="width: 90%; margin-left: 5%"></a>
    </div>

    <p style="text-align: center; width: 100%; font-size: 14px; padding-top: 25px;">Buenos dias Ada Lima <br> Recuerda atender con una sonrisa.</p>
    <img src="{{asset('assets/images/rating-empleado.png')}}" alt="" style="width: 70%; margin-left: 15%; margin-top: 20px; margin-bottom: 20px;">
    <a href="{{ route('habitaciones.index') }}" style="width: 70%; margin-left: 17.5%; padding:8px; margin-top: 20px;  border-radius: 40px; background: #18304C; border: none; color: white; text-align: center">Iniciar</a>

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