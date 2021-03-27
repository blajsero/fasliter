<?php
class Footer{
  var $params;
  var $footer;
  var $footer_pl;
  var $footer_en;
  var $footer_de;
  
  function Footer(&$var){
    if(is_array($var)){
	  $this->params=$var;
	};
	$help= new Helper($params);
	$this->footer_pl="<table><tr><td width=\"406\" height=\"49\"></td><td></td></tr><tr>
          <td width=\"406\"></td>
          <td width=\"45\" align=\"center\"><a href=\"index.php?lang=".$this->params['lang']."&page=ofirmie\">O Firmie</a></td>
          <td width=\"51\" align=\"center\"><a href=\"index.php?lang=".$this->params['lang']."&page=produkty\">Produkty</a></td>
          <td width=\"35\" align=\"center\"><a href=\"index.php?lang=".$this->params['lang']."&page=uslugi\">Usługi</a></td>
          <td  width=\"30\" align=\"center\"><a href=\"index.php?lang=".$this->params['lang']."&page=faq\">Pytania</a></td>
          <td  width=\"40\" align=\"center\"><a href=\"index.php?lang=".$this->params['lang']."&page=kontakt\">Kontakt</a></td>
        </tr></table>";
      $this->footer_en="<table><tr><td width=\"406\" height=\"49\"></td><td></td></tr><tr>
          <td width=\"406\"></td>
          <td width=\"45\" align=\"center\"><a href=\"index.php?lang=".$this->params['lang']."&page=ofirmie\">About us</a></td>
          <td width=\"51\" align=\"center\"><a href=\"index.php?lang=".$this->params['lang']."&page=produkty\">Products</a></td>
          <td width=\"35\" align=\"center\"><a href=\"index.php?lang=".$this->params['lang']."&page=uslugi\">Services</a></td>
          <td  width=\"30\" align=\"center\"><a href=\"index.php?lang=".$this->params['lang']."&page=faq\">FAQ</a></td>
          <td  width=\"40\" align=\"center\"><a href=\"index.php?lang=".$this->params['lang']."&page=kontakt\">Contact</a></td>
        </tr></table>";
      $this->footer_de="<table><tr><td width=\"406\" height=\"49\"></td><td></td></tr><tr>
          <td width=\"406\"></td>
          <td width=\"45\" align=\"center\"><a href=\"index.php?lang=".$this->params['lang']."&page=ofirmie\">Firma</a></td>
          <td width=\"51\" align=\"center\"><a href=\"index.php?lang=".$this->params['lang']."&page=produkty\">Produkten</a></td>
          <td width=\"35\" align=\"center\"><a href=\"index.php?lang=".$this->params['lang']."&page=uslugi\">Bedienungen</a></td>
          <td  width=\"30\" align=\"center\"><a href=\"index.php?lang=".$this->params['lang']."&page=faq\">Fragen</a></td>
          <td  width=\"40\" align=\"center\"><a href=\"index.php?lang=".$this->params['lang']."&page=kontakt\">Kontakt</a></td>
        </tr></table>";
      
	switch($this->params['lang']){
 
	  case 'pl':
	  $this->footer = $this->footer_pl;
	  break;
	  case 'en':
	  $this->footer = $this->footer_en;
	  break;
	  case 'de':
	  $this->footer = $this->footer_de;
	  break;	  
	  default:
	  $this->footer = $this->footer_pl;
	  break;
	  

	}

}

  function getFooter(){
    return $this->footer;
}
}  

?>
