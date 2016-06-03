<?php
$titlePage = 'menu';
$title = 'VOICELA';


ob_start();
?>
	
	
	
<?php

$content = ob_get_clean();

include("Views/layout.php");

?>
