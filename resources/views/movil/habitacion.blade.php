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
<div class="container-fluid h-100" style="padding: 0; background: white">
    <div id="problemasTecnicos" style="width: 100%; height: 100%; position: absolute; z-index: 20; background:rgba(0,0,0,.2); display:none">
        <div style="margin-top: 20vh; width: 90%; margin-left: 5%; background: white; border-radius: 15px; padding:20px; color:gray">
            <div style="border-top:solid; border-bottom:solid; width: 40%; margin-left: 30%; border-collapse: grey; height: 10px; border-width: 1px; margin-bottom: 15px;">
            
            </div>
        <p style="text-align: center; color:blue">Selecciona los problemas técnicos de la habitación</p>
        <label for=""><input type="checkbox"> Foco fundido</label><br>
        <label for=""><input type="checkbox"> Alfombra manchada</label><br>
        <label for=""><input type="checkbox"> Mancha regadera</label><br>
        <label for=""><input type="checkbox"> Regadera tapada</label><br>
        <label for=""><input type="checkbox"> Problemas con el agua</label><br>
        <button onclick="cerrarProblemasTecnicos()" style="width: 70%; margin-left: 17.5%; padding:8px; margin-top: 20px;  border-radius: 40px; background: #18304C; border: none; color: white; text-align: center">Guardar</button>
        <button onclick="cerrarProblemasTecnicos()" style="width: 70%; margin-left: 17.5%; padding:8px; margin-top: 20px;  border-radius: 40px; background: #18304C; border: none; color: white; text-align: center">Cancelar</button>
        </div>
    </div>

    <div id="evidenciaMuySucia" style="width: 100%; height: 100%; position: absolute; z-index: 20; background:rgba(0,0,0,.2); display:none">
        <div style="margin-top: 20vh; width: 90%; margin-left: 5%; background: white; border-radius: 15px; padding:20px; color:gray">
            <div style="border-top:solid; border-bottom:solid; width: 40%; margin-left: 30%; border-collapse: grey; height: 10px; border-width: 1px; margin-bottom: 15px;">
            
            </div>
        <p style="text-align: center; color:blue">Captura la evidencia de la habitación muy sucia</p>
        <p style="color: blue; font-size: 40px; text-align: center"><i class="fa fa-camera"></i></p>
        <button onclick="continuarMuySucia()" style="width: 70%; margin-left: 17.5%; padding:8px; margin-top: 20px;  border-radius: 40px; background: #18304C; border: none; color: white; text-align: center">Guardar</button>
        <button onclick="cerrarEvidenciaMuySucia()" style="width: 70%; margin-left: 17.5%; padding:8px; margin-top: 20px;  border-radius: 40px; background: #18304C; border: none; color: white; text-align: center">Cancelar</button>
        </div>
    </div>

    <div id="noSePuedeLimpiar" style="width: 100%; height: 100%; position: absolute; z-index: 20; background:rgba(0,0,0,.2); display:none">
        <div style="margin-top: 20vh; width: 90%; margin-left: 5%; background: white; border-radius: 15px; padding:20px; color:gray">
            <div style="border-top:solid; border-bottom:solid; width: 40%; margin-left: 30%; border-collapse: grey; height: 10px; border-width: 1px; margin-bottom: 15px;">
            
            </div>
        <p style="text-align: center; color:blue">Selecciona por qué no se puede limpiar</p>
        <label for=""><input type="checkbox"> DND</label><br>
        <label for=""><input type="checkbox"> No requiere servicio</label><br>
        <label for=""><input type="checkbox"> Volver más tarde</label><br>
        <label for=""><input type="checkbox"> Cliente en el cuarto</label><br>
        <label for=""><input type="checkbox"> Mascota en la habitación</label><br>
        <label for=""><input type="checkbox"> Otro</label><br>
        <button onclick="continuarNosepuedelimpiar()" style="width: 70%; margin-left: 17.5%; padding:8px; margin-top: 20px;  border-radius: 40px; background: #18304C; border: none; color: white; text-align: center">Guardar</button>
        <button onclick="cerrarNosepuedelimpiar()" style="width: 70%; margin-left: 17.5%; padding:8px; margin-top: 20px;  border-radius: 40px; background: #18304C; border: none; color: white; text-align: center">Cancelar</button>
        </div>
    </div>

    <div id="extras" style="width: 100%; height: 100%; position: absolute; z-index: 20; background:rgba(0,0,0,.2); display:none">
        <div style="margin-top: 20vh; width: 90%; margin-left: 5%; background: white; border-radius: 15px; padding:20px; color:gray">
            <div style="border-top:solid; border-bottom:solid; width: 40%; margin-left: 30%; border-collapse: grey; height: 10px; border-width: 1px; margin-bottom: 15px;">
            
            </div>
        <p style="text-align: center; color:blue">Extras</p>
        <label for=""><input type="checkbox"> TOOTBRUSH</label><br>
        <label for=""><input type="checkbox"> TOOTBRUSH</label><br>
        <label for=""><input type="checkbox"> TOOTBRUSH</label><br>
        <label for=""><input type="checkbox"> TOOTBRUSH</label><br>
        <label for=""><input type="checkbox"> TOOTBRUSH</label><br>
        <button onclick="cerrarExtras()" style="width: 70%; margin-left: 17.5%; padding:8px; margin-top: 20px;  border-radius: 40px; background: #18304C; border: none; color: white; text-align: center">Aceptar</button>
        <button onclick="cerrarExtras()" style="width: 70%; margin-left: 17.5%; padding:8px; margin-top: 20px;  border-radius: 40px; background: #18304C; border: none; color: white; text-align: center">Cancelar</button>
        </div>
    </div>
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

    <div id="SeleccionSucio" class="row" style="padding-top: 35px; width: 80%; margin-left:10%; max-height: 65vh; overflow: scroll; padding-bottom: 150px; display:inline-flex">
        <p style="text-align: center; width: 100%; font-size: 18px; padding-bottom: 55px;"></p>
        <div class="col-4">
            <img onclick="BtnNormal()" src="{{asset('assets/images/icono-normal.png')}}" alt="" style="width: 100%;">
            <p style="text-align: center; font-size: 13px; width: 100%">Normal</p>
        </div>
        <div class="col-4">
            <img onclick="BtnSucio()" src="{{asset('assets/images/icono-sucia.png')}}" alt="" style="width: 100%;">
            <p style="text-align: center; font-size: 13px; width: 100%">Sucia</p>
        </div>
        <div class="col-4">
            <img onclick="MuySucia()" src="{{asset('assets/images/icono-muy-sucia.png')}}" alt="" style="width: 100%;">
            <p style="text-align: center; font-size: 13px; width: 100%">Muy Sucia</p>
        </div>
        <button onclick="noSePuedeLimpiar()" style="width: 70%; margin-left: 17.5%; padding:8px; margin-top: 20px;  border-radius: 40px; background: #18304C; border: none; color: white; text-align: center">No se puede limpiar</button>
        </div>

    <div id="Iniciar" class="row" style="padding-top: 35px; width: 100%; height: 65vh; overflow: scroll; margin-left: 0; margin-right: 0; display: none">
            <img onclick="Inicio()" style="width: 60%; margin-left: 20%; margin-top:50px" src="{{asset('assets/images/boton-iniciar.png')}}">
            <button onclick="noSePuedeLimpiar()" style="width: 70%; margin-left: 17.5%; padding:8px; margin-top: 20px;  border-radius: 40px; background: #18304C; border: none; color: white; text-align: center">No se puede limpiar</button>
            <button onclick="Cambiar()" style="width: 70%; margin-left: 17.5%; padding:8px; margin-top: 20px;  border-radius: 40px; background: white; border: none; color: grey; text-align: center">Cambiar</button>
            </div>

    <div id="Finalizar" class="row" style="padding-top: 35px; width: 100%; height: 65vh; overflow: scroll; margin-left: 0; margin-right: 0; display: none;">
            <img onclick="final()" style="width: 60%; margin-left: 20%; margin-top:50px" src="{{asset('assets/images/boton-finalizar.png')}}">
            <p style="text-align: center; font-size: 20px; padding-top: 20px">TIEMPO:</p>
            <p style="text-align: center; font-size: 30px; font-weight: bold"><span id="minutos">00</span>:<span id="segundos">00</span></p>
            <div style="width: 100%; height: 100px;"></div>
            </div>
    <div id="Resumen" class="row" style="padding-top: 35px; width: 100%; height: 65vh; overflow: scroll; margin-left: 0; margin-right: 0; display: none;">
        <div style="width: 100%; position: relative">
            <p style="position: absolute; text-align: center; padding-top: 130px; font-size: 18px; width: 100%">Tiempo:</p>
            <p style="position: absolute; text-align: center; padding-top: 160px; font-size: 25px; width: 100%; font-weight: bold"><span id="minutosFinal">00</span>:<span id="segundosFinal">00</span></p>
            <img style="width: 60%; margin-left: 20%; margin-top:50px" src="{{asset('assets/images/circulo-tiempo.png')}}">
            <button onclick="problemasTecnicos()" style="width: 70%; margin-left: 17.5%; padding:8px; margin-top: 20px;  border-radius: 40px; background: #18304C; border: none; color: white; text-align: center"><i class="fa fa-wrench" style="color:white"></i> Falla</button>
            <button onclick="abrirExtras()" style="width: 70%; margin-left: 17.5%; padding:8px; margin-top: 20px;  border-radius: 40px; background: #18304C; border: none; color: white; text-align: center"><i class="fa fa-list" style="color:white"></i> Extra</button>
            <a href="{{ route('evidencias1.index') }}"><button style="width: 70%; margin-left: 17.5%; padding:8px; margin-top: 20px;  border-radius: 40px; background: white; border: none; color: grey; text-align: center">Continuar</button></a>
        </div>
            <div style="width: 100%; height: 120px;"></div>
            </div>

   
    
    
    
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
function noSePuede(){
    document.getElementById('evidenciaMuySucia').style.display="block";
}
function noSePuedeLimpiar(){
    document.getElementById('noSePuedeLimpiar').style.display="block";
}
function MuySucia(){
    document.getElementById('evidenciaMuySucia').style.display="block";
}
function cerrarEvidenciaMuySucia(){
    document.getElementById('evidenciaMuySucia').style.display="none";
}
function continuarMuySucia(){
    document.getElementById('evidenciaMuySucia').style.display="none";
    BtnMuySucio();
}

function continuarNosepuedelimpiar(){
    window.location.href='habitaciones';
}
function cerrarNosepuedelimpiar(){
    document.getElementById('noSePuedeLimpiar').style.display="none";
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