<? /*จจจจจจจ VAR GLOBALES จจจจจจจจจจจจจ*/ ?>
<?
	require("VariablesGlobales.php")
?>
<? /*จจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจ*/ ?>
<? /*จจจจจจจจ OBTENER ARTICULO จจจจจจจจ*/ ?>
<?
	$Todo_array=Obtener_Articulo($id);
	if(!empty($Todo_array)&&$Todo_array["contenido"]!=""){
		$Todo_array["titulo"]=stripslashes(trim($Todo_array["titulo"]));
		$Todo_array["contenido"]=trim(Traductor($Todo_array["contenido"]));
		$meta_Description=trim($Todo_array["descripcion"]);
		$Todo_array["cat"]=Traducir_Cat($Todo_array["cat"]);
		$meta_Keywords=$Todo_array["cat"].", ".trim($Todo_array["tag"]);
		$meta_Subject="www.EclipseINK.com.ar/Articulo_".$id.".html";
		$meta_Title="Eclipse INK - ".$Todo_array["titulo"];
		set_visitas($id,$Todo_array["titulo"]);
	}else{
		$Todo_array["contenido"]="LOL 404";
	}
	$Art_Anterior=Art_Art_Anterior($id);
	$Art_Siguiente=Art_Art_Siguiente($id);
	if ($Todo_array["contenido"]=="LOL 404"){
		echo "<script type='text/javascript'>window.location='".traducir_url("404.php")."';</script>";
	}
?>
<? /*จจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจ*/ ?>
<? /*จจจจจจจจ PARTE ARRIBA จจจจจจจจจจจจ*/ ?>
<?
	require("partearriba.php");
?>
<? /*จจจจจจจจ PARTE CENTRAL จจจจจจจจจจจ*/ ?>
<script type="text/javascript">
	var Datos_Globales={
		Post_titulo:'<? echo $Todo_array["titulo"] ?>',
		Id_POST:<? echo $id ?>
	};
</script>
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
				<div class="cajaIzquierdaTitulo cajaIzquierdaTituloTexto">Artํculos Relacionados</div>
				<div class="cajaIzquierdaTitulolado cajaIzquierdaTituloladoD"></div>
				<div class="cajaIzquierdaresto">
					<UL class="Ulresto">
						<? Generar_Articulos_Rel($meta_Keywords,$id); ?>
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
				<div class="TituloBorde"></div>
				<div id="Titulo">
					<a href="<? echo "Articulo_".$Art_Siguiente.".html" ?>" class="Tituloboton <? if ($Art_Siguiente==0){ echo "NON_Visible";} ?>"></a>
					<? 
						if (strlen($Todo_array["titulo"])>40){
							$Todo_array["titulo"]=substr(Caracteres_Especiales_INV($Todo_array["titulo"]),0,37)."...";
						}
						echo $Todo_array["titulo"];
					?>
					<a href="<? echo "Articulo_".$Art_Anterior.".html" ?>" class="TitulobotonI <? if ($Art_Anterior==0){ echo "NON_Visible";} ?>"></a>
				</div>
				<div class="TituloBorde TituloBordeI"></div>
				
				<div id="contenido" class="TextoContenido">
					<? echo $Todo_array["contenido"];?>
				</div>
					<div class="ArticulosFirmas">
						<? echo $Todo_array["fecha"] ?><br>
						Eclipse INK.
					</div>
					<div class="ArticulosFirmas">
						<table border=2 color="#0000ff" cellpadding=0 cellspacing=10>
							<td>
								<script type='text/javascript'>
									(function() {
										var s = document.createElement('SCRIPT'), 
										s1 = document.getElementsByTagName('SCRIPT')[0];
										s.type = 'text/javascript';
										s.async = true;
										s.src = 'http://widgets.digg.com/buttons.js';
										s1.parentNode.insertBefore(s, s1);
									})();
								</script>
								<a class='DiggThisButton DiggMedium' href='http://digg.com/submit?url=<? echo "http://www.eclipseink.com.ar/Articulo_".$id.".html"  ?>'></a>
							</td>
							<td>
								<script src="http://www.stumbleupon.com/hostedbadge.php?s=5"></script>
							</td>
							<td>
								<script type='text/javascript' src='http://platform.linkedin.com/in.js'>
								</script>
								<script type='in/share' data-url='<? echo "http://www.eclipseink.com.ar/Articulo_".$id.".html"  ?>' data-counter='top'></script>
							</td>
							<td>
								<a href="http://twitter.com/share" class="twitter-share-button" data-url="<? echo "http://www.eclipseink.com.ar/Articulo_".$id.".html"  ?>" data-text="<? echo $Todo_array["titulo"] ?>" data-count="vertical" data-via="EclipseINK" data-lang="es">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
							</td>
							<td>
								<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
									{lang: 'es-419'}
								</script>
								<g:plusone size="tall" callback="<? echo "http://www.eclipseink.com.ar/Articulo_".$id.".html"  ?>"></g:plusone>
							</td>
							<td>
								<iframe src="http://www.facebook.com/plugins/like.php?href=<? echo "http://www.eclipseink.com.ar/Articulo_".$id.".html"  ?>&amp;layout=box_count&amp;show_faces=false&amp;width=80&amp;action=like&amp;colorscheme=light&amp;height=60" scrolling="no" frameborder="0" style="border:1px solid #fff; overflow:hidden; width:80px; height:62px;top:2;position:relative" allowTransparency="true"></iframe>
							</td>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td align="rigth">
									<a name="fb_share" type="box_count" href="http://www.facebook.com/sharer.php">Enviar</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
								</td>
						</table>
					</div>
					<div class="ArticulosFirmas ArticulosFirmasTag">
						<b>Tags: </b> <? Obtener_Art_TAG(explode(",",$meta_Keywords)); ?>
					</div>
			</div>
			<? if(Bandera("publicidad")) { ?>
				<div class="cajaDerecha Display_None" name="ObjetosExternos" id="publicidadhg">
					<? echo Obtener_Banner("hg") ?>
				</div>
			<? } ?>
			<div class="cajaDerecha">
					<div class="comentariosTituloBorde"></div>
					<div class="comentariosTitulo comentariosTitulotexto">Comentarios <a href="javascript:Agregar_Comentario()" class="comentariosTitulotexto" id="masmenos">[+]</a></div>
					<div class="comentariosTituloBorde comentariosTituloBordeI"></div>
					<div class="comentariosresto  cargando_gif " id="NuevosComentarios" name="NuevosComentarios"> 
						<div class="Formulario" id="FormularioComentario" >
							
							<div id="formularioCaptcha">
								<div class="MensajeComentario MensajeComentariotexto">
								Gracias por dejarnos tus comentarios! — por favor intenta mantener tu opini๓n relacionada con la anotaci๓n, no usar insultos, agresiones, o faltas de respeto al autor y otros participantes de la discusi๓n, en caso de no hacerlo tu comentario podrํa ser borrado.
								Existe mucha mแs informaci๓n en nuestra <a href="<? echo traducir_url("comentarios") ?>" class="MensajeComentariotexto" title="Polํtica de Comentarios" alt="Polํtica de Comentarios" target="_blank"><i>polํtica de comentarios</i></a>.
								</div>
							</div>
							<div id="formularioCaptcha">
								<input type="text" value="Tu Nombre" id="nombre" maxlength="10" class="CampoTexto" onkeypress="keypress_intro_comentario(this.id)" onfocus="onfocus_input(this)" onblur="onblur_input(this);blur_intro_comentario(this.id)" title="Tu Nombre">
								<span  class="Error" id="nombre_err">&nbsp</span>
								<br>
								<textarea id="comentario" maxlength="300" class="CampoTexto CampoTextArea" onkeypress="keypress_intro_comentario(this.id)" onfocus="onfocus_input(this)" onblur="onblur_input(this);blur_intro_comentario(this.id)" title="Tu Comentario">Tu Comentario</textarea>
								<span class="Error" id="comentario_err">&nbsp</span>
							</div>
							
							<div class="formularioCaptcha" > 
								<script type="text/javascript">
								var RecaptchaOptions = {
									theme : 'custom',
									custom_theme_widget: 'recaptcha_widget'
								};
								</script>
								<div id="recaptcha_widget" class="imgCaptcha">
									<div id="recaptcha_image" class=""></div>
								</div>
								<br>
								<input type="text" id="recaptcha_response_field" name="recaptcha_response_field" class="CampoTexto TextoCaptcha"/>
								<script type="text/javascript" src="http://www.google.com/recaptcha/api/challenge?k=6LcNy8USAAAAADSszcLAWSRx3QtOjTmN2G2dMQwT">
								</script>
								<br>
								<span class="Error" id="captcha_err">&nbsp</span>
							</div>
							<p align="center">
								<input id="aceptar" value="Aceptar" name="aceptar" type="button" class="CampoBoton" onclick="Enviar_Comentario()">
							</p>
						</div>
					</div>
					<span id="TodosComentarios">
						<? Generar_Todos_Comentarios($id) ?>
					</span>
			</div>
			<div class="cajaDerecha" name="ObjetosExternos" id="publicidadhg">
				<p align="center">
					<a class="linkart" href="JavaScript:$('body').scrollTo(0)"><b>Ir al cielo</b></a>
				</p>
			</div>
		</div>
	</div>
	<div class="clear_A"></div>
<? /*จจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจ*/ ?>
<? /*จจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจ*/ ?>
<SCRIPT class=javascript>
	var UY=0;
	var TEXT_area = document.getElementsByName("t");
	if (0 < TEXT_area.length){
		dp.SyntaxHighlighter.HighlightAll('t');
	}
	function Agregar_Comentario(){
		if ($("#masmenos").html()=="[+]"){
			$("#NuevosComentarios").slideDown("normal");
			$('#masmenos').fadeOut('fast',function(){
				$("#masmenos").html("[-]");
				$('#masmenos').fadeIn('normal');
			});
		}else{
			$("#NuevosComentarios").slideUp("normal");
			$('#masmenos').fadeOut('fast',function(){
				$("#masmenos").html("[+]");
				$('#masmenos').fadeIn('normal');
			});
		}
	}
	function Enviar_Comentario(){
		var t=0;
		var d=0;
		if (empty($("#nombre").val()) || $("#nombre").val()==$("#nombre").attr('title')){
			$("#nombre_err").html("Este campo es obligatorio");
			$("#nombre").addClass("CampoTexto_err");
		}else{
			$("#nombre_err").html("&nbsp");
			$("#nombre").removeClass("CampoTexto_err");
			t++;
		}
		if (empty($("#comentario").val()) || $("#comentario").val()==$("#comentario").attr('title')){
			$("#comentario_err").html("Este campo es obligatorio");
			$("#comentario").addClass("CampoTexto_err");
		}else{
			$("#comentario_err").html("&nbsp");
			$("#comentario").removeClass("CampoTexto_err");
			t++;
		}
		if (t==2){
			$('#FormularioComentario').fadeOut('fast');
			momentoActual = new Date() 
			IDComentario= momentoActual.getHours()+"_"+momentoActual.getMinutes()+"_"+momentoActual.getSeconds();
			$.ajax({
				type: "POST",
				url: "ajax.php",
				data:'&ajx=ac'+'&nombre='+encodeURIComponent($("#nombre").val())
				+'&comentario='+encodeURIComponent($("#comentario").val())
				+'&Titulo='+encodeURIComponent(Datos_Globales.Post_titulo)
				+'&ID_P='+encodeURIComponent(Datos_Globales.Id_POST)
				+'&ID_C='+encodeURIComponent(IDComentario)
				+'&challenge_field='+encodeURIComponent(Recaptcha.get_challenge())
				+'&response_field='+encodeURIComponent($('#recaptcha_response_field').val()),
				statusCode: {
					404: function() {
						if(d==0){
							my_error();
							d=1;
						}
					}
				},
				success: function(data){
					data=jQuery.trim(data);
					Recaptcha.reload();
					if(data=="FAIL_C"){
						$('#FormularioComentario').fadeIn('fast',function(){
							$("#captcha_err").html("El ReCaptcha es Incorrecto, vuelva a Ingresarlo");
						});
					}else{
						resultado(data,IDComentario,"acccfd");
					}
				},
				error: function(){
					if(d==0){
						my_error();
						d=1;
					}
				}
			});
		}
	}
	function my_error(){
			UY++;
			resultado(<? echo "\"".Generar_Comentario("A404","UP's, Error de Conexi&oacute;n","Intentalo en otro momento")."\"" ?>,"A404","ff0000");
	}
	function resultado(s,q,t){
		Agregar_Comentario();
		$("#nombre").val("Tu Nombre");
		$("#comentario").val("Tu Comentario");
		$("#comentario").css("color","#CCC");
		$("#nombre").css("color","#CCC");
		$("#captcha_err").html("&nbsp");
		$('#FormularioComentario').fadeIn('fast',function(){
			if(UY<2 || t!="ff0000"){
				if (empty($("#Vacio").html())){
					$("#TodosComentarios").html(s+$("#TodosComentarios").html());
				}else{
					$("#TodosComentarios").html(s);
				}
			}
			$("#"+q).glow('#'+t, 800, 400);
		});
	}
</SCRIPT> 
<? /*จจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจ*/ ?>
<? /*จจจจจจจจ PARTE ABAJO จจจจจจจจจจจจจ*/ ?>
<?
	require("parteabajo.php");
?>
<? /*จจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจจ*/ ?>