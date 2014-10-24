<?
function Añadir($Nbre_Archivo,$Contenido){
	$fp=fopen($Nbre_Archivo,"a");
	fwrite($fp, $Contenido);
	fclose($fp);
}
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
function Bandera($archivo){
	if(file_exists("bandera/".$archivo)==true){
		$FDE=true;
	}else{
		$FDE=false;
	}
	return $FDE;
}
function traducir_url($url){
	if(Bandera("cortar")){
		if($url=="inicio"){
			return "http://www.EclipseINK.com.ar/";
		}else{
			return "http://www.EclipseINK.com.ar/".$url;
		}
	}else{
		return $url;
	}
}
function Obtener_Banner($tipo){
	if(Bandera("publicidad")){
		return Abrir_txt("banner/banner_".$tipo.".txt");
	}
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
function hora(){
	$hora = getdate(time());
	return ( $hora["hours"] . ":" . $hora["minutes"] . ":" . $hora["seconds"] ); 
}
function sitemap($url){
	Añadir("sitemap.txt","http://www.EclipseInk.com.ar/".$url."\n\n");
}
function subirimagen($numm,$portada){
	$extencion=explode(".",$portada);
	$numm=dechex($numm);
	rename("img_pos_miniatura/".$portada,"img_pos_miniatura/".$numm.".".$extencion[1]);
}
function IMG_Azar($eroor){
	$total = "11";
	$extension = ".jpg";
	$carpeta = opendir("error/".$eroor);
	$FDE=array ();
	while($file = readdir($carpeta)){
		if ($file!="Thumbs.db"&&$file!=".."&&$file!= "."&&$file!= ""){
			array_push($FDE,$file);
		}
	}
	$random = array_rand ($FDE);
	echo "error/".$eroor."/".$FDE[$random];
	closedir($carpeta);
}
?>