<? /*จจจจจจจ VAR GLOBALES จจจจจจจจจจจจจ*/ ?>
<?
	require("VariablesGlobales.php")
?>
<? /*จจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจ*/ ?>
<? /*จจจจจจจจ   METAS TAGS จจจจจจจจจจจจ*/ ?>
<?
$meta_Description="Para el Programador que llevas a dentro. Recursos, Codigos Fuentes, Programas, Tip, Hack. Todo en Un Solo Lugar";
$meta_Keywords="Descargas, Programas, Codigos Fuentes, Recursos,Ejemplos, Ajax, ASP, C++, CSS, Flash, HTML, JavaScript, MySQL, PHP, SQL, Visual Basic, Otros,Descargas, Programas, Codigos Fuentes, Recursos";
$meta_Subject="www.EclipseInk.com.ar/version";
$meta_Title="Eclipse INK - Version";
?>
<? /*จจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจ*/ ?>
<? /*จจจจจจจจ PARTE ARRIBA จจจจจจจจจจจจ*/ ?>
<?
	require("partearriba.php");
?>
<? /*จจจจจจจจ PARTE CENTRAL จจจจจจจจจจจ*/ ?>
	<div id="centroarriba">
		<? Generar_NuevoArriba(); ?>
	</div>
	<div class="division">
		<div id="ladoa">
			<div class="cajaIzquierda">
				<div class="cajaIzquierdaTitulolado"></div>
				<div class="cajaIzquierdaTitulo cajaIzquierdaTituloTexto">Buscar</div>
				<div class="cajaIzquierdaTitulolado cajaIzquierdaTituloladoD"></div>
				<div class="cajaIzquierdaresto">
					<div class="Buscar_centro">
						<div class="bordes_buscador_interno"></div>
						<input type="text"  id="buscador_inter_q" class="buscador_interno" value="Buscar" title="Buscar" onkeypress="keypress_intro(event)" onfocus="onfocus_input(this)" onblur="onblur_input(this)" maxlength="50">
						<div class="bordes_buscador_interno bordes_buscador_internoI"></div>
						<input type="button" title="Buscar" class="BotonBuscar" onclick="x_search()">
					</div>
				</div>
			</div>
			<div class="cajaIzquierda">
				<div class="cajaIzquierdaTitulolado"></div>
				<div class="cajaIzquierdaTitulo cajaIzquierdaTituloTexto">Lo Mas Visto</div>
				<div class="cajaIzquierdaTitulolado cajaIzquierdaTituloladoD"></div>
				<div class="cajaIzquierdaresto">
				<UL class="Ulresto">
					<? Generar_Top10(); ?>
				</ul>
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
				<div class="cajaIzquierdaTitulo cajaIzquierdaTituloTexto"> En Facebook</div>
				<div class="cajaIzquierdaTitulolado cajaIzquierdaTituloladoD"></div>
				<div class="cajaIzquierdaresto">
				<div class="Resto_centro  Display_None" name="ObjetosExternos" id="Plugface">
					<iframe src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/EclipseINK&width=260px&colorscheme=light&connections=10&stream=false&header=true&height=300" scrolling="no" frameborder="0" style="border:none;overflow:hidden;width:260px;height:300px;margin-top:10px" allowTransparency="true"></iframe>
				</div>
				</div>
			</div>
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
				<div id="contenido" class="TextoContenido">
					<div class="logaso">
						<div class="logogrande" id="logogrande"></div>
						<div class="logogrande logograndeI"></div>
					</div>
					<p>
						<p class="creditos Tm_25"><a href="http://www.juanmartinmachado.com.ar/" class="creditos" target="_blank"><b>Juan Mart&iacute;n Machado</b></a></p>
						<p class="creditos Tm_25">San Luis - Argentina</p>
						<p class="creditos Tm_25">Ultima Actualizaci๓n 04 de Julio de 2011</p>
						<p class="creditos Tm_25">Todo los Derechos Reservados</p>
						<p class="creditos Tm_25">info.eclipseink@gmail.com</p>
						<p class="creditos Tm_25">En Twitter <a href="https://twitter.com/EclipseINK" class="creditos" target="_blank"><b>@EclipseINK</b></a></p>
						<p class="creditos Tm_25">En Facebook <a href="https://www.facebook.com/EclipseINK" class="creditos" target="_blank"><b>https://www.facebook.com/EclipseINK</b></a></p>
						<p class="creditos Tm_25">En Google+ <a href="http://gplus.to/EclipseINK" class="creditos" target="_blank"><b>http://gplus.to/EclipseINK</b></a></p>
					</p>
				</div>
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
	<script type="text/javascript">
		$("#logogrande").hover(function(){
			$(this).fadeTo("normal", 0.3);
		},function(){
			$(this).fadeTo("normal", 1.0);
		});
	</script>
<? /*จจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจ*/ ?>
<? /*จจจจจจจจ PARTE ABAJO จจจจจจจจจจจจจ*/ ?>
<?
	require("parteabajo.php");
?>
<? /*จจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจ*/ ?>