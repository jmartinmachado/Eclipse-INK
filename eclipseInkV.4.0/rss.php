<? 
	require("VariablesGlobales.php");
	switch ($seccion){
		case "principal":
			$Obtentener=Obtener_Nuevos(0);
		break;
		case "resto":
			$Obtentener=Obtener_Otros_Post($tipo,0);
		break;//   $Obtentener[$i+1]
	}
	$LS=count($Obtentener);
	$i=1;
	function Traductor_RSS($FGC){
		$FGC=May_Men($FGC);
		$FGC=Encomillar($FGC);
		$FGC=Agregar_BR($FGC);
		$FGC=str_replace("[bajar]","<a  href='",$FGC);
		$FGC=str_replace("[/bajar]","' target='_blank' >Bajar</a>",$FGC);
		/*$FGC=str_replace("[codigo]","<DIV id=subcontenido><textarea class=vb name='t' cols='80' rows='10' id='t'>",$FGC);
		$FGC=str_replace("[/codigo]","</textarea></DIV>",$FGC);*/
		$FGC=str_replace("[HR]","",$FGC);
		$FGC=str_replace("[UL]","",$FGC);
		$FGC=str_replace("[/UL]","",$FGC);
		$FGC=str_replace("[aliniacion=jus]","",$FGC);
		$FGC=str_replace("[aliniacion=cen]","<p align='center'>",$FGC);
		$FGC=str_replace("[aliniacion=izq]","",$FGC);
		$FGC=str_replace("[aliniacion=der]","",$FGC);	
		$FGC=str_replace("[/aliniacion]","</p>",$FGC);
		$FGC=str_replace("[negrita]","<B>",$FGC);
		$FGC=str_replace("[/negrita]","</B>",$FGC);
		$FGC=str_replace("[italica]","<I>",$FGC);
		$FGC=str_replace("[/italica]","</I>",$FGC);
		$FGC=str_replace("[subrayado]","<U>",$FGC);
		$FGC=str_replace("[/subrayado]","</U>",$FGC);
		$FGC=str_replace("[Tamanio=Pequenia]","",$FGC);
		$FGC=str_replace("[Tamanio=Normal]","",$FGC);
		$FGC=str_replace("[Tamanio=Grande]","",$FGC);
		$FGC=str_replace("[Tamanio=Enorme]","",$FGC);
		$FGC=str_replace("[/Tamanio]","",$FGC);
		$FGC=str_replace("[fuente=Arial]","",$FGC);
		$FGC=str_replace("[fuente=Courier]","",$FGC);
		$FGC=str_replace("[fuente=Georgia]","",$FGC);
		$FGC=str_replace("[fuente=Times]","",$FGC);
		$FGC=str_replace("[fuente=Verdana]","",$FGC);
		$FGC=str_replace("[fuente=Trebuchet]","",$FGC);
		$FGC=str_replace("[fuente=Lucida]","",$FGC);
		$FGC=str_replace("[fuente=Comic]","",$FGC);
		$FGC=str_replace("[/fuente]","",$FGC);
		$FGC=str_replace("[color=Rojo Oscuro]","",$FGC);
		$FGC=str_replace("[color=Rojo]","",$FGC);
		$FGC=str_replace("[color=Naranja]","",$FGC);
		$FGC=str_replace("[color=Marron]","",$FGC);
		$FGC=str_replace("[color=Amarillo]","",$FGC);
		$FGC=str_replace("[color=Verde]","",$FGC);
		$FGC=str_replace("[color=Olivia]","",$FGC);
		$FGC=str_replace("[color=Cyan]","",$FGC);
		$FGC=str_replace("[color=Azul]","",$FGC);
		$FGC=str_replace("[color=Azul Oscuro]","",$FGC);
		$FGC=str_replace("[color=Indigo]","",$FGC);
		$FGC=str_replace("[color=Violeta]","",$FGC);
		$FGC=str_replace("[color=Negro]","",$FGC);
		$FGC=str_replace("[/color]","",$FGC);
		$FGC=str_replace("[url="," <a  target='_blank' href='",$FGC);
		$FGC=str_replace("-/?]","'><b>",$FGC);// Mirame y no me toques.
		$FGC=str_replace("[/url]","</b></a>",$FGC);
		$FGC=str_replace("[img]","<p align='center'> <img src='http://eclipseink.com.ar/",$FGC); 	
		$FGC=str_replace("[/img]","'> </p>",$FGC);
		$FGC=str_replace("[video]","<embed src=\"http://www.youtube.com/v/",$FGC); 	
	 $FGC=str_replace("[/video]","\" quality=high width=\"640px\" height=\"385px\" type=\"application/x-shockwave-flash\" AllowNetworking=\"internal\" AllowScriptAccess=\"never\" autoplay=\"false\" wmode=\"transparent\"></embed>",$FGC);
		return Traga_CODE($FGC,"[codigo]","[/codigo]");
	} 
	echo "<?xml version=\"1.0\"  encoding=\"utf-8\" ?>";
?>
<rss version="2.0" xmlns:media="http://search.yahoo.com/mrss/" xmlns:dc="http://purl.org/dc/elements/1.1/" >
	<channel>
		<title>Eclipse INK</title>
		<link>http://www.eclipseink.com.ar</link>
		<description>Para el programador que llevas a dentro</description>
		<language>es-ar</language>
		<managingEditor>info.eclipseink@gmail.com</managingEditor>
		<webMaster>info.eclipseink@gmail.com</webMaster>
		<image>
			<title>Eclipse INK</title>
			<link>http://www.eclipseink.com.ar/</link>
			<url>http://www.eclipseink.com.ar/img_pos_miniatura/eclipse.png</url>
		</image>
		<? for ($i=1;$i<(13*4) && $i<$LS;$i=$i+4) { ?>
		<? $Contenido=Obtener_Articulo($Obtentener[$i]); ?> 
			<item>
				<guid isPermaLink="true">http://www.eclipseink.com.ar/Articulo_<? echo $Obtentener[$i] ?>.html</guid>
				<title><![CDATA[ <? echo limpiar(Caracteres_Especiales_INV($Obtentener[$i+2])) ?>  ]]></title>
				<link>http://www.eclipseink.com.ar/Articulo_<? echo $Obtentener[$i] ?>.html</link>
				<description><![CDATA[ <? echo limpiar(Traductor_RSS($Contenido["contenido"])) ?> <hr> ]]></description>
				<pubDate><? echo TransfomarFecha($Obtentener[$i+3]) ?> -0300</pubDate>
				<author>info.eclipseink@gmail.com</author>
			</item>
		<? } ?>
	</channel> 
</rss>