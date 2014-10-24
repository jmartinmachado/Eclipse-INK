<?
	require("VariablesGlobales.php");
	switch($ajx){
		case "ac":
			require_once('recaptchalib.php');
			/*$privatekey = ;*/
			$resp = recaptcha_check_answer ("6LcNy8USAAAAADP41eDg4PNWi-VAI0-RsvDl6PfA",
			$_SERVER["REMOTE_ADDR"],
			$challenge_field,
			$response_field);
			if (!$resp->is_valid) {
				echo "FAIL_C";
			}else{
				if	(Agregar_Comentario($ID_P,May_Men($comentario),May_Men($nombre),$Titulo)==1){
					echo Generar_Comentario($ID_C,May_Men($nombre)." dijo:",May_Men($comentario));
				}
			}
		break;
		case "oT":
			$Obtener=Obtener_Articulo($ID_e);
			if ($Obtener["titulo"]==""){
				echo Generar_Comentario("EL".$ID_e,"No existe el Art&iacute;culo","");
			}else{
				$Visitas=get_visitas($ID_e);
				echo Generar_Comentario("EL".$ID_e,"<a href='javascript:EliminarArticuloListo(".$ID_e.")' class='comentarioNombre comentarioCTexto'>[x]</a> <a href='".traducir_url("Articulo_".$ID_e.".html")."' class='comentarioNombre comentarioCTexto' target='_blank' alt='' title=''>".$Obtener["titulo"]."</a>","ID: ".$ID_e."<br>Visitas: ".$Visitas."<br> Categoria: ".$Obtener["cat"]."<br> Tag: ".$Obtener["tag"]."<br> Fecha de creaci&oacute;n: ".$Obtener["fecha"]);
			}
		break;
		case "Elm":
			Eliminar_Articulo($ID_e);
		break;
		case "oM":
			$Obtener=Obterner_Comentarios_post($ID_e);
			$LS=count($Obtener);
			$AJX="";
			if ($LS==1){
				$AJX=Generar_Comentario("ME".$Obtener[$i],"El Art&iacute;culo no tiene Comentarios","");
			}else{
				for ($i=1;$i<$LS;$i=$i+3) {
					$AJX.=Generar_Comentario("ME".$Obtener[$i],"<a href='javascript:EliminarComentarioListo(".$Obtener[$i].")' class='comentarioNombre comentarioCTexto'>[x]</a> ".$Obtener[$i+1]." dijo:",$Obtener[$i+2]);
				}
			}
			echo $AJX;
		break;
		case "Elc":
			Borrar_Comentario($ID_e);
		break;
		case "PRW":
			echo stripslashes(Traductor($contenido));
		break;
		case "AART":
			if($portada!="EDIT"){
				$retorno= Agregar_Articulo(Caracteres_Especiales($titulo),Caracteres_Especiales($contenido),Caracteres_Especiales($TagArticulo),Caracteres_Especiales($categoria),Caracteres_Especiales(Gen_des($contenido)),Obtener_Fecha(),hora(),$portada);
				echo "<p></p><div align='center'><span class='TextoContenido'>Articulo Agregado, <a href='".traducir_url("Articulo_".$retorno.".html")."' target='_blank' class='TextoContenido'><b>Ver Articulo</b></a></span></div>";
			}else{
				$retorno= EDIT_Articulo($idedit,Caracteres_Especiales($titulo),Caracteres_Especiales($contenido),Caracteres_Especiales($TagArticulo),Caracteres_Especiales($categoria),Gen_des($contenido),Obtener_Fecha());
				echo "<p></p><div align='center'><span class='TextoContenido'>Articulo Editado, <a href='".traducir_url("Articulo_".$retorno.".html")."' target='_blank' class='TextoContenido'><b>Ver Articulo</b></a></span></div>";
			}
			
		break;
		case "SI":
			if (move_uploaded_file($_FILES['userfile']['tmp_name'], "img_pos_miniatura/".basename($_FILES['userfile']['name']))) {
				echo "success";
			} else {
				echo "error";
			}
		break;
		case "EdiA":
			$obterner=Obtener_Articulo($ID_Arte);
			if ($obterner["titulo"]=="404"){
				echo Generar_Comentario("","El Art&iacute;culo no existe","");;
			}else{
				echo "ok";
			}
		break;
		case "EdiAT":
			$obterner= Obtener_Articulo($ID_Arte);
			echo ($obterner["titulo"]);
		break;
		case "EdiAC":
			$obterner= Obtener_Articulo($ID_Arte);
			echo Encomillar(($obterner["contenido"]));
		break;
		case "EdiACat":
			$obterner= Obtener_Articulo($ID_Arte);
			echo $obterner["cat"];
		break;
		case "EdiATag":
			$obterner= Obtener_Articulo($ID_Arte);
			echo $obterner["tag"];
		break;
		break;
		default:
			echo "UP's";
		break;
	}
?>