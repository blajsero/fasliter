<?php

class Helper{
  var $params;
  function Helper(&$var){
    if(is_array($var)){
	  $this->params=$var;
	};
}
  //function retrieves content according to the language

 function arrayToURL ($var){
   $return='';
   $flag=0;
   foreach ($var as $key =>$value){
       if($flag==0){
	     $return.=$key."=".$value;
	     $flag=1;
	   
	   }
       else{$return.="&".$key."=".$value;}
	}

   return $return;
  }
 }
?>