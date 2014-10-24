<? /*¨¨¨¨¨¨¨ VAR GLOBALES ¨¨¨¨¨¨¨¨¨¨¨¨¨*/ ?>
<?
	/*header("Content-type: text/html; charset=iso-8859-1"); */
	require("VariablesGlobales.php");
?>
<? /*¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨*/ ?>
<? /*¨¨¨¨¨¨¨¨   METAS TAGS ¨¨¨¨¨¨¨¨¨¨¨¨*/ ?>
<?
/*$meta_Description="Descargas de Programas, Libririas y Productos Eclipse INK";*/
/*$meta_Keywords="Descargas, Programas, Codigos Fuentes, Materiales, Librerias";*/
/*$meta_Subject="www.EclipseInk.com.ar/eclipseink";*/
$meta_Title="Eclipse INK - Admin";
?>
<? /*¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨*/ ?>
<? /*¨¨¨¨¨¨¨¨ PARTE ARRIBA ¨¨¨¨¨¨¨¨¨¨¨¨*/ ?>
<?
	require("partearriba.php");
?>
<? /*¨¨¨¨¨¨¨¨ PARTE CENTRAL ¨¨¨¨¨¨¨¨¨¨¨*/ ?>
<style type="text/css">
	.cargando_grande{
		height:872px!important;
	}
	.barraeditborde{
		width:9px;
		height:37px;
		float:left;
		margin-left:10px;
		background: url("imagenes/bordebarraedit.png") no-repeat ;
	}
	.barraeditbordeI{
		background-position:-9px 0px;
		margin-left:0px;
	}
	.barraedit{
		width:622px;
		height:24px;
		padding-top:13px;
		padding-left:10px;
		background: url("imagenes/fondobarraedit.png")repeat-x ;
		float:left;
		overflow:visible;
		
	}
	.botones{
		height:16px;
		width:16px;
		margin-right:10px;
		border:0px solid #000;
		background: url("imagenes/botones.png") no-repeat ;
	}
	.botones:hover{
		-moz-box-shadow:0 0 5px #444;
		-webkit-box-shadow:0px 0px 5px #444;
		box-shadow:0 0 6px #444;
		background-position-x:-16px;
	}
	.botones:active{
		background-position-x:-16px;
		-moz-box-shadow:0 0 5px #000;
		-webkit-box-shadow:0px 0px 5px #000;
		box-shadow:0 0 6px #000;
	}
	.botones_B{
		background-position:0px 0px;
	}
	.botones_U{
		background-position:0px -16px;
	}
	.botones_I{
		background-position:0px -32px;
	}
	.botones_AD{
		background-position:0px -48px;
	}
	.botones_AJ{
		background-position:0px -64px;
	}
	.botones_AC{
		background-position:0px -80px;
	}
	.botones_AI{
		background-position:0px -96px;
	}
	.botones_TF{
		background-position:0px -112px;
	}
	.botones_TiF{
		background-position:0px -128px;
	}
	.botones_CF{
		background-position:0px -144px;
	}
	.botones_CD{
		background-position:0px -160px;
	}
	.botones_BJ{
		background-position:0px -175px;
	}
	.botones_IM{
		background-position:0px -192px;
	}
	.botones_LK{
		background-position:0px -208px;
	}
	.botones_HR{
		background-position:0px -224px;
	}
	.botones_YT{
		background-position:0px -240px;
	}
	.botones_UL{
		background-position:0px -256px;
	}
	.menu1{
		left:659px;
	}
	.menu2{
		left:689px;
	}
	.menu3{
		left:719px;
	}
	ul.menu {
		position:absolute;
		width: 180px;
		list-style: none;
		margin: 0;
		padding: 0;
		z-index:30;
		/*top:430px;*/
		font-size:13px;
		font-family:'Arial';
		font-style:normal;
		font-weight:600;
		float:left;
	}
	ul.menu li {
		border:#7C7C7C 1px solid;
		background: #FAFAFA;
		z-index:30;
	}
	ul.menu li a:link, ul.menu li a:visited {
		padding: .2em 0 .2em 1.3em;
		display:block;
		text-decoration: none;
		color:gray;
		background: #FAFAFA;
		z-index:30;
	}
	ul.menu li a:hover, ul.menu li a:active {
		color:#000;
		visibility:visible;
		z-index:30;
	}
	.TextoContenido_EXTRA{
		padding:5px 5px 5px 5px;
	}
</style>

<script src="js/jquery.scrollTo.js" type="text/javascript"></script>
<script src="js/AjaxUpload.2.0.min.js" language="javascript"></script>

<script type="text/javascript">
	var CualLocal="uno";
	var MenuLocal="";
	$(document).ready(function(){
		if (CualLocal!="uno"){$("#uno").slideUp(1);}
		if (CualLocal!="dos"){$("#dos").slideUp(1);}
		if (CualLocal!="tres"){$("#tres").slideUp(1);}
		if (CualLocal!="cuatro"){$("#cuatro").slideUp(1);}
		if (CualLocal!="cinco"){$("#cinco").slideUp(1);}
		$("#preview").slideUp(1);
		$("#menu_1").fadeOut(1);
		$("#menu_2").fadeOut(1);
		$("#menu_3").fadeOut(1);
		$("#Portada").css("color","#ccc");
		
		var button = $('#Portada'), interval;
		$("#Portada").css("background","fff");
		new AjaxUpload('#Portada', {
			action: 'ajax.php?ajx=SI',
			onSubmit : function(file , ext){
				if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){
					$("#Portada_err").html("Solo se permiten imagenes");
					return false;
				}else{
					$("#Portada_err").html("&nbsp");
					$("#Portada").val(file+ext+" Cargando");
				}
			},
			onComplete: function(file, response){
				$("#Portada").glow('#006600', 400, 200);
				$("#Portada").val("OK");
				$("#Portada_ok").val(file);
			}
		});
	});
	function Desplegar(o){
		if (o!=CualLocal){
			$("#"+CualLocal).slideUp(300,function(){
				$("#"+o+"_qwe").html("");
				if (o!="preview"){$("#preview").slideUp(1);}
				switch(o){
					case "preview":
							$("#previewpreviewpreview").glow('#006600', 400, 200);
							$("#AgregarArt").fadeIn(1);
					break;
					case "uno":
						/*$("#preview").val();*/
						$("#TituloArticulo").val($("#TituloArticulo").attr('title'));
						$("#TituloArticulo").css("color","ccc");
						$("#ContenidoArticulo").val($("#ContenidoArticulo").attr('title'));
						$("#ContenidoArticulo").css("color","ccc");
						$("#Categoria").val("");
						$("#TagArticulo").val($("#TagArticulo").attr('title'));
						$("#TagArticulo").css("color","ccc");
						$("#Portada").val("");
					break;
					case "dos":
						$("#Id_Art_ED").val($("#Id_Art_ED").attr('title'));
						$("#Id_Art_ED").css("color","ccc");
					break;
					case "tres":
						$("#Id_Art_e").val($("#Id_Art_e").attr('title'));
						$("#Id_Art_e").css("color","ccc");
					break;
					case "cuatro":
						$("#Id_Art_M").val($("#Id_Art_M").attr('title'));
						$("#Id_Art_M").css("color","ccc");
					break;
					case "cinco":
					break;
					case "editar":
						$('#AgregarArt').fadeOut(1);
						$("#TituloArticulo").css("color","000");
						$("#TituloArticulo").css("color","000");
						$("#TagArticulo").css("color","000");
						o="uno";
					break;
				}
				$("#"+o).slideDown(300,function(){
					$.scrollTo(('#'+o),400);
				});	
				CualLocal=o;
			})
		}
	}
	function Enviar_Eliminar(){
		if (empty($("#Id_Art_e").val()) || $("#Id_Art_e").val()==$("#Id_Art_e").attr('title')){
			$("#Id_Art_e_err").html("Este campo es obligatorio");
			$("#Id_Art_e").addClass("CampoTexto_err");
			
		}else{
			$('#eliminar').fadeOut('fast');
			$.get("ajax.php", {
				ajx:"oT",
				ID_e:$("#Id_Art_e").val(),
			},function(data){
				i=$("#Id_Art_e").val();
				$("#Id_Art_e").val("ID del Artículo");
				$("#Id_Art_e").css("color","#ccc");
				$("#Id_Art_e_err").html("&nbsp");
				$('#eliminar').fadeIn('fast',function(){
					$("#tres_qwe").html(data);
					$("#EL"+i).glow('#acccfd', 400, 200);
				});
			})
		}
	}
	function EliminarArticuloListo(idx){
		$("#EL"+idx).glow('#f00', 400, 200);
		$("#NGN_EL"+idx).html($("#NGN_EL"+idx).html().split("[x]</a>")[1]);
		$('#eliminar').fadeOut('fast');
		$.get("ajax.php", {
			ajx:"Elm",
			ID_e:idx,
		},function(data){
			$('#eliminar').fadeIn('fast',function(){
				$("#EL"+idx).fadeOut('fast');
			})
		});
	}
	function Enviar_E_Mensaje(){
		if (empty($("#Id_Art_M").val()) || $("#Id_Art_M").val()==$("#Id_Art_M").attr('title')){
			$("#Id_Art_M_err").html("Este campo es obligatorio");
			$("#Id_Art_M").addClass("CampoTexto_err");
		}else{
			$('#Editar').fadeOut('fast');
			$.get("ajax.php", {
				ajx:"oM",
				ID_e:$("#Id_Art_M").val(),
			},function(data){
				$("#Id_Art_M").val("ID del Artículo");
				$("#Id_Art_M").css("color","#ccc");
				$("#Id_Art_M_err").html("&nbsp");
				$('#Editar').fadeIn('fast',function(){
					$("#cuatro_qwe").html(data);
					$("#cuatro_qwe").glow('#acccfd', 800, 200);
				});
			})
		}
	}
	function	EliminarComentarioListo(idx){
		$("#ME"+idx).glow('#f00', 400, 200);
		$("#NGN_ME"+idx).html($("#NGN_ME"+idx).html().split("[x]</a>")[1]);
		$('#Editar').fadeOut('fast');
		$.get("ajax.php", {
			ajx:"Elc",
			ID_e:idx,
		},function(data){
			$('#Editar').fadeIn('fast',function(){
				$("#ME"+idx).fadeOut('fast');
			})
		});
	}
	function mozWrap(open,close){
		var Texto=GE("ContenidoArticulo");
		var selLength=Texto.textLength;
		var selStart=Texto.selectionStart;
		var selEnd=Texto.selectionEnd;

		if(selEnd==1||selEnd==2)
		selEnd=selLength;
		var s1=(Texto.value).substring(0,selStart);
		var s2=(Texto.value).substring(selStart,selEnd)
		var s3=(Texto.value).substring(selEnd,selLength);
		if (Texto.value==Texto.title){
			Texto.value=open+close;
		}else{
			Texto.value=s1+open+s2+close+s3;
		}
		Texto.selStart=0;
		Texto.selEnd=0;
		blur_intro_comentario("ContenidoArticulo");
		return;
	}

	function barra_a(tipo){
		var dftemp="";
		var df="";
		switch(tipo){
		case'img':
			dftemp=prompt('Ingrese la URL de la imagen','img_pos/');
			if (dftemp!=null){
				df='[aliniacion=cen][img]'+dftemp+'[/img][/aliniacion]\n';
			}
		break;
		case 'url':
			dftemp=prompt('Ingrese la URL que desea postear','http://');
			if(dftemp!=null){
				df='[url='+dftemp+'-/?]'+dftemp+'[/url]\n';
			}
		break;
		case 'YT':
			dftemp=prompt('Ingrese el ID del video de YouTube:\n\nEjemplo:\nSi la URL de su video es:\nhttp://www.youtube.com/watch?v=gwKEdFoUB0o\nEl ID es: gwKEdFoUB0o','Ingrese solo el ID de YouTube');
			if(dftemp!=null){
				df='[aliniacion=cen][video]'+dftemp+'[/video] \n\n[url=http://www.youtube.com/watch?v='+dftemp+'-/?][color=Negro]You[/color][color=Rojo]Tube[/color][/url][/aliniacion]\n';
			}
		break;
		case 'FL':
			dftemp=prompt('Ingrese la URL del archivo swf','http://');
			if(dftemp!=null){
				df='[swf='+dftemp+'-?]\n[url='+dftemp+'-/?]'+dftemp+'[/url]\n';
			}
		break;
		case 'BJ':
			dftemp=prompt('Ingrese la URL del archivo','http://');
			if(dftemp!=null){
				df='[bajar]'+dftemp+'[/bajar]\n';
			}
		break;
		}
		mozWrap(df,"");
	}
	function MostarMenu(o){
		$("#menu_1").fadeOut(2);
		$("#menu_2").fadeOut(2);
		$("#menu_3").fadeOut(2);
		if(MenuLocal!=o && o!="ALL"){
			$("#"+o).fadeIn("fast");
			MenuLocal=o;
		}else{
			/*MenuLocal="ALL";*/
		}

			/*
		$("#menu_1").fadeOut("fast",function(){
			$("#menu_2").fadeOut("fast",function(){
				$("#menu_3").fadeOut("fast",function(){
					
						
					//}else{
					//	MenuLocal="";
					//}
				});
			});
		});
		*/
	}
	function Preview(){
		var t=0;
		if(empty($("#TituloArticulo").val()) || $("#TituloArticulo").val()==$("#TituloArticulo").attr('title')){
			$("#TituloArticulo_err").html("Este campo es obligatorio");
		}else{
			t++;
		}
		if(empty($("#Portada").val()) || $("#Portada").val()==$("#Portada").attr('title')){
			$("#Portada").val("#");
			$("#Portada_ok").val("#")
		}
		if(empty($("#ContenidoArticulo").val()) || $("#ContenidoArticulo").val()==$("#ContenidoArticulo").attr('title')){
			$("#ContenidoArticulo_err").html("Este campo es obligatorio");
		}else{
			t++;
		}
		if(empty($("#Categoria").val())){
			$("#Categoria_err").html("Este campo es obligatorio");
		}else{
			t++;
		}
		if(empty($("#TagArticulo").val()) || $("#TagArticulo").val()==$("#TagArticulo").attr('title')){
			$("#TagArticulo_err").html("Este campo es obligatorio");
		}else{
			if($("#TagArticulo").val().split(",").length<4){
				$("#TagArticulo_err").html("Tienes que ingresar por lo menos 4 tags separados por coma.");
			}else{
				t++;
			}
		}
		if(t==4){
			$("#preview").slideUp("fast");
			$("#AgregarArt").fadeOut("fast");
			$("#titulopreview").html("Preview");
			$.ajax({
				type: "POST",
				url: "ajax.php",
				data:'&ajx=PRW'+'&contenido='+encodeURIComponent($("#ContenidoArticulo").val()),
				success: function(data){
					$("#AgregarArt").fadeIn("fast",function(){
						$("#previewpreview").html(data);
						var TEXT_area = document.getElementsByName("t");
						if (0 < TEXT_area.length){
							dp.SyntaxHighlighter.HighlightAll('t');
						}
						$("#Listoinput").html("<input id='Listo' value='Listo' name='Listo' type='button' class='CampoBoton' onclick='Listo()'>");
						$("#preview").slideDown("fast");
						$.scrollTo('#preview',400);
					});
				}
			})
		}
	}
	function Listo(){
		$("#preview").slideUp("fast");
		$("#AgregarArt").fadeOut("fast");
		$.ajax({
			type: "POST",
			url: "ajax.php",
			data:'&ajx=AART'+'&titulo='+encodeURIComponent($("#TituloArticulo").val())
			+'&contenido='+encodeURIComponent($("#ContenidoArticulo").val())
			+'&categoria='+encodeURIComponent($("#Categoria").val())
			+'&TagArticulo='+encodeURIComponent($("#TagArticulo").val())
			+'&portada='+encodeURIComponent($("#Portada_ok").val())
			+'&idedit='+encodeURIComponent($("#ID_EDIT").val()),
			success: function(data){
				$("#previewpreview").html(data);
				$("#Listoinput").html("<input id='' value='OK' name='' type='button' class='CampoBoton' onclick='Desplegar(\"uno\")'>");
				$("#titulopreview").html("OK!");
				Desplegar("preview");
			}

		})
	}
	function Editar_art(){
		if (empty($("#Id_Art_ED").val()) || $("#Id_Art_ED").val()==$("#Id_Art_ED").attr('title')){
			$("#Id_Art_ED_err").html("Este campo es obligatorio");
			$("#Id_Art_ED").addClass("CampoTexto_err");
		}else{
			$('#EditarA').fadeOut('fast');
			$.get("ajax.php", {
				ajx:"EdiA",
				ID_Arte:$("#Id_Art_ED").val(),
			},function(data){
				if (data.trim()!="ok"){
					$("#Id_Art_ED").val("ID del Artículo");
					$("#Id_Art_ED").css("color","#ccc");
					$("#Id_Art_M_err").html("&nbsp");
					$('#EditarA').fadeIn('fast',function(){
						$("#dos_qwe").html(data);
						$("#dos_qwe").glow('#ff0000', 800, 200);
					});
				}else{
					$.get("ajax.php", {
						ajx:"EdiAT",
						ID_Arte:$("#Id_Art_ED").val(),
					},function(data){
						$("#TituloArticulo").val(limpiar(data.trim()));
						$("#TituloArticulo").css("color","#000");
					});
					$.get("ajax.php", {
						ajx:"EdiAC",
						ID_Arte:$("#Id_Art_ED").val(),
					},function(data){
						$("#ContenidoArticulo").val(limpiar(data.trim()));
						$("#ContenidoArticulo").css("color","#000");
					});
					$.get("ajax.php", {
						ajx:"EdiACat",
						ID_Arte:$("#Id_Art_ED").val(),
					},function(data){
						$("#"+data.trim()).attr("selected","selected");
						$("#Categoria").css("color","#000");
					});
					$.get("ajax.php", {
						ajx:"EdiATag",
						ID_Arte:$("#Id_Art_ED").val(),
					},function(data){
						data=data.trim();
						$("#TagArticulo").val(limpiar(data));
						$("#TagArticulo").css("color","#000");
						$("#Portada").val("OK");
						$("#Portada_ok").val("EDIT");
						$("#ID_EDIT").val($("#Id_Art_ED").val());
						Desplegar("editar");
						$('#EditarA').fadeIn(1);
					});
				}
			});
		}
	}
	function limpiar(string) {
		var output="";
		for (var i=0; i<string.length; i++){
			if ( string.charCodeAt(i) > 0 && string.charCodeAt(i) < 127){
				output += string.charAt(i)
			}
		}
		output=output.replace(/&iquest;/gi,"¿");
		output=output.replace(/&aacute;/gi,"á");
		output=output.replace(/&eacute;/gi,"é");
		output=output.replace(/&iacute;/gi,"í");
		output=output.replace(/&oacute;/gi,"ó");
		output=output.replace(/&uacute;/gi,"ú");
		output=output.replace(/&ntilde;/gi,"ñ");
		return output;
	}
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
				<div class="cajaIzquierdaTitulo cajaIzquierdaTituloTexto">Administrar</div>
				<div class="cajaIzquierdaTitulolado cajaIzquierdaTituloladoD"></div>
				<div class="cajaIzquierdaresto">
				<UL class="Ulresto">
					<li class='listaResto'>
						<a href='javascript:Desplegar("uno")'  target='_self' class='listarestotexto' alt='' title=''>Agregar Artículo</a>
					</li>
					<li class='listaResto'>
						<a href='javascript:Desplegar("dos")'  target='_self' class='listarestotexto' alt='' title=''>Editar Artículo</a>
					</li>
					<li class='listaResto'>
						<a href='javascript:Desplegar("tres")'  target='_self' class='listarestotexto' alt='' title=''>Eliminar Artículo</a>
					</li>
					<li class='listaResto'>
						<a href='javascript:Desplegar("cuatro")'  target='_self' class='listarestotexto' alt='' title=''>Administrar Comentarios</a>
					</li>
					<li class='listaResto'>
						<a href='javascript:Desplegar("cinco")'  target='_self' class='listarestotexto' alt='' title=''>Agregar Frases</a>
					</li>
				</ul>
				</div>
			</div>
		</div> 
		<div id="ladob">
			<div class="cajaDerecha" id="preview">
				<div class="comentariosTituloBorde"></div>
				<div class="comentariosTitulo comentariosTitulotexto" id="titulopreview">Preview</div>
				<div class="comentariosTituloBorde comentariosTituloBordeI"></div>		
				<div class="comentariosresto" id="previewpreviewpreview"> 
					<div class="TextoContenido TextoContenido_EXTRA"  id="previewpreview">
					</div>
					<p align="center" id="Listoinput">
						
					</p>
				</div>
			</div>
			<div class="cajaDerecha" id="uno"><? /* LISTO */ ?>
				<div class="comentariosTituloBorde"></div>
				<div class="comentariosTitulo comentariosTitulotexto">Agregar Artículo</div>
				<div class="comentariosTituloBorde comentariosTituloBordeI"></div>
				<div class="comentariosresto  cargando_gif cargando_grande" onclick="MostarMenu('ALL')" > 
					<div class="Formulario" id="AgregarArt">
						<input type="text" value="Titulo del Artículo" title="Titulo del Artículo" id="TituloArticulo" maxlength="70" class="CampoTexto" onkeypress="keypress_intro_comentario(this.id)" onfocus="onfocus_input(this)" onblur="onblur_input(this);blur_intro_comentario(this.id)">
						<span  class="Error" id="TituloArticulo_err">&nbsp</span>
						<br>
						<p>
							<div class="barraeditborde"></div>
							<div class="barraedit">
								<a href="javascript:mozWrap('[negrita]','[/negrita]')" title="Negrita"><img src="imagenes/espacio.gif" border=0 alt="" class="botones botones_B"></a>
								<a href="javascript:mozWrap('[subrayado]','[/subrayado]')" title="Subrayado"><img src="imagenes/espacio.gif" border=0 alt="" class="botones botones_U"></a>
								<a href="javascript:mozWrap('[italica]','[/italica]')" title="Italica"><img src="imagenes/espacio.gif" border=0 alt="" class="botones botones_I"></a>
								<a href="javascript:mozWrap('[aliniacion=der]','[/aliniacion]')" title="Alineación Derecha"><img src="imagenes/espacio.gif" border=0 alt="" class="botones botones_AD"></a>
								<a href="javascript:mozWrap('[aliniacion=jus]','[/aliniacion]')" title="Alineación Justificada"><img src="imagenes/espacio.gif" border=0 alt="" class="botones botones_AJ"></a>
								<a href="javascript:mozWrap('[aliniacion=cen]','[/aliniacion]')" title="Alineación Centro"><img src="imagenes/espacio.gif" border=0 alt="" class="botones botones_AC"></a>
								<a href="javascript:mozWrap('[aliniacion=der]','[/aliniacion]')" title="Alineación Derecha"><img src="imagenes/espacio.gif" border=0 alt="" class="botones botones_AI"></a>
								<a href="javascript:MostarMenu('menu_1')" title="Tamaño Fuente"><img src="imagenes/espacio.gif" border=0 alt="" class="botones botones_TF"></a>
								<a href="javascript:MostarMenu('menu_2')" title="Tipo Fuente"><img src="imagenes/espacio.gif" border=0 alt="" class="botones botones_TiF"></a>
								<a href="javascript:MostarMenu('menu_3')" title="Color Fuente"><img src="imagenes/espacio.gif" border=0 alt="" class="botones botones_CF"></a>
								<a href="javascript:mozWrap('[codigo]','[/codigo]')" title="Codigo"><img src="imagenes/espacio.gif" border=0 alt="" class="botones botones_CD"></a>
								<a href="javascript:barra_a('BJ')" title="Bajar"><img src="imagenes/espacio.gif" border=0 alt="" class="botones botones_BJ"></a>
								<a href="javascript:barra_a('img')" title="Insertar Imagen"><img src="imagenes/espacio.gif" border=0 alt="" class="botones botones_IM"></a>
								<a href="javascript:barra_a('url')" title="Insertar Link"><img src="imagenes/espacio.gif" border=0 alt="" class="botones botones_LK"></a>
								<a href="javascript:barra_a('YT')" title="Insertar Video"><img src="imagenes/espacio.gif" border=0 alt="" class="botones botones_YT"></a>
								<a href="javascript:mozWrap('[HR]','')" title="Separador"><img src="imagenes/espacio.gif" border=0 alt="" class="botones botones_HR"></a>
								<a href="javascript:mozWrap('[UL]','[/UL]')" title="Separador"><img src="imagenes/espacio.gif" border=0 alt="" class="botones botones_UL"></a>
								<br>
								<ul id="menu_1" class="menu menu1"> 
									<li><a href="javascript:MostarMenu('menu_1');mozWrap('[Tamanio=Pequenia]','[/Tamanio]')" title="Letra Pequeña">&nbsp<b>Pequeña</b></a></li>
									<li><a href="javascript:MostarMenu('menu_1');mozWrap('[Tamanio=Normal]','[/Tamanio]')" title="Letra Normal">&nbsp<b>Normal</b></a></li>
									<li><a href="javascript:MostarMenu('menu_1');mozWrap('[Tamanio=Grande]','[/Tamanio]')" title="Letra Grande">&nbsp<b>Grande</b></a></li>
									<li><a href="javascript:MostarMenu('menu_1');mozWrap('[Tamanio=Enorme]','[/Tamanio]')" title="Letra Enorme">&nbsp<b>Enorme</b></a></li>
								</ul>
								<ul id="menu_2" class="menu menu2"> 
									<li><a href="javascript:MostarMenu('menu_2');mozWrap('[fuente=Arial]','[/fuente]')" title="Fuente Arial" class="art_fuente_Arial">&nbsp<b>Fuente Arial</b></a></li>
									<li><a href="javascript:MostarMenu('menu_2');mozWrap('[fuente=Courier]','[/fuente]')" title="Fuente Courier" class="art_fuente_Courier">&nbsp<b>Fuente Courier</b></a></li>
									<li><a href="javascript:MostarMenu('menu_2');mozWrap('[fuente=Courier]','[/fuente]')" title="Fuente Courier" class="art_fuente_Courier">&nbsp<b>Fuente Courier</b></a></li>
									<li><a href="javascript:MostarMenu('menu_2');mozWrap('[fuente=Georgia]','[/fuente]')" title="Fuente Georgia" class="art_fuente_Georgia">&nbsp<b>Fuente Georgia</b></a></li>
									<li><a href="javascript:MostarMenu('menu_2');mozWrap('[fuente=Times]','[/fuente]')" title="Fuente Times" class="art_fuente_Times">&nbsp<b>Fuente Times</b></a></li>
									<li><a href="javascript:MostarMenu('menu_2');mozWrap('[fuente=Verdana]','[/fuente]')" title="Fuente Verdana" class="art_fuente_Verdana">&nbsp<b>Fuente Verdana</b></a></li>
									<li><a href="javascript:MostarMenu('menu_2');mozWrap('[fuente=Trebuchet]','[/fuente]')" title="Fuente Trebuchet" class="art_fuente_Trebuchet">&nbsp<b>Fuente Trebuchet</b></a></li>
									<li><a href="javascript:MostarMenu('menu_2');mozWrap('[fuente=Lucida]','[/fuente]')" title="Fuente Lucida" class="art_fuente_Lucida">&nbsp<b>Fuente Lucida</b></a></li>
									<li><a href="javascript:MostarMenu('menu_2');mozWrap('[fuente=Comic]','[/fuente]')" title="Fuente Comic" class="art_fuente_Comic">&nbsp<b>Fuente Comic</b></a></li>
								</ul>
								<ul id="menu_3" class="menu menu3"> 
									<li><a href="javascript:MostarMenu('menu_3');mozWrap('[color=Rojo Oscuro]','[/color]')" title="Color Rojo Oscuro"><span class="art_color_darkred">&#9824;</span>&nbsp&nbsp<b>Color Rojo Oscuro</b></a></li>
									<li><a href="javascript:MostarMenu('menu_3');mozWrap('[color=Rojo]','[/color]')" title="Color Rojo"><span class="art_color_red">&#9824;</span>&nbsp&nbsp<b>Color Rojo</b></a></li>
									<li><a href="javascript:MostarMenu('menu_3');mozWrap('[color=Naranja]','[/color]')" title="Color Naranja"><span class="art_color_orange">&#9824;</span>&nbsp&nbsp<b>Color Naranja</b></a></li>
									<li><a href="javascript:MostarMenu('menu_3');mozWrap('[color=Marron]','[/color]')" title="Color Marron"><span class="art_color_brown">&#9824;</span>&nbsp&nbsp<b>Color Marron</b></a></li>
									<li><a href="javascript:MostarMenu('menu_3');mozWrap('[color=Amarillo]','[/color]')" title="Color Amarillo"><span class="art_color_yellow">&#9824;</span>&nbsp&nbsp<b>Color Amarillo</b></a></li>
									<li><a href="javascript:MostarMenu('menu_3');mozWrap('[color=Verde]','[/color]')" title="Color Verde"><span class="art_color_green">&#9824;</span>&nbsp&nbsp<b>Color Verde</b></a></li>
									<li><a href="javascript:MostarMenu('menu_3');mozWrap('[color=Olivia]','[/color]')" title="Color Olivia"><span class="art_color_olive">&#9824;</span>&nbsp&nbsp<b>Color Olivia</b></a></li>
									<li><a href="javascript:MostarMenu('menu_3');mozWrap('[color=Cyan]','[/color]')" title="Color Cyan"><span class="art_color_cyan">&#9824;</span>&nbsp&nbsp<b>Color Cyan</b></a></li>
									<li><a href="javascript:MostarMenu('menu_3');mozWrap('[color=Azul]','[/color]')" title="Color Azul"><span class="art_color_blue">&#9824;</span>&nbsp&nbsp<b>Color Azul</b></a></li>
									<li><a href="javascript:MostarMenu('menu_3');mozWrap('[color=Azul Oscuro]','[/color]')" title="Color Azul Oscuro"><span class="art_color_darkblue">&#9824;</span>&nbsp&nbsp<b>Color Azul Oscuro</b></a></li>
									<li><a href="javascript:MostarMenu('menu_3');mozWrap('[color=Indigo]','[/color]')" title="Color Indigo"><span class="art_color_indigo">&#9824;</span>&nbsp&nbsp<b>Color Indigo</b></a></li>
									<li><a href="javascript:MostarMenu('menu_3');mozWrap('[color=Violeta]','[/color]')" title="Color Violeta"><span class="art_color_violet">&#9824;</span>&nbsp&nbsp<b>Color Violeta</b></a></li>
									<li><a href="javascript:MostarMenu('menu_3');mozWrap('[color=Violeta]','[/color]')" title="Color Violeta"><span class="art_color_black">&#9824;</span>&nbsp&nbsp<b>Color Violeta</b></a></li>
								</ul>
							</div>
							<div class="barraeditborde barraeditbordeI"></div>
							<textarea id="ContenidoArticulo" name="ContenidoArticulo" maxlength="50000" class="CampoTexto CampoTextArea CampoTextAreaGrande" onkeypress="keypress_intro_comentario(this.id)" onfocus="onfocus_input(this)" onblur="onblur_input(this);blur_intro_comentario(this.id)" title="Contenido del Artículo">Contenido del Artículo</textarea>
							<span class="Error" id="ContenidoArticulo_err">&nbsp</span>
							<br>
						</p>
						<select class="CampoTexto" id="Categoria"  title="Categoría del Artículo" onfocus="onfocus_input(this)" onblur="onblur_input(this);blur_intro_comentario(this.id)" onclick="keypress_intro_comentario(this.id)"> 
							<option selected="selected" value="" id="pri">Categoría del Artículo</option>
							<option value="geek" id="geek">&#8226;&#8212; GEEK</option>
							<option value="eclipse" id="eclipse">&#8226;&#8212; Eclipse</option>
							<option value="Ajax" id="Ajax">&#8226;&#8212; AJAX</option>
							<option value="Asp" id="Asp">&#8226;&#8212; ASP</option>
							<option value="cpp" id="cpp">&#8226;&#8212; C++</option>
							<option value="css" id="css">&#8226;&#8212; CSS</option>
							<option value="fls" id="fls">&#8226;&#8212; Flash</option>
							<option value="html" id="html">&#8226;&#8212; HTML</option>
							<option value="js" id="js">&#8226;&#8212; JavaScript</option>
							<option value="PHP" id="PHP">&#8226;&#8212; PHP</option>
							<option value="SQL" id="SQL">&#8226;&#8212; SQL</option>
							<option value="VB" id="VB">&#8226;&#8212; Visual Basic/Studio</option>
							<option value="otros" id="otros">&#8226;&#8212; Otros</option>
							<option value="descargas" id="descargas">&#8226;&#8212; Descargas</option>
						</select>
						<span  class="Error" id="Categoria_err">&nbsp</span>
						<br>
						<input type="text" value="Tags del Artículo tag1 , tag2 , tag3 , tag4" title="Tags del Artículo tag1 , tag2 , tag3 , tag4" id="TagArticulo" maxlength="70" class="CampoTexto" onkeypress="keypress_intro_comentario(this.id)" onfocus="onfocus_input(this)" onblur="onblur_input(this);blur_intro_comentario(this.id)">
							<span class="Error" id="TagArticulo_err"></span>
						<br>
						<input type="text" title="Portada" id="Portada" class="CampoTexto" value="Portada">
						<input type="hidden" value="" id="Portada_ok">
							<span class="Error " id="Portada_err">&nbsp</span>
						<br>
						<p align="center">
							<input id="PreviewBoton" value="Preview" name="Preview" type="button" class="CampoBoton" onclick="Preview()">
							<input type="hidden" value="0" id="ID_EDIT">
						</p>
					</div>
				</div>
			</div>
			<div class="cajaDerecha" id="dos">
				<div class="comentariosTituloBorde"></div>
				<div class="comentariosTitulo comentariosTitulotexto">Editar Artículo</div>
				<div class="comentariosTituloBorde comentariosTituloBordeI"></div>
				<div class="comentariosresto cargando_gif cargando_pequenio">
					<div class="Formulario Formulario_Pequenio" id="EditarA">
						<input type="text" value="ID del Artículo" id="Id_Art_ED" maxlength="30" class="CampoTexto" onkeypress="keypress_intro_comentario(this.id)" onfocus="onfocus_input(this)" onblur="onblur_input(this);blur_intro_comentario(this.id)" title="ID del Artículo">
						<span  class="Error" id="Id_Art_ED_err">&nbsp</span>
						<br>
						<p align="center">
							<input id="aceptar" value="Aceptar" name="aceptar" type="button" class="CampoBoton" onclick="Editar_art()">
						</p>
					</div>
				</div>
				<div id="dos_qwe"></div>
			</div>
			<div class="cajaDerecha" id="tres"><? /* LISTO */ ?>
				<div class="comentariosTituloBorde"></div>
				<div class="comentariosTitulo comentariosTitulotexto">Eliminar Artículo</div>
				<div class="comentariosTituloBorde comentariosTituloBordeI"></div>
				<div class="comentariosresto cargando_gif cargando_pequenio"> 
					<div class="Formulario Formulario_Pequenio" id="eliminar">
						<input type="text" value="ID del Artículo" id="Id_Art_e" maxlength="30" class="CampoTexto" onkeypress="keypress_intro_comentario(this.id);return permite(event, 'num')" onfocus="onfocus_input(this)" onblur="onblur_input(this);blur_intro_comentario(this.id)" title="ID del Artículo">
						<span  class="Error" id="Id_Art_e_err">&nbsp</span>
						<br>
						<p align="center">
							<input id="aceptar" value="Aceptar" name="aceptar" type="button" class="CampoBoton" onclick="Enviar_Eliminar()">
						</p>
					</div>
				</div>
				<span id="tres_qwe"></span>
			</div>
			<div class="cajaDerecha" id="cuatro"><? /* LISTO */ ?>
				<div class="comentariosTituloBorde"></div>
				<div class="comentariosTitulo comentariosTitulotexto">Administrar Comentarios</div>
				<div class="comentariosTituloBorde comentariosTituloBordeI"></div>
				<div class="comentariosresto cargando_gif cargando_pequenio"> 
					<div class="Formulario Formulario_Pequenio" id="Editar">
						<input type="text" value="ID del Artículo" id="Id_Art_M" maxlength="30" class="CampoTexto" onkeypress="keypress_intro_comentario(this.id)" onfocus="onfocus_input(this)" onblur="onblur_input(this);blur_intro_comentario(this.id)" title="ID del Artículo">
						<span  class="Error" id="Id_Art_M_err">&nbsp</span>
						<br>
						<p align="center">
							<input id="aceptar" value="Aceptar" name="aceptar" type="button" class="CampoBoton" onclick="Enviar_E_Mensaje()">
						</p>
					</div>
				</div>
				<div id="cuatro_qwe"></div>
			</div>
			
			<div class="cajaDerecha" id="cinco"><? /* LISTO */ ?>
				<div class="comentariosTituloBorde"></div>
				<div class="comentariosTitulo comentariosTitulotexto">Administrar Comentarios</div>
				<div class="comentariosTituloBorde comentariosTituloBordeI"></div>
				<div class="comentariosresto cargando_gif cargando_pequenio"> 
					<div class="Formulario Formulario_Pequenio" id="Editar">
						<input type="text" value="ID del Artículo" id="Id_Art_M" maxlength="30" class="CampoTexto" onkeypress="keypress_intro_comentario(this.id)" onfocus="onfocus_input(this)" onblur="onblur_input(this);blur_intro_comentario(this.id)" title="ID del Artículo">
						<input type="text" value="ID del Artículo" id="Id_Art_M" maxlength="30" class="CampoTexto" onkeypress="keypress_intro_comentario(this.id)" onfocus="onfocus_input(this)" onblur="onblur_input(this);blur_intro_comentario(this.id)" title="ID del Artículo">
						<span  class="Error" id="Id_Art_M_err">&nbsp</span>
						<br>
						<p align="center">
							<input id="aceptar" value="Aceptar" name="aceptar" type="button" class="CampoBoton" onclick="">
						</p>
					</div>
				</div>
				<div id="cinco_qwe"></div>
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