<?php
header('Content-Type: text/xml'); 
header("Cache-Control: no-cache, must-revalidate"); 
//A date in the past 
header("Expires: Mon, 26 Jul 2008 05:00:00 GMT"); 
$webburl = $_REQUEST['proxy_url'];
//$webburl = str_replace("|","&",$webburl);
$minfil=fopen($webburl,"r");
$innehall = '';
while (!feof($minfil))
{
  $innehall .= fread($minfil,20000);
}
echo $innehall;
fclose($minfil);
?>

