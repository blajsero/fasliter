<?php


class SecurityPoint{
  var $language = array('pl','en','de');
  var $page = array('ofirmie','produkty','uslugi','faq','kontakt');
  //var $cat1 = array('pcv', 'sops', 'sa', 'ss');
  //var $cat2_pcv = array('okna', 'drzwi');
 // var $cat2_sops = array('rm','zpn','ma','pl','rz','mo','zpm','ok');
  //var $cat2_sa= array('fs','ok');
 // var $cat2_ss= array('zb','bg','dw','oz','zt','gerda','kz');
  //var $cat2 = array();
  var $dirtyParams;
  var $secureParams;
  
  function SecurityPoint(){
  	   $this->dirtyParams=array();
  	   $this->secureParams=array();
      //Getting params from the request
      $this->dirtyParams['lang'] = $_GET['lang'];
      unset($_GET['lang']);
	  $this->dirtyParams['page'] = $_GET['page'];
	  unset($_GET['page']);
	  $this->dirtyParams['cat1'] = $_GET['cat1'];
	  unset($_GET['cat1']);
	  $this->dirtyParams['cat2'] = $_REQUEST['cat2'];
	  unset($_GET['cat2']);
	  
}
  function getSecureParams(){
      //Securing parrams
    if(in_array($this->dirtyParams['lang'],$this->language)){
      $this->secureParams['lang'] = $this->dirtyParams['lang'];
	} else{
	  $this->secureParams['lang'] = 'pl';
	}
	if(in_array($this->dirtyParams['page'],$this->page)){
      $this->secureParams['page'] = $this->dirtyParams['page'];
      
	}else{
	  $this->secureParams['page'] = 'ofirmie';
	}
//	if(in_array($this->dirtyParams['cat1'],$this->cat1)){
//      $this->secureParams['cat1'] = $this->dirtyParams['cat1'];
//	}
//	if(isset($this->dirtyParams['cat2'])){
//	switch($this->secureParams['cat1']){
//	case 'pcv':
//	$this->cat2 = $this->cat2_pcv;
//	break;
//	case 'sops':
//	$this->cat2 = $this->cat2_sops;
//	break;
//	case 'sa':
//	$this->cat2 = $this->cat2_sa;
//	break;
//	case 'ss':
//	$this->cat2 = $this->cat2_ss;
//	break;
//	
//	}
//	if(in_array($this->dirtyParams['cat2'],$this->cat2)){
//      $this->secureParams['cat2'] = $this->dirtyParams['cat2'];
//	}
//	else{
//	unset($_REQUEST['cat2']);
//	}
//	}
    return $this->secureParams;
}
}
?>
