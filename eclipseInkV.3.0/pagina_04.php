<?
include("Men.php");
?>
<div class="Modulo">
<? /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/ ?>

<div class="titulo_ICO">
	<? /*---*/ ?> 
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
<p class="Texto_2 BOX_Modulo_TiT"><? echo $todo_titulo ?></p>
<div class="Mini_BOX">
<div class="Mini_BOX_in Texto_3" align="center">
<?
echo $texto;
?>
</div>
</div>
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
<? /*---*/ ?>
<? /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/ ?>
</div>
