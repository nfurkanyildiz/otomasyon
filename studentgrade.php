<table width="305" border="1">
  <tr>
    <td><b>Code</b></td>
    <td><b>Name</b></td>
    <td><b>Credit</b></td>
    <td><b>Midterm</b></td>
    <td><b>Final</b></td>
    <td><b>NOTE</b></td>
  </tr>
<?php
$asklecture = mysql_query("select * from ogrenci_dersler where ogrenci_id=$_SESSION[ogrenci_idd]");
while($alecture = mysql_fetch_array($asklecture)) {
	$listele = mysql_fetch_assoc(mysql_query("SELECT * FROM dersler where id='$alecture[kod_id]'"));
	
	$answer=(($alecture["vize"])*("0.".$listele["vize_yuz"]))+(($alecture["final"])*("0.".$listele["final_yuz"]));
	
	
	
?>
<tr>
<td><?=$listele["kodu"];?></td>
    <td><?=$listele["isim"];?></td>
    <td><?=$listele["kredi"];?></td>
    <td><?=$alecture["vize"];?></td>
    <td><?=$alecture["final"];?></td>
    <td><?
    if($answer>=95 && $answer<=100) {
    echo $answer." => AA";
    } elseif($answer>=90 && $answer<=95) {
    echo $answer." => BA";
    } elseif($answer>=85 && $answer<=90) {
    echo $answer." => BB";
    } elseif($answer>=80 && $answer<=85) {
    echo $answer." => CB";
    } elseif($answer>=75 && $answer<=80) {
    echo $answer." => CB";
    } elseif($answer>=70 && $answer<=75) {
    echo $answer." => CC";
    } elseif($answer>=65 && $answer<=70) {
    echo $answer." => CC";
    } elseif($answer>=60 && $answer<=65) {
    echo $answer." => CC";
    } elseif($answer>=55 && $answer<=60) {
    echo $answer." => DC";
    }elseif($answer>=50 && $answer<=55) {
    echo $answer." => DD";
	}elseif($answer<=0) {
    echo $answer." => Not Value";
    }else{
    echo $answer." => FF";
    }
	?></td>
</tr>
<?
}
?>
</table>