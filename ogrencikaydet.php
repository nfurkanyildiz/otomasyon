<?php

	include("ayar.php");
	$id=$_POST['id'];
	$isim=$_POST['isim'];
	$soyad=$_POST['soyad'];	
	$ogrencino=$_POST['ogrencino'];
	$bolum=$_POST['bolum'];
	$adres=$_POST['adres'];
	$telnumara=$_POST['telnumara'];
	$sifre=$_POST['sifre'];
	$secme_ders_Adeti=$_POST['secme_ders_Adeti'];
	/* Hoca Tarafından Verilen Derslerin Girişi */
		if($_POST["add"]){
				mysql_query("insert into ogrenci values (NULL,'".$isim."','".$soyad."','".$ogrencino."','".$bolum."','".$adres."',
				'".$telnumara."','".$sifre."','".$secme_ders_Adeti."')")or die(mysql_error());
				echo "record was made...";
		}
	/* -------------------------------------------  */
	/* Hoca Tarafından Verilen Derslerin Girişi */
if($_POST['update']){	
	mysql_query("update ogrenci set isim='$isim',soyad='$soyad',ogrencino='$ogrencino',bolum='$bolum',adres='$adres',telnumara='$telnumara',sifre='$sifre',secme_ders_Adeti='$secme_ders_Adeti' where id='".$_GET["id"]."'")or die(mysql_error());
	echo "Update was made";
}
/* ------------------------------------------------- */
if($_GET["id"]){
	$k=mysql_fetch_assoc(mysql_query("select * from ogrenci where id='".$_GET["id"]."'"));
}
?>
	<link rel="stylesheet" href="css/stil.css" type="text/css" media="screen" />
<form method="post" enctype="multipart/form-data" name="example" action="hocagiris.php?s=addstudent">
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
      <div align="center" class="tablobaslik">New Lecture</div>
    </div></td>
  </tr>
  <tr>
    <td width="125" height="30">Name : </td>
    <td width="289">
      <input name="isim" type="text" class="input2" value="<?=$k["isim"]?>" />
      </td>
  </tr>
    <tr>
    <td width="125" height="30">Surname :</td>
    <td width="289">
      <input name="soyad" type="text" class="input2" value="<?=$k["soyad"]?>" />
      </td>
  </tr>
    <tr>
    <td width="125" height="30">Student number : </td>
    <td width="289">
      <input name="ogrencino" type="text" class="input2" value="<?=$k['ogrencino']?>" />
      </td>
  </tr>
    <tr>
    <td width="125" height="30">Department<div class="balonStyle">
<div id="ornekler yazirengi" style="margin-top:0.5px;">
<a href="javascript://" class="butonlar"  onblur="kapat()" onclick="ac()" id="balon">?</a>
</div>
</div>
<div class="balonClass" id="balon_Id">
Insert "2" (Comp.Eng.) Insert "3 "(Soft.Eng.)
</div>
</td>
    <td width="289">
      <input name="bolum" type="text" class="input2" placeholder="2 or 3" value="" />
	  <style type="text/css">

#ornekler {

}

#balon_Id {
display: none;
z-index: 20;
}

.balonClass {
background-color:#f5f5f5;
border:2px solid #ccc;
border-radius: .25rem;
padding: 4px;
cursor: pointer;
}

.balonClass {
color:#000;
position:absolute;
}

.balonStyle a {
text-decoration:none;
color: #fff;
}

.butonlar {
border: 1px solid #ddd;
font-size:8px;
padding: 0;
font-weight:bold;
outline: none;
color: #fff;
background-color: #28a745;
display: inline-block;
font-weight: 200;
text-align: center;
padding:4px 4px 4px;
line-height: 1.5;
border-radius: 4px;
cursor: pointer;
}

.butonlar:hover {
background-color: #22903b;
}

</style>

<script type="text/javascript">

function ac() {
var degisken;
degisken=document.getElementById("balon_Id");
degisken.style.display="block";
document.getElementById("balon").focus();
document.getElementById("balon").setAttribute("onclick","kapat()");
}

function kapat() {
var degisken;
degisken=document.getElementById("balon_Id");
degisken.style.display="none";
document.getElementById("balon").setAttribute("onclick","ac()");
}

</script>






      </td>
  </tr>
   <tr>
    <td width="125" height="30">Adress </td>
    <td width="289">
      <input name="adres" type="text" class="input2" value="<?=$k['adres']?>" />
      </td>
  </tr>
     <tr>
    <td width="125" height="30">Phone Number </td>
    <td width="289">
      <input name="telnumara" type="text" class="input2" value="<?=$k['telnumara']?>" />
      </td>
  </tr>
     <tr>
    <td width="125" height="30">Password </td>
    <td width="289">
      <input name="sifre" type="password" class="input2" value="<?=$k['sifre']?>" />
      </td>
  </tr>
       <tr>
    <td width="125" height="30">Total Courses </td>
    <td width="289">
      <input name="secme_ders_Adeti" type="text" class="input2" value="<?=$k['secme_ders_Adeti']?>" />
      </td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" class="button-success" <?= $_GET["id"] ? 'name="update" id="update" value="update"' : 'name="add" id="add" value="Add"'?> />
      </div></td>
  </tr>
</table></form>