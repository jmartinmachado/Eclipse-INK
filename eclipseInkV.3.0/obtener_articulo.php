<?
$aux = substr( $_SERVER['REQUEST_URI'], strlen('/')); 
if( substr( $aux, -1) == '/'){ 
  $aux=substr( $aux, 0, -1); 
} 
$urlARRAY =explode( '/', $aux); 

if (substr($urlARRAY[0],0,7)!= "art.php"){
$CATEGORIA=$urlARRAY[1]; 
$id=substr($CATEGORIA,9,strlen($CATEGORIA)-14);
}

$Todo_array=Obtener_Articulo($id);
if(!empty($Todo_array)&&$Todo_array["contenido"]!=""){
$Todo_array["titulo"]=stripslashes(trim($Todo_array["titulo"]));
$Todo_array["contenido"]=trim(Traductor($Todo_array["contenido"]));
$meta_Description=trim($Todo_array["descripcion"]);
$meta_Keywords=trim($Todo_array["keywords"]);
$meta_Subject="www.EclipseINK.com.ar/art.php?id=".$id;
$meta_Title="Eclipse INK - ".$Todo_array["titulo"];
$Comentario_post=Obterner_Comentarios_post($id);

$i=1;
$Todo_tag=explode(",",$Todo_array["keywords"]);
$Tagss="";
while($i<count($Todo_tag) && $i<8){
$Todo_tag[$i]=trim($Todo_tag[$i]);
if (!empty($Todo_tag[$i])){
	if (empty($Tagss)){
		$Tagss="<a href='".traducir_url("buscar.php?keywords=".$Todo_tag[$i]."&and=0")."' title='".$Todo_tag[$i]."' class='Link_1 Texto_3'>".$Todo_tag[$i]."</a>";
	}else{
		$Tagss.=" - <a href='".traducir_url("buscar.php?keywords=".$Todo_tag[$i]."&and=0")."' title='".$Todo_tag[$i]."' class='Link_1 Texto_3'>".$Todo_tag[$i]."</a>";
	}
}
$i++;
}
set_visitas($id,$Todo_array["titulo"]);
}else{
$Todo_array["contenido"]="ERROR";
}
$Art_Anterior=Art_Art_Anterior($id);
$Art_Siguiente=Art_Art_Siguiente($id);
?>