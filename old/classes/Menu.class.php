<?php

class Menu {
  var $params;
  var $menu;
  var $stan_menu;
  
  function Menu(&$var){
    if(is_array($var)){
	  $this->params=$var;
	};
	$help= new Helper($params);
	switch($this->params['page']){
		case 'produkty':
		$this->stan_menu=1;
		break;
		case 'uslugi':
		$this->stan_menu=2;
		break;
		case 'faq':
		$this->stan_menu=3;
		break;
		case 'kontakt':
		$this->stan_menu=4;
		break;
		default:
		$this->stan_menu=0;
		break;
		};
	$this->menu = "
<object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" codebase=\"http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0\" width=\"771\" height=\"131\" id=\"menuSWF\" align=\"middle\">
        <param name=\"allowScriptAccess\" value=\"sameDomain\" />
        <param name=\"movie\" value=\"menu.swf\" />
        <param name=\"quality\" value=\"high\" />
        <param name=\"bgcolor\" value=\"#F6F6EE\" />
        <param name=\"FlashVars\" VALUE=\"stan_menu=".$this->stan_menu."&_jezyk=".$this->params['lang']."\">
        <embed src=\"menu.swf\" quality=\"high\" FlashVars=\"stan_menu=".$this->stan_menu."&_jezyk=".$this->params['lang']."\" bgcolor=\"#F6F6EE\" width=\"771\" height=\"131\" name=\"menu\" align=\"middle\" allowScriptAccess=\"sameDomain\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" />
      </object>

";


}

  function getMenu(){
    return $this->menu;
}
}
?>
