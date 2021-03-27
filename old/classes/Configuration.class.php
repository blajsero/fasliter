<?php
  /**
* 
* @description This class creates a layer between the filesystem and the program itself,
* allowing to put all information about app in one place
*/
class Configuration {
  
  var $accessPath = ' ';
  var $pageHeader = 'PageHeader.class.php';
  var $leftHeader = 'LeftHeader.class.php';
  var $menu='Menu.class.php';
  var $languageMenu='LanguageMenu.class.php';
  var $leftMenu='LeftMenu.class.php';
  var $content='Content.class.php';
  var $footer='Footer.class.php';
  var $helper='Helper.class.php';
  var $securityPoint='SecurityPoint.class.php';
  
  function Configuration(){}
  
   function getPageHeader(){
    return $this->pageHeader;
}
   function getLeftHeader(){
    return $this->leftHeader;
}
   function getMenu(){
    return $this->menu;
}
   function getLanguageMenu(){
    return $this->languageMenu;
}
   function getLeftMenu(){
    return $this->leftMenu;
}
   function getContent(){
    return $this->content;
}
   function getFooter(){
    return $this->footer;
}
   function getHelper(){
    return $this->helper;   
}
   function getSecurityPoint(){
    return $this->securityPoint;
}
}
?>