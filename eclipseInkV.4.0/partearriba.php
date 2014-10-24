<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<?
		if (!isset($meta_Description)){
			$meta_Description="Creacion de paginas webs, Software...";
		}
		if (!isset($meta_Keywords)){
			$meta_Keywords="Juan, Martin, Machado, creacion, de, paginas, webs,software,publicidad,programas,eclipse,ink";
		}
		if (!isset($meta_Subject)){
			$meta_Subject="www.EclipseINK.com.ar";
		}
		if (!isset($meta_Title)){
			$meta_Title="Eclipse INK";
		}
	?>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
	<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
	<meta name='title' content='<? echo $meta_Title ?>'>
	<meta name='author' content='Juan Martin Machado'>
	<meta name='subject' content='<? echo $meta_Subject ?>'>
	<meta name='description' content='<? echo $meta_Description ?>'>
	<meta name='keywords' content='<? echo $meta_Keywords ?>'>
	<meta name='language' content='spanish'>
	<meta name='revisit' content='1 day'>
	<meta name='distribution' content='global'>
	<meta name='robots' content='all'>
	<link rel=”canonical” href=”http://www.ejemplo.de/producto.php?pagina=original-contenido” />

<title><? echo $meta_Title ?></title>
</head>
<?
	$navegador = getenv("HTTP_USER_AGENT");
	if (preg_match("/MSIE/i", $navegador)){
		$resultado = '<link href="css/principalIE.css" rel="stylesheet" type="text/css"><!-- FUCK YOU IE! -->';
	}else if (preg_match("/Mozilla/i", $navegador)){
		$resultado = '<link href="css/principal.css" rel="stylesheet" type="text/css">';
	}else{
		$resultado = '<link href="css/principal.css" rel="stylesheet" type="text/css">';
	}
	echo $resultado;
?> 
<link href='http://fonts.googleapis.com/css?family=Just+Me+Again+Down+Here&v1' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Homemade+Apple&v1' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Reenie+Beanie&v1' rel='stylesheet' type='text/css'>
<?
	$a=explode('/',$PHP_SELF);
	$b=count($a);
	if (!isset($tipo)){$tipo="Todo";}
	switch (trim($a[$b-1])) {
		case "index.php":
			$RSS_1="";
			$tipo="";
		break;
		case "buscar.php":
			$RSS_1="";
			$tipo="";
		break;
		case "ejemplo.php":
			$RSS_1="Codigo";
		break;
		case "geek.php":
			$RSS_1="Geek";
			$tipo="";
		break;
		case "eclipse.php":
			$RSS_1="Eclipse";
			$tipo="";
		break;
	}
	$tit_rss="&Uacute;ltimos Articulos - ".Traducir_Cat($tipo);
	$rss_q="http://feeds.feedburner.com/EclipseInk".$RSS_1.$tipo;
?>
<link rel="alternate" type="application/rss+xml" title="<? echo $tit_rss ?>" href="<? echo $rss_q ?>" /> 
<link rel="alternate" type="application/atom+xml" title="<? echo $tit_rss ?>" href="<? echo $rss_q ?>" /> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script> 
<script src="js/principal.js" type="text/javascript"></script>
<script src="js/jquery.glow.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo.js" type="text/javascript"></script>
<script src="js/shCore.js" type="text/javascript"></script>
<script src="js/shBrushVB.js" type="text/javascript"></script>
<style type="text/css">
	#cargando{
		font-size: 13px;
		font-family: 'Tahoma';
		font-style: normal;
		font-weight: bold;
		color:#000;
		position:fixed;
		text-align:left;
		left:0px;
		top:0px;
		z-index:12
		width:200%;
		height:200%;
		padding-left:10px;
		padding-top:10px;
		background:#d0d0d0;
		z-index:100000;
	}
</style>
<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try{
	var pageTracker = _gat._getTracker("UA-10387805-1");
	pageTracker._trackPageview();
	} catch(err) {}
</script>
<body>
<div id="cargando" class="cargando">
Cargando...
</div>
	<div id="wrapper" style="visibility:hidden">
		<div id="header">
			<div class="Liston"></div>
			<div id="Midleheader"><a href="<? echo traducir_url("inicio") ?>"><img src="imagenes/espacio.gif" border=0 alt="" id="Logo"></a>
				<div class="bannerArriba"><? echo Obtener_Banner("h") ?></div>
			</div>
			<div class="Liston ListonI"></div>
			<div class="clear_A"></div>
		</div>
		<div id="container">
			<div id="menu">
				<div class="ladomenu"></div>
				<div id="menucentro">
					<div class="menu_elemento"><a href="<? echo traducir_url("eclipseink") ?>" class="texto_menu">Eclipse INK</a></div>
					<div class="menu_elemento"><a href="<? echo traducir_url("geek") ?>" class="texto_menu">GEEK</a></div>
					<div class="menu_elemento"><a href="<? echo traducir_url("codigo") ?>" class="texto_menu">Codigo</a></div>
					<div class="menu_elemento"><a href="<? echo traducir_url("buscar") ?>" class="texto_menu">Buscar</a></div>
					<div class="menu_elemento"><a href="<? echo traducir_url("inicio") ?>" class="texto_menu">Inicio</a></div>
					<div class="menu_elemento_boton Display_None"  name="ObjetosExternos" id="botongoogle">
						
						<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
						{lang: 'es-419'}
						</script>
						
						<g:plusone callback="http://www.eclipseink.com.ar/"></g:plusone>
					</div>
				</div>
				<div class="ladomenu ladomenuIz">
				</div>
			</div>
