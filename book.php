<?php
use \Tsugi\Core\LTIX;
require_once "tsugi/config.php";
$LAUNCH = LTIX::session_start();
$OUTPUT->header();
echo("---------\n")
$output->startBody();
echo("---------\n")
$OUTPUT->flashMessages();
require_once("nav.php");
?>
<div id="container">
<iframe	
height="1800" width="100%" frameborder="0" marginwidth="0"
marginheight="0" scrolling="auto"
src="book.htm">
</iframe>
</div>
<?php include("footer.php"); ?>
</body>
</html>
