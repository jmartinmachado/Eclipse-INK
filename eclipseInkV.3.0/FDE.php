<?
Function Abrir_txt($nombre){
	$temp="";
	if (file_exists($nombre)){
		$archivo=file($nombre);
		$lineas=count($archivo);
		for($i=0;$i<$lineas;$i++){
			$temp.=$archivo[$i];
		}
	}else{
		$temp="Up's";
	}
	return $temp;
}
function traducir_url($url){
	if(Bandera("cortar")){
		if($url=="index.php"){
			return "http://www.EclipseINK.com.ar/";
		}else{
			return "http://www.EclipseINK.com.ar/".$url;
		}
	}else{
		return $url;
	}
}
function sitemap($url){
	Añadir("sitemap.txt","http://www.EclipseInk.com.ar/".$url."\n");
}
function Bandera($archivo){
	if(file_exists("bandera/".$archivo)==true){
		$FDE=true;
	}else{
		$FDE=false;
	}
	return $FDE;
}
function ValidaMail($v_email){
	if(ereg("^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@+([_a-zA-Z0-9-]+\.)*[a-zA-Z0-9-]{2,200}\.[a-zA-Z]{2,6}$", $v_email )){
		return true;
	}else{
		return false;
	}
}
function Obtener_Banner($CAR,$RND){
	$archivos="";
	$carpeta=opendir("Banner_".$CAR);
	while($file = readdir($carpeta)){
		if ($file!="Thumbs.db"&&$file!=".."&&$file!= "."&&$file!= ""){
			if ($archivos==""){
				$archivos=$file;
			}else{
				$archivos.="-".$file;
			}
		}
	}
	
	closedir($carpeta);
	$Archivos1=explode("-",$archivos);
	
	if ($RND!=0){
		$cual=$RND-1;
	}
	if (isset($cual) && $cual>= count($Archivos1) || $RND==0){
		$cual=array_rand($Archivos1,1);
	}
	if($Archivos1[$cual]!= ""){
		return Abrir_txt("Banner_".$CAR."/".$Archivos1[$cual]);
	}else{
		return "";
	}
}
function Añadir($Nbre_Archivo,$Contenido){
	$fp=fopen($Nbre_Archivo,"a");
	fwrite($fp, $Contenido);
	fclose($fp);
}
function Grabar_Post_Bot($Nbre_Archivo,$Contenido){
	$fp=fopen($Nbre_Archivo,"w+");
	fwrite($fp,$Contenido);
	fclose($fp);
}
function Obtener_Fecha($v=0){
	$nombre_mes=array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Setiembre","Octubre","Noviembre","Diciembre");
	$nombre_dia=array ("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
	$dia_semana=intval(strftime("%w"));
	$dia_numero=intval(strftime("%d"));
	$mes=intval(strftime("%m"));
	$año=strftime("%Y");
	$hora=strftime("%H:%M:%S");
	switch($v){
		case '0':
			$FDE_Dia=$nombre_dia[$dia_semana].", ".$dia_numero." de ".$nombre_mes[$mes-1]." de ".$año.".";
		break;
		case '1':
			$FDE_Dia="/".$dia_numero."/".$nombre_mes[$mes-1]."/".$año;
		break;
		case '2':
			$FDE_Dia=$nombre_dia[$dia_semana].", ".$dia_numero." de ".$nombre_mes[$mes-1]." de ".$año.", A las ".$hora;
		break;
		case '3':
			$FDE_Dia=date( "Y-m-d H:i:s", mktime((strftime("%H")-3),0,0,$mes,$dia_numero,$año));
		break;
	}
	return $FDE_Dia;
}
function Aniadir_BD_XS($Titulo,$descripcion,$key,$id){
	$Titulo=trim($Titulo);
	$descripcion=trim($descripcion);
	$meta_Description=substr($descripcion,0,200);
	$meta_Keywords=$key;
	$meta_Subject="http://www.EclipseInk.com.ar/art.php?id=".$id;
	$meta_Title="Eclipse INK - ".$Titulo;
	$Contenido="add(\"<a class='Texto_5' href='".$meta_Subject." ' title='".$meta_Title."' alt='".$meta_Title."'><b>".$meta_Title."</b></a>\",\"".$meta_Keywords."\",\"".$meta_Description."\");\n";
	Añadir("js/db.js",$Contenido);
}

function Bot(){
// Articulos
if (Bandera("Bot_Articulos")){
$FDE_Men="";
$FDE_OK="";
$cadena="Titulo_";
$cadena_largo=strlen($cadena);
$carpeta=opendir("boot");
$Fecha_hora=Obtener_Fecha(2);
$numm=-1;
while($file=readdir($carpeta)){
if ($file != "Thumbs.db" && $file != ".." && $file != "."  && $file != ""){
if(substr($file,0,$cadena_largo) == $cadena){
$numm=substr($file,$cadena_largo,-4);
break;
}
}
}
closedir($carpeta);
if($numm>-1){
$F_Titulo="boot/Titulo_".$numm.".txt";
$F_Txt="boot/Txt_".$numm.".txt";
$F_Des="boot/Des_".$numm.".txt";
$F_Tag="boot/Tag_".$numm.".txt";
$F_Cat="boot/Cat_".$numm.".txt";
$F_key="boot/key_".$numm.".txt";
if(!file_exists ($F_Titulo))$FDE_Men.="<errormsg> No existe el Archivos ".$F_Titulo." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(!file_exists ($F_Txt))$FDE_Men.="<errormsg> No existe el Archivos ".$F_Txt." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(!file_exists ($F_Des))$FDE_Men.="<errormsg> No existe el Archivos ".$F_Des." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(!file_exists ($F_Tag))$FDE_Men.="<errormsg> No existe el Archivos ".$F_Tag." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(!file_exists ($F_Cat))$FDE_Men.="<errormsg> No existe el Archivos ".$F_Cat." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(!file_exists ($F_key))$FDE_Men.="<errormsg> No existe el Archivos ".$F_key." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(trim($FDE_Men)==""){
$D_Titulo=trim(Abrir_txt ($F_Titulo));
$D_Txt=trim(Abrir_txt ($F_Txt));
$D_Des=trim(Abrir_txt ($F_Des));
$D_Tag=trim(Abrir_txt ($F_Tag));
$D_Cat=trim(Abrir_txt ($F_Cat));
$D_key=trim(Abrir_txt ($F_key));
if(Agregar_Articulo($D_Titulo,$D_Txt,$D_Tag,$D_Cat,$D_Des,$D_key,0,Obtener_Fecha())){
$FDE_OK ="<msg> Post Agregado Correctamente. Post Perteneciente al archivo Nro Index ".$numm." <msg>"." <fecha>".$Fecha_hora."</fecha>\n";
if(file_exists ($F_Titulo) && unlink ($F_Titulo)==FALSE)$FDE_Men.="<errormsg> No se Puede Borrar el Archivos ".$F_Titulo." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(file_exists ($F_Txt) && unlink ($F_Txt)==FALSE)$FDE_Men.="<errormsg> No se Puede Borrar el Archivos ".$F_Txt." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(file_exists ($F_Des) && unlink ($F_Des)==FALSE)$FDE_Men.="<errormsg> No se Puede Borrar el Archivos ".$F_Des." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(file_exists ($F_Tag) && unlink ($F_Tag)==FALSE)$FDE_Men.="<errormsg> No se Puede Borrar el Archivos ".$F_Tag." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(file_exists ($F_Cat) && unlink ($F_Cat)==FALSE)$FDE_Men.="<errormsg> No se Puede Borrar el Archivos ".$F_Cat." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(file_exists ($F_key) && unlink ($F_key)==FALSE)$FDE_Men.="<errormsg> No se Puede Borrar el Archivos ".$F_key." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
}else{
$FDE_Men.="<errormsg> No se pudo Agregar el Articulo perteneciente al archivo Index Nro. ".$numm.", Error en la Base de Datos </errormsg>"." <fecha>".$Fecha_hora."</fecha>\n";
}
}else{
if(file_exists ($F_Titulo) && unlink ($F_Titulo)==FALSE)$FDE_Men.="<errormsg> No se Puede Borrar el Archivos ".$F_Titulo." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(file_exists ($F_Txt) && unlink ($F_Txt)==FALSE)$FDE_Men.="<errormsg> No se Puede Borrar el Archivos ".$F_Txt." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(file_exists ($F_Des) && unlink ($F_Des)==FALSE)$FDE_Men.="<errormsg> No se Puede Borrar el Archivos ".$F_Des." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(file_exists ($F_Tag) && unlink ($F_Tag)==FALSE)$FDE_Men.="<errormsg> No se Puede Borrar el Archivos ".$F_Tag." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(file_exists ($F_Cat) && unlink ($F_Cat)==FALSE)$FDE_Men.="<errormsg> No se Puede Borrar el Archivos ".$F_Cat." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(file_exists ($F_key) && unlink ($F_key)==FALSE)$FDE_Men.="<errormsg> No se Puede Borrar el Archivos ".$F_key." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
}
/*
}else{
$FDE_Men.="<errormsg> No quedan mas Archivos. Bot_Articulos Desctivado </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
rename("","")*/
}
if (!empty($FDE_Men)){
error_log($FDE_Men,3,"Boot.log");
}
}
// FRASES
if (Bandera("Bot_Frases")){
$FDE_Men="";
$cadena="Autor_";
$cadena_largo=strlen($cadena);
$carpeta=opendir("boot");
$Fecha_hora=Obtener_Fecha(2);
$numm=-1;
while ($file=readdir($carpeta)){
if ($file != "Thumbs.db" && $file != ".." && $file != "."  && $file != ""){
if(substr($file,0,$cadena_largo) == $cadena){
$numm=substr($file,$cadena_largo,-4);
break;
}
}
}
closedir($carpeta);
if($numm>-1){
$F_Autor="boot/Autor_".$numm.".txt";
$F_Frase="boot/Frase_".$numm.".txt";
if(!file_exists($F_Autor))$FDE_Men.="<errormsg> No existe el Archivo ".$F_Autor."</errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(!file_exists($F_Frase))$FDE_Men.="<errormsg> No existe el Archivo ".$F_Frase."</errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(trim($FDE_Men)==""){
$D_Autor=trim(Abrir_txt($F_Autor));
$D_Frase=trim(Abrir_txt($F_Frase));
if(Agregar_Frase($D_Frase,$D_Autor,0)){
$FDE_OK.="<msg> Frase Agregada Correctamente. Frase Perteneciente al archivo Nro Index ".$numm." <msg>"." <fecha>".$Fecha_hora."</fecha>\n";
if(file_exists ($F_Autor) && unlink ($F_Autor)==FALSE)$FDE_Men.="<errormsg> No se Puede Borrar el Archivos ".$F_Autor." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(file_exists ($F_Frase) && unlink ($F_Frase)==FALSE)$FDE_Men.="<errormsg> No se Puede Borrar el Archivos ".$F_Frase." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
}else{
$FDE_Men.="<errormsg> No se pudo agregar la Frase perteneciente al Archivo Index Nro. ".$numm.", Error en la Base de Datos </errormsg>"." <fecha>".$Fecha_hora."</fecha>\n";
}
}else{
if(file_exists($F_Autor)&&unlink($F_Autor)==FALSE)$FDE_Men.="<errormsg> No se Puede Borrar el Archivos ".$F_Autor." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
if(file_exists($F_Frase)&&unlink($F_Frase)==FALSE)$FDE_Men.="<errormsg> No se Puede Borrar el Archivos ".$F_Frase." </errormsg> <fecha>".$Fecha_hora."</fecha>\n";
}
}
if(!empty($FDE_Men)){
error_log($FDE_Men,3,"Boot.log");
}
}
if(!empty($FDE_OK)){
error_log($FDE_OK,3,"Boot.log");
}
}
function Generar_frase_Bot($frase,$autor){
if (file_exists ("boot/Contador_frase.txt")){
$Nro_Archivos=trim(Abrir_txt ("boot/Contador_frase.txt"));
}else{
$Nro_Archivos=0;
}
$F_frase="boot/Frase_".$Nro_Archivos.".txt";
$F_autor="boot/Autor_".$Nro_Archivos.".txt";
Grabar_Post_Bot($F_frase,$frase);
Grabar_Post_Bot($F_autor,$autor);
if(file_exists ($F_frase) && file_exists ($F_autor)){
Grabar_Post_Bot("boot/Contador_frase.txt",$Nro_Archivos+1);
}
}
function Generar_Post_Bot($Titulo,$texto,$descripcion,$Tags,$cat,$keywords){
if (file_exists ("boot/Contador.txt")){
$Nro_Archivos=trim(Abrir_txt ("boot/Contador.txt"));
}else{
$Nro_Archivos=0;
}
$F_Titulo="boot/Titulo_".$Nro_Archivos.".txt";
$F_Txt="boot/Txt_".$Nro_Archivos.".txt";
$F_Des="boot/Des_".$Nro_Archivos.".txt";
$F_Tag="boot/Tag_".$Nro_Archivos.".txt";
$F_Cat="boot/Cat_".$Nro_Archivos.".txt";
$F_key="boot/key_".$Nro_Archivos.".txt";
Grabar_Post_Bot($F_Titulo,$Titulo);
Grabar_Post_Bot($F_Txt,$texto);
Grabar_Post_Bot($F_Des,$descripcion);
Grabar_Post_Bot($F_Tag,$Tags);
Grabar_Post_Bot($F_Cat,$cat);
Grabar_Post_Bot($F_key,$keywords);
if(file_exists ($F_Titulo) && file_exists ($F_Txt) && file_exists ($F_Des) && file_exists ($F_Tag) && file_exists ($F_Cat) && file_exists ($F_key)){
Grabar_Post_Bot("boot/Contador.txt",$Nro_Archivos+1);
$FDE=true;
}else{
$FDE=false;
}
return $FDE;
}

?>