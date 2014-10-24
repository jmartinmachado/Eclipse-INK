<?
include('Funciones_Globales.php');
switch($Acciones){
case 'Ult_C':
echo Escribir_Ult_Comentarios();
break;
case 'Ver_Datos':
echo "<center><img src='grafo_1.php' border=0 alt='' align='center'></center><p></p><span class='Texto_3' style='font-size:9px'>&nbsp;&nbsp;<a href='javascript:Volver_Datos_E()' class='Link_1'>Volver</a></span>";
break;
case 'Agregar_Comentario':
echo Agregar_Comentario($comentario,$nombre,$id_Post,$Art_titulo);
break;
default:
//include("login.php");
switch($Acciones){
case 'Mostrar_Preview':
echo Escribir_Post($titulo,Des_encomillar(May_Men($contenido),1),Obtener_Fecha());
break;
case 'Borrar_Comentario':
echo Borrar_Comentario($Id_Comentario);
break;
case 'Borrar_Art':
echo Borrar_Articulo($id);
break;
case 'Enviar_Frase':
echo Agregar_Frase($frase,$autor,$bot);
break;
}
}
?>