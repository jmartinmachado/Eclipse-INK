<?
include("Men.php");
?>
<div class="Modulo">
<? /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/ ?>
<div class="titulo_ICO">
<div class="BOX_Modulo">
<p class="Texto_2 BOX_Modulo_TiT">Buscador</p>
<img src="images/lado_1.gif" class="leftbuscador_interno" border="0" alt="">
<input type="text" id="buscador_inter_q" class="buscador_interno onblur_effect" onkeypress="keypress_intro(event)" onfocus="onfocus_input(this)" onblur="onblur_input(this)" maxlength="50" value="Buscar" title="Buscar" />
<input type="button" onclick="x_search()" align="top" vspace="2" alt="Buscar" class="b_buscador" title="Buscar" />
</div>

<? /*---*/ ?> 

<div class="BOX_Modulo">
<p class="Texto_2 BOX_Modulo_TiT"> &nbsp En Facebook</p>
<div align="center" >

<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FEclipse-INK%2F133588253349109&amp;width=220&amp;colorscheme=light&amp;connections=10&amp;stream=false&amp;header=true&amp;height=287" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:220px; height:287px;" allowTransparency="true"></iframe>
</div>
</div>

<? /*---*/ ?>
<div class="BOX_Modulo">
<div align="center" >
<img src="images/full_logo_blue.png" alt="Twitter" title="Twitter" class="Especial_Bottom" vspace="10">
<br>
<script type="text/javascript" src="http://s.moopz.com/fanbox_init.js"></script>
<div id="twitterfanbox" >
<script type="text/javascript">fanbox_init("EclipseInk");</script>
</div>
</div>
<style>
.FB_SERVER_IFRAME {
width: 235px !important; /* Ancho del gadget */
height: 340px !important; /* Alto del gadget */
}
</style>
</div>
<? /*---*/ ?>
<div class="BOX_Modulo Especial_Top">
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

<div class="BOX_Modulo Especial_Top">
<p class="Texto_2 BOX_Modulo_TiT">Publicidad
</p>
<p align="center">
<?
echo Obtener_Banner("v",0)
?>
</p>
</div>
</div>
<? /*---*/ ?>
<div class="titulo_ICO">
<? /*---*/ ?> 
<div class="BOX_Modulo BOX_Modulo_DER">
<p class="Texto_2 BOX_Modulo_TiT">Trabajos</p>
<?
if(!isset($pagina)){
$pagina=0;
}
$todo="";
$const=10*3;
$i=1;
$todo_array=ObtenerJob($pagina);
$LS=count($todo_array);
if(empty($todo_array)||$LS==1){
$todo=Generar_Men("No hay Articulos creados para esta Secci&oacute;n");
}else{
while ($i<$LS-1&&$i<$const){
$todo.=Gen_Ult_Art($todo_array[$i],$todo_array[$i+1],$todo_array[$i+2],($i/3));
$i=$i+3;
}
}
$todo.="<div align='center' class='Texto_4'>";
if ($pagina>0){
	if (($pagina-1)==0){
		$todo.="<a class='Link_2' href='".traducir_url("descargas.php")."' title='Siguiente (m&aacute;s nuevo)'><b>[ << Siguiente ]</b></a>";
	}else{
		$todo.="<a class='Link_2' href='".traducir_url("descargas.php?pagina=".($pagina-1))."' title='Siguiente (m&aacute;s nuevo)'><b>[ << Siguiente ]</b></a>";
	}
}
if ($const<$LS&&$pagina>0){
$todo.="&nbsp&nbsp|&nbsp&nbsp";
}
if ($const<$LS){
$todo.="<a class='Link_2' href='".traducir_url("descargas.php?pagina=".($pagina+1))."' title='Anterior (m&aacute;s viejo)'><b>[ Anterior >> ]</b></a>";
}
$todo.="</div>";
echo $todo;
?>
</div>
<? /*---*/ ?> 
<div class="BOX_Modulo BOX_Modulo_DER">
<p class="Texto_2 BOX_Modulo_TiT">Publicidad</p>
<p align="center">
<?
echo Obtener_Banner("h",0);
?>
</p>
</div>
</div>
<? /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/ ?>
</div>