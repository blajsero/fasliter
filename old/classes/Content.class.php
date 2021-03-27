<?php
require_once("ContentBean.class.php");

class Content {
  var $params;
  var $content;
  var $contentBean;
  var $stan_menu;
  
  function Content(&$var){
    if(is_array($var)){
	  $this->params=$var;
	};
	$help= new Helper($params);
	$this->contentBean = new ContentBean();
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
}

  function parseContent($string){
   $string = str_replace("{lang}", $this->params['lang'], $string);
   $string = str_replace("{stan_menu}", $this->stan_menu, $string);
   return $string;  
 
  }

/*
  function getLeftColumn(){
    return $this->content;
}
*/

  function getRightColumn(){
	return 	$this->parseContent($this->contentBean->content[$this->params['page']]['rightColumn'][$this->params['lang']]);
} 
  function getLeftColumn(){
	return 	$this->parseContent($this->contentBean->content[$this->params['page']]['leftColumn'][$this->params['lang']]);
} 
}
/*
$a = array('lang'=>'pl','page'=>"ofirmie");
$c = new Content($a);
echo $c->getRightColumn();
*/

?>