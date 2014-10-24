<? /*¨¨¨¨¨¨¨ VAR GLOBALES ¨¨¨¨¨¨¨¨¨¨¨¨¨*/ ?>
<?
	require("VariablesGlobales.php")
?>
<? /*¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨*/ ?>
<? /*¨¨¨¨¨¨¨¨   METAS TAGS ¨¨¨¨¨¨¨¨¨¨¨¨*/ ?>
<?
$meta_Description="Para el Programador que llevas a dentro. Recursos, Codigos Fuentes, Programas, Tip, Hack. Todo en Un Solo Lugar";
$meta_Keywords="Descargas, Programas, Codigos Fuentes, Recursos,Ejemplos, Ajax, ASP, C++, CSS, Flash, HTML, JavaScript, MySQL, PHP, SQL, Visual Basic, Otros,Descargas, Programas, Codigos Fuentes, Recursos";
$meta_Subject="www.EclipseInk.com.ar/politica";
$meta_Title="Eclipse INK - Politica";
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
					<div class="Tm_14"><b>Política De Privacidad</b></div>
					<p></p>
					Nuestra política de privacidad describe como recogemos, guardamos o utilizamos la información que recabamos a través de los diferentes servicios o páginas disponibles en este sitio. Es importante que entienda que información recogemos y como la utilizamos ya que el acceso a este sitio implica la aceptación nuestra política de privacidad. Estas politicas de privacidad pueden cambiar sin previo aviso.
					<p></p>
					<B>Cookies</B>
					<p></p>
					El acceso a este puede implicar la utilización de cookies. Las cookies son pequeñas cantidades de información que se almacenan en el navegador utilizado por cada usuario para que el servidor recuerde cierta información que posteriormente pueda utilizar. Esta información permite identificarle a usted como un usuario concreto y permite guardar sus preferencias personales, así como información técnica como puedan ser visitas o páginas concretas que visite.
					Aquellos usuarios que no deseen recibir cookies o quieran ser informados antes de que se almacenen en su ordenador, pueden configurar su navegador a tal efecto.
					<p></p>
					La mayor parte de los navegadores de hoy en día permiten la gestión de las cookies de 3 formas diferentes:
					<br>
					<ul>
					<li>Las cookies no se aceptan nunca.</li>
					<li>El navegador pregunta al usuario si se debe aceptar cada cookie.</li>
					<li>Las cookies se aceptan siempre.</li>
					</ul>
					<p></p>
					El navegador también puede incluir la posibilidad de especificar mejor qué cookies tienen que ser aceptadas y cuáles no. En concreto, el usuario puede normalmente aceptar alguna de las siguientes opciones: rechazar las cookies de determinados dominios; rechazar las cookies de terceros; aceptar cookies como no persistentes (se eliminan cuando el navegador se cierra); permitir al servidor crear cookies para un dominio diferente. Además, los navegadores pueden también permitir a los usuarios ver y borrar cookies individualmente.
					<p></p>
					Dispone de más información sobre las Cookies en: <a class="linkart" href="http://es.wikipedia.org/wiki/Cookie" target="_blank"><b>http://es.wikipedia.org/wiki/Cookie</b></a>
					<p></p>
					<B>Web Beacons</B>
					<p></p>
					Este sitio puede albergar también web beacons (también conocidos por web bugs). Los web beacons suelen ser pequeñas imágenes de un pixel por un pixel, visibles o invisibles colocados dentro del código fuente de las páginas web de un sitio. Los Web beacons sirven y se utilizan de una forma similar a las cookies. Además, los web beacons suelen utilizarse para medir el tráfico de usuarios que visitan una página web y poder sacar un patrón de los usuarios de un sitio.
					<p></p>
					Dispone de más información sobre los web beacons en: <a class="linkart" href="http://es.wikipedia.org/wiki/Web_bug" target="_blank"><b>http://es.wikipedia.org/wiki/Web_bug</b></a>
					<p></p>
					<B>Terceros</B>
					<p></p>
					En algunos casos, compartimos información sobre los visitantes de este sitio de forma anónima o agregada con terceros como puedan ser anunciantes, patrocinadores o auditores con el único fin de mejorar nuestros servicios. Todas estas tareas de procesamiento serán reguladas según las normas legales y se respetarán todos sus derechos en materia de protección de datos conforme a la regulación vigente.
					<p></p>
					Este sitio mide el tráfico con diferentes soluciones que pueden utilizar cookies o web beacons para analizar lo que sucede en nuestras páginas. Actualmente utilizamos las siguientes soluciones para la medición del tráfico de este sitio. Puede ver más información sobre la política de privacidad de cada una de las soluciones utilizadas para tal efecto:
					<p></p>
					Google (Analytics): <a class="linkart" href="http://www.google.com/intl/es_ALL/privacypolicy.htm" target="_blank"><b>http://www.google.com/intl/es_ALL/privacypolicy.html</b></a>
					<p></p>
					Este sitio también puede albergar publicidad propia, de afiliados, o de redes publicitarias. Esta publicidad se muestra mediante servidores publicitarios que también utilizan cookies para mostrar contenidos publicitarios afines a los usuarios. Cada uno de estos servidores publicitarios dispone de su propia política de privacidad, que puede ser consultada en sus propias páginas web.
					<p></p>
					Actualmente este sitio alberga publicidad de:
					<p></p>
					Google Adsense: <a class="linkart" href="http://www.google.com/intl/es_ALL/privacypolicy.html" target="_blank"><b>http://www.google.com/intl/es_ALL/privacypolicy.html</b></a>
					<p></p>
					Google utiliza empresas publicitarias asociadas para publicar anuncios cuando los usuarios visitan nuestro sitio web. Es posible que estas empresas usen la información que obtienen de las visitas a este y a otros sitios web (sin incluir nombre, dirección, dirección de correo electrónico o número de teléfono) para ofrecer a los usuarios anuncios sobre productos y servicios que les resulten de interés. Si desea obtener más información sobre esta práctica y conocer las opciones de que dispone para impedir que estas empresas usen dicha información, haga clic <a class="linkart" href="http://www.google.com/privacy_ads.html" target="_blank"><b>aquí</b></a>.
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