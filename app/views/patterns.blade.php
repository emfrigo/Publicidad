 @extends('basic')

 @section('content')
 
 {{ HTML::style('css/map.css') }}

<div id="modal_window" class="modal_window">
		<div class="toolbar">
			<button class="btn btn-flat btn-default btn-sm close_modal">
				<i class="fa fa-4x fa-times"></i>
			</button>
		</div>
	<div class="modal-container"></div>
</div>

<!-- Inicio Mapa de la republica -->
<section class="content map-iframe">
	<div class="box box-solid">
		<div id="map">
			<div id="tooltip"></div> <!-- aqui se despliegan los nombres de los estados -->
			<div id="mapa_pub" >Publicidad</div>
			<div id="mapa_ga" >GA Comunicacion</div>
			<svg width="660" height="550" id="statesvg"></svg> <!-- area de dibujo -->
		</div>
	</div>
</section>
<!-- Fin Mapa de la republica -->

<!-- Modal Mapa -->
<div id="modal-cst-info" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title" id="">Modal Title</h3>
				<small class="modal-state">Estado</small>
			</div>
			<div class="modal-body">
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Capital.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Diario de Mexico.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Diario de Mexico USA.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Diario DF.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Diario Oficial de la Federacion.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/El Economista.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/El Grafico.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/El Reforma.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/El Sol de Mexico.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/El Universal.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Estadio.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Esto.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Excelsior.jpg'); }}"></button>
				<button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-titulares"><img src="{{ asset('img/Impacto.jpg'); }}"></button>
				<button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-titular"><img src="{{ asset('img/La Cronica.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-seguridad"><img src="{{ asset('img/La Jornada De Mexico.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-federal"><img src="{{ asset('img/La Prensa.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-estatal"><img src="{{ asset('img/La Razon.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-columnas"><img src="{{ asset('img/Mas Por Mas.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Metro DF.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Milenio.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Publimetro DF.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Punto Critico.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Record DF.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Reporte Indigo.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Rumbo de Mexico.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Siempre.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/The News.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Uno Mas Uno.jpg'); }}"></button>
                <button type="button" class="btn btn-sm btn-modal-map" id="btn-consultar-cartones"><img src="{{ asset('img/Veinticuatro Horas.jpg'); }}"></button>
               <!--<button type="button" class="btn btn-sm btn-primary btn-danger" id="btn-consultar-flipping">Flipping Book</button>-->
            </div>
            <div class="modal-footer">
            	<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
            </div>
		</div>
    </div>
</div>
<!-- END Modal Mapa -->


<!-- jQuery 2.1.3 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- INICIA SCRIPTS PARA EL MAPA DE CONSULTAS-->
        {{ HTML::script( 'js/map.js' ) }}
        <script type="text/javascript">     var _main_path = '{{ URL::to("/") }}';  </script>
        <script src="http://d3js.org/d3.v3.min.js"></script>
        <script>
            $("#modal-cst-info").hide();
            function tooltipHtml(n, d){ /* FUNCION PARA MOSTRAR EL NOMBRE DEL ESTADO EN EL MAPA :s */
                return "<h4>"+n+"</h4><p>Numero de Medios: "+Math.round(10*Math.random())+"</p>";
            }
    
            var sampleData ={};
            [ "SN", "VZ", "CHP", "OAX", "GRO", "TAB", "MIC", "PUE", "MOR", "EMX", "COL", "CAM", "JAL", "DF", "TLA", "HID", 
            "GUA", "QUE", "YUC", "ZAC", "SLP", "AGU", "QROO", "NY", "DG", "NL", "COA", "SIN", "CH", "BCS", "BCN", "TAM" 
            ].forEach(function(d){ 
                var low=Math.round(100*Math.random()), 
                mid=Math.round(100*Math.random()), 
                high=Math.round(100*Math.random());
            
                sampleData[d]={low:d3.min([low,mid,high]), high:d3.max([low,mid,high]), 
                    avg:Math.round((low+mid+high)/3), alter_color:d3.interpolate("#FE0000", "#FE0000")(low/100) , color:d3.interpolate("#848484", "#848484")(low/100)}; 
            });
    
            /* DIBUJAR LOS ESTADOS EN EN SVG */   
            uStates.draw("#statesvg", sampleData, tooltipHtml);
        
        </script>
<!-- FIN SCRIPTS PARA EL MAPA DE CONSULTAS-->

 @stop
