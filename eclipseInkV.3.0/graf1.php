<?php
// $Id: piecex2.php,v 1.3.2.1 2003/08/19 20:40:12 aditus Exp $
// Example of pie with center circle
include("jpgraph/jpgraph.php");
include("jpgraph/jpgraph_pie.php");
include("FDE.php");
$INF_1=get_visitas("Asp");
$INF_2=get_visitas("cpp");
$INF_3=get_visitas("css");
$INF_4=get_visitas("fls");
$INF_5=get_visitas("html");
$INF_6=get_visitas("MySql");
$INF_7=get_visitas("VB");
$INF_8=get_visitas("Ajax");
$INF_A=get_visitas("PHP");
$INF_B=get_visitas("js");
$INF_C=get_visitas("SQL");
$INF_D=get_visitas("otros");
$data=array($INF_1["H_totales"],$INF_2["H_totales"],$INF_3["H_totales"],$INF_4["H_totales"],$INF_5["H_totales"],$INF_6["H_totales"],$INF_7["H_totales"],$INF_8["H_totales"],$INF_A["H_totales"],$INF_B["H_totales"],$INF_C["H_totales"],$INF_D["H_totales"]);
$graph=new PieGraph(500,400,"auto");
$graph->SetShadow();
$graph->title->Set("Porcentaje de Visitas a los Ejemplos");
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$p1=new PiePlot($data);
$p1->value->SetFont(FF_FONT1,FS_BOLD);
$p1->value->SetColor("darkred");
$p1->SetSize(0.3);
$p1->SetCenter(0.4);
$lbl=array("ASP","CPP","CSS","FLS","HTML","MySQL","VB","AJAX","PHP","JS","SQL","Otros");
$p1->SetLabels($lbl);
$p1->SetLegends(array("ASP %.1f%%","CPP %.1f%%","CSS %.1f%%","FLS %.1f%%","HTML %.1f%%","MySQL %.1f%%","VB %.1f%%","AJAX %.1f%%","PHP %.1f%%","JS %.1f%%","SQL %.1f%%","Otros %.1f%%"));
$graph->Add($p1);
$graph->Stroke();
?>