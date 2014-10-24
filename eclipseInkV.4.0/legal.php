<? /*¨¨¨¨¨¨¨ VAR GLOBALES ¨¨¨¨¨¨¨¨¨¨¨¨¨*/ ?>
<?
	require("VariablesGlobales.php")
?>
<? /*¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨*/ ?>
<? /*¨¨¨¨¨¨¨¨   METAS TAGS ¨¨¨¨¨¨¨¨¨¨¨¨*/ ?>
<?
$meta_Description="Para el Programador que llevas a dentro. Recursos, Codigos Fuentes, Programas, Tip, Hack. Todo en Un Solo Lugar";
$meta_Keywords="Descargas, Programas, Codigos Fuentes, Recursos,Ejemplos, Ajax, ASP, C++, CSS, Flash, HTML, JavaScript, MySQL, PHP, SQL, Visual Basic, Otros,Descargas, Programas, Codigos Fuentes, Recursos";
$meta_Subject="www.EclipseInk.com.ar/legal";
$meta_Title="Eclipse INK - Legal";
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
						<span class="Tm_25"><b>Información Legal</b></span>
					</p>
					<p></p>
					<b>Sobre los datos de los usuarios</b>
					<p></p>
					Los comentarios y comunicaciones hechas voluntariamente por los usuarios no son datos personales de carácter privado sino públicos. Quedan relacionados con comentarios de otros usuarios. Los gestores de Eclipse INK podrán conservar estos datos con el objetivo de mantener la coherencia de la información publicada y los envíos de todos los usuarios.
					<p></p>
					<b>Privacidad</b>
					<p></p>
					Los archivos de <a class="linkart" href="http://www.eclipseink.com.ar/" target="_blank"><b>www.eclipseink.com.ar</b></a> no contienen datos de carácter privado ni requieren información para identificar personas físicas. Nuestra relación con las publicidades es en calidad de comisionistas y no tenemos acceso a los datos de los compradores. Para más Información:  <a class="linkart" href="http://www.eclipseink.com.ar/politica" target="_blank"><b>Política De Privacidad </b></a>.
					<p></p>
					<b>Condiciones de uso</b>
					<p></p>
					El usuario se abstendrá de utilizar cualquiera de los servicios ofrecidos en <a class="linkart" href="http://www.eclipseink.com.ar/" target="_blank"><b>www.eclipseink.com.ar</b></a> con fines o efectos ilícitos, lesivos de los derechos e intereses de terceros, o que puedan dañar, inutilizar, sobrecargar, deteriorar o impedir la normal utilización de los servicios, los equipos informáticos o los documentos, archivos y cualquier contenido almacenado en <a class="linkart" href="http://www.eclipseink.com.ar/" target="_blank"><b>www.eclipseink.com.ar</b></a>.
					<p></p>
					El usuario se abstendrá de acosar, amenazar y obtener o divulgar información privada de terceros.
					<p></p>
					El usuario se abstendrá de usar el sitios web <a class="linkart" href="http://www.eclipseink.com.ar/" target="_blank"><b>www.eclipseink.com.ar</b></a> con el objetivo de
					<p></p>
					<ul>
						<li>La promoción exclusiva de un sitio web, empresas, redes de blogs o de afiliación de enlaces (spam).</li>
						<li>Las campañas comerciales (aunque el lugar promocionado no contenga publicidad directa), políticas o ideológicos promoviendo el voto masivo a las noticias objeto de la campaña o del lugar promocionado</li>
						<li>La provocación gratuita o molestia injustificada a los demás usuarios y lectores</li>
						<li>El envío de noticias falsas o fabricadas.</li>
					</ul>
					<p></p>
					<b>Exclusión de garantías y responsabilidad</b>
					<p></p>
					Los gestores de <a class="linkart" href="http://www.eclipseink.com.ar/" target="_blank"><b>www.eclipseink.com.ar</b></a> no garantizan la licitud, fiabilidad, exactitud, exhaustividad, actualidad y utilidad de los contenidos. El establecimiento de un hiperenlace, enlace, intercambio, no implica en ningún caso la existencia de relaciones entre los gestores de <a class="linkart" href="http://www.eclipseink.com.ar/" target="_blank"><b>www.eclipseink.com.ar</b></a> y el propietario del lugar web con la que se establezca, ni la aceptación y aprobación de sus contenidos o servicios.
					<p></p>
					Los gestores de <a class="linkart" href="http://www.eclipseink.com.ar/" target="_blank"><b>www.eclipseink.com.ar</b></a> excluyen toda responsabilidad en los sitios enlazados desde esta web y no pueden controlar y no controlan que entre ellos aparezcan sitios de Internet cuyos contenidos puedan resultar ilícitos, ilegales, contrarios a la moral o a las buenas costumbres o inapropiados. El usuario, por tanto, debe extremar la prudencia en la valoración y utilización de la información, contenidos y servicios existentes en los sitios enlazados.
					<p></p>
					Los gestores de <a class="linkart" href="http://www.eclipseink.com.ar/" target="_blank"><b>www.eclipseink.com.ar</b></a> excluyen toda responsabilidad por las noticias e informaciones publicadas por los usuarios, terceros y de las mismas serán responsables los usuarios o terceros de quienes procedan.
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