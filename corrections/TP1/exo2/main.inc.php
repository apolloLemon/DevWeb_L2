<?php
$exercice = 2;
$tp = 1;
define("http_method",$_SERVER['REQUEST_METHOD']); // ne marcherait pas avec const
define("executing_file",$_SERVER['PHP_SELF'],TRUE);
$a_href = "http://www.php.net";
$a_content="Le site officiel de PHP";
?>