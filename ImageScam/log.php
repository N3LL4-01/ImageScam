<?php include 'functions.php';$browser = getBrowser();

$date    = date ('m/j/y g:i A');

$ip      = getIP();

$referer = getReferer ();

$log     = fopen('logs.txt', 'a'); fwrite($log, '['.$date.'] '.$browser.'|'.$ip.'|'.$referer."rn"); fclose($log); echo '<img src="birdy.jpg">'; ?>