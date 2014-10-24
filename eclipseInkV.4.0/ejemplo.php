<? /*иииииии VAR GLOBALES иииииииииииии*/ ?>
<?
	require("VariablesGlobales.php")
?>
<? /*ииииииииииииииииииииииииииииииииии*/ ?>
<? /*ииииииии   METAS TAGS ииииииииииии*/ ?>
<?
	$meta_Description="Ejemplos de Ajax, ASP, C++, CSS, Flash, HTML, JavaScript, MySQL, PHP, SQL, Visual Basic y Otros";
	$meta_Keywords="Ejemplos, Ajax, ASP, C++, CSS, Flash, HTML, JavaScript, MySQL, PHP, SQL, Visual Basic, Otros";
	$meta_Subject="www.EclipseInk.com.ar/codigo";
	$meta_Title="Eclipse INK - Codigo";
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
				<div class="cajaIzquierdaTitulo cajaIzquierdaTituloTexto">Categorias</div>
				<div class="cajaIzquierdaTitulolado cajaIzquierdaTituloladoD"></div>
				<div class="cajaIzquierdaresto">
				<UL class="Ulresto">
					<li class="listaResto"><a href="<? echo traducir_url("codigoASP") ?>" class="listarestotexto" target="_self" alt="" title="">ASP</a></li>
					<li class="listaResto"><a href="<? echo traducir_url("codigoCPP") ?>" class="listarestotexto" target="_self" alt="" title="">C++</a></li>
					<li class="listaResto"><a href="<? echo traducir_url("codigoCSS") ?>" class="listarestotexto" target="_self" alt="" title="">CSS</a></li>
					<li class="listaResto"><a href="<? echo traducir_url("codigoFLASH") ?>" class="listarestotexto" target="_self" alt="" title="">Flash</a></li>
					<li class="listaResto"><a href="<? echo traducir_url("codigoHTML") ?>" class="listarestotexto" target="_self" alt="" title="">HTML</a></li>
					<li class="listaResto"><a href="<? echo traducir_url("codigoJS") ?>" class="listarestotexto" target="_self" alt="" title="">JavaScript</a></li>
					<li class="listaResto"><a href="<? echo traducir_url("codigoPHP") ?>" class="listarestotexto" target="_self" alt="" title="">PHP</a></li>
					<li class="listaResto"><a href="<? echo traducir_url("codigoSQL") ?>" class="listarestotexto" target="_self" alt="" title="">SQL</a></li>
					<li class="listaResto"><a href="<? echo traducir_url("codigoVB") ?>" class="listarestotexto" target="_self" alt="" title="">Visual Basic/Studio</a></li>
					<li class="listaResto"><a href="<? echo traducir_url("codigoOTROS") ?>" class="listarestotexto" target="_self" alt="" title="">Otros</a></li>
					<li class="listaResto"><a href="<? echo traducir_url("codigoDOWN") ?>" class="listarestotexto" target="_self" alt="" title="">Descargas</a></li>
				</ul>
				</div>
			</div>
			<div class="cajaIzquierda">
				<div class="cajaIzquierdaTitulolado"></div>
				<div class="cajaIzquierdaTitulo cajaIzquierdaTituloTexto">Ultimos Comentarios</div>
				<div class="cajaIzquierdaTitulolado cajaIzquierdaTituloladoD"></div>
				<div class="cajaIzquierdaresto">
				<UL class="Ulresto">
					<? Generar_ULT_Comentarios(); ?>
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
				<div class="RSS_Ic">
					<a href="<? echo $rss_q ?>" class="sRss" target="_blank"> 
						<div border=0 alt="" class="sRss"> </div>
					</a> 
				</div>
				<? 
					if (!isset($pagina)){$pagina=0;}
					/*if (!isset($tipo)){$tipo="Todo";}*/
					$hay_mas=Generar_Ultimos_Art($pagina,"resto",$tipo);
				?>
			<div class="paginacion">
				<?
					if (($tipo=="Todo")){
						$tipo="";
					}else{
						$tipo= strtoupper($tipo);
					}
					
					if (!isset($pagina)){$pagina=0;}
					if($pagina>0 || $hay_mas){
						$todo="<div class='paginacionbordenumeros paginacionbordenumerosI'></div>	<div class='paginacion_numeros textopaginacion'><b>";
						if ($pagina>0){
							if (($pagina-1)==0){
								$todo.="<a href='".traducir_url("codigo".$tipo)."' class='textopaginacion' target='_self' title='' alt=''>л Anterior</a>";
							}else{
									$todo.="<a href='".traducir_url("codigo".$tipo.".pagina".($pagina-1))."' class='textopaginacion' target='_self' title='' alt=''>л Anterior</a>";
							}
						}
						if ($hay_mas&&$pagina>0){
							$todo.="&nbsp&nbsp|&nbsp&nbsp";
						}
						if ($hay_mas){
							$todo.="<a href='".traducir_url("codigo".$tipo.".pagina".($pagina+1))."' class='textopaginacion' target='_self' title='' alt=''>Siguiente ╗</a></b>";
						}
						echo $todo."</div><div class='paginacionbordenumeros'></div>";
					}
				?>
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
<? /*ииииииииииииииииииииииииииииииииии*/ ?>
<? /*ииииииии PARTE ABAJO иииииииииииии*/ ?>
<?
	require("parteabajo.php");
?>
<? /*ииииииииииииииииииииииииииииииииии*/ ?>