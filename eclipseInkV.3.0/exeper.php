<?
include ("Funciones_Globales.php");
/*$directorio=opendir("archivos"); 
/*echo "<b>Directorio actual:</b><br>$dir<br>"; 
echo "<b>Archivos:</b><br>"; 
while ($archivo = readdir($directorio))
  echo "$archivo<br>"; 
closedir($directorio); 
$id=2;
*/
$id=0;
$FBD_CON=Conectar();
while($id<10000){
	
		if ($FBD_CON<>false){
		$sql=mysql_query("SELECT * FROM `frases` WHERE `id` = $id LIMIT 0, 1 ",$FBD_CON);
		if($fila = mysql_fetch_array($sql) ){
				//$numm=$fila["id"];
				//echo "&lt;url&gt;<br>";
				//echo "&lt;loc&gt;http://www.EclipseInk.com.ar/art.php?id=".$numm."&lt;/loc&gt;<br>";
				//echo "&lt;/url&gt;<br>";
				//$post_tag=$fila["tag"];
				//$post_texto=Gen_des($fila["texto"]);
				//$post_texto=substr($post_texto,0,500);
				//$post_descripcion=$fila["descripcion"];
				//$post_keywords=$fila["keywords"];
				/*$contenido=$fila["texto"];*/
				$frase=$fila["frase"];
				$autor=$fila["autor"];
				
				echo $frase." - ".$autor." <br>";
				/*echo "http://www.eclipseink.com.ar/Articulo_".$numm.".html <br>";*/
				//echo  $post_titulo." #".Traducir_Cat($cat)." "."http://www.eclipseink.com.ar/Articulo_".$numm.".html #EclipseINK" ;
				//echo "<br>";
	//$keywords=strtolower($post_keywords);
				/*$T=reemplazar($contenido);
				if ($contenido != $T){
					$sql =mysql_query("UPDATE `post` SET `texto` = '$T' WHERE `id` = $numm LIMIT 1;",$FBD_CON);
					echo "ID=".$numm." - ".$id."<br>";
				}else{
					/*echo "NOP ID=".$numm." - ".$id."<br>";
				}
			}
		}*/
	
}
	$id++;
}	/*

	mysql_close($FBD_CON);
	$i=0;
	echo $post_tag."<br>";
	$post_tag_a=explode(",",$post_tag);
	while($i<count($post_tag_a)){
		Aniadir_Act_tag($post_tag_a[$i]);
		$i++;
	}
	*/
}/*
function reemplazar($FGC1){
	$FGC=$FGC1;
	$FGC=str_replace("archivos/264-clase-con-funciones-basicas-para-ventanas-y-procesos-2.zip","http://www.megaupload.com/?d=1LDHDNLC",$FGC);
	$FGC=str_replace("archivos/261-pasar-udt-en-un-winsock-usando-copymemory-corregido.zip","http://www.megaupload.com/?d=H47WC0BZ",$FGC);
	$FGC=str_replace("archivos/266-common-dialog-para-rtf-y-archivos-de-texto.zip","http://www.megaupload.com/?d=DA9JEDSU",$FGC);
	$FGC=str_replace("archivos/263-listview-modificado-cambiar-color-a-filas.zip","http://www.megaupload.com/?d=BHE35ZPG",$FGC);
	$FGC=str_replace("archivos/adox-modulo-de-clase-con-funciones-utiles.zip","http://www.megaupload.com/?d=OXTPKM63",$FGC);
	$FGC=str_replace("archivos/modulo-clase-leer-txt-excel-usando-ado.zip","http://www.megaupload.com/?d=007R3WOD",$FGC);
	$FGC=str_replace("archivos/Invertir_Palabra_Trabajos_Turbo_Pascal.rar","http://www.megaupload.com/?d=YB20CNDE",$FGC);
	$FGC=str_replace("archivos/drag-dtop-de-controles-en-visual-basic.zip","http://www.megaupload.com/?d=HBYAEHQ4",$FGC);
	$FGC=str_replace("archivos/control-ocx-menu-vertical-tipo-outlook.zip","http://www.megaupload.com/?d=DOUDINV5",$FGC);
	$FGC=str_replace("archivos/ocx-float-button-botones-con-sombra.zip","http://www.megaupload.com/?d=76MUFN7K",$FGC);
	$FGC=str_replace("archivos/ocx-command-button-3d-codigo-fuente.zip","http://www.megaupload.com/?d=NDJJHVHQ",$FGC);
	$FGC=str_replace("archivos/estrellitas_Trabajos__Turbo_Pascal.rar","http://www.megaupload.com/?d=O5B78FQU",$FGC);
	$FGC=str_replace("archivos/Combinatorio_Trabajos Turbo Pascal.rar","http://www.megaupload.com/?d=YR1JQ9G5",$FGC);
	$FGC=str_replace("archivos/sonar-wav-en-vb6-con-sndplaysound.zip","http://www.megaupload.com/?d=WVK43IET",$FGC);
	$FGC=str_replace("archivos/164-iconos-16-16-formato-ico-2.zip","http://www.megaupload.com/?d=ZFY4AZZV",$FGC);
	$FGC=str_replace("archivos/400-iconos-varios-windows-xp-3.zip","http://www.megaupload.com/?d=ZT2X20EX",$FGC);
	$FGC=str_replace("archivos/267-commondialog-para-ver-swf.zip","http://www.megaupload.com/?d=5PBZ1QUD",$FGC);
	$FGC=str_replace("archivos/Libro de imágenes Php Graphy.zip","http://www.megaupload.com/?d=33UB8ZNL",$FGC);
	$FGC=str_replace("archivos/Lista_Trabajos_Turbo_Pascal.rar","http://www.megaupload.com/?d=UP6KOMG6",$FGC);
	$FGC=str_replace("archivos/135-sys-color-codigo-fuente.zip","http://www.megaupload.com/?d=8H6AU672",$FGC);
	$FGC=str_replace("archivos/135-ocx-sys-color-microsoft.zip","http://www.megaupload.com/?d=B9IVVCRU",$FGC);
	$FGC=str_replace("archivos/Pila_Trabajos_Turbo_Pascal.rar","http://www.megaupload.com/?d=UT6KEBWM",$FGC);
	$FGC=str_replace("archivos/ocx-boton-con-borde-3d-Aol.zip","http://www.megaupload.com/?d=7UMEBQNB",$FGC);
	$FGC=str_replace("archivos/dll-activex-conversor-jpg.zip","http://www.megaupload.com/?d=5U0VYY10",$FGC);
	$FGC=str_replace("archivos/degradado-progressbar-ocx.zip","http://www.megaupload.com/?d=3HZBUWO5",$FGC);
	$FGC=str_replace("archivos/archivos acceso aleatroio.rar","http://www.megaupload.com/?d=Y48TKCLS",$FGC);
	$FGC=str_replace("archivos/cargar-treeview-desde-xml.zip","http://www.megaupload.com/?d=G89Z1WJ3",$FGC);
	$FGC=str_replace("archivos/modulo-de-clase-para-ado.zip","http://www.megaupload.com/?d=RM85MEVW",$FGC);
	$FGC=str_replace("archivos/Palindromo_Turbo Pascal.rar","http://www.megaupload.com/?d=1ELEQ98I",$FGC);
	$FGC=str_replace("archivos/mb-color-picker-control.zip","http://www.megaupload.com/?d=P1B80Q66",$FGC);
	$FGC=str_replace("archivos/informacion-cpu-con-wmi.zip","http://www.megaupload.com/?d=V9F45QBU",$FGC);
	$FGC=str_replace("archivos/Contador de descargas 2.zip","http://www.megaupload.com/?d=8Q6RGKCR",$FGC);
	$FGC=str_replace("archivos/ocx-transparent-button.zip","http://www.megaupload.com/?d=AJUF0Q7S",$FGC);
	$FGC=str_replace("archivos/Tangente_Turbo Pascal.rar","http://www.megaupload.com/?d=LH9MRNA8",$FGC);
	$FGC=str_replace("archivos/Potencia_Turbo_Pascal.rar","http://www.megaupload.com/?d=0ZBJXHUC",$FGC);
	$FGC=str_replace("archivos/php_sby_contadores(2).zip","http://www.megaupload.com/?d=BOBTANM7",$FGC);
	$FGC=str_replace("archivos/Contador de descargas.zip","http://www.megaupload.com/?d=SKVDM0B3",$FGC);
	$FGC=str_replace("archivos/Capturador de Enlaces.rar","http://www.megaupload.com/?d=SGCC17EW",$FGC);
	$FGC=str_replace("archivos/Listaes_Turbo Pascal.rar","http://www.megaupload.com/?d=VW95SISO",$FGC);
	$FGC=str_replace("archivos/Libro de Visitas S25.zip","http://www.megaupload.com/?d=BAWCP7P0",$FGC);
	$FGC=str_replace("archivos/Libro de Visitas S24.zip","http://www.megaupload.com/?d=NKP3UD8N",$FGC);
	$FGC=str_replace("archivos/Libro de Visitas S23.zip","http://www.megaupload.com/?d=CK0P2H03",$FGC);
	$FGC=str_replace("archivos/Libro de Visitas S22.zip","http://www.megaupload.com/?d=1PVQ8DN8",$FGC);
	$FGC=str_replace("archivos/Libro de Visitas S21.zip","http://www.megaupload.com/?d=MMKXRVTW",$FGC);
	$FGC=str_replace("archivos/Libro de Visitas C10.zip","http://www.megaupload.com/?d=BQJDKZ7P",$FGC);
	$FGC=str_replace("archivos/Contador Hit Counter.zip","http://www.megaupload.com/?d=IXQ8FHCP",$FGC);
	$FGC=str_replace("archivos/Primos_Turbo Pascal.rar","http://www.megaupload.com/?d=BHF6U98S",$FGC);
	$FGC=str_replace("archivos/ocx-para-sql-server.zip","http://www.megaupload.com/?d=YLR6VDSA",$FGC);
	$FGC=str_replace("archivos/Libro de Visitas C7.zip","http://www.megaupload.com/?d=40SEFBAM",$FGC);
	$FGC=str_replace("archivos/Libro de Visitas C6.zip","http://www.megaupload.com/?d=3GWW6GIM",$FGC);
	$FGC=str_replace("archivos/Libro de Visitas C5.zip","http://www.megaupload.com/?d=TDSUHD2D",$FGC);
	$FGC=str_replace("archivos/Libro de Visitas C4.zip","http://www.megaupload.com/?d=3IRPE0G3",$FGC);
	$FGC=str_replace("archivos/Libro de Visitas C3.zip","http://www.megaupload.com/?d=UJ47V2Z2",$FGC);
	$FGC=str_replace("archivos/Libro de Visitas C2.zip","http://www.megaupload.com/?d=SNX2O8J5",$FGC);
	$FGC=str_replace("archivos/Libro de Visitas C1.zip","http://www.megaupload.com/?d=IN0G5UG0",$FGC);
	$FGC=str_replace("archivos/ado-kit-dll-activex.zip","http://www.megaupload.com/?d=NZGXEVG4",$FGC);
	$FGC=str_replace("archivos/Contador Php Ultra.zip","http://www.megaupload.com/?d=V89OGZYD",$FGC);
	$FGC=str_replace("archivos/ejemploventenacpp.rar","http://www.megaupload.com/?d=C9IP943P",$FGC);
	$FGC=str_replace("archivos/archivos de texto.rar","http://www.megaupload.com/?d=WP4IAT39",$FGC);
	$FGC=str_replace("archivos/ocx-color-picker.zip","http://www.megaupload.com/?d=8VQVXAR5",$FGC);
	$FGC=str_replace("archivos/moduloventenacpp.rar","http://www.megaupload.com/?d=GX2NHG0K",$FGC);
	$FGC=str_replace("archivos/Contador SiteHit.zip","http://www.megaupload.com/?d=SD16GGLN",$FGC);
	$FGC=str_replace("archivos/Contador My Hits.zip","http://www.megaupload.com/?d=GCQJVYAX",$FGC);
	$FGC=str_replace("archivos/150-iconos-png-2.zip","http://www.megaupload.com/?d=0A4G3PDX",$FGC);
	$FGC=str_replace("archivos/ocx-color-popup.zip","http://www.megaupload.com/?d=4WCEV57B",$FGC);
	$FGC=str_replace("archivos/ejemploregistro.rar","http://www.megaupload.com/?d=QCZEGC91",$FGC);
	$FGC=str_replace("archivos/Contador Hitweb.zip","http://www.megaupload.com/?d=C0H7QZJ0",$FGC);
	$FGC=str_replace("archivos/Contador Fusion.zip","http://www.megaupload.com/?d=DKR1A3ZA",$FGC);
	$FGC=str_replace("archivos/101-1008-iconos.zip","http://www.megaupload.com/?d=MGRWEKKB",$FGC);
	$FGC=str_replace("archivos/archivo-ejemplo.zip","http://www.megaupload.com/?d=HW8SDL1T",$FGC);
	$FGC=str_replace("archivos/263-listview-xp.zip","http://www.megaupload.com/?d=VQ1NFVYS",$FGC);
	$FGC=str_replace("archivos/moduloregistro.rar","http://www.megaupload.com/?d=YZT03QQZ",$FGC);
	$FGC=str_replace("archivos/cristalBtnPack.zip","http://www.megaupload.com/?d=HTZXVMJ2",$FGC);
	$FGC=str_replace("archivos/150-iconos-gif.zip","http://www.megaupload.com/?d=CP9HL2G5",$FGC);
	$FGC=str_replace("archivos/freeASPUpload.zip","http://www.megaupload.com/?d=USQKS5AB",$FGC);
	$FGC=str_replace("archivos/Chat Eggfinal.zip","http://www.megaupload.com/?d=M0CN9K4P",$FGC);
	$FGC=str_replace("archivos/Cap Enlances.exe","http://www.megaupload.com/?d=PCT1LVIU",$FGC);
	$FGC=str_replace("archivos/302-iconos-2.zip","http://www.megaupload.com/?d=HMNFJMQ0",$FGC);
	$FGC=str_replace("archivos/progressbar.js","http://www.megaupload.com/?d=G6QMLP64",$FGC);
	$FGC=str_replace("archivos/menueasing2.zip","http://www.megaupload.com/?d=49DP04TD",$FGC);
	$FGC=str_replace("archivos/Contador G2.zip","http://www.megaupload.com/?d=5XVYA58N",$FGC);
	$FGC=str_replace("archivos/Contador G1.zip","http://www.megaupload.com/?d=NYSO23EU",$FGC);
	$FGC=str_replace("archivos/mxdesigner.zip","http://www.megaupload.com/?d=6CWHA8UM",$FGC);
	$FGC=str_replace("archivos/EnviarMail.rar","http://www.megaupload.com/?d=6AHCHR9S",$FGC);
	$FGC=str_replace("archivos/easing2_mx.zip","http://www.megaupload.com/?d=GX6W9N74",$FGC);
	$FGC=str_replace("archivos/Chat Flash.zip","http://www.megaupload.com/?d=EG8JS3LO",$FGC);
	$FGC=str_replace("archivos/Ahorcado 3.zip","http://www.megaupload.com/?d=6BZCKQJU",$FGC);
	$FGC=str_replace("archivos/boton_fade.zip","http://www.megaupload.com/?d=YGR55DD0",$FGC);
	$FGC=str_replace("archivos/scrollbar.zip","http://www.megaupload.com/?d=5WN5ON76",$FGC);
	$FGC=str_replace("archivos/precargas.zip","http://www.megaupload.com/?d=XIEZC77V",$FGC);
	$FGC=str_replace("archivos/paginador.zip","http://www.megaupload.com/?d=J80OEDNB",$FGC);
	$FGC=str_replace("archivos/LineasAPI.zip","http://www.megaupload.com/?d=YOIGUO8Y",$FGC);
	$FGC=str_replace("archivos/jsbanners.zip","http://www.megaupload.com/?d=J1SXRA1W",$FGC);
	$FGC=str_replace("archivos/Chat Arsc.zip","http://www.megaupload.com/?d=ADH9M3OV",$FGC);
	$FGC=str_replace("archivos/button-3d.zip","http://www.megaupload.com/?d=HYAV7PKE",$FGC);
	$FGC=str_replace("archivos/Blacknova.zip","http://www.megaupload.com/?d=3QR6ELWS",$FGC);
	$FGC=str_replace("archivos/Webboard.zip","http://www.megaupload.com/?d=GBVHLZJZ",$FGC);
	$FGC=str_replace("archivos/burbujas.zip","http://www.megaupload.com/?d=BJDHIQB9",$FGC);
	$FGC=str_replace("archivos/Alarma_4.rar","http://www.megaupload.com/?d=N8XVMFZN",$FGC);
	$FGC=str_replace("archivos/Alarma_3.rar","http://www.megaupload.com/?d=V7NPQ5H5",$FGC);
	$FGC=str_replace("archivos/Alarma_2.rar","http://www.megaupload.com/?d=RG860QNV",$FGC);
	$FGC=str_replace("archivos/Ahorcado.zip","http://www.megaupload.com/?d=UTMYDKS3",$FGC);
	$FGC=str_replace("archivos/Alarma_1.rar","http://www.megaupload.com/?d=TX1VK5I4",$FGC);
	$FGC=str_replace("archivos/outlook.zip","http://www.megaupload.com/?d=DOUDINV5",$FGC);
	$FGC=str_replace("archivos/Chat C3.zip","http://www.megaupload.com/?d=ON4M7XNB",$FGC);
	$FGC=str_replace("archivos/Chat C2.zip","http://www.megaupload.com/?d=W7RR00GQ",$FGC);
	$FGC=str_replace("archivos/Chat C1.zip","http://www.megaupload.com/?d=RZDNOAGH",$FGC);
	$FGC=str_replace("archivos/Barra_8.rar","http://www.megaupload.com/?d=4714RMNX",$FGC);
	$FGC=str_replace("archivos/Barra_7.rar","http://www.megaupload.com/?d=KWNE5OAG",$FGC);
	$FGC=str_replace("archivos/Barra_6.rar","http://www.megaupload.com/?d=RJ07EVDK",$FGC);
	$FGC=str_replace("archivos/Barra_5.rar","http://www.megaupload.com/?d=NTN9SRXD",$FGC);
	$FGC=str_replace("archivos/Barra_4.rar","http://www.megaupload.com/?d=VO6Y0JOG",$FGC);
	$FGC=str_replace("archivos/Barra_3.rar","http://www.megaupload.com/?d=L97ONEUR",$FGC);
	$FGC=str_replace("archivos/Barra_2.rar","http://www.megaupload.com/?d=6MM2B82X",$FGC);
	$FGC=str_replace("archivos/Barra_1.rar","http://www.megaupload.com/?d=UBMC4HFE",$FGC);
	$FGC=str_replace("archivos/Ajedrez.zip","http://www.megaupload.com/?d=O3BYPMIF",$FGC);
	$FGC=str_replace("archivos/Fútbol.zip","http://www.megaupload.com/?d=BGJVGFWR",$FGC);
	$FGC=str_replace("archivos/Cyphor.zip","http://www.megaupload.com/?d=5EXUQG7J",$FGC);
	$FGC=str_replace("archivos/cursor.zip","http://www.megaupload.com/?d=5KZZLRIK",$FGC);
	$FGC=str_replace("archivos/Chat 6.zip","http://www.megaupload.com/?d=XINHMK6N",$FGC);
	$FGC=str_replace("archivos/Chat 5.zip","http://www.megaupload.com/?d=HCGO7OBG",$FGC);
	$FGC=str_replace("archivos/Chat 4.zip","http://www.megaupload.com/?d=EAOCBNAU",$FGC);
	$FGC=str_replace("archivos/Chat 3.zip","http://www.megaupload.com/?d=QRBNIN44",$FGC);
	$FGC=str_replace("archivos/Zorum.zip","http://www.megaupload.com/?d=S8E39DU4",$FGC);
	$FGC=str_replace("archivos/Bingo.zip","http://www.megaupload.com/?d=9JQ3YCHJ",$FGC);
	$FGC=str_replace("archivos/menu.zip","http://www.megaupload.com/?d=LQ5WC958",$FGC);
	$FGC=str_replace("archivos/Chat.zip","http://www.megaupload.com/?d=VKHYVKT8",$FGC);
	$FGC=str_replace("archivos/aqua.zip","http://www.megaupload.com/?d=MN934DWD",$FGC);
	$FGC=str_replace("archivos/zoom.js","http://www.megaupload.com/?d=2H9RPFXE",$FGC);
	$FGC=str_replace("archivos/1.rar","http://www.megaupload.com/?d=K42HGQED",$FGC);
	return $FGC;
}

/*
echo "&lt;url&gt;<br>";
echo "&lt;loc&gt;http://www.EclipseInk.com.ar/art.php?id=".$numm."&lt;/loc&gt;<br>";
echo "&lt;/url&gt;<br>";
*/
//Aniadir_BD_XS($post_titulo,$post_descripcion,$post_keywords,$numm);
/*
$i=1;
while($i<190){
//sitemap("art.php?id=".$i);

$i++;
}*//*
$id=20;
$fecha=Obtener_Fecha(3);
$fecha_A=explode(" ",$fecha);
$fecha_1=explode("-",$fecha_A[0]);
$fecha_2=explode(":",$fecha_A[1]);
//	echo date( "Y-m-d H:i:s", mktime($fecha_2[0],$fecha_2[1],$fecha_2[2],$fecha_1[1],$fecha_1[2],$fecha_1[0]));

$FBD_CON=Conectar();
$id=2;
while($id<=20){

$sql=mysql_query("SELECT * FROM `comentario` WHERE `id` = $id LIMIT 0, 1",$FBD_CON);

if($row=mysql_fetch_array($sql) ){

$nombre=$row["nombre"];
$comentario=$row["comentario"];
$Art_titulo=$row["Art_titulo"];

$nombre=Caracteres_Especiales($nombre);
$comentario=Caracteres_Especiales($comentario);
$Art_titulo=Caracteres_Especiales($Art_titulo);

echo $comentario."<p> - <p>";

$sql =mysql_query("UPDATE `comentario` SET `Art_titulo` = '$Art_titulo' WHERE `id` = $id LIMIT 1;",$FBD_CON);

$sql =mysql_query("UPDATE `comentario` SET `nombre` = '$nombre' WHERE `id` = $id LIMIT 1;",$FBD_CON);

$sql =mysql_query("UPDATE `comentario` SET `comentario` = '$comentario' WHERE `id` = $id LIMIT 1;",$FBD_CON);
echo "ok <p> ";
}
$id++;
}
mysql_close($FBD_CON);
*/
?>
