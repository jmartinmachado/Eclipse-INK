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
<p class="Texto_2 BOX_Modulo_TiT">Pol�tica De Privacidad</p>
<p></p>
<div class="Texto_3 Tm_11" align=justify >
Nuestra pol�tica de privacidad describe como recogemos, guardamos o utilizamos la informaci�n que recabamos a trav�s de los diferentes servicios o p�ginas disponibles en este sitio. Es importante que entienda que informaci�n recogemos y como la utilizamos ya que el acceso a este sitio implica la aceptaci�n nuestra pol�tica de privacidad. Estas politicas de privacidad pueden cambiar sin previo aviso.
<p></p>
<B>Cookies</B>
<p></p>
El acceso a este puede implicar la utilizaci�n de cookies. Las cookies son peque�as cantidades de informaci�n que se almacenan en el navegador utilizado por cada usuario para que el servidor recuerde cierta informaci�n que posteriormente pueda utilizar. Esta informaci�n permite identificarle a usted como un usuario concreto y permite guardar sus preferencias personales, as� como informaci�n t�cnica como puedan ser visitas o p�ginas concretas que visite.
Aquellos usuarios que no deseen recibir cookies o quieran ser informados antes de que se almacenen en su ordenador, pueden configurar su navegador a tal efecto.
<p></p>
La mayor parte de los navegadores de hoy en d�a permiten la gesti�n de las cookies de 3 formas diferentes:
<br>
<ul>
<li>Las cookies no se aceptan nunca.</li>
<li>El navegador pregunta al usuario si se debe aceptar cada cookie.</li>
<li>Las cookies se aceptan siempre.</li>
</ul>
<p></p>
El navegador tambi�n puede incluir la posibilidad de especificar mejor qu� cookies tienen que ser aceptadas y cu�les no. En concreto, el usuario puede normalmente aceptar alguna de las siguientes opciones: rechazar las cookies de determinados dominios; rechazar las cookies de terceros; aceptar cookies como no persistentes (se eliminan cuando el navegador se cierra); permitir al servidor crear cookies para un dominio diferente. Adem�s, los navegadores pueden tambi�n permitir a los usuarios ver y borrar cookies individualmente.
<p></p>
Dispone de m�s informaci�n sobre las Cookies en: <a class="style2" href="http://es.wikipedia.org/wiki/Cookie" target="_blank"><font class="ws8" color="#969696">http://es.wikipedia.org/wiki/Cookie</font></a>
<p></p>
<B>Web Beacons</B>
<p></p>
Este sitio puede albergar tambi�n web beacons (tambi�n conocidos por web bugs). Los web beacons suelen ser peque�as im�genes de un pixel por un pixel, visibles o invisibles colocados dentro del c�digo fuente de las p�ginas web de un sitio. Los Web beacons sirven y se utilizan de una forma similar a las cookies. Adem�s, los web beacons suelen utilizarse para medir el tr�fico de usuarios que visitan una p�gina web y poder sacar un patr�n de los usuarios de un sitio.
<p></p>
Dispone de m�s informaci�n sobre los web beacons en: <a class="style2" href="http://es.wikipedia.org/wiki/Web_bug" target="_blank"><font class="ws8" color="#969696">http://es.wikipedia.org/wiki/Web_bug</font></a>
<p></p>
<B>Terceros</B>
<p></p>
En algunos casos, compartimos informaci�n sobre los visitantes de este sitio de forma an�nima o agregada con terceros como puedan ser anunciantes, patrocinadores o auditores con el �nico fin de mejorar nuestros servicios. Todas estas tareas de procesamiento ser�n reguladas seg�n las normas legales y se respetar�n todos sus derechos en materia de protecci�n de datos conforme a la regulaci�n vigente.
<p></p>
Este sitio mide el tr�fico con diferentes soluciones que pueden utilizar cookies o web beacons para analizar lo que sucede en nuestras p�ginas. Actualmente utilizamos las siguientes soluciones para la medici�n del tr�fico de este sitio. Puede ver m�s informaci�n sobre la pol�tica de privacidad de cada una de las soluciones utilizadas para tal efecto:
<p></p>
Google (Analytics): <a class="style2" href="http://www.google.com/intl/es_ALL/privacypolicy.htm" target="_blank"><font class="ws8" color="#969696">http://www.google.com/intl/es_ALL/privacypolicy.html</font></a>
<p></p>
Este sitio tambi�n puede albergar publicidad propia, de afiliados, o de redes publicitarias. Esta publicidad se muestra mediante servidores publicitarios que tambi�n utilizan cookies para mostrar contenidos publicitarios afines a los usuarios. Cada uno de estos servidores publicitarios dispone de su propia pol�tica de privacidad, que puede ser consultada en sus propias p�ginas web.
<p></p>
Actualmente este sitio alberga publicidad de:
<p></p>
Google Adsense: <a class="style2" href="http://www.google.com/intl/es_ALL/privacypolicy.html" target="_blank"><font class="ws8" color="#969696">http://www.google.com/intl/es_ALL/privacypolicy.html</font></a>
<p></p>
Google utiliza empresas publicitarias asociadas para publicar anuncios cuando los usuarios visitan nuestro sitio web. Es posible que estas empresas usen la informaci�n que obtienen de las visitas a este y a otros sitios web (sin incluir nombre, direcci�n, direcci�n de correo electr�nico o n�mero de tel�fono) para ofrecer a los usuarios anuncios sobre productos y servicios que les resulten de inter�s. Si desea obtener m�s informaci�n sobre esta pr�ctica y conocer las opciones de que dispone para impedir que estas empresas usen dicha informaci�n, haga clic <a class="style2" href="http://www.google.com/privacy_ads.html" target="_blank"><font class="ws8" color="#969696">aqu�</font></a>.
</div>
<div class="Texto_3 Tm_12" align="right"><b>
Domingo, 5 de Septiembre de 2010.<br>
Eclipse INK.</b>
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