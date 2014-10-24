<?
function Conectar(){
	if (Bandera("online")){
		$servidor="192.168.0.192";
		$usuario="martin_machado";
		$password="NXJR9BA3kv";
		$base_datos="eclipseink";
	}else{
		if (Bandera("offline-online")){
			$servidor="190.228.29.67";
			$usuario="martin_machado";
			$password="NXJR9BA3kv";
			$base_datos="eclipseink";
		}else{
			$servidor="localhost";
			$usuario="root";
			$password="";
			$base_datos="eclipseink";
		}
	}
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
		/*$num++;*/
	}
	return $FBD_temp1+1;/**/
}
function Obtentener_NuevoArriba(){
	$FBD_CON=Conectar();
	$pagina=$pagina*10;
	if ($FBD_CON<>false){
		$sql=mysql_query("SELECT  `id` ,  `titulo`,`categoria` FROM  `post` ORDER BY  `id` DESC LIMIT 0 , 3",$FBD_CON);
		$FBD=array("");
		while($row=mysql_fetch_array($sql) ){
			$id=$row["id"];
			$titulo=$row["titulo"];
			$cat=$row["categoria"];
			array_push($FBD,$id,$titulo,$cat);
		}
		mysql_close($FBD_CON);
	}else{
		$FBD="";
	}
	return $FBD;
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
function Obtener_Ult_C(){
	$FBD_CON=Conectar();
	if($FBD_CON<>false){
		$sql=mysql_query("SELECT * FROM `comentario` ORDER BY `id` DESC LIMIT 0, 13",$FBD_CON);
		$FBD=array("");
		while($row=mysql_fetch_array($sql) ){
			$nombre=$row["nombre"];
			$Art_titulo=$row["Art_titulo"];
			$id_post=$row["id_post"];
			array_push($FBD,$id_post,$nombre,$Art_titulo);
		}
		mysql_close($FBD_CON);
	}else{
		$FBD="";
	}
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
function Obtener_Frase(){
	$FBD_CON=Conectar();
	$numm=Siguiente("frases",$FBD_CON);
	if ($FBD_CON<>false){
		$numm=rand(1,$numm-3);
		$sql=mysql_query("SELECT * FROM  `frases` WHERE  `id` =$numm",$FBD_CON);
		while($row=mysql_fetch_array($sql)){
			$frase=$row["frase"];
			$autor=$row["autor"];
		}
		$FBD=array($frase,$autor);
		mysql_close($FBD_CON);
	}else{
		$FBD=array("","");
	}
	return $FBD;
}
function Obtener_Nuevos($pagina){
	$FBD_CON=Conectar();
	$pagina=(($pagina)*13)+3;
	if ($FBD_CON<>false){
		$sql=mysql_query("SELECT * FROM `post` ORDER BY `id` DESC LIMIT $pagina, 15",$FBD_CON);
		$FBD=array("");
		while($row=mysql_fetch_array($sql) ){
			$idx=$row["id"];
			$descripcion=$row["descripcion"];
			$titulo=$row["titulo"];
			$fecha=$row["fecha"];
			$hora=$row["hora"];
			array_push($FBD,$idx,$descripcion,$titulo,$fecha." ".$hora);
		}
		mysql_close($FBD_CON);
	}else{
		$FBD="";
	}
	return $FBD;
}
function Obtener_Otros_Post($tipo,$pagina){
	$pagina=$pagina*13;
	$FBD_CON=Conectar();
	$FBD=array("");
	if($FBD_CON<>false){
		if($tipo=="Todo"){
			$sql=mysql_query("SELECT * FROM `post` WHERE `categoria` LIKE 'Asp' or `categoria` LIKE 'cpp' or `categoria` LIKE 'css' or `categoria` LIKE 'fls' or`categoria` LIKE 'html' or `categoria` LIKE 'js' or `categoria` LIKE 'PHP' or `categoria` LIKE 'SQL' or`categoria` LIKE 'VB' or `categoria` LIKE 'otros' or `categoria` LIKE 'descargas' ORDER BY `id` DESC LIMIT $pagina , 15",$FBD_CON);
		}else{
			$sql=mysql_query("SELECT * FROM `post` WHERE `categoria` LIKE '$tipo' ORDER BY `id` DESC LIMIT $pagina , 15",$FBD_CON);
		}
		while($row=mysql_fetch_array($sql)){
			$titulo=$row["titulo"];
			$descripcion=$row["descripcion"];
			$idx=$row["id"];
			$fecha=$row["fecha"];
			$hora=$row["hora"];
			array_push($FBD,$idx,$descripcion,$titulo,$fecha." ".$hora);
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
				$cat=$fila["categoria"];
				$tag=$fila["tag"];
				$Fecha=$fila["fecha"];
				$FBD=Array("titulo" => $titulo,"contenido" => $texto,"descripcion" => $descripcion,"tag" => $tag,"cat" => $cat,"fecha" => $Fecha);
				break;
			}
		}else{
			$FBD=Array("titulo" => "404","contenido" => "","descripcion" => "","fecha" => "");
		}
		mysql_close($FBD_CON);
	}else{
		$FBD=Array("titulo" => "404","contenido" => "","descripcion" => "","fecha" => "");
	}
	return $FBD;
}
function Obterner_Comentarios_post($id){
	$FBD_CON=Conectar();
	$FBD=array("");
	if($FBD_CON<>false){
		$sql=mysql_query("SELECT * FROM comentario WHERE id_post LIKE '$id' ORDER BY `id` DESC",$FBD_CON);
		while($row=mysql_fetch_array($sql) ){
			$idx=$row["id"];
			$comentario=$row["comentario"];
			$nombre=$row["nombre"];
			$Art_titulo=$row["Art_titulo"];
			$id_post=$row["id_post"];
			array_push($FBD,$idx,$nombre,$comentario);
		}
		mysql_close($FBD_CON);
	}
	return $FBD;
}
function Agregar_Comentario($id_Post,$comentario,$nombre,$Art_titulo){
	$FBD_CON=Conectar();
	if($FBD_CON<>false){
		$comentario=Caracteres_Especiales($comentario);
		$nombre=Caracteres_Especiales($nombre);
		$Art_titulo=Caracteres_Especiales($Art_titulo);
		$sql=mysql_query("INSERT into comentario(id,comentario,nombre,id_post,Art_titulo) values(NULL,'$comentario','$nombre','$id_Post','$Art_titulo')",$FBD_CON);
		if(mysql_affected_rows()>0){
			return 1;
		}else{
			return 0;
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
function get_visitas($id){
	$FBD_CON=Conectar();
	$FBD=0;
	if($FBD_CON<>false){
		$sql=mysql_query("SELECT * FROM  `visitas`  WHERE  `id` LIKE  '$id'",$FBD_CON);
		$FBD=array("");
		while($row=mysql_fetch_array($sql) ){
			$cont=$fila ["cont"];
			if (empty($cont)){
				$FBD=0;
			}else{
				$FBD=$cont;
			}
		}
		mysql_close($FBD_CON);
	}else{
		$FBD=0;
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
function Eliminar_Articulo($id){
	$FBD_CON=Conectar();
	$sql=mysql_query("DELETE FROM post WHERE id = '$id' LIMIT 1",$FBD_CON);
	mysql_close($FBD_CON);
}
function Borrar_Comentario($id){
	$FBD_CON=Conectar();
	$sql=mysql_query("DELETE FROM comentario WHERE id = '$id' LIMIT 1",$FBD_CON);
	mysql_close($FBD_CON);
}
function Agregar_Articulo($post_titulo,$post_contenido,$post_tag,$post_cat,$post_descripcion,$post_Fecha,$post_hora, $post_Portada){
	$FBD_CON=Conectar();
	if($FBD_CON<>false){
		$sql=mysql_query("INSERT INTO  `eclipseink`.`post` (`id` ,`titulo` ,`texto` ,`tag` ,`categoria` ,`fecha` ,`hora` ,`descripcion`) VALUES (NULL ,  '$post_titulo',  '$post_contenido',  '$post_tag',  '$post_cat',  '$post_Fecha',  '$post_hora',  '$post_descripcion')",$FBD_CON);
		if(mysql_affected_rows()>0){
			$numm=mysql_insert_id();
			sitemap("Articulo_".$numm.".html");
			if ($post_Portada!="#"){
				subirimagen($numm,$post_Portada);
			}
		}else{
			$FBD=false;
			$numm="ERROR";
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
	return $numm;
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
function EDIT_Articulo($id,$post_titulo,$post_contenido,$post_tag,$post_cat,$post_descripcion,$fecha){
	$FBD_CON=Conectar();
	if($FBD_CON<>false){
		$sql=mysql_query("UPDATE  `post` SET  `titulo` =  '$post_titulo',`texto` =  '$post_contenido',`descripcion` =  '$post_descripcion',`tag` =  '$post_tag',`categoria` =  '$post_cat',`fecha` =  '$fecha' WHERE  `id` ='$id' LIMIT 1 ",$FBD_CON);
		if(mysql_affected_rows()>0){
			$FBD=mysql_insert_id();
		}else{
			$FBD=0;
		}
		mysql_close($FBD_CON);
	}else{
		$FBD=0;
	}
	return $id;
}
?>
