<?php

class ContentBean {
	
	var $content;
	var $leftColumn ="<object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" codebase=\"http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0\" width=\"316\" height=\"340\" id=\"srodekSWF\" align=\"middle\">
              <param name=\"allowScriptAccess\" value=\"sameDomain\" />
              <param name=\"movie\" value=\"srodek.swf\" />
              <param name=\"quality\" value=\"high\" />
              <param name=\"bgcolor\" value=\"#f6f6ee\" />
			  <param name=\"FlashVars\" VALUE=\"stan_menu={stan_menu}&_jezyk={lang}\">
              <embed src=\"srodek.swf\" FlashVars=\"stan_menu={stan_menu}&_jezyk={lang}\" quality=\"high\" bgcolor=\"#f6f6ee\" width=\"316\" height=\"340\" name=\"srodekSWF\" align=\"middle\" swLiveConnect=\"true\" allowScriptAccess=\"sameDomain\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" />
</object>";
	
	function ContentBean(){
		
		$this->content['produkty']['leftColumn']['pl']=$this->leftColumn;
		$this->content['produkty']['leftColumn']['en']=$this->leftColumn;
		$this->content['produkty']['leftColumn']['de']=$this->leftColumn;
		$this->content['produkty']['rightColumn']['pl']="
				<p>
							Wykonujemy opakowania z wielu materiałów (papier, tektura lita,
							tektura falista, priplak). Zapewniamy uczciwe i profesjonalne prowadzenie produkcji opakowania od projektu po dostarczenie gotowego produktu do klienta. Poniżej prezentujemy Państwu wybrane produkty, jeśli są Państwo zainteresowani produkcją opakowania nie znajdującego się na liście, prosimy o <a href=\"index.php?lang={lang}&page=kontakt\">kontakt</a> z przyjemnością odpowiemy na Państwa pytania.
							</p>
                                <ul>
								W naszej ofercie znajdą Państwo m.in.:
									<li><a href=\"javascript:void();\" onClick=\"setSrodekVariable('gallery','pudlaTekturaLita');\"> pudła i pudełka z tektury litej</a></li>
									<li><a href=\"javascript:void();\" onClick=\"setSrodekVariable('gallery','pudlaMikrofala');\">pudła z mikrofali</a></li>
									<li><a href=\"javascript:void();\" onClick=\"setSrodekVariable('gallery','standyReklamowe');\">standy reklamowe</a></li>
									<li><a href=\"javascript:void();\" onClick=\"setSrodekVariable('gallery','ekspozytory');\">ekspozytory reklamowe</a></li>
									<li><a href=\"javascript:void();\" onClick=\"setSrodekVariable('gallery','torby');\">torby papierowe</a></li>
									<li><a href=\"javascript:void();\" onClick=\"setSrodekVariable('gallery','etykiety');\">etykiety</a></li>
									<li><a href=\"javascript:void();\" onClick=\"setSrodekVariable('gallery','obwoluty');\">obwoluty</a></li>
									<li><a href=\"javascript:void();\" onClick=\"setSrodekVariable('gallery','wkladkiUsztywniajace');\">wkładki usztywniające</a></li>
									<li><a href=\"javascript:void();\" onClick=\"setSrodekVariable('gallery','ksztaltki');\">kształtki</a></li>
									
									
								</ul>
		";
		$this->content['produkty']['rightColumn']['en']="";
		$this->content['produkty']['rightColumn']['de']="";
		
		$this->content['ofirmie']['leftColumn']['pl']=$this->leftColumn;
		$this->content['ofirmie']['leftColumn']['en']=$this->leftColumn;
		$this->content['ofirmie']['leftColumn']['de']=$this->leftColumn;
		$this->content['ofirmie']['rightColumn']['pl']="
	 		<p>Firma Fasliter istnieje od 1991r. W chwili obecnej posiadamy zakład z bogatym parkiem maszynowym, 
			   zatrudniający 20 osób.
			</p>
			<p>Dzięki ciągłemu rozwojowi i gromadzonemu doświadczeniu możemy Państwu 
			   zaoferować wysokiej klasy produkty i usługi.
			</p>";
		$this->content['ofirmie']['rightColumn']['en']="";
		$this->content['ofirmie']['rightColumn']['de']="";
		
		$this->content['uslugi']['leftColumn']['pl']=$this->leftColumn;
		$this->content['uslugi']['leftColumn']['en']=$this->leftColumn;
		$this->content['uslugi']['leftColumn']['de']=$this->leftColumn;
		$this->content['uslugi']['rightColumn']['pl']="
				<p>W ramach naszych usług mogą zamówić Państwo wykonanie jednej usługi, 
				   przez połączenie kilku z nich, aż do realizacji pełnego projektu od 
				   zaprojektowania opakowania po jego dostarczenie do Państwa.
				</p>
				<ul>
					<li>sztancowanie/wycinanie pudełek</li>
					<li>klejenie</li>
					<li>kaszerowanie</li>
					<li>druk wielokolorowy<br>(offsetowy i fleksograficzny)*</li>
					<li>sitodruk*</li>
					<li>projektowanie opakowań*</li>
					</ul>
					<p>* - usługi oferujemy dzięki współpracy z naszymi wieloletnimi partnerami biznesowymi
					</p>
		";
		$this->content['uslugi']['rightColumn']['en']="";
		$this->content['uslugi']['rightColumn']['de']="";
		
		$this->content['faq']['leftColumn']['pl']=$this->leftColumn;
		$this->content['faq']['leftColumn']['en']=$this->leftColumn;
		$this->content['faq']['leftColumn']['de']=$this->leftColumn;
		$this->content['faq']['rightColumn']['pl']="								
				<p>W tej sekcji znajdą Państwo zbiór najczęściej zadawanych pytań i objaśnienia 
				terminów technicznych
					<ul>
						<li>
							kaszerowanie - jest to oklejanie produktów warstwą papieru z nadrukiem. 
							Pozwala to na osiągnięcie wysokiej atrakcyjności produktu z zachowaniem 
							wymagań technicznych stawianych opakowaniu, przykładem mogą być tutaj 
							opakowania do produktów o dużej masie lub standy reklamowe
						</li>
					</ul>
				</p>";
		$this->content['faq']['rightColumn']['en']="";
		$this->content['faq']['rightColumn']['de']="";

		$this->content['kontakt']['leftColumn']['pl']="<div id=\"map\"><div id=\"map2\"></div></div>";
		$this->content['kontakt']['leftColumn']['en']="<div id=\"map\"><div id=\"map2\"></div></div>";
		$this->content['kontakt']['leftColumn']['de']="<div id=\"map\"><div id=\"map2\"></div></div>";
		$this->content['kontakt']['rightColumn']['pl']="
							<p style=\"line-height:16px;\">
							ul. Demokratyczna 117<br>93-348 Łódź<br>
							tel. (0-42) 6409388<br/>
							tel/fax (0-42) 6457974<br/>
							<a href=\"mailto:fasliter@fasliter.com.pl\" style=\"color:#000000; \">fasliter@fasliter.com.pl</a></p>
							";
		$this->content['kontakt']['rightColumn']['en']="";
		$this->content['kontakt']['rightColumn']['de']="";

	}
	
}


?>