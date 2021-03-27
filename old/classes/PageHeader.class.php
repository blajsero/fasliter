<?php
class PageHeader{
  
var $header_pl='<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="description" content="Firma Fasliter istnieje od 1991r. Zajmuje się produkcją opakowań oraz świadczeniem usług w branży poligraficznej - sztancowanie, klejenie, kaszerowanie, druk, sitodruk. Firma świadczy również kompleksowe usługi poligraficzne"/>
<meta name="keywords" content="opakowania, karton, poligrafia, kaszerowanie, klejenie, sztancowanie, druk ,sitodruk, pudełka, pudła, standy reklamowe, stendy reklamowe"/>
<title>Fasliter s.c. - Opakowania kartonowe</title>';
var $header_en='<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>Fasliter s.c. - Opakowania kartonowe</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />';

var $header_de='<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>Fasliter s.c. - Opakowania kartonowe</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />';

var $header_front='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>';

var $header_back='<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!-- remember to uncomment the script tag below, to be able to display Gmap, another change in index.php is needed too-->
 <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAA0BAJFU_EyJafbyvTzJFRJhRNfkGZQwQiquW5ouI3dSNSYYM6tBSh7evV2m7iiJ08a9REeGYm3shUhg"
      type="text/javascript"></script>
    <script type="text/javascript">

    //<![CDATA[

    function load() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map2"));
		map.addControl(new GSmallMapControl());
        map.setCenter(new GLatLng(51.711821,19.462709), 14);
		var icon = new GIcon();
		icon.image = "http://localhost/fasliter/img/fasliter-logo.png";
		icon.iconSize = new GSize(25, 25);
		icon.iconAnchor = new GPoint(6, 20);
		icon.infoWindowAnchor = new GPoint(5, 1);
		var point = new GLatLng(51.7111,19.458);
		map.addOverlay(new GMarker(point, icon));
      }
    }

    //]]>
    </script>
<script src="js/dw_scrollObj.js" type="text/javascript"></script>
<script src="js/dw_glidescroll.js" type="text/javascript"></script>
<script language="JavaScript" type="text/JavaScript">
<!--

/*************************************************************************
  This code is from Dynamic Web Coding at www.dyn-web.com
  Copyright 2001-4 by Sharon Paine 
  See Terms of Use at www.dyn-web.com/bus/terms.html
  regarding conditions under which you may use this code.
  This notice must be retained in the code as is!
*************************************************************************/

function initScrollLayer() {
  // arguments: id of layer containing scrolling layers (clipped layer), id of layer to scroll, 
  // if horizontal scrolling, id of element containing scrolling content (table?)
  var wndo = new dw_scrollObj(\'wn\', \'lyr1\', null);
  
  // pass id\'s of any wndo\'s that scroll inside tables
  // i.e., if you have 3 (with id\'s wn1, wn2, wn3): dw_scrollObj.GeckoTableBugFix(\'wn1\', \'wn2\', \'wn3\');
  dw_scrollObj.GeckoTableBugFix(\'wn\'); 
}

function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}


	var activeImage = false;
	var imageGalleryObj = false;
	function init(){
		srodek=document.srodekSWF;
	}	
	function showImage()
	{
		if(activeImage){
			activeImage.style.filter = \'alpha(opacity=50)\';	
			activeImage.style.opacity = 0.5;
		}	
		this.style.filter = \'alpha(opacity=100)\';
		this.style.opacity = 1;	
		activeImage = this;	
	}
	function showPreview(imagePath,imageIndex){
		var subImages = document.getElementById(\'view\').getElementsByTagName(\'IMG\');
		if(subImages.length==0){
			var img = document.createElement(\'IMG\');
			document.getElementById(\'view\').appendChild(img);
		}else img = subImages[0];
		img.src = imagePath;
	}
	
	function setSrodekVariable(variable,value){
		//alert(document.srodekSWF + " "+ variable + " " + value);
		document.srodekSWF.SetVariable(variable,value);
	}
//-->	
	</script>
</head>
<body onLoad="init();load();initScrollLayer();MM_preloadImages(\'img/przycisk_up.jpg\',\'img/przycisk_down.jpg\');">
';
//TODO uzupełnić onLoad o funkcję load(); przed wrzuceniem na serwer

  function PageHeader(&$var){
    if(is_array($var)){
	  $this->params=$var;
	};
	}
  
  function getPageHeader(){
    $lang = $this->parameters['lang'];
    $return;
    switch($lang){
	  
	  case 'pl':
	  $return = $this->header_pl;
	  break;
	  case 'en':
	  $return = $this->header_en;
	  break;
	  case 'de':
	  $return = $this->header_de;
	  break;
	  default:
	  $return = $this->header_pl;
	  break;
	  
	}
	if(isset($return)){
	return $this->header_front.$return.$this->header_back;
	} else{
	  return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Error</title></head>';
	}
}
}
?>