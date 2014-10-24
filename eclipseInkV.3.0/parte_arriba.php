<? include("Men.php"); ?>
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
<meta name='title' content='<? echo $meta_Title ?>'>
<meta name='author' content='Juan Martin Machado'>
<meta name='subject' content='<? echo $meta_Subject ?>'>
<meta name='description' content='<? echo $meta_Description ?>'>
<meta name='keywords' content='<? echo $meta_Keywords ?>'>
<meta name='language' content='spanish'>
<meta name='revisit' content='1 day'>
<meta name='distribution' content='global'>
<meta name='robots' content='all'>
<meta name="google-site-verification" content="jXI8J9O2ZQAN69eNkAoRmgNB5Mq9oIZ0Mr2WaMRSeDw" >
<meta name="msvalidate.01" content="F980F0D7DF8CD108E6B6DF4ED4ADF488" >
<META name="y_key" content="9c44044bfe197c70" >
<title> <? echo $meta_Title ?> </title>
<style type="text/css">
	#cargando{
	font-size: 13px;
	font-family: 'Tahoma';
	font-style: normal;
	font-weight: bold;
	color:#000;
	position:fixed;
	overflow:hidden;
	text-align:left;
	left:10px;
	top:10px;
	z-index:12
	}
</style>
<script type="text/javascript">
var slideMenu=function(){
	var sp,st,t,m,sa,l,w,sw,ot;
	return{
		build:function(sm,sw,mt,s,sl,h){
			sp=s; st=sw; t=mt;
			m=document.getElementById(sm);
			sa=m.getElementsByTagName('li');
			l=sa.length; w=m.offsetWidth; sw=w/l;
			ot=Math.floor((w-st)/(l-1)); var i=0;
			for(i;i<l;i++){
				s=sa[i];
				s.style.width=sw+'px';
				this.timer(s)
			}
			if(sl!=null){m.timer=setInterval(function(){slideMenu.slide(sa[sl-1])},t)}
		},
		timer:function(s){s.onmouseover=function(){clearInterval(m.timer);m.timer=setInterval(function(){slideMenu.slide(s)},t)}},
		slide:function(s){
			var cw=parseInt(s.style.width,'10');
			if(cw<st){
				var owt=0; var i=0;
				for(i;i<l;i++){
					if(sa[i]!=s){
						var o,ow; var oi=0; o=sa[i]; ow=parseInt(o.style.width,'10');
						if(ow>ot){oi=Math.floor((ow-ot)/sp); oi=(oi>0)?oi:1; o.style.width=(ow-oi)+'px'}
						owt=owt+(ow-oi)}}
				s.style.width=(w-owt-40)+'px';
			}else{clearInterval(m.timer)}
		}
	};
}();

</script>
<link REL='shortcut icon' href='favicon.ico'>
<link REL='icon' href='favicon.ico' type="image/ico">
<link href="css/Principal.css" rel="stylesheet" type="text/css">
<!--link rel="alternate" type="application/rss+xml" title="Feed RSS de Eclipse Ink" href="http://www.EclipseInk.com/feed" /-->
<script src="js/shCore.js" type="text/javascript"></script>
<script src="js/shBrushVB.js" type="text/javascript"></script>
<script src="js/Principal.js" type="text/javascript"></script>
<script type="text/javascript">
//var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
//document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<!--script >
try{
var pageTracker = _gat._getTracker("UA-10387805-1");
pageTracker._trackPageview();
} catch(err) {}
</script-->
</head>
<body>
<div id="cargando" class="cargando" align="center">
Cargando...
</div>
<? /*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/ ?>
