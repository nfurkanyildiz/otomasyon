<?php
include("ayar.php");
ob_start();
session_start();
if(!isset($_SESSION["hocagiris"])){
$kadi=$_POST["kullaniciadi"];
$sifre=$_POST["sifre"];
$okuhoca = mysql_fetch_assoc(mysql_query("SELECT * FROM hoca where kadi='$kadi' and sifre='$sifre'"));
	if ($okuhoca){
		$hoca_id=$okuhoca["id"];
	}
}else{
	$okuhoca="true";	
}
	if($okuhoca){
		$_SESSION["hocagiris"] = "true";
		if (!isset($_SESSION["hoca_id"])){
			$_SESSION["hoca_id"] = $hoca_id;
		}
$hocabilgi = mysql_fetch_assoc(mysql_query("SELECT * FROM hoca where id='$_SESSION[hoca_id]'"));		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>management system</title>
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
	<li><p class="hosgeldindayi" style="background-color:#000;">Welcome:<? echo $hocabilgi["adi"]." ".$hocabilgi["soyadi"];?></p></li>
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
	  <div style="width:150px;float:right;margin-left:20px;" class="list-group">

    <a href="#" class="list-group-item active">Total Lecture</a>

    <a href="#" class="list-group-item">	<?php

$query = mysql_query("SELECT COUNT(*) FROM `dersler`");
	
$say = mysql_fetch_array($query);
	
echo $say[0];
?></a>
<a href="#" class="list-group-item active">Total Student</a>
  <a href="#" class="list-group-item"><?php

$query = mysql_query("SELECT COUNT(*) FROM `ogrenci`");
	
$say = mysql_fetch_array($query);
	
echo $say[0];
?></a>
  </div>
	<div id="orta" class="ortala">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<div style=""class="container">
  <h2>Management</h2>
  </br>
   <a href="hocagiris.php?s=addstudent"> <button type="button" class="btn btn-primary">Add Student</button></a>
 <a href="hocagiris.php?s=newlecture"> <button type="button" class="btn btn-primary">Add Lecture</button></a>
 <a href="hocagiris.php?s=dersedit"> <button type="button" class="btn btn-success">Edit Lecture</button></a>
 <a href="hocagiris.php?s=entergrade"> <button type="button" class="btn btn-info">Enter Notes</button></a>
<a href="hocagiris.php?s=yeniduyuru"> <button type="button" class="btn btn-default">New Announcement</button></a>
 <a href="hocagiris.php?s=lecturedelete"><button type="button" class="btn btn-danger">Delete Lecture</button></a>
</div>

		<!--sayfaIcerigi-->
		<div id="sayfaIcerigi">
		<div class="temizle"></div> 
            
            <?php
			if($_GET["s"]=="newlecture"){
				include("yenidersh.php");
			}else if($_GET["s"]=="yeniduyuru"){
				include("yeniduyuru.php");
			}else if($_GET["s"]=="lecturedelete"){
				include("derssil.php");
			}else if($_GET["s"]=="dersedit"){
				include("dersedit.php");
			}else if($_GET["s"]=="entergrade"){
				include("entergrade.php");
			}else if($_GET["s"]=="studentlist"){
				include("studentlist.php");
			}else if($_GET["s"]=="grade"){
				include("grade.php");
			}else if($_GET["s"]=="addstudent"){
				include("ogrencikaydet.php");
			}else{
					?>

            <?
			}
			?>

		</div>



		
		<div class="temizle"></div> <!-- sayfaIcerigi, anaMenu icin temizleme -->
		
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
		header("Refresh: 2; url=hocalogin.php");
}
?>