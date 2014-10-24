<?
include("Men.php");
?>
<div class="Modulo">
<script type="text/javascript">
var Datos_Globales={
	Post_titulo:'<? echo $Todo_array["titulo"] ?>',
	Id_POST:<? echo $id ?>,
	Cant_Com:<? if(isset($Comentario_post)){ echo count($Comentario_post)/5;}else{echo 0;} ?>,
};
</script>
<? /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/ ?>
<div class="titulo_ICO">
<div class="BOX_Modulo">
<p class="Texto_2 BOX_Modulo_TiT">Buscador</p>
<img src="images/lado_1.gif" class="leftbuscador_interno"  alt="" >
<input type="text" id="buscador_inter_q" class="buscador_interno" onkeypress="keypress_intro(event)" onfocus="onfocus_input(this)" onblur="onblur_input(this)" maxlength="50" value="Buscar" title="Buscar" />
<input type="button" onclick="x_search()" align="top" vspace="2" alt="Buscar" class="b_buscador" title="Buscar" />
</div>

<? /*---*/ ?> 

<div class="BOX_Modulo">
<p class="Texto_2 BOX_Modulo_TiT">Comentarios recientes &nbsp 
<? /* a href="javascript:Actualizar_D()" id="Actualizar" alt="">
<img id="actualizar" src="images/reload.gif" border="0" alt="">
</a>
<img id="cargando_Ac" src="images/mini_cargando.gif" class="NON_display" alt="" border="0" */ ?>
</p>
<div id="ult_com">
<?
echo Escribir_Ult_Comentarios();
?>
</div>
</div>
<? /*---*/ ?> 
<div class="BOX_Modulo">
<p class="Texto_2 BOX_Modulo_TiT"> &nbsp Art&iacute;culos relacionados</p>
<?
$todo="<UL class='Texto_3'>";
$const=10*2;
$i=0;
$todo_array=Articulos_rel(explode(",",$Todo_array["keywords"]),$id);
if(count($todo_array)<1){
	$todo="<span class='Texto_2'>No hay Articulos Relacionados</span>";
}else{
while ($i<count($todo_array)-1 && $i < $const){
$todo.="<li>".Generar_Mejores_Art($todo_array[$i],$todo_array[$i+1])."</li>";
$i=$i+2;
}
$todo.="</UL>";
}
echo $todo;
?>
</div>
<? /*---*/ ?> 
<div class="BOX_Modulo ">
<p class="Texto_2 BOX_Modulo_TiT"> &nbsp Nube de Tag's</p>
<div align="justify" >
<?
$todo="";
$todo_array=Obtener_TAG();
if (!empty($todo_array)){
$LS=count($todo_array);
for ($i=0;$i<$LS;$i++){
$todo.=Gen_TAG($todo_array[$i]);
}
}else{
$todo="<span class='Texto_2'>UP's</span>";
}
echo $todo;
?>
</div>
</div>
<? /*---*/ ?>
<div class="BOX_Modulo ">
<p class="Texto_2 BOX_Modulo_TiT">Publicidad</p>
<p align="center">
<?
echo Obtener_Banner("v",0)
?>
</p>
</div>
</div>
<? /*--*/ ?>
<div class="titulo_ICO">
<? /*---*/ ?> 
<div class="BOX_Modulo BOX_Modulo_DER">


<div class="asdw">
	<!-- Anterior -->

	<div class="ant_si <? if ($Art_Anterior==0){ echo "NON_Visible";} ?>" style="float:right"><a rel="nofollow" target="_self" href=<? echo "Articulo_".$Art_Anterior.".html" ?>  class="siguiente" alt="Anterior (m&aacute;s viejo)" title="Anterior (m&aacute;s viejo)"  >


	<img src="images/espacio.gif" border=0 alt="Anterior (m&aacute;s viejo)" class="Display_None"></a></div>
	<div class="titulo_testo"><? echo $Todo_array["titulo"] ?></div>
	
	<div class="ant_si <? if ($Art_Siguiente==0){ echo "NON_Visible";} ?>"><a rel="nofollow" target="_self" href=<? echo "Articulo_".$Art_Siguiente.".html" ?>  class="anterior" alt="Siguiente (m&aacute;s nuevo)" title="Siguiente (m&aacute;s nuevo)">
	<img src="images/espacio.gif" border=0 alt="Siguiente (m&aacute;s nuevo)"  class="Display_None"></a></div>


	<!--div style="border:1px #F00 solid">

	</div-->

</div>

<br>

<div class="art_fuente_Trebuchet art_color_Crotrae Tm_12" align=justify><? echo $Todo_array["contenido"] ?></div>
<p align="center">
<?
echo Obtener_Banner("h_Bajar",0);
?>
</p>
<div class="Texto_3 Tm_12" align="right"><b>
<? echo $Todo_array["fecha"] ?>
<br>
Eclipse INK.</b>
</div>
<br>

<div class="Texto_3 Tm_12" style="border:0px solid" align="right"><b>




<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo "http://www.eclipseink.com.ar/Articulo_".$id.".html"  ?>&amp;layout=box_count&amp;show_faces=true&amp;width=100&amp;action=like&amp;colorscheme=light&amp;height=50" scrolling="no" frameborder="0" style="border:0px solid; overflow:hidden; width:75px; height:62px;top:2;position:relative" allowTransparency="true"></iframe>





<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo "http://www.eclipseink.com.ar/Articulo_".$id.".html"  ?>" data-text="<? echo $Todo_array["titulo"] ?>" data-count="vertical" data-via="EclipseINK" data-lang="es">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

<p>
	
<br>

</p>
	
<div align=right><a name="fb_share" href="http://www.facebook.com/sharer.php">Compartir</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
&nbsp
<p></p>
<div class="socialweb"><a rel="nofollow" target="_blank" href="http://digg.com/submit?phase=2&url=www.EclipseINK.com.ar/art.php?id=<? echo $id ?>"  class="diggi socialwebd" title="Compartir en Digg">
<img src="images/espacio.gif" border=0 alt="" class="Display_None"></a></div>

<div class="socialweb"><a rel="nofollow" target="_blank" href="http://www.sonico.com/share.php?url=www.EclipseINK.com.ar/art.php?id=<? echo $id ?>" class="sonicoi socialwebd" title="Compartir en Sonico">
<img src="images/espacio.gif" border=0 alt="" class="Display_None"></a></div>
<div class="socialweb"><a rel="nofollow" target="_blank" href="http://del.icio.us/post?url=www.EclipseINK.com.ar/art.php?id=<? echo $id ?>" class="deliciusi socialwebd" title="Compartir en Delicious">
<img src="images/espacio.gif" border=0 alt="" class="Display_None"></a></div>
</div>

<div class="limpiar">
</div>
<div class="Texto_3 Tm_10 tag" align=right>
<? echo $Tagss ?>
</div>

</div>
<? /*---*/ ?>
<SCRIPT class=javascript>
var TEXT_area = document.getElementsByName("t");
if (0 < TEXT_area.length){
dp.SyntaxHighlighter.HighlightAll('t');
}
</SCRIPT> 
<? /*---*/ ?>
<div class="BOX_Modulo BOX_Modulo_DER">
<p class="Texto_2 BOX_Modulo_TiT">Publicidad</p>
<p align="center">
<? echo Obtener_Banner("h",0); ?>
</p>
</div>
<? /*---*/ ?> 
<div class="BOX_Modulo BOX_Modulo_DER">
<p class="Texto_2 BOX_Modulo_TiT">Agregar un Comentario <img id="cargando_Ac" src="images/mini_cargando.gif" class="NON_Visible" alt="" border="0"></p>
<form name="Formulario" id="Formulario" method="post" enctype="multipart/form-data">
<input type="text"  name="nombre" class="Formulario_input barra_ancho" title="Tu Nombre" value="Tu Nombre" onfocus="onfocus_input(this);Borrar_ERR(this.name)" onblur="onblur_input(this)" maxlength="10" onkeypress="return permite(event, 'car')">
<br><span id="nombre_err" class="Error">&nbsp</span>
<p></p>
<textarea name="comentario" class="barra_ancho" onfocus="Borrar_ERR(this.name)"></textarea>
<br><span id="comentario_err" class="Error">&nbsp</span>
<p align="center">
<input id="botoncitos" name="aceptar" value="Comentar" type="button" class="Texto_2 Boton" onclick="Enviar_Comentario(form)">
</p>
</form>
</div>
<? /*---*/ ?> 
<div class="BOX_Modulo BOX_Modulo_DER" id="comentario">
<p class="Texto_2 BOX_Modulo_TiT">Comentarios&nbsp<img id="cargando_C" src="images/mini_cargando.gif" class="NON_Visible" alt="" border="0"></p>
<div id="nuevo_comentario"></div>
<?
$i=1;
if (!isset($Comentario_post) || count($Comentario_post)==1 || empty($Comentario_post)){
echo "<form name='no_comm'><p align='center' class='Texto_2'>El Articulo no tiene ningun comentario.</p></form>";
} else {
while($i < count($Comentario_post)){
echo Escribir_Comentario($Comentario_post[$i],$Comentario_post[$i+1],$Comentario_post[$i+2],$Comentario_post[$i+3],$Comentario_post[$i+4],false);
$i=$i+5;
}
}
?>
</div>
</div>
<? /*---*/ ?>
<? /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/ ?>
</div>