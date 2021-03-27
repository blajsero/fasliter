<?php
class PageFooter {

	var $footerContent = '<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-496374-1";
urchinTracker();
</script>
</body>
</html>';
	
	function getPageFooter(){
		return $this->footerContent;
	}
	
}
?>