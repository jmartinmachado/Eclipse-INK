<?
function Conectar(){
/*
$servidor="localhost";
$usuario="root";
$password="";
$base_datos="eclipseink";
*/
$servidor="localhost";
$usuario="root";
$password="";
$base_datos="eclipseink";
if (!($link=mysql_connect($servidor,$usuario,$password))){
$link = false;
}
if($link<>false && !(mysql_select_db($base_datos,$link))){
$link=false;
}
return $link;
}
function Siguiente($dato,$conexion){
$FBD_temp=mysql_query("SELECT `id` FROM `$dato` ORDER BY `id` DESC LIMIT 0, 1",$conexion);
$num=1;
$FBD_temp1="";
while($row=mysql_fetch_array($FBD_temp)){
$FBD_temp1=$row["id"];
$num++;
}
return $num+2;
}
function ObtenerPost($tipo,$pagina){
$pagina=$pagina*10;
$FBD_CON=Conectar();
$FBD=array("");
if($FBD_CON<>false){
if($tipo=="Todo"){
$sql=mysql_query("SELECT * FROM `post` WHERE `categoria` NOT LIKE 'geek' ORDER BY `id` DESC LIMIT $pagina , 11",$FBD_CON);
}else{
$sql=mysql_query("SELECT * FROM `post` WHERE `categoria` LIKE '$tipo' ORDER BY `id` DESC LIMIT $pagina , 11",$FBD_CON);
}
while($row=mysql_fetch_array($sql)){
$titulo=$row["titulo"];
$descripcion=$row["descripcion"];
$idx=$row["id"];
array_push($FBD,$titulo,$descripcion,$idx);
}
mysql_close($FBD_CON);
}
return $FBD;
}
function ObtenerNWS($pagina){
$FBD_CON=Conectar();
$pagina=$pagina*10;
if ($FBD_CON<>false){
$sql=mysql_query("SELECT * FROM `post` ORDER BY `id` DESC LIMIT $pagina , 10",$FBD_CON);
$FBD=array("");
while($row=mysql_fetch_array($sql) ){
$titulo=$row["titulo"];
$descripcion=$row["descripcion"];
$idx=$row["id"];
array_push($FBD,$titulo,$descripcion,$idx);
}
mysql_close($FBD_CON);
}else{
$FBD="";
}
return $FBD;
}
function ObtenerJob($pagina){
$pagina=$pagina*10;
$FBD_CON=Conectar();
$FBD=array("");
if($FBD_CON<>false){
$sql=mysql_query("SELECT * FROM `post` WHERE `categoria` LIKE 'descargas' ORDER BY `id` DESC LIMIT $pagina , 10",$FBD_CON);
while($row=mysql_fetch_array($sql) ){
$titulo=$row["titulo"];
$descripcion=$row["descripcion"];
$idx=$row["id"];
array_push($FBD,$titulo,$descripcion,$idx);
}
mysql_close($FBD_CON);
}
return $FBD;
}
function ObtenerEclipse($pagina){
$pagina=$pagina*10;
$FBD_CON=Conectar();
$FBD=array("");
if($FBD_CON<>false){
$sql=mysql_query("SELECT * FROM `post` WHERE `categoria` LIKE 'eclipse' ORDER BY `id` DESC LIMIT $pagina , 10",$FBD_CON);
while($row=mysql_fetch_array($sql) ){
$titulo=$row["titulo"];
$descripcion=$row["descripcion"];
$idx=$row["id"];
array_push($FBD,$titulo,$descripcion,$idx);
}
mysql_close($FBD_CON);
}
return $FBD;
}
function ObtenerGEEK($pagina){
$pagina=$pagina*10;
$FBD_CON=Conectar();
$FBD=array("");
if($FBD_CON<>false){
$sql=mysql_query("SELECT * FROM `post` WHERE `categoria` LIKE 'geek' ORDER BY `id` DESC LIMIT $pagina , 10",$FBD_CON);
while($row=mysql_fetch_array($sql) ){
$titulo=$row["titulo"];
$descripcion=$row["descripcion"];
$idx=$row["id"];
array_push($FBD,$titulo,$descripcion,$idx);
}
mysql_close($FBD_CON);
}
return $FBD;
}
function Obtener_Articulo($id){
$FBD_CON=Conectar();
if($FBD_CON<>false){
$sql=mysql_query("SELECT * FROM post WHERE id LIKE '$id'",$FBD_CON);
if(mysql_affected_rows()>0) {
while($fila=mysql_fetch_array($sql)){
$titulo=$fila["titulo"];
$texto=$fila["texto"];
$descripcion=$fila["descripcion"];
$Tags=$fila["tag"];
$cat=$fila["categoria"];
$keywords=$fila["keywords"];
$tag=$fila["tag"];
$Fecha=$fila["fecha"];
$FBD=Array("titulo" => $titulo,"contenido" => $texto,"descripcion" => $descripcion,"keywords" => $keywords,"tag" => $tag,"cat" => $cat,"fecha" => $Fecha,);
break;
}
}else{
$FBD=Array("titulo" => "","contenido" => "","descripcion" => "","keywords" => "","fecha" => "");
}
mysql_close($FBD_CON);
}else{
$FBD=Array("titulo" => "","contenido" => "","descripcion" => "","keywords" => "","fecha" => "");
}
//$id=162;
//$FBD=Array("titulo" => Abrir_txt("boot/Titulo_".$id.".txt"),"contenido" => Abrir_txt("boot/Txt_".$id.".txt"),"descripcion" => Abrir_txt("boot/Des_".$id.".txt"),"keywords" => Abrir_txt("boot/key_".$id.".txt"),"tag" => Abrir_txt("boot/Tag_".$id.".txt"), "fecha" => Obtener_Fecha());
return $FBD;
}
function Obtener_TAG(){
$FBD_CON=Conectar();
$FBD=array("");
if ($FBD_CON<>false){
$sql=mysql_query("SELECT * FROM tag ORDER BY `cont` DESC LIMIT 0, 50",$FBD_CON);
while($fila = mysql_fetch_array($sql) ){
$tag=$fila["tag"];
array_push($FBD,$tag);
}
mysql_close($FBD_CON);
}else{
$FBD="";
}
return $FBD;
}
function Obtener_Ult_C(){
$FBD_CON=Conectar();
if($FBD_CON<>false){
$sql=mysql_query("SELECT * FROM `comentario` ORDER BY `id` DESC LIMIT 0, 13",$FBD_CON);
$FBD=array("");
while($row=mysql_fetch_array($sql) ){
$nombre=$row["nombre"];
$Art_titulo=$row["Art_titulo"];
$id_post=$row["id_post"];
array_push($FBD,$nombre,$Art_titulo,$id_post);
}
mysql_close($FBD_CON);
}else{
$FBD="";
}
return $FBD;
}
function Obtener_Frase(){
	$FBD_CON=Conectar();
	if ($FBD_CON<>false){
		$fecha=Obtener_Fecha(3);
		$sql=mysql_query("SELECT * FROM `frases` ORDER BY `cont` DESC LIMIT 0, 1 ",$FBD_CON);
/*		$sql=mysql_query("SELECT * FROM `frases` WHERE `cont` <= '$fecha' ORDER BY `cont` ASC LIMIT 0, 1 ",$FBD_CON);*/
		while($row=mysql_fetch_array($sql)){
			$id=$row["id"];
			$cont=$row["cont"];
			$frase=$row["frase"];
			$autor=$row["autor"];
		}
		if(isset($id)){
			$FBD=array($frase,$autor);
			mysql_close($FBD_CON);
			Actualizar_Frase($id,$cont,$fecha);
		}else{
			$FBD=array("","");
		}	
	}else{
		$FBD=array("","");
	}
	return $FBD;
}
function Obterner_Comentarios_post($id){
$FBD_CON=Conectar();
$FBD=array("");
if($FBD_CON<>false){
if($id=="full"){
$sql=mysql_query("SELECT * FROM comentario ORDER BY `id` DESC",$FBD_CON);
}else{
$sql=mysql_query("SELECT * FROM comentario WHERE id_post LIKE '$id' ORDER BY `id` DESC",$FBD_CON);
}
while($row=mysql_fetch_array($sql) ){
$id=$row["id"];
$comentario=$row["comentario"];
$nombre=$row["nombre"];
$Art_titulo=$row["Art_titulo"];
$id_post=$row["id_post"];
array_push($FBD,$comentario,$nombre,$id,$Art_titulo,$id_post);
}
mysql_close($FBD_CON);
}
return $FBD;
}
function Agregar_Comentario($comentario,$nombre,$id_Post,$Art_titulo){
$FBD_CON=Conectar();
if($FBD_CON<>false){
$comentario=Caracteres_Especiales($comentario);
$nombre=Caracteres_Especiales($nombre);
$Art_titulo=Caracteres_Especiales($Art_titulo);

//$numm=Siguiente("comentario",$FBD_CON);
$sql=mysql_query("INSERT into comentario(id,comentario,nombre,id_post,Art_titulo) values(NULL,'$comentario','$nombre','$id_Post','$Art_titulo')",$FBD_CON);
$numm=mysql_insert_id();
mysql_close($FBD_CON);
}
return Escribir_Comentario($comentario,$nombre,$numm,"",0,false);
}
function Agregar_Articulo($post_titulo,$post_contenido,$post_tag,$post_cat,$post_descripcion,$post_keywords,$post_ac_BOT_v,$post_Fecha){ #VIEW
if($post_ac_BOT_v==0){
$FBD_CON=Conectar();
if($FBD_CON<>false){
$sql=mysql_query("INSERT INTO `post` (`id` ,`titulo` ,`texto` ,`descripcion` ,`keywords` ,`tag` ,`categoria` ,`fecha`)VALUES (NULL, '$post_titulo', '$post_contenido', '$post_descripcion', '$post_keywords', '$post_tag', '$post_cat', '$post_Fecha')",$FBD_CON);
if(mysql_affected_rows()>0){
$numm=mysql_insert_id();
sitemap("Articulo_".$numm.".html");
Aniadir_BD_XS($post_titulo,$post_descripcion,$post_keywords,$numm);
}else{
$FBD=false;
}
$FBD=true;
mysql_close($FBD_CON);
$i=0;
$post_tag_a=explode(",",$post_tag);
while($i<count($post_tag_a)){
Aniadir_Act_tag($post_tag_a[$i]);
$i++;
}
}else{
$FBD=false;
}
return array($FBD,$numm);
}else{
return array(Generar_Post_Bot($post_titulo,$post_contenido,$post_descripcion,$post_tag,$post_cat,$post_keywords),"/-66-/");
}
}
function Agregar_Frase($frase,$autor,$bot){
$FBD_CON=Conectar();
if($bot==0){
if($FBD_CON<>false){
$frase=Caracteres_Especiales($frase);
$autor=Caracteres_Especiales($autor);
$numm=Siguiente ("frases",$FBD_CON);
$fecha=Obtener_Fecha(3);
$fecha_A=explode(" ",$fecha);
$fecha_1=explode("-",$fecha_A[0]);

$cont =date( "Y-m-d H:i:s", mktime(strftime("%H")-3+$numm,0,0,$fecha_1[1],$fecha_1[2],$fecha_1[0]));


$sql=mysql_query("INSERT INTO `frases` (`id` ,`frase` ,`autor` , `cont`)VALUES (NULL, '$frase', '$autor', '$cont')",$FBD_CON);
if(mysql_affected_rows()>0){
	return true;
}else{
	return false;
}
mysql_close($FBD_CON);
}else{
return false;
}
}else{
	Generar_frase_Bot($frase,$autor);
}
}
function Aniadir_Act_tag($tag){
$FBD_CON=Conectar();
$tag=strtolower(trim($tag));
if($FBD_CON<>false){
$sql=mysql_query("SELECT * FROM `tag` WHERE `tag` LIKE '%$tag%' LIMIT 0 , 1",$FBD_CON);
if(mysql_affected_rows()>0) {
while($fila = mysql_fetch_array($sql) ){
$cont=$fila ["cont"];
$id=$fila ["id"];
$cont++;
$sql=mysql_query("UPDATE `tag` SET  `cont` =  '$cont' WHERE  `id` =$id AND  `tag` =  '$tag' LIMIT 1",$FBD_CON);
break;
}
}else{
$sql=mysql_query("INSERT INTO  `tag` (`id` ,`tag` ,`cont`)VALUES (NULL,  '$tag',  '0');",$FBD_CON);
}
mysql_close($FBD_CON);
}
}
function Actualizar_Frase($id,$cont,$fecha){
$FBD_CON=Conectar();
if ($cont < $fecha){
$numm=Siguiente ("frases",$FBD_CON);
$fecha_A=explode(" ",$fecha);
$fecha_1=explode("-",$fecha_A[0]);
$cont =date( "Y-m-d H:i:s", mktime(strftime("%H")-3+$numm+$id,0,0,$fecha_1[1],$fecha_1[2],$fecha_1[0]));
if($FBD_CON<>false){
$sql=mysql_query("UPDATE frases SET cont='$cont' WHERE id =$id LIMIT 1",$FBD_CON);
if(mysql_affected_rows()>0){
$FBD=true;
}else{
$FBD=false;
}
mysql_close($FBD_CON);
}else{
$FBD=false;
}
bot();
}else{
$FBD=false;
}
return $FBD;
}
function EDIT_Articulo($editar,$post_titulo,$post_contenido,$post_tag,$post_cat,$post_descripcion,$post_keywords,$fecha){	
$FBD_CON=Conectar();
if($FBD_CON<>false){
$sql=mysql_query("UPDATE  `post` SET  `titulo` =  '$post_titulo',`texto` =  '$post_contenido',`descripcion` =  '$post_descripcion',`keywords` =  '$post_keywords',`tag` =  '$post_tag',`categoria` =  '$post_cat',`fecha` =  '$fecha' WHERE  `id` ='$editar' LIMIT 1 ",$FBD_CON);
if(mysql_affected_rows()>0){
$FBD=mysql_insert_id();
}else{
$FBD=0;
}
mysql_close($FBD_CON);
}else{
$FBD=0;
}
return $FBD;
}
function Borrar_Articulo($id){
$FBD_CON=Conectar();
$sql=mysql_query("DELETE FROM post WHERE id = '$id' LIMIT 1",$FBD_CON);
mysql_close($FBD_CON);
}
function Obtener_Mejores_Art(){
$FBD_CON=Conectar();
if($FBD_CON<>false){
$sql=mysql_query("SELECT * FROM `visitas` ORDER BY `cont` DESC LIMIT 0, 10",$FBD_CON);
$FBD=array("");
while($row=mysql_fetch_array($sql) ){
$id=$row["id"];
$titulo=$row["titulo"];
array_push($FBD,$id,$titulo);
}
mysql_close($FBD_CON);
}else{
$FBD="";
}
return $FBD;
}
function set_visitas($id,$titulo){
$FBD_CON=Conectar();
if($FBD_CON<>false){
$sql=mysql_query("SELECT * FROM  `visitas`  WHERE  `id` LIKE  '$id'",$FBD_CON);
if(mysql_affected_rows()>0) {
while($fila = mysql_fetch_array($sql) ){
$cont=$fila ["cont"];
$cont++;
$sql=mysql_query("UPDATE `visitas` SET  `cont` =  '$cont' WHERE  `id` =$id LIMIT 1",$FBD_CON);
break;
}
}else{
$sql=mysql_query("INSERT INTO `visitas` (`id`, `cont`, `titulo`) VALUES ('$id', '1', '$titulo')",$FBD_CON);
}
mysql_close($FBD_CON);
}
}
function Articulos_rel($Tag,$idz){
$Tag=array_reverse($Tag);
$FBD=array();
$FBD_CON=Conectar();
$LS=count($Tag);
$i=0;
while($i<$LS){
	if($FBD_CON<>false){
		$sql=mysql_query("SELECT * FROM  `post` WHERE  `tag` LIKE  '%$Tag[$i]%' AND `id` NOT LIKE  '$idz' LIMIT 2",$FBD_CON);
		if(mysql_affected_rows()>0) {
			while($fila = mysql_fetch_array($sql) ){
				$id=$fila ["id"];
				$titulo=$fila ["titulo"];
				array_push($FBD,$id,$titulo);
			}
		}
	}
	$i++;
	$FBD=array_unique($FBD);
	$FBD=array_values($FBD);
}
return $FBD;
}
function Art_Art_Siguiente($id){
	$FBD_CON=Conectar();
	if ($FBD_CON<>false){
		$sql=mysql_query("SELECT  `id`  FROM  `post`  WHERE  `id` > $id LIMIT 0 , 1",$FBD_CON);
		while($row=mysql_fetch_array($sql)){
			$idz=$row["id"];
		}
	}
	if(!isset($idz)){
		$idz=0;
	}
	return $idz;
}
function Art_Art_Anterior($id){
	$FBD_CON=Conectar();
	if ($FBD_CON<>false){
		$sql=mysql_query("SELECT  `id` FROM  `post` WHERE  `id` < $id ORDER BY  `id` DESC LIMIT 0 , 1",$FBD_CON);
		while($row=mysql_fetch_array($sql)){
			$idz=$row["id"];
		}
	}
	if(!isset($idz)){
		$idz=0;
	}
	return $idz;
}
?>

