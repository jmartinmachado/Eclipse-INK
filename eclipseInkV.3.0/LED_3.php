<?
include("jpgraph/jpgraph.php");
include("jpgraph/jpgraph_led.php");
include("FDE.php");
$data=get_visitas("Inicio");
$tam=strlen(" DIARIAS : 0000000000000000000")-strlen($data["H_totales"]);
$texto=substr(" DIARIAS : 0000000000000000000",0,$tam).$data["H_totales"]." ";
$led=new DigitalLED74();
$led->StrokeNumber($texto,LEDC_YELLOW);
?>