<!--- 
Veritabani basit baglanti formu  - nfyldz.site
start date : 12.12.2018

--->


<?php
$link = mysql_connect("localhost", "nfyldz_oto", "asdzxc123+") or die(mysql_error());
$db = mysql_select_db("nfyldz_oto", $link) or die (mysql_error());
mysql_set_charset('latin5',$link);
?>
<!--- bootstrap css & js include ediyorum --->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 