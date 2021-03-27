<?php
require_once("classes/Main.class.php");
$main = new Main();
$main->displayPageHeader();
?>
<div id="container">
<div id="menu">
<?php
$main->displayMenu();
?>
</div>
<div id="main">
<div id="LeftColumn">
<?php
$main->displayLeftColumn();
?>
</div>
<div id="RightColumn">
                <div id="hold">
                    <div id="wn">
                      <!-- scrolling layer here -->
                      <div id="lyr1">
						<div id="tekst_wlasciwy">
                            <?php
                            $main->displayRightColumn();
                            ?>   
                      </div>
                      </div>
                    </div>
                  </div>
<div id="przyciski">
<div id="przycisk_up"><a href="javascript:;" onMouseOut="MM_swapImgRestore();" onMouseOver="MM_swapImage('up','','img/przycisk_up.jpg',1);" onClick="dw_scrollObj.scrollBy('wn',0,200); return false"><img src="img/przycisk_up_out.jpg" name="up" width="16" height="33" border="0"/></a></div>
<div id="przycisk_down"><a href="javascript:;" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('przycisk_down','','img/przycisk_down.jpg',1);" onClick="dw_scrollObj.scrollBy('wn',0,-200); return false"><img src="img/przycisk_down_out.jpg" name="przycisk_down" width="16" height="33" border="0"/></a></div>
</div>
</div>
</div>
<div id="footer">
<?php
$main->displayFooter();
?>
</div>
</div>
<?php
 $main->displayPageFooter();
?>
