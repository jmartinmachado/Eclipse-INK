<?
include("Men.php");
?>
<div class="Modulo">
<? /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/ ?>
<div class="BOX_Modulo">
<p class="Texto_2 BOX_Modulo_TiT">A - Z</p>
<ul >
<li class="vinieta"><a href="<? echo traducir_url("ejemplo.php?tipo=Asp") ?>" class="comun Texto_2 Tm_12">ASP</a></li>
<li class="vinieta"><a href="<? echo traducir_url("ejemplo.php?tipo=cpp") ?>" class="comun Texto_2 Tm_12">C++</a></li>
<li class="vinieta"><a href="<? echo traducir_url("ejemplo.php?tipo=css") ?>" class="comun Texto_2 Tm_12">CSS</a></li>
<li class="vinieta"><a href="<? echo traducir_url("ejemplo.php?tipo=fls") ?>" class="comun Texto_2 Tm_12">Flash</a></li>
<li class="vinieta"><a href="<? echo traducir_url("ejemplo.php?tipo=html") ?>" class="comun Texto_2 Tm_12">HTML</a></li>
<li class="vinieta"><a href="<? echo traducir_url("ejemplo.php?tipo=js") ?>" class="comun Texto_2 Tm_12">JavaScript</a></li>
<? /*<li class="vinieta"><a href="<? echo traducir_url("ejemplo.php?tipo=MySql") ?>" class="comun Texto_2 Tm_12">MySQL</a></li>*/ ?>
<li class="vinieta"><a href="<? echo traducir_url("ejemplo.php?tipo=PHP") ?>" class="comun Texto_2 Tm_12">PHP</a></li>
<li class="vinieta"><a href="<? echo traducir_url("ejemplo.php?tipo=SQL") ?>" class="comun Texto_2 Tm_12">SQL</a></li>
<li class="vinieta"><a href="<? echo traducir_url("ejemplo.php?tipo=VB") ?>" class="comun Texto_2 Tm_12">Visual Basic</a></li>
<li class="vinieta"><a href="<? echo traducir_url("ejemplo.php?tipo=otros") ?>" class="comun Texto_2 Tm_12">Otros</a></li>
</ul>
</div>
<? /*---*/ ?>
<div class="titulo_ICO">
<div class="BOX_Modulo">
<p class="Texto_2 BOX_Modulo_TiT">Buscador</p>
<img src="images/lado_1.gif"  class="leftbuscador_interno" border="0" alt="">
<input type="text" id="buscador_inter_q" class="buscador_interno onblur_effect" onkeypress="keypress_intro(event)" onfocus="onfocus_input(this)" onblur="onblur_input(this)" maxlength="50" value="Buscar" title="Buscar" />
<input type="button" onclick="x_search()" align="top" vspace="2" alt="Buscar" class="b_buscador" title="Buscar" />
</div>
<? /*---*/ ?> 
<div class="BOX_Modulo">
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
<div class="BOX_Modulo">
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
<p class="Texto_2 BOX_Modulo_TiT">Hello</p>


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