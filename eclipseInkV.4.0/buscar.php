<? /*иииииии VAR GLOBALES иииииииииииии*/ ?>
<?
	require("VariablesGlobales.php")
?>
<? /*ииииииииииииииииииииииииииииииииии*/ ?>
<? /*ииииииии   METAS TAGS ииииииииииии*/ ?>
<?
	$meta_Subject="www.EclipseInk.com.ar/buscar";
	$meta_Title="Eclipse INK - Buscar";
?>
<? /*ииииииииииииииииииииииииииииииииии*/ ?>
<? /*ииииииии PARTE ARRIBA ииииииииииии*/ ?>
<?
	require("partearriba.php");
?>
<? /*ииииииии PARTE CENTRAL иииииииииии*/ ?>
	<div class="division">
		<div id="ladoa">
			<div class="cajaIzquierda">
				<div class="cajaIzquierdaTitulolado"></div>
				<div class="cajaIzquierdaTitulo cajaIzquierdaTituloTexto"> En Facebook</div>
				<div class="cajaIzquierdaTitulolado cajaIzquierdaTituloladoD"></div>
				<div class="cajaIzquierdaresto">
				<div class="Resto_centro  Display_None" name="ObjetosExternos" id="Plugface">
					<iframe src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/EclipseINK&width=200px&colorscheme=light&connections=10&stream=false&header=true&height=300" scrolling="no" frameborder="0" style="border:none;overflow:hidden;width:200px;height:300px;margin-top:10px" allowTransparency="true"></iframe>
				</div>
				</div>
			</div>
			<? if(Bandera("publicidad")) { ?>
				<div class="cajaIzquierda">
					<div class="cajaIzquierdaTitulolado"></div>
					<div class="cajaIzquierdaTitulo cajaIzquierdaTituloTexto">Publicidad</div>
					<div class="cajaIzquierdaTitulolado cajaIzquierdaTituloladoD"></div>
					<div class="cajaIzquierdaresto">
					<div class="Resto_centro  Display_None" name="ObjetosExternos" id="publicidadCuadrado">
							<? echo Obtener_Banner("Cuadrado") ?>
					</div>
					</div>
				</div>
			<? } ?>
			<div class="cajaIzquierda">
				<div class="cajaIzquierdaTitulolado"></div>
				<div class="cajaIzquierdaTitulo cajaIzquierdaTituloTexto">Nube de Tags</div>
				<div class="cajaIzquierdaTitulolado cajaIzquierdaTituloladoD"></div>
				<div class="cajaIzquierdaresto">
					<div class="Tags">
						<? Generar_Tag() ?>
					</div>
				</div>
			</div>
			<? if(Bandera("publicidad")) { ?>
				<div class="cajaIzquierda">
					<div class="cajaIzquierdaTitulolado"></div>
					<div class="cajaIzquierdaTitulo cajaIzquierdaTituloTexto">Publicidad</div>
					<div class="cajaIzquierdaTitulolado cajaIzquierdaTituloladoD"></div>
					<div class="cajaIzquierdaresto">
						<div class="Resto_centro  Display_None"  name="ObjetosExternos" id="PublicidadV">
							<? echo Obtener_Banner("v") ?>
						</div>
					</div>
				</div>
			<? } ?>
		</div>	
		<div id="ladob">
			<div class="cajaDerecha">
				<div id="cse" ><div class="cargando art_fuente_Trebuchet">Cargando...</div></div>
				<script src="http://www.google.com/jsapi" type="text/javascript"></script>
				<script type="text/javascript">
					google.load('search', '1', {language : 'es', style : google.loader.themes.SHINY});
					google.setOnLoadCallback(function() {
					var customSearchControl = new google.search.CustomSearchControl('005835928998400103699:qskmvtvllly');
					customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
					customSearchControl.draw('cse');
					<? if (isset($keyw) && trim($keyw)!=""){ echo "customSearchControl.execute('".$keyw."');";	}?>
					}, true);
				</script>
				<style type="text/css">
					.gsc-control-cse {
						font-family: "Trebuchet MS", sans-serif;
						border-color: #fff;
						background-color: #FFF;
					}
					input.gsc-input {
						border-color: #8A99A6;
					}
					input.gsc-search-button {
						border-color: #8A99A6;
						background-color: #D0D1D4;
					}
					.gsc-tabHeader.gsc-tabhInactive {
						border-color: #B2BDC6;
						background-color: #B2BDC6;
					}
					.gsc-tabHeader.gsc-tabhActive {
						border-color: #8A99A6;
						background-color: #8A99A6;
					}
					.gsc-tabsArea {
						border-color: #8A99A6;
					}
					.gsc-webResult.gsc-result {
						border-color: #FFFFFF;
						background-color: #FFFFFF;
					}
					.gsc-webResult.gsc-result:hover {
						border-color: #ffffff;
						background-color: #ffffff;
					}
					.gs-webResult.gs-result a.gs-title:link,
					.gs-webResult.gs-result a.gs-title:link b {
						color: #055261;
						font-weight: bold;
					}
					.gs-webResult.gs-result a.gs-title:visited,
					.gs-webResult.gs-result a.gs-title:visited b {
						color: #4c4c4c;
					}
					.gs-webResult.gs-result a.gs-title:hover,
					.gs-webResult.gs-result a.gs-title:hover b {
						color: #000000;
					}
					.gs-webResult.gs-result a.gs-title:active,
					.gs-webResult.gs-result a.gs-title:active b {
						color: #055261;
					}
					.gsc-cursor-page {
						color: #055261;
					}
					a.gsc-trailing-more-results:link {
						color: #055261;
					}
					.gs-webResult.gs-result .gs-snippet {
						color: #5F6A73;
					}
					.gs-webResult.gs-result .gs-visibleUrl {
						color: #5F6A73;
					}
					.gs-webResult.gs-result .gs-visibleUrl-short {
						color: #5F6A73;
					}
					.gs-webResult.gs-result .gs-visibleUrl-short {
						display: none;
					}
					.gs-webResult.gs-result .gs-visibleUrl-long {
						display: block;
					}
					.gsc-cursor-box {
						border-color: #FFFFFF;
					}
					.gsc-results .gsc-cursor-page {
						border-color: #B2BDC6;
						background-color: #FFFFFF;
					}
					.gsc-results .gsc-cursor-page.gsc-cursor-current-page {
						border-color: #8A99A6;
						background-color: #8A99A6;
					}
					.gs-promotion.gs-result {
						border-color: #D2D6DC;
						background-color: #D0D1D4;
					}
					.gs-promotion.gs-result a.gs-title:link {
						color: #055261;
					}
					.gs-promotion.gs-result a.gs-title:visited {
						color: #055261;
					}
					.gs-promotion.gs-result a.gs-title:hover {
						color: #055261;
					}
					.gs-promotion.gs-result a.gs-title:active {
						color: #055261;
					}
					.gs-promotion.gs-result .gs-snippet {
						color: #333333;
					}
					.gs-promotion.gs-result .gs-visibleUrl,
					.gs-promotion.gs-result .gs-visibleUrl-short {
						color: #5F6A73;
					}
				</style> 
			</div>
			<? if(Bandera("publicidad")) { ?>
				<div class="cajaDerecha Display_None" name="ObjetosExternos" id="publicidadhg">
					<? echo Obtener_Banner("hg") ?>
				</div>
			<? } ?>
			<div class="cajaDerecha" name="ObjetosExternos" id="publicidadhg">
				<p align="center">
					<a class="linkart" href="JavaScript:$('body').scrollTo(0)"><b>Ir al cielo</b></a>
				</p>
			</div>
		</div>
	</div>
	<div class="clear_A"></div>
<? /*ииииииииииииииииииииииииииииииииии*/ ?>
<? /*ииииииии PARTE ABAJO иииииииииииии*/ ?>
<?
	require("parteabajo.php");
?>
<? /*ииииииииииииииииииииииииииииииииии*/ ?>