<?
include("Men.php");
?>
<div class="Modulo">
<? /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/ ?>
<div class="titulo_ICO">
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

<? /*--*/ ?>
<div class="titulo_ICO">
<? /*---*/ ?> 
<div class="BOX_Modulo BOX_Modulo_DER">
<p class="Texto_2 BOX_Modulo_TiT">Secion Finalizada</p>
<div class="Mini_BOX">
<div class="Mini_BOX_in Texto_3" align="center">
<?
$todo="<meta HTTP-EQUIV='Refresh' CONTENT='10; URL=index.php'>";
$todo.="<p></p>El navegador te redireccionara automaticamente en 10 segundos<p></p>Si no lo hace click el siguiente link que te llevara a la pagina principal.<p><a href='".traducir_url("inicio.php")."' class='Texto_5' alt='' title='Ir a la Pagina Principal'><b>Ir a la Pagina Principal</b></a><p></p>";
echo $todo;
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
