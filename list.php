<?php
 $servername = "localhost";

$username = "nfyldz_oto";

$password = "asdzxc123+";

$dbname = "nfyldz_oto";



// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// bağlantıyı test et

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 

 
 $verileriCek = mysql_query("select * from duyuru");
	
	 while ($b=mysql_fetch_array($verileriCek)){
		 $baslik = $b['baslik'];
         $duyuru = $b['duyuru'];
		 $tarih = $b['tarih'];
?> <br>
<div class="temizle"></div> 

	  <div style="width:300px;" class="list-group">
    <a href="#" class="list-group-item active">Duyurular</a>
	<a href="#" class="list-group-item active">Başlık : <?php echo $baslik; ?> </br> Tarih : <?php echo $tarih; ?></a>
    <a href="#" class="list-group-item"> Duyuru : <?php echo $duyuru; ?></a>
      <?
	 }
	  ?>
  </div>
    <div class="temizle"></div> 
	