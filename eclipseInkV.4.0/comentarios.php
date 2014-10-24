<? /*¨¨¨¨¨¨¨ VAR GLOBALES ¨¨¨¨¨¨¨¨¨¨¨¨¨*/ ?>
<?
	require("VariablesGlobales.php")
?>
<? /*¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨*/ ?>
<? /*¨¨¨¨¨¨¨¨   METAS TAGS ¨¨¨¨¨¨¨¨¨¨¨¨*/ ?>
<?
$meta_Description="Para el Programador que llevas a dentro. Recursos, Codigos Fuentes, Programas, Tip, Hack. Todo en Un Solo Lugar";
$meta_Keywords="Descargas, Programas, Codigos Fuentes, Recursos,Ejemplos, Ajax, ASP, C++, CSS, Flash, HTML, JavaScript, MySQL, PHP, SQL, Visual Basic, Otros,Descargas, Programas, Codigos Fuentes, Recursos";
$meta_Subject="www.EclipseInk.com.ar/comentarios";
$meta_Title="Eclipse INK - Sobre los Comentarios";
?>
<? /*¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨*/ ?>
<? /*¨¨¨¨¨¨¨¨ PARTE ARRIBA ¨¨¨¨¨¨¨¨¨¨¨¨*/ ?>
<?
	require("partearriba.php");
?>
<? /*¨¨¨¨¨¨¨¨ PARTE CENTRAL ¨¨¨¨¨¨¨¨¨¨¨*/ ?>
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
					<iframe src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/EclipseINK&width=200px&colorscheme=light&connections=10&stream=false&header=true&height=300" scrolling="no" frameborder="0" style="border:none;overflow:hidden;width:200px;height:300px;margin-top:10px" allowTransparency="true"></iframe>
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
					<p align="center">
						<span class="Tm_25"><b>Normas y políticas acerca de la publicación de comentarios</b></span>
					</p>
					<p></p>
					Todos los post de <a class="linkart" href="http://www.eclipseink.com.ar/" target="_blank"><b>www.eclipseink.com.ar</b></a> se mantienen los comentarios, debido a que es una zona pública y por el bien general de los visitantes tu comentario puede ser moderado o eliminado, aunque bien es cierto que internet es una buena demostración <a class="linkart" href="http://buscon.rae.es/draeI/SrvltGUIBusUsual?LEMA=fehaciente" target="_blank"><b>fehaciente</b></a> de la libertad de expresión, y aunque en general dejamos que las discusiones prosigan (aunque se pongan pesadas) este no es un derecho absoluto y <b>¡hay límites!</b> que también han sido parámetros para desarrollar las razones por las cuales borramos comentarios, que son:
					<p></p>
					<ul>
						<li><b>No tiene nada que ver con el tema del post</b>. Si tienes algo que decirnos o proponer un tema usa las formas de contacto, si tienes una pregunta, igual.</li>
						<li><b>Se intenta molestar a alguien</b> faltando el respeto, insultando, críticas destructivas, ataques personales, pocos o nulos argumentos.</li>
						<li><b>Spam</b>, aunque usamos el sistema de  <a class="linkart" href="http://es.wikipedia.org/wiki/Captcha" target="_blank"><b>Captcha</b></a> es posible recibir comentarios hechos de forma manual para promocionar un sitio, un blog o una página. Si intentas obtener un mejor pagerank o enlaces entrantes a uno o varios de tus sitios, dejando comentarios también será eliminado.</li>
						<li><a class="linkart" href="http://es.wikipedia.org/wiki/Ley_de_Godwin" target="_blank"><b>Ley de Godwin</b></a>: cualquier discusión en la cual se recurra a los nazis o Hitler se acabará inmediatamente cerrando los comentarios de ese post.</li>
						<li><b>Consideramos que eres un troll</b>, para saber si lo eres lee por favor <a class="linkart" href="http://es.wikipedia.org/wiki/Troll_(Internet)" target="_blank"><b>esta explicaci&oacute;n</b></a>. Si entras a sembrar discordia en la pagina serás bloqueado <b>para siempre</b>. No hay excepciones.</li>
					</ul>
					<p></p>
					Esta pagina no es un medio tradicional, no soy objetivo y tengo la libertad completa de borrar comentarios a discresión, en pocas palabras puedo hacer lo que quiera. Si tu comentario fue borrado y no cabe en ninguna de las razones anteriores por favor no insistas, tus comentarios con reclamos también serán eliminados y podrías ser bloqueado. Esto no es una democracia y siempre podrás <a class="linkart" href="http://wordpress.com/" target="_blank"><b>crear tu propio blog</b></a> para expresarte en tu propio espacio.
					<p></p>
					<a class="linkart" href="http://www.eclipseink.com.ar/" target="_blank"><b>www.eclipseink.com.ar</b></a> no se hace responsable de los comentarios publicados.
				</div>
				<div class="ArticulosFirmas">
					Lunes, 4 de Julio de 2011.<br>
					Eclipse INK.
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
<? /*¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨*/ ?>
<? /*¨¨¨¨¨¨¨¨ PARTE ABAJO ¨¨¨¨¨¨¨¨¨¨¨¨¨*/ ?>
<?
	require("parteabajo.php");
?>
<? /*¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨*/ ?>