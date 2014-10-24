<?
function Generar_Ult_M($user,$post_titulo,$url){
	$FGC="<a class='Link_1 Tm_9' href='Articulo_".$url.".html' title='".$post_titulo."'><B>".$user."</B> comento ".substr($post_titulo,0,17)."...</a>";
	return $FGC;
}

function Generar_Mejores_Art($url,$titulo){
	if (strlen($titulo)>28){
		$titulo_1=substr($titulo,0,28)."...";
	}else{
		$titulo_1=$titulo;
	}
	$FGC="<a class='Link_1 Tm_9' href='Articulo_".$url.".html' title='".$titulo."'><B>".$titulo_1."</B></a>";
	return $FGC;
}

function Gen_TAG($tag){
	$tag=strtolower($tag);
	srand((double)microtime()*100000);
	$Tam=rand(9,20);
	$FGC="<a href='".traducir_url("buscar.php?keywords=".$tag."&and=0")."' title='".$tag."' class='Link_1 Texto_3'><span style='font-size:".$Tam."px'>".$tag."</span></a> ";
	return $FGC;
}
function Generar_Frase($frase,$autor){

	$FGC="<div class='Mini_BOX Mini_BOX_Frase'>";
	$FGC.="<div class='Mini_BOX_in'>";
	$FGC.="<span class='Texto_Frase'><b>".$frase."</b>";
	$FGC.="<p style='text-align:right'><b>- ".$autor." -</b></p></span>";
	$FGC.="</div>"; 
	$FGC.="</div>";

/*	$FGC="<div class='Mini_BOX Mini_BOX_Icon_Azul'>";
	$FGC.="<div class=' Texto_3'>";
	$FGC.="<span class='Texto_2'>Frase Del Momento...</span>";
	$FGC.="<p align='justify'>";
	$FGC.="<span class='Texto_3'>".$frase."</span>";
	$FGC.="</p>";
	$FGC.="<p align='right'>";
	$FGC.="<span class='Texto_3'>".$autor."</span>";
	$FGC.="</p>";
	$FGC.="</div>";
	$FGC.="</div>";*/
	return $FGC;
	
	
}
function Generar_Men($Men){
	$FGC="<div class='Mini_BOX Mini_BOX_Icon_Azul'>";
	$FGC.="<div class='Mini_BOX_in Texto_3'>";
	$FGC.="<span class='Texto_2'>Guepa !!</span>";
	$FGC.="<p align='center'>";
	$FGC.="<span class='Texto_3'>".$Men."</span>";
	$FGC.="</p>";
	$FGC.="<p align='center'>";
	$FGC.="<a href='".traducir_url("inicio.php")."' class='Texto_5' alt='' title='Ir a la Pagina Principal'><b>Ir a la Pagina Principal</b></a>";
	$FGC.="</p>";
	$FGC.="<p></p>";
	$FGC.="</div>";
	$FGC.="</div>";
	return $FGC;
}
function Gen_Ult_Art($titulo,$descripcion,$url,$nivel){
	if (strlen($titulo)>50){
		$titulo=substr($titulo,0,50)."...";
	}
	if (strlen($descripcion)<1){
		$descripcion="Codigo Fuente";
	}
	if (strlen($descripcion)>200){
		$descripcion=substr($descripcion,0,200)."...";
	}
	
$FGC="<div class='Mini_BOX Mini_BOX_Des'>";
$FGC.="<div class='Titulo_Derecha'><b>Top 10</b></div>";
$FGC.="<div class='Descripcion'><b>".$descripcion."<a href='".traducir_url("Articulo_".$url.".html")."' class='Texto_3' title='Leer m&aacute;s'>Seguir Leyendo</a></b></div>";

$FGC.="";
$FGC.="</div>";
/*
	$FGC="<div class='Mini_BOX Mini_BOX_Icon_Naranja'>";
	$FGC.="<div class='Mini_BOX_in Texto_3'>";
	$FGC.="<span class='Texto_5'><b><u>".$titulo."</u></b></span>";
	$FGC.="<p align='justify'>";
	$FGC.="<span class='Texto_3'>".$descripcion."</span>";
	$FGC.="</p>";
	$FGC.="<p align='right'>";
	$FGC.="<span class='Texto_3'><a href='".traducir_url("Articulo_".$url.".html")."' class='Link_2' title='Leer m&aacute;s'><img src='images/readmore.gif' border='0' vspace='5' hspace='5' alt=''></a></span>";
	$FGC.="</p>";
	$FGC.="</div>";
	$FGC.="</div>";
	*/
	return $FGC;
}
function Escribir_Post($titulo,$contenido,$fecha){
	$FGC="<div>";
	$FGC.="<div class='titulo_testo'>".stripslashes($titulo)."</div>";
	$FGC.="</div>";
	$FGC.="<p>";
	$FGC.="<div class='Texto_3 Tm_11' align=justify>".Traductor($contenido)."</div>";
	$FGC.="<p></p>";
	$FGC.="<div class='Texto_3 Tm_12' align=right>";
	$FGC.="<b>".$fecha."</b>";
	$FGC.="<br>";
	$FGC.="<b>Eclipse INK.</b>";
	$FGC.="</div>";
	$FGC.="</p>";
	return $FGC;
}
function Escribir_Comentario($comentario,$nombre,$Id_Comentario,$art_titulo,$id_pos,$Borrar){
	$FGC="<div class='Mini_BOX Mini_BOX_Icon_Rojo' id='COM_".$Id_Comentario."' ><div class='Mini_BOX_in'><div class='Mini_BOX_in_Datos'>";
	if($Borrar){
		$FGC.="<div>";
		$FGC.="<a href=\"javascript:Borrar_Comentario('".$Id_Comentario."')\" title='Borrar' alt=''class='Texto_3'><b> [ BORRAR ] </b></a>";
		$FGC.="</div>";
		$FGC.="<p></p>";
		$FGC.="<div class='Mini_BOX_in_Datos HR_AL '>";
		$FGC.="<a href='".traducir_url("Articulo_".$id_pos).".html' class='Texto_3'><b>".substr($art_titulo,0,100)."</b></a>";
		$FGC.="</div>";
	}
	$FGC.="<div class='post_Datos_IZQ Texto_3'>";
	$FGC.="<b>".$nombre."</b> Dijo: ";
	$FGC.="</div>";
	$FGC.="</div>";
	$FGC.="<div class='Mini_BOX_in_Datos HR_AL'><div class='post_Datos_IZQ Texto_3 Tm_12' align=justify>";
	$FGC.=Agregar_BR(May_Men($comentario));
	$FGC.="</div></div></div></div>";
	return $FGC;
}
Function Escribir_Ult_Comentarios(){
	$FGC_Array=Obtener_Ult_C();
	if(!empty($FGC_Array)){
		$FGC="<UL class='Texto_3'>";
		$const=13*3;
		$i=1;
		$LS=count($FGC_Array);
		while($i<$LS-1&&$i<$const){
			$FGC.="<li >".Generar_Ult_M($FGC_Array[$i],$FGC_Array[$i+1],$FGC_Array[$i+2])."</li>";
			$i=$i+3;
		}
		$FGC.="</UL>";
	}else{
		$FGC="<span class='Texto_2'>UP's</span>";
	}
	return $FGC;
}
function Des_encomillar($FGC,$Com=0){
$FGC=stripslashes($FGC);
/*if($Com==0){
$FGC=str_replace("\"","''",$FGC);
}else{*/
//$FGC=str_replace("\"","<_(COM.JMM)>",$FGC);
/*}*/
$FGC=str_replace("\"","&quot;",$FGC);
$FGC=str_replace("'","<_(COM.SIM)>",$FGC);
return $FGC;
}
function Encomillar($FGC){
$FGC=str_replace("\"","&quot;",$FGC);
$FGC=str_replace("<_(COM.SIM)>","'",$FGC);
$FGC=str_replace("<_(COM.JMM)>","\"",$FGC);
return $FGC;
}
function May_Men($FGC){
$FGC=str_replace("<","&lt;",$FGC);
$FGC=str_replace(">","&gt;",$FGC);
return $FGC;
}
Function Caracteres_Especiales($FGC){
	$FGC=str_replace("ñ","&ntilde;",$FGC);
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
	$FGC=str_replace("í‡","&ccedil;",$FGC);
	$FGC=str_replace("í§","&Ccedil;",$FGC);
	$FGC=str_replace("â€œ","&quot;",$FGC);
	$FGC=str_replace("â€¦","...",$FGC);
	$FGC=str_replace("â€","&quot;",$FGC);
	return $FGC;
}
function Traductor($FGC){
$FGC=Encomillar($FGC);
//$FGC=May_Men($FGC);
$FGC=Agregar_BR($FGC);
$FGC=str_replace("[bajar]","<div class='bajar'><a href=\"http://www.EclipseINK.com.ar/bajar.php?url_A=",$FGC);
$FGC=str_replace("[/bajar]","\" title='Bajar' class='bajari'><img src='images/espacio.gif' border=0 alt='' class='Display_None'></a></div>",$FGC);
$FGC=str_replace("[codigo]","<DIV id=subcontenido><textarea class=vb name='t' cols='80' rows='10' id='t'>",$FGC);
$FGC=str_replace("[/codigo]","</textarea></DIV>",$FGC);
$FGC=str_replace("[HR]","<center><div class='HR_AL barra_ancho'>&nbsp</div></center>",$FGC);
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
$FGC=str_replace("[Tamanio=Pequenia]","<span class='art_fuente_pequenia'>",$FGC);
$FGC=str_replace("[Tamanio=Normal]","<span class='art_fuente_normal'>",$FGC);
$FGC=str_replace("[Tamanio=Grande]","<span class='art_fuente_grande'>",$FGC);
$FGC=str_replace("[Tamanio=Enorme]","<span class='art_fuente_enorme'>",$FGC);
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
$FGC=str_replace("[url="," <a class='Link_2' target='_blank' href='",$FGC);
$FGC=str_replace("-/?]","'><b>",$FGC);// Mirame y no me toques.
$FGC=str_replace("[/url]","</b></a>",$FGC);
$FGC=str_replace("[img]"," <img class='img_art' src='",$FGC); 	
$FGC=str_replace("[/img]","'> ",$FGC);
$FGC=str_replace("[video]","<embed src=\"http://www.youtube.com/v/",$FGC); 	
$FGC=str_replace("[/video]","\" quality=high width=\"640px\" height=\"385px\" type=\"application/x-shockwave-flash\" AllowNetworking=\"internal\" AllowScriptAccess=\"never\" autoplay=\"false\" wmode=\"transparent\"></embed>",$FGC);

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
function separar_3($FGC){
$const=70;
if (strlen(trim($FGC)) >= $const){
$FGC=substr($FGC,0,$const)." ".separar_3(substr($FGC,$const,strlen($FGC)));
}
return $FGC;
}
function separar_2($FGC){
$FGC_Array=explode(" ",$FGC);
$i=1;
$FGC="";
while($i<count($FGC_Array)){
$FGC.=separar_3($FGC_Array[$i-1])." ";
$i++;
}

return $FGC;
}
function separar_1($FGC){
$FGC_Array=explode (">",$FGC);
$FGC=$FGC_Array[0].">".separar_2($FGC_Array[1]);
return $FGC;
}
function separar($FGC){
$FGC_Array=explode ("<",$FGC);
$FGC="";
$i=1;
while ($i < count($FGC_Array)-1){
$FGC.= separar_1($FGC_Array[$i])." <";
$i++;
}
if (count($FGC_Array) > 1){
$FGC=separar_2($FGC_Array[0])."<".$FGC.separar_1($FGC_Array[$i]);
} else {
$FGC=separar_2($FGC_Array[0]);
}
return $FGC;
}
function My_Chop($FGC){
	$i=0;
	$FGC=str_replace("'","",$FGC);
	$FGC=str_replace(","," ",$FGC);
	$FGC_array=explode(" ",$FGC);
	$FGC="";
	while ($i < count($FGC_array)){
	$FGC_array[$i]=trim($FGC_array[$i]);
	if ($FGC_array[$i]!=""){
		$FGC.=$FGC_array[$i].",";
	}
		$i++;
	} 
	$FGC=substr($FGC,0,strlen($FGC)-1);
	return $FGC;
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
function Traducir_Cat($FGC){
switch ($FGC){
case 'VB':
$FGC="VisualBasic";
break;
case 'Ajax':
$FGC="Ajax";
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
$FGC="PHP";
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
?>