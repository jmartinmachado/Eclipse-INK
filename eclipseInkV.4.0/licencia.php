<? /*������� VAR GLOBALES �������������*/ ?>
<?
	require("VariablesGlobales.php")
?>
<? /*����������������������������������*/ ?>
<? /*��������   METAS TAGS ������������*/ ?>
<?
$meta_Description="Para el Programador que llevas a dentro. Recursos, Codigos Fuentes, Programas, Tip, Hack. Todo en Un Solo Lugar";
$meta_Keywords="Descargas, Programas, Codigos Fuentes, Recursos,Ejemplos, Ajax, ASP, C++, CSS, Flash, HTML, JavaScript, MySQL, PHP, SQL, Visual Basic, Otros,Descargas, Programas, Codigos Fuentes, Recursos";
$meta_Subject="www.EclipseInk.com.ar/licencia";
$meta_Title="Eclipse INK - Licencia";
?>
<? /*����������������������������������*/ ?>
<? /*�������� PARTE ARRIBA ������������*/ ?>
<?
	require("partearriba.php");
?>
<? /*�������� PARTE CENTRAL �����������*/ ?>
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
						<span class="Tm_25"><b>Licencia</b></span>
					</p>
					<p></p>
					<b>Acerca del uso del contenido de esta pagina</b>
					<p></p>
					A menos que se especifique lo contrario, todo el <b>contenido</b> y los <b>comentarios</b> de <a class="linkart" href="http://www.eclipseink.com.ar/" target="_blank"><b>www.eclipseink.com.ar</b></a> se encuentran bajo licencia <a class="linkart" href="http://creativecommons.org/licenses/by/2.5/deed.es" target="_blank"><b>Creative Commons Reconocimiento 2.5</b></a>, lo cual significa que eres libre de:
					<p></p>
					<ul>
						<li>Copiar, distribuir y comunicar p�blicamente cualquiera de los post escritos o comentarios hechos en esta pagina.</li>
						<li>Darles usos derivados, por ejemplo modificarlos seg�n tus necesidades.</li>
						<li>Hacer uso comercial de nuestros post o comentarios hechos. Por ejemplo, se pueden usar nuestros post en un blog con fines comerciales o ser publicados en un medio masivo como peri�dicos o revistas.</li>
					</ul>
					<p></p>
					Siempre y cuando se atribuyan los cr�ditos de la siguiente forma:
					<p></p>
					<ul>
						<li>Si es en un blog o sitio web, enlazando al art�culo original, es decir, al enlace permanente del post.</li>
						<li>Si es un medio impreso como una revista o un peri�dico, el texto debe de estar acompa�ado por una nota que deje claro al lector d�nde puede encontrar la anotaci�n original, escribiendo la direcci�n del blog y si es posible imprimiendo el enlace permanente de la nota.</li>
					</ul>
					<p></p>
					En algunos casos usamos im�genes que acompa�an los posts para darles mayor �nfasis a nuestras anotaciones. Estas se toman en muchos casos de la fuente original y queda especificado en cada post. En otros casos, y especialmente cuando hablamos de productos, usamos las im�genes que el fabricante pone a disposici�n de la prensa. En estos casos las im�genes no est�n cubiertas por la licencia antes especificada.
					<p></p>
					<ul>
						<li>M�s informaci�n de la licencia <a class="linkart" href="http://creativecommons.org/licenses/by/2.5/deed.es" target="_blank"><b>Creative Commons Reconocimiento 2.5</b></a></li>
						<li><a class="linkart" href="http://creativecommons.org/licenses/by/2.5/legalcode" target="_blank"><b>Texto legal completo de esta licencia</b></a></li>
					</ul>
					<p></p>
					<b>Acerca del uso del dise�o de la pagina</b>
					<p></p>
					Todo el dise�o e im�genes creadas por nosotros para el dise�o est�n protegidas bajo Copyright, lo cual significa que nos reservamos todos los derechos y no pueden ser usadas por terceros sin nuestro permiso previo salvo que se trate de promoci�n y/o ejemplificaci�n.
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
<? /*����������������������������������*/ ?>
<? /*�������� PARTE ABAJO �������������*/ ?>
<?
	require("parteabajo.php");
?>
<? /*����������������������������������*/ ?>