<?
include("jpgraph/jpgraph.php");
include("jpgraph/jpgraph_led.php");
include("FDE.php");
$data=get_visitas("Bajar");
$tam=strlen(" DESCARGAS : 00000000000000000")-strlen($data["V_Diarias"]);
$texto=substr(" DESCARGAS : 00000000000000000",0,$tam).$data["V_Diarias"]." ";
$led=new DigitalLED74();
$led->StrokeNumber($texto,LEDC_RED);
?>