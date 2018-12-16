<?php
include("ayar.php");
ob_start();
session_start();
if(!isset($_SESSION["ogrencigiris"])){
$ogrencino=$_POST["ogrencino"];
$sifre=$_POST["sifre"];
$okuogrenci = mysql_fetch_assoc(mysql_query("SELECT * FROM ogrenci where ogrenci_no='$ogrencino' and sifre='$sifre'"));
	if ($okuogrenci){
		$ogrenci_id=$okuogrenci["id"];
	}
}else{
	$okuogrenci="true";	
}
	if($okuogrenci){
		$_SESSION["ogrencigiris"] = "true";
		if (!isset($_SESSION["ogrenci_idd"])){
			$_SESSION["ogrenci_idd"] = $ogrenci_id;
		}
$obilgi = mysql_fetch_assoc(mysql_query("SELECT * FROM ogrenci where id='$_SESSION[ogrenci_idd]'"));		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>student management system</title>
	<link rel="stylesheet" href="css/stil.css" type="text/css" media="screen" />
</head>
<body>

<!-- anaKapsayici -->
<div id="anaKapsayici">

	<!-- ust -->
<div id="ust">
		<div class="ortala">
		<div style="" id="logo">
			<h1><img width="80" height="80" src="logo.png"></img>Student Management System</h1>
		</div>
		
		<!-- kulMenusu -->
		<div id="kulMenusu">
			<ul>
		
				<li><p class="hosgeldindayi" style="background-color:#000;">Welcome; <? echo $obilgi["isim"]." ".$obilgi["soyad"];?></p></li>
				<li><a href="cikiso.php"><img width="30" height="30" src="exit.png"></img></a></li>
			</ul>
		</div>
		<!-- kulMenusu son -->
		
		<div class="temizle"></div> <!-- logo, kulMenusu icin temizleme -->
		</div>
	</div>
	<div class="golge"></div> <!-- ust icin temizleme -->
	<!-- ust son -->
	
	
	<!-- orta -->
	<div id="orta" class="ortala">
	
	<!-- new menu -->
	<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<div style=""class="container">
  <h2>Management</h2>
  </br>
 <a href="ogrencigiris.php?s=addlecture"> <button type="button" class="btn btn-primary">Choose Lecture</button></a>
 <a href="ogrencigiris.php?s=studentgrade"> <button type="button" class="btn btn-info">See Notes</button></a>
 <a href="ogrencigiris.php?s=dellecture"><button type="button" class="btn btn-danger">Delete Lecture</button></a>
  <a href="ogrencigiris.php?s=duyurulist"><button type="button" class="btn btn-danger">Announcement</button></a>
</div>


<!-- left menu 
<div id="mySidenav" class="sidenav">
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <a href="ogrencigiris.php">homepage</a>
<a href="ogrencigiris.php?s=addlecture">choose a lecture</a>
<a href="ogrencigiris.php?s=dellecture">remove lecture</a>
<a href="ogrencigiris.php?s=studentgrade">see notes</a>
</div> -->


		<!--sayfaIcerigi-->
		<div id="sayfaIcerigi">
		
	
			<div class="temizle"></div> 
            <?
			if($_GET["s"]=="addlecture"){
				include("addlecture.php");
			}
			else if($_GET["s"]=="duyurulist"){
				include("list.php");
			}else if($_GET["s"]=="dellecture"){
				include("dellecture.php");
			}else if($_GET["s"]=="dersedit"){
				include("dersedit.php");
			}else if($_GET["s"]=="studentgrade"){
				include("studentgrade.php");
			}else{
				
				
				
					?>
            <?
			}
			?>

		</div>
		
		
		<div class="temizle"></div> 
	</div>
	<!-- orta son -->
	
	<!-- alt -->
	<div id="alt">
		<p class="ortala">Necdet Furkan Yildiz &copy; 2018 | Student Management System </p>
</div>
	<!-- alt son -->
	
</div>
<!-- anaKapsayici son -->

</body>
</html>
<?php
	}else{
		echo "username or password is wrong!";
		header("Refresh: 2; url=ogrencilogin.php");
	}
?>