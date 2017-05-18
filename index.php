<?php

define('__SERVER_PATH__', $_SERVER['DOCUMENT_ROOT']);
define('__CUR_DATE__', date("Y-m-d H:i:s"));

require_once('logs.php');

write_log('src','load',json_decode($_POST['payload']),$_SERVER);

?>
