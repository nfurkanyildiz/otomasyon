<!--- 
Veritabani basit baglanti formu  - nfyldz.site
start date : 12.12.2018

--->


<?php
$link = mysql_connect("localhost", "root", "4992010f") or die(mysql_error());
$db = mysql_select_db("otomasyon", $link) or die (mysql_error());
mysql_set_charset('latin5',$link);
?>