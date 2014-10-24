<?
include("Men.php");
?>
<div class="Modulo">
<? /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/ ?>
<div class="titulo_ICO">
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
<div class="BOX_Modulo Especial_Top" >
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
<? /*--*/ ?>
<div class="titulo_ICO">
<? /*---*/ ?> 
<div class="BOX_Modulo BOX_Modulo_DER">
<p class="Texto_2 BOX_Modulo_TiT">Bajar</p>
<p></p>
<table width="500"  align="center" bgcolor="#FFFFFF" border="0">
<?
$banner_pos=array("1","2","3");
shuffle($banner_pos);
for($i=0;$i<count($banner_pos);$i++){
switch($banner_pos[$i]){
case '1':
?>
<tr>
<td align="center">
<div align="center">
<? echo Obtener_Banner("h_Bajar",1); ?>
</div>
</td>
</tr>
<?
break;
case '2':
?>
<tr>
<td align="center">
<div class="borders" align="center">
<table width="465" height="53" border="0" align="center" cellpadding="2">
<tr>
<?
$testo_pos=array("1","2");
shuffle($testo_pos);
for($p=0;$p<count($testo_pos);$p++){
switch($testo_pos[$p]){
case '1':
?>
<td width="50%" height="17" align="left" valign="top">
<b><a href=" " target="_blank" class="textos"><u>Tutoriales Aprender M&uacute;sica</u></a></b>
<br>
<span class="textochico">Este tutorial te permitir&aacute; aprender como conseguir materiales.</span>
</td>
<?
break;
case '2':
?>
</td>
<td width="50%" valign="top" align="left">
<b><a href="<? echo $url_A ?>" class="textos"><u>Download por aqu&iacute;...</u></a></b>
<br>
<span class="textochico">Pulsa aqui para Descargar el archivo. </span>
</td>
<?
break;
}
}
?>
</tr>
</table>
</div>
</td>
</tr>
<?
break;
case '3':
?>
<tr>
<td align="center">
<div align="center">
<? echo Obtener_Banner("h_Bajar",2); ?>
</div>
</td>
</tr>
<?
break;
}
}
?>



</table>
</div>

<? /*---*/ ?>
<div class="BOX_Modulo BOX_Modulo_DER">
<p class="Texto_2 BOX_Modulo_TiT">Publicidad</p>
<p align="center">
<?
echo Obtener_Banner("h",1);
?>
</p>
</div>
<? /*---*/ ?> 
<div class="BOX_Modulo BOX_Modulo_DER">
<p class="Texto_2 BOX_Modulo_TiT">Publicidad</p>
<p align="center">
<?
echo Obtener_Banner("h",2);
?>
</p>
</div>
</div>
<? /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/ ?>
</div>