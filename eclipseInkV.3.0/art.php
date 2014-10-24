<?
include("Funciones_Globales.php");
include("obtener_articulo.php");
include("parte_arriba.php");
include("estructura.php");
/*----------- ELEMENTO -------------------*/
if ($Todo_array["contenido"]=="ERROR"){
$todo_titulo="Atencion !!!";
$texto="<meta HTTP-EQUIV='Refresh' CONTENT='10; URL=index.php'>";
$texto.="El Articulo no existe o fue borrado.<p></p>El navegador te redireccionara automaticamente en 10 segundos<p></p>Si no lo hace, el siguiente link que te llevara a la pagina principal.<p><a href='inicio.php' class='Texto_5' alt='' title='Ir a la Pagina Principal'><b>Ir a la Pagina Principal</b></a><p></p>";
include("pagina_04.php");
}else{
include("pagina_06.php");
}
/*------------------------------------------*/
include("parte_abajo.php");
?>