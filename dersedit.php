<table width="305" border="1">
  <tr>
    <td><b>Code</b></td>
    <td><b>Name</b></td>
    <td><b>Credit</b></td>
    <td><b>Midterm Per</b></td>
    <td><b>Final Per</b></td>
    <td><b>Choice</b></td>
	<td><b>Delete</b></td>
  </tr>
<?php
$sor = mysql_query("select * from dersler where hoca_id=$_SESSION[hoca_id]");
while ($listele = mysql_fetch_array($sor)) {
?>
<tr>
<td><?=$listele["kodu"];?></td>
    <td><?=$listele["isim"];?></td>
    <td><?=$listele["kredi"];?></td>
    <td><?=$listele["vize_yuz"];?></td>
    <td><?=$listele["final_yuz"];?></td>
    <td><a href="hocagiris.php?s=newlecture&id=<?=$listele["id"];?>"><input type="submit" class="button-success" name="add" id="add" value="Edit"/></a></td> <td><a href="hocagiris.php?s=lecturedelete&del=<?=$listele["id"];?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
</tr>
<?
}
?>
</table>