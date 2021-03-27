<?php
require_once('Helper.class.php');
require_once('PageHeader.class.php');
require_once('PageFooter.class.php');
require_once('Menu.class.php');
require_once('Content.class.php');
require_once('Footer.class.php');
require_once('SecurityPoint.class.php');


class Main {
  var $params;
  
  function Main(){
    $sp = new SecurityPoint;
    $this->params=$sp->getSecureParams();   
}   
  function displayPageHeader(){
    $pageHeader = new PageHeader($this->params);
    echo $pageHeader->getPageHeader();
}
  function displayPageFooter(){
  	$pageFooter = new PageFooter();
  	echo $pageFooter->getPageFooter();
  }
  function displayLeftHeader(){
    $leftHeader = new LeftHeader($this->params);
    echo $leftHeader->getLeftHeader();
}
  
  function displayMenu(){
    $menu = new Menu($this->params);
	echo $menu->getMenu();
	}
  function displayLeftMenu(){
    $leftMenu = new LeftMenu($this->params);
    echo $leftMenu->getLeftMenu();
    
}
  function displayLeftColumn(){
    $content = new Content($this->params);
    echo $content->getLeftColumn();
    
}
  function displayRightColumn(){
    $content = new Content($this->params);
    echo $content->getRightColumn();
    
}
  function displayFooter(){
    $footer = new Footer($this->params);
    echo $footer->getFooter();
    
}

}
?>
