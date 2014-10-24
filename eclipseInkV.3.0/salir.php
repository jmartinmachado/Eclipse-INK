<?
include ("logout.php");
include ("Funciones_Globales.php");
/*------------- Metas ----------------------*/
include ("parte_arriba.php");
include ("estructura.php");
/*----------- ELEMENTO -------------------*/
if ($auth == 1){
include ("pagina_0A.php");
}else{
include ("pagina_0C.php");
}
/*---------------- -------------------------*/
include ("parte_abajo.php");
?>