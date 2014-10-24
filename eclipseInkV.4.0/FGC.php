<?
function Generar_NuevoArriba(){
	$Obtentener=Obtentener_NuevoArriba();
	$FGC="";
	for ($i=1;$i<(3*3);$i=$i+3) {
		$img="img_pos_miniatura/".dechex($Obtentener[$i]).".png";
		if (!file_exists($img)){
			switch(trim($Obtentener[$i+2])){
				case "geek":
					$img="img_pos_miniatura/geek.png"; 
				break;
				case "eclipse":
					$img="img_pos_miniatura/eclipse.png"; 
				break;
				default:
					$img="img_pos_miniatura/codigo.png";
				break;
			}
		}
		if(strlen($Obtentener[$i+1])>40){
			$Obtentener[$i+1]=substr(Caracteres_Especiales_INV($Obtentener[$i+1]),0,37)."...";
		}
		$FGC.="<div class='nuevoarriba' name='nuevoarriba' id='nuevoarriba_".$i."'>";
		$FGC.="<a href='".traducir_url("Articulo_".$Obtentener[$i].".html")."'  target='_self' alt='' title=''>";
		$FGC.="<div class='nuevoarribaimg'></div><div class='nuevoarribaabajo'><img src='".$img."' title='' alt='' class='nuevoimagen'> ";
		$FGC.="</div><div class='nuevoarribatexto'>";
		$FGC.=$Obtentener[$i+1];
		$FGC.="</div></a></div>";
	}
	echo $FGC;
}
function Generar_ULT_Comentarios(){
	$FGC="";
	$Obtentener=Obtener_Ult_C();
	for ($i=1;$i<(3*10);$i=$i+3) {
		$Obtentener[$i+1]="<b>".$Obtentener[$i+1]."</b> comento ".$Obtentener[$i+2];
		if (strlen($Obtentener[$i+1]) > 30){
			$Obtentener[$i+1]=substr(Caracteres_Especiales_INV($Obtentener[$i+1]),0,27)."...";
		}
		$FGC.="<li class='listaResto'>";
		$FGC.="<a href='".traducir_url("Articulo_".$Obtentener[$i].".html")."'  target='_self' class='listarestotexto' alt='' title=''>".$Obtentener[$i+1]."</a></li>";
	}
	echo $FGC;
}
function Generar_Top10(){
	$FGC="";
	$Obtentener=Obtener_Mejores_Art();
	for ($i=1;$i<(2*10);$i=$i+2) {
		if (strlen($Obtentener[$i+1]) > 20){
			$Obtentener[$i+1]=substr(Caracteres_Especiales_INV($Obtentener[$i+1]),0,20)."...";
		}
		$FGC.="<li class='listaResto'>";
		$FGC.="<a href='".traducir_url("Articulo_".$Obtentener[$i].".html")."' class='listarestotexto' target='_self' alt='' title=''>".$Obtentener[$i+1]."</a></li>";
	}

	echo $FGC;
}
function Generar_Tag(){
	$Obtentener=Obtener_TAG();
	for ($i=1;$i<50;$i++) {
		$Obtentener[$i]=strtolower($Obtentener[$i]);
		srand((double)microtime()*100000);
		$Obtentener[$i]=trim($Obtentener[$i]);
		$Tam=rand(10,20);
		$FGC.="<a href='".traducir_url("buscar!".$Obtentener[$i])."' title='".$Obtentener[$i]."'  target='_self' class='textotag'><span style='font-size:".$Tam."px'>".$Obtentener[$i]."</span></a> ";
	}
	echo $FGC;
}
function Generar_Frase(){
	$Obtentener=Obtener_Frase();
	$FGC="";
	$FGC.="<div id='Frase'>";
	//$FGC.="<div class='Frasecinta'></div>";
	//$FGC.="<div class='Frasecinta FrasecintaD'></div>";
	$FGC.="<div id='FraseHoja'>";
	$FGC.="<div id='FraseHojaTexto'>";
	$FGC.=$Obtentener[0];
	$FGC.="<br><div align=right class=´Autor´><b>".strtoupper($Obtentener[1])."</b></div>";
	$FGC.="</div></div>";
	$FGC.="<div id='FraseHojaSombra'></div>";
	$FGC.="</div>";
	echo $FGC;
}
function Generar_Ultimos_Art($pagina,$seccion="principal",$tipo="Todo"){
	switch ($seccion){
		case "principal":
			$Obtentener=Obtener_Nuevos($pagina);
		break;
		case "resto":
			$Obtentener=Obtener_Otros_Post($tipo,$pagina);
		break;
	}
	$LS=count($Obtentener);
	$FGC="";
	for ($i=1;$i<(13*4) && $i<$LS;$i=$i+4) {
		
		if (strlen($Obtentener[$i+2]) > 80){
			$Obtentener[$i+2]=substr(Caracteres_Especiales_INV($Obtentener[$i+2]),0,77)."...";
		}
		$FGC.="<div class='cajaDerechaTitulolado'></div>";
		$FGC.="<div class='cajaDerechaTitulo'><a href='".traducir_url("Articulo_".$Obtentener[$i].".html")."'  target='_self' alt='".$Obtentener[$i+2]."' title='".$Obtentener[$i+2]."' class='cajaDerechaTituloTexto'>".$Obtentener[$i+2]."</a></div>";
		$FGC.="<div class='cajaDerechaTitulolado cajaDerechaTituloladoD'></div>";
		$FGC.="<div class='cajaDerecharesto cajaDerecharestoTexto'>";
		$FGC.=$Obtentener[$i+1];
		$FGC.="... <b><a href='".traducir_url("Articulo_".$Obtentener[$i].".html")."'  target='_self' alt='".$Obtentener[$i+2]."' title='".$Obtentener[$i+2]."' class='cajaDerecharestoTexto'>Seguir Leyendo »</a></b>";
		$FGC.="</div>";
	}
	echo $FGC;
	return (count($Obtentener)+1)>(13*4); 
}

function Generar_Articulos_Rel($keywords,$id){
	$FGC="";
	$Obtentener=Articulos_rel(explode(",",$keywords),$id);
	for ($i=0;$i<(2*10);$i=$i+2) {
		if (strlen($Obtentener[$i+1]) > 30){
			$Obtentener[$i+1]=substr(Caracteres_Especiales_INV($Obtentener[$i+1]),0,27)."...";
		}
		$FGC.="<li class='listaResto'>";
		$FGC.="<a href='".traducir_url("Articulo_".$Obtentener[$i].".html")."'  target='_self' class='listarestotexto' alt='' title=''>".$Obtentener[$i+1]."</a></li>";
	}
	echo $FGC;
}
function Generar_Comentario($ID_C,$Nombre,$Comentario){
	$FGC="";
	$FGC.="<div class='comentariosresto ComentarioNuevo' id='".$ID_C."'>";
	$FGC.="<div class='comentarioC comentarioNombre comentarioCTexto' id='NGN_".$ID_C."'>".Caracteres_Especiales($Nombre)."</div>";
	$FGC.="<div class='comentarioC comentarioComentario comentarioCTexto'>".Caracteres_Especiales($Comentario)."</div>";
	$FGC.="</div>";
	return $FGC;
}
function Generar_Todos_Comentarios($id){
	$Obtentener=Obterner_Comentarios_post($id);
	$FGC="";
	$LS=count($Obtentener);
	if ($LS==1){
		$FGC.=Generar_Comentario("Vacio","","El Artículo no tiene Comentarios");
	}else{
		for ($i=1;$i<$LS;$i=$i+3) {
			$FGC.=Generar_Comentario($Obtentener[$i],$Obtentener[$i+1]." dijo:",$Obtentener[$i+2]);
		}
	}
	echo $FGC;
}
function Obtener_Art_TAG($keywords){
	$LS=count($keywords);
	$FGC="";
	for ($i=0;$i<($LS-1)&&$i<10;$i++) {
		$keywords[$i]=trim($keywords[$i]);
		$FGC.="<a href='".traducir_url("buscar!".$keywords[$i])."' title='".$keywords[$i]."'  target='_self' class='ArticulosFirmasTag'>".$keywords[$i]."</a> - ";
	}
	$keywords[$i]=trim($keywords[$i]);
	$FGC.="<a href='".traducir_url("buscar!".$keywords[$i])."' title='".$keywords[$i]."'  target='_self' class='ArticulosFirmasTag'>".$keywords[$i]."</a>";
	echo $FGC;
}
function Encomillar($FGC){
	$FGC=str_replace("\"","&quot;",$FGC);
	$FGC=str_replace("<_(COM.SIM)>","'",$FGC);
	$FGC=str_replace("<_(COM.JMM)>","\"",$FGC);
	return $FGC;
}
function Agregar_BR($FGC){
	$FGC_Array=explode ("[codigo]",$FGC);
	$FGC="";
	$i=1;
	while($i<count($FGC_Array)-1){
		$FGC.=Agregar_BR_2($FGC_Array[$i])."[codigo]";
		$i++;
	}
	if(count($FGC_Array)>1){
		$FGC=nl2br($FGC_Array[0])." [codigo]".$FGC.Agregar_BR_2($FGC_Array[$i]);
	} else {
		$FGC=nl2br($FGC_Array[0]);
	}
	return Agregar_BR_3($FGC);
}
function Agregar_BR_2($FGC){
	$FGC_Array=explode("[/codigo]",$FGC);
	$FGC=$FGC_Array[0]."[/codigo]".nl2br($FGC_Array[1]);
	return $FGC;
}
function Agregar_BR_3($FGC){
	$FGC_Array=explode("<br />",$FGC);
	$i_while=0;
	$FGC="";
	while($i_while<count($FGC_Array)){
		$FGC.="\n<br />".chop(trim($FGC_Array[$i_while]));
		$i_while++;
	}
	return $FGC;
}
function May_Men($FGC){
	$FGC=str_replace("<","&lt;",$FGC);
	$FGC=str_replace(">","&gt;",$FGC);
	return $FGC;
}
function Traductor($FGC){
	$FGC=Encomillar($FGC);
	$FGC=May_Men($FGC);
	$FGC=Agregar_BR($FGC);
	$FGC=str_replace("[bajar]","<a  href='",$FGC);
	$FGC=str_replace("[/bajar]","' class='TamoArticulobajar' target='_blank' ><img src='imagenes/espacio.gif' border=0 class='TamoArticulobajar Articulobajar'></a>",$FGC);
	$FGC=str_replace("[codigo]","<DIV id=subcontenido><textarea class=vb name='t' cols='80' rows='10' id='t'>",$FGC);
	$FGC=str_replace("[/codigo]","</textarea></DIV>",$FGC);
	$FGC=str_replace("[HR]","<div class='ArticuloSeparador'></div>",$FGC);
	$FGC=str_replace("[UL]","<UL><LI class='listaRestoART'>",$FGC);
	$FGC=str_replace("[/UL]","</LI></UL>",$FGC);
	$FGC=str_replace("[aliniacion=jus]","<div align='justify'>",$FGC);
	$FGC=str_replace("[aliniacion=cen]","<div align='center'>",$FGC);
	$FGC=str_replace("[aliniacion=izq]","<div align='left'>",$FGC);
	$FGC=str_replace("[aliniacion=der]","<div align='right'>",$FGC);	
	$FGC=str_replace("[/aliniacion]","</div>",$FGC);
	$FGC=str_replace("[negrita]","<B>",$FGC);
	$FGC=str_replace("[/negrita]","</B>",$FGC);
	$FGC=str_replace("[italica]","<I>",$FGC);
	$FGC=str_replace("[/italica]","</I>",$FGC);
	$FGC=str_replace("[subrayado]","<U>",$FGC);
	$FGC=str_replace("[/subrayado]","</U>",$FGC);
	$FGC=str_replace("[Tamanio=Pequenia]","<span class='Tm_9'>",$FGC);
	$FGC=str_replace("[Tamanio=Normal]","<span class='Tm_14'>",$FGC);
	$FGC=str_replace("[Tamanio=Grande]","<span class='Tm_25'>",$FGC);
	$FGC=str_replace("[Tamanio=Enorme]","<span class='Tm_30'>",$FGC);
	$FGC=str_replace("[/Tamanio]","</span>",$FGC);
	$FGC=str_replace("[fuente=Arial]","<span class='art_fuente_Arial'>",$FGC);
	$FGC=str_replace("[fuente=Courier]","<span class='art_fuente_Courier'>",$FGC);
	$FGC=str_replace("[fuente=Georgia]","<span class='art_fuente_Georgia'>",$FGC);
	$FGC=str_replace("[fuente=Times]","<span class='art_fuente_Times'>",$FGC);
	$FGC=str_replace("[fuente=Verdana]","<span class='art_fuente_Verdana'>",$FGC);
	$FGC=str_replace("[fuente=Trebuchet]","<span class='art_fuente_Trebuchet'>",$FGC);
	$FGC=str_replace("[fuente=Lucida]","<span class='art_fuente_Lucida'>",$FGC);
	$FGC=str_replace("[fuente=Comic]","<span class='art_fuente_Comic'>",$FGC);
	$FGC=str_replace("[/fuente]","</span>",$FGC);
	$FGC=str_replace("[color=Rojo Oscuro]","<span class='art_color_darkred'>",$FGC);
	$FGC=str_replace("[color=Rojo]","<span class='art_color_red'>",$FGC);
	$FGC=str_replace("[color=Naranja]","<span class='art_color_orange'>",$FGC);
	$FGC=str_replace("[color=Marron]","<span class='art_color_brown'>",$FGC);
	$FGC=str_replace("[color=Amarillo]","<span class='art_color_yellow'>",$FGC);
	$FGC=str_replace("[color=Verde]","<span class='art_color_green'>",$FGC);
	$FGC=str_replace("[color=Olivia]","<span class='art_color_olive'>",$FGC);
	$FGC=str_replace("[color=Cyan]","<span class='art_color_cyan'>",$FGC);
	$FGC=str_replace("[color=Azul]","<span class='art_color_blue'>",$FGC);
	$FGC=str_replace("[color=Azul Oscuro]","<span class='art_color_darkblue'>",$FGC);
	$FGC=str_replace("[color=Indigo]","<span class='art_color_indigo'>",$FGC);
	$FGC=str_replace("[color=Violeta]","<span class='art_color_violet'>",$FGC);
	$FGC=str_replace("[color=Negro]","<span class='art_color_black'>",$FGC);
	$FGC=str_replace("[/color]","</span>",$FGC);
	$FGC=str_replace("[url="," <a class='linkart' target='_blank' href='",$FGC);
	$FGC=str_replace("-/?]","'><b>",$FGC);// Mirame y no me toques.
	$FGC=str_replace("[/url]","</b></a>",$FGC);
	$FGC=str_replace("[img]"," <img class='img_art ' src='",$FGC); 	
	$FGC=str_replace("[/img]","'> ",$FGC);
	$FGC=str_replace("[video]","<embed src=\"http://www.youtube.com/v/",$FGC); 	
	$FGC=str_replace("[/video]","\" quality=high width=\"640px\" height=\"385px\" type=\"application/x-shockwave-flash\" AllowNetworking=\"internal\" AllowScriptAccess=\"never\" autoplay=\"false\" wmode=\"transparent\"></embed>",$FGC);
	return $FGC;
}
function Traducir_Cat($FGC){
	switch ($FGC){
		case 'VB':
		$FGC="Visual Basic";
		break;
		case 'Ajax':
		$FGC="AJAX";
		break;
		case 'Asp':
		$FGC="Asp";
		break;
		case 'cpp':
		$FGC="C++";
		break;
		case 'css':
		$FGC="CSS";
		break;
		case 'fls':
		$FGC="Flash";
		break;
		case 'html':
		$FGC="HTML";
		break;
		case 'js':
		$FGC="JavaScript";
		break;
		case 'PHP':
		$FGC="PHP";
		break;
		case 'SQL':
		$FGC="SQL";
		break;
		case 'otros':
		$FGC="Otros";
		break;
		case 'descargas':
		$FGC="Descargas";
		break;
		case 'eclipse':
		$FGC="Eclipse";
		break;
		case 'geek':
		$FGC="Geek";
		break;
	}
	return $FGC;
}
Function Caracteres_Especiales($FGC){
	$FGC=str_replace("–","-",$FGC);
	$FGC=str_replace("á","&aacute;",$FGC);
	$FGC=str_replace("é","&eacute;",$FGC);
	$FGC=str_replace("í","&iacute;",$FGC);
	$FGC=str_replace("ó","&oacute;",$FGC);
	$FGC=str_replace("ú","&uacute;",$FGC);
	$FGC=str_replace("ñ","&ntilde;",$FGC);
	$FGC=str_replace("Ã±","&ntilde;",$FGC);
	$FGC=str_replace("±","&ntilde;",$FGC);
	$FGC=str_replace("Ã¡","&aacute;",$FGC);
	$FGC=str_replace("Ã©","&eacute;",$FGC);
	$FGC=str_replace("Ã³","&oacute;",$FGC);
	$FGC=str_replace("Ãº","&uacute;",$FGC);
	$FGC=str_replace("Ã","&iacute;",$FGC);
	$FGC=str_replace("Â¡","&iexcl;",$FGC);
	$FGC=str_replace("Â·","&middot;",$FGC);
	$FGC=str_replace("Â¿","&iquest;",$FGC);
	$FGC=str_replace("Â´","&acute;",$FGC);
	$FGC=str_replace("Â¨","&uml;",$FGC);
	$FGC=str_replace("Ã","&iacute;",$FGC);
	$FGC=str_replace("í‡","&ccedil;",$FGC);
	$FGC=str_replace("í§","&Ccedil;",$FGC);
	$FGC=str_replace("â€œ","&quot;",$FGC);
	$FGC=str_replace("â€¦","...",$FGC);
	$FGC=str_replace("â€","&quot;",$FGC);
	$FGC=str_replace("\"","&quot;",$FGC);
	return $FGC;
}
Function Caracteres_Especiales_INV($FGC){
	$FGC=str_replace("&iquest;","¿",$FGC);
	$FGC=str_replace("&aacute;","á",$FGC);
	$FGC=str_replace("&eacute;","é",$FGC);
	$FGC=str_replace("&iacute;","í",$FGC);
	$FGC=str_replace("&oacute;","ó",$FGC);
	$FGC=str_replace("&uacute;","ú",$FGC);
	$FGC=str_replace("&ntilde;","ñ",$FGC);
	return $FGC;
}
function Gen_des($FGC){
	$FGC=Traga_CODE($FGC,"[img]","[/img]");
	$FGC=Traga_CODE($FGC,"[codigo]","[/codigo]");
	$FGC=Traga_CODE($FGC,"[bajar]","[bajar]");
	$FGC=Traga_CODE($FGC,"[video]","[/video]");
	$FGC=Traga_CODE($FGC,"[","]");
	$FGC=str_replace("<_(COM.SIM)>"," ",$FGC);
	$FGC=str_replace("<_(COM.JMM)>"," ",$FGC);
	$FGC=substr($FGC,0,300);
	$FGC=nl2br($FGC);
	$FGC_Array=explode("<br />",$FGC);
	$i_while=0;
	$FGC="";
	while ($i_while < count($FGC_Array)){
		$FGC_Array[$i_while]=trim($FGC_Array[$i_while]);
		if (!empty($FGC_Array[$i_while])){
			$FGC.=" ".chop($FGC_Array[$i_while]);
		}
		$i_while++;
	}
	return trim($FGC);
}
function Traga_CODE($FGC,$Cadena_Inicial,$Cadena_Final){
	$FGC_Array=explode ($Cadena_Inicial,$FGC);
	$FGC="";
	$i=1;
	while ($i < count($FGC_Array)-1){
		$FGC.= Traga_CODE2($FGC_Array[$i],$Cadena_Final);
		$i++;
	}
	if (count($FGC_Array) > 1){
		$FGC=$FGC_Array[0]." ".$FGC.Traga_CODE2($FGC_Array[$i],$Cadena_Final);
	} else {
		$FGC=$FGC_Array[0];
	}
	return $FGC;
}
function Traga_CODE2($FGC,$Cadena_Final){
	$FGC_Array=explode ($Cadena_Final,$FGC);
	if(count($FGC_Array)>1){
		$FGC=$FGC_Array[1];
	}
	return $FGC;
}
function limpiar($FGC){
	if (empty($FGC)) return false;
	$LS=strlen($FGC);
	$I=0;
	$salida="";
	while($I < $LS){
		if (ord($FGC[$I])>0 && ord($FGC[$I])<127){
			$salida=$salida.$FGC[$I];
		}
		$I++;
	}
 	return $salida;
}
function TransfomarFecha ($FGC){
	$FGC=str_replace(".","",$FGC);
	$FGC=str_replace("Lunes","Mon",$FGC);
	$FGC=str_replace("Martes","Tue",$FGC);
	$FGC=str_replace("Miercoles","Wed",$FGC);
	$FGC=str_replace("Jueves","Thu",$FGC);
	$FGC=str_replace("Viernes","Fry",$FGC);
	$FGC=str_replace("Sabado","Sat",$FGC);
	$FGC=str_replace("Domingo","Sun",$FGC);
	$FGC=str_replace("Enero","Jan",$FGC);
	$FGC=str_replace("Febrero","Feb",$FGC);
	$FGC=str_replace("Marzo","Mar",$FGC);
	$FGC=str_replace("Abril","Apr",$FGC);
	$FGC=str_replace("Mayo","May",$FGC);
	$FGC=str_replace("Junio","Jun",$FGC);
	$FGC=str_replace("Julio","Jul",$FGC);
	$FGC=str_replace("Agosto","Aug",$FGC);
	$FGC=str_replace("Setiembre","Sept",$FGC);
	$FGC=str_replace("Octubre","Oct",$FGC);
	$FGC=str_replace("Noviembre","Nov",$FGC);
	$FGC=str_replace("Diciembre","Dec",$FGC);
	$FGC=str_replace(" de "," ",$FGC);
	return trim($FGC);
}
?>
