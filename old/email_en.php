<?php
/* Let's set a few Variables to handle all the dirty work! */
	$nazwa_firmy  = "Fasliter s.c.";
	$adres_strony = "www.fasliter.com.pl";
	$site_email  = "fasliter@fasliter.com.pl";

# DO NOT EDIT ANYTHING BELOW THIS LINE #
# DO NOT EDIT ANYTHING BELOW THIS LINE #
# DO NOT EDIT ANYTHING BELOW THIS LINE #

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//PL">
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<title>Fasliter s.c. - Opakowania kartonowe</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</HEAD>
<BODY leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF" onLoad="">
<center>
<p class="potwierdzenie">
<?
/* This will handle the variables passed from the contact.php3 file */
$potw=mail("$email", "Podziekowania  za mail od firmy $nazwa_firmy!", "$imie $nazwisko,\n Dzi�kujemy za przes�anie maila.\nJe�li nie odpowiemy w ci�gu 48 godzin prosimy o email pod adres $email_name!","Content-Type: TEXT/plain; CHARSET=ISO-8859-2");

$wyslany=mail("$site_email","$temat","Mail od: $imie $nazwisko Email: $email tresc:$tresc","Content-Type: TEXT/plain; CHARSET=ISO-8859-2");
if (($wyslany==TRUE)&&($potw==TRUE))
{
?>
<BR>
<p>
Witamy,<b><? echo $imie $nazwisko?></b>.
<BR>"
Firma <b><? echo $nazwa_firmy?> </b> dzi�kuje za zainteresowanie swoj� stron�<BR>
Potwierdzenie zapytania zosta�o wys�ane na adres podany w formularzu: <? echo $email ?><BR>
Wiadomo�� zosta�a nadana automatycznie - nie odpowiadaj na ni� !<BR>
Zapraszamy do wsp�pracy
</p>
<?
}
else 
{
echo "<BR>";
echo "Witamy,<b> $imie $nazwisko</b>.";
echo "<BR>";
echo "mail nie zosta� wys�any";
}
?>
</p>
  <table width="100%" cellspacing=10 cellpadding=10 border=0 align="center">
    <tr>
      <td><div align="center" class="przycisk_zamknij"><a href="javascript:window.close();" target="_self" class="przycisk_zamknij" onClick="javascript:window.close();">Dzi�kujemy za e-mail. Kliknij, aby zamkn��</a></div></td>
    </tr></table>
</center>
</BODY>
</HTML>
