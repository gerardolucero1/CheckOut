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
    padding:8px; 
    text-align: center; 
    background: #ED2024; 
    border-radius: 80px; 
    position: absolute; 
    right: 120px; 
    top: 75px;
    z-index: 12;
    font-size: 17px;
    font-weight: bold;
    color: white;
}
</style>
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar">

</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="container-fluid h-100" style="padding: 0; background: white;">

    <!-- Start XP Row -->
    <div style="width: 100%; position: relative; background: white">
        <div class="num-cuarto">100</div>
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

    <p style="width: 100%; text-align: center; font-size: 20px; padding-top: 15px; margin-top: 14vh">Fotografías</p>

    <button onclick="abrirExtras()" style="width: 70%; margin-left: 17.5%; padding:8px; margin-top: 20px;  border-radius: 40px; background: #18304C; border: none; color: white; text-align: center;"><i class="fa fa-camera" style="color:white"></i> Cocineta</button>
    <button onclick="abrirExtras()" style="width: 70%; margin-left: 17.5%; padding:8px; margin-top: 20px;  border-radius: 40px; background: #18304C; border: none; color: white; text-align: center"><i class="fa fa-camera" style="color:white"></i> Ropero</button>

    <p style="width: 100%; text-align: center; font-size: 20px; padding-top: 15px">Fotos <br> 3/3</p>

    <a href="{{ route('habitaciones.index') }}"><button style="width: 70%; margin-left: 17.5%; padding:8px; margin-top: 20px;  border-radius: 40px; background: white; border: none; color: grey; text-align: center; border:solid; border-color:gray; border-width: 1px">Continuar</button></a>

   
    
    
    
    <!-- End XP Row -->
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')
<script>
function BtnNormal(){
document.getElementById('SeleccionSucio').style.display="none";
document.getElementById('Iniciar').style.display="inline";
}
function BtnSucio(){
document.getElementById('SeleccionSucio').style.display="none";
document.getElementById('Iniciar').style.display="inline";
}
function BtnMuySucio(){
document.getElementById('SeleccionSucio').style.display="none";
document.getElementById('Iniciar').style.display="inline";
}

function Cambiar(){
document.getElementById('SeleccionSucio').style.display="inline-flex";
document.getElementById('Iniciar').style.display="none";
}
function Inicio(){
    document.getElementById('SeleccionSucio').style.display="none";
    document.getElementById('Iniciar').style.display="none";
    document.getElementById('Finalizar').style.display="inline";
    carga();
}
function final(){
    document.getElementById('SeleccionSucio').style.display="none";
    document.getElementById('Iniciar').style.display="none";
    document.getElementById('Finalizar').style.display="none";
    document.getElementById('Resumen').style.display="inline";
    tiempoFinal();
    
}
function problemasTecnicos(){
    document.getElementById('problemasTecnicos').style.display="block";
}
function cerrarProblemasTecnicos(){
    document.getElementById('problemasTecnicos').style.display="none";
}

function abrirExtras(){
    document.getElementById('extras').style.display="block";
}
function cerrarExtras(){
    document.getElementById('extras').style.display="none";
}

function carga()
	{
		contador_s =0;
		contador_m =0;
		s = document.getElementById("segundos");
		m = document.getElementById("minutos");
        sf = document.getElementById("segundosFinal");
		mf = document.getElementById("minutosFinal");

		cronometro = setInterval(
			function(){
				if(contador_s==60)
				{
					contador_s=0;
					contador_m++;
                    if(contador_m<10){
					m.innerHTML = '0'+contador_m;
                    }else{
                    m.innerHTML = contador_m; 
                    }

					if(contador_m==60)
					{
						contador_m=0;
					}
				}

                if(contador_s<10){
				s.innerHTML = '0'+contador_s;
                sf.innerHTML = '0'+contador_s;
				contador_s++;
                }else{
                    s.innerHTML = contador_s;
                    sf.innerHTML = '0'+contador_s;
				contador_s++;
                }

			}
			,1000);

	}
    function tiempoFinal(){
        s = document.getElementById("segundos").innerHTML;
		m = document.getElementById("minutos").innerHTML;
        sf = document.getElementById("segundosFinal").innerHTML=s;
		mf = document.getElementById("minutosFinal").innerHTML=m;
        
    }
</script>
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