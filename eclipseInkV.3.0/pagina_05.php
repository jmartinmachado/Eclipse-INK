<?
include("Men.php");
?>
<div class="Modulo">
<script language="Javascript" src="js/xsearch-5.2.js"></script>
<script language="Javascript" src="js/db.js"></script>
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
<? /*---*/ ?>
<div class="titulo_ICO">
<? /*---*/ ?> 
<div id="PARTE_1" class="BOX_Modulo BOX_Modulo_DER ">
<p class="Texto_2 BOX_Modulo_TiT">Buscar </p>


<p align="center">


<div id="cse" style="width: 100%;"><img id="cargando_Ac" src="images/mini_cargando.gif" alt="Cargando" Title="Cargando" border="0" ></div>

<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript">
  google.load('search', '1', {language : 'es', style : google.loader.themes.SHINY});
  google.setOnLoadCallback(function() {

    var customSearchControl = new google.search.CustomSearchControl('005835928998400103699:qskmvtvllly');
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    customSearchControl.draw('cse');
    
    <? 
    if (isset($keywords) && trim($keywords)!=""){ 
			echo "customSearchControl.execute('".$keywords."');";
		}
		?>
  }, true);
  
</script>
 <style type="text/css">
  .gsc-control-cse {
    font-family: "Trebuchet MS", sans-serif;
    border-color: #AAAAAA;
    background-color: #FAFAFA;
  }
  input.gsc-input {
    border-color: #8A99A6;
  }
  input.gsc-search-button {
    border-color: #8A99A6;
    background-color: #D0D1D4;
  }
  .gsc-tabHeader.gsc-tabhInactive {
    border-color: #B2BDC6;
    background-color: #B2BDC6;
  }
  .gsc-tabHeader.gsc-tabhActive {
    border-color: #8A99A6;
    background-color: #8A99A6;
  }
  .gsc-tabsArea {
    border-color: #8A99A6;
  }
  .gsc-webResult.gsc-result {
    border-color: #FFFFFF;
    background-color: #FFFFFF;
  }
  .gsc-webResult.gsc-result:hover {
    border-color: #ffffff;
    background-color: #ffffff;
  }
  .gs-webResult.gs-result a.gs-title:link,
  .gs-webResult.gs-result a.gs-title:link b {
    color: #006600;
    font-weight: bold;
  }
  .gs-webResult.gs-result a.gs-title:visited,
  .gs-webResult.gs-result a.gs-title:visited b {
    color: #006600;
  }
  .gs-webResult.gs-result a.gs-title:hover,
  .gs-webResult.gs-result a.gs-title:hover b {
    color: #000000;
  }
  .gs-webResult.gs-result a.gs-title:active,
  .gs-webResult.gs-result a.gs-title:active b {
    color: #006600;
  }
  .gsc-cursor-page {
    color: #006600;
  }
  a.gsc-trailing-more-results:link {
    color: #006600;
  }
  .gs-webResult.gs-result .gs-snippet {
    color: #5F6A73;
  }
  .gs-webResult.gs-result .gs-visibleUrl {
    color: #5F6A73;
  }
  .gs-webResult.gs-result .gs-visibleUrl-short {
    color: #5F6A73;
  }
  
  .gs-webResult.gs-result .gs-visibleUrl-short {
    display: none;
  }
  .gs-webResult.gs-result .gs-visibleUrl-long {
    display: block;
  }
  .gsc-cursor-box {
    border-color: #FFFFFF;
  }
  .gsc-results .gsc-cursor-page {
    border-color: #B2BDC6;
    background-color: #FFFFFF;
  }
  .gsc-results .gsc-cursor-page.gsc-cursor-current-page {
    border-color: #8A99A6;
    background-color: #8A99A6;
  }
  .gs-promotion.gs-result {
    border-color: #D2D6DC;
    background-color: #D0D1D4;
  }
  .gs-promotion.gs-result a.gs-title:link {
    color: #0066CC;
  }
  .gs-promotion.gs-result a.gs-title:visited {
    color: #0066CC;
  }
  .gs-promotion.gs-result a.gs-title:hover {
    color: #006666;
  }
  .gs-promotion.gs-result a.gs-title:active {
    color: #0066CC;
  }
  .gs-promotion.gs-result .gs-snippet {
    color: #333333;
  }
  .gs-promotion.gs-result .gs-visibleUrl,
  .gs-promotion.gs-result .gs-visibleUrl-short {
    color: #5F6A73;
  }
</style> 

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
