<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Student Registration System</title>
		<link rel="stylesheet" href="css/giris.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/stil.css" type="text/css" media="screen" /> 
	<link rel="stylesheet" href="css/login.css" type="text/css" media="screen" />

</head>
<body>


<div id="girisTasiyici">
	<div id="girisUst">
		<h1><a href="#">Student Login</a></h1>
	</div>
<div class="login">
    	<form id="girisFormu" method="post" action="ogrencigiris.php">
    	<input type="text" name="ogrencino" placeholder="Student Number" required="required"  />
        <input type="password" name="sifre" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
        <br />
        <button type="submit" class="btn btn-primary btn-block btn-large"><a style="color:white;" href="index.php">Go To Homepage</a></button>


</div>
			<div class="temizle"></div>
		</p>
	    </form>
	</div>
</body>
</html>