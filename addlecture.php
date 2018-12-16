<?php
	include("ayar.php");
	$lecture=$_POST['lecture'];
	/* Hoca Tarafından Verilen Derslerin Girişi */
		if($_POST["add"]){
			$samelecture = mysql_fetch_assoc(mysql_query("SELECT count(*) as s FROM ogrenci_dersler where kod_id='".$_POST['lecture']."' and ogrenci_id='".$_SESSION["ogrenci_idd"]."'"));
				if($samelecture["s"]==0){
			$sstudent = mysql_fetch_assoc(mysql_query("SELECT Count(*) as nowlecture FROM ogrenci_dersler where ogrenci_id='$_SESSION[ogrenci_idd]'"));
			$snowlecture=$sstudent["nowlecture"];
			$slecture=$obilgi["secme_ders_Adeti"];
			if($slecture>$snowlecture){
				
				mysql_query("insert into ogrenci_dersler values (NULL,'".$lecture."','".$_SESSION["ogrenci_idd"]."',0,0)")or die(mysql_error());
				echo '<div class="alert alert-success">Lecture Added...</div>';
				
			}else{
				echo '<div class="alert alert-danger">Credit is Full</div>';
			}	
				}else{
				echo '<div class="alert alert-danger">You Can Not Take Same Lecture Again</div>';	
				}		
		}
	/* -------------------------------------------  */
?>
	<link rel="stylesheet" href="css/stil.css" type="text/css" media="screen" />
<form method="post" enctype="multipart/form-data" name="example" action="ogrencigiris.php?s=addlecture">
<table width="453" align="center"  cellpadding="3" 
      cellspacing="0" class="liste" id="tablo" 
      style="BORDER-RIGHT: #d1d9e1 1px solid; BORDER-TOP: medium none; BORDER-LEFT: #d1d9e1 1px solid; BORDER-BOTTOM: #d1d9e1 1px solid">

  <tr>
    <td height="16" colspan="2"><div align="center" class="baslik">
      <div align="center" class="tablobaslik">Add Lecture</div>
    </div></td>
  </tr>
  <tr>
    <td width="125" height="30">Add Lecture : </td>
    <td width="289">
      <select style="background-color:#333;" name="lecture">
<?php
$sor = mysql_query("select * from dersler");
while ($listele = mysql_fetch_array($sor)) {
?>
      <option style="background-color:#333;" value="<?=$listele["id"];?>"><?=$listele["kodu"]." - ".$listele["isim"];?></option>
      
<?
}
?>
</select></td>
  </tr>
   
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" class="button-success" name="add" id="add" value="Add"/>
      </div></td>
  </tr>
</table></form>