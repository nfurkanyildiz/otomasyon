<?php
	include("ayar.php");
	$baslik=$_POST['baslik'];
	$duyuru=$_POST['duyuru'];
 	$tarih=$_POST['tarih'];
	/* Hoca Tarafından Verilen duyuru Girişi */
		if($_POST["add"]){
				mysql_query("insert into duyuru values (NULL,'".$baslik."','".$duyuru."','".$tarih."')")or die(mysql_error());
				echo "record was made...";
		}
	/* -------------------------------------------  */
	/* Hoca Tarafından Verilen duyuru Girişi */
if($_POST['update']){	
	mysql_query("update duyuru set id='$id',baslik='$baslik',isim='$duyuru',tarih='$tarih' where id='".$_GET["id"]."'")or die(mysql_error());
	echo "Update was made";
}
/* ------------------------------------------------- */
if($_GET["id"]){
	$d=mysql_fetch_assoc(mysql_query("select * from duyuru where id='".$_GET["id"]."'"));
}
?>
	<link rel="stylesheet" href="css/stil.css" type="text/css" media="screen" />
<form method="post" enctype="multipart/form-data" name="example" action="hocagiris.php?s=yeniduyuru">
<table width="453" align="center"  cellpadding="3" 
      cellspacing="0" class="liste" id="tablo" 
      style="BORDER-RIGHT: #d1d9e1 1px solid; BORDER-TOP: medium none; BORDER-LEFT: #d1d9e1 1px solid; BORDER-BOTTOM: #d1d9e1 1px solid">
 <?
	  if($_GET['id']){
	  ?>
        <tr>
    <td height="16" colspan="2">&nbsp;</td>
  </tr>
  <?
	  }
  ?>
  <tr>
    <td height="16" colspan="2"><div align="center" class="baslik">
      <div align="center" class="tablobaslik">New announcement</div>
    </div></td>
  </tr>
      <tr>
    <td width="125" height="30">title :</td>
    <td width="289">
      <input name="baslik" type="text" class="input2" value="<?=$d["baslik"]?>" />
      </td>
  </tr>
    <tr>
    <td width="125" height="30">announcement :</td>
    <td width="289">
      <input name="duyuru" type="text" class="input2" value="<?=$d["duyuru"]?>" />
      </td>
  </tr>
    <tr>
    <td width="125" height="30">Date </td>
    <td width="289">
      <input name="tarih" type="text" class="input2" value="<?=$d["tarih"]?>" />
      </td>
	  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" class="button-success" <?= $_GET["id"] ? 'name="update" id="update" value="update"' : 'name="add" id="add" value="Add"'?> />
      </div></td>
  </tr>
  </tr>
   

</table></form>
