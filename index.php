<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
		<title>Priidu leht</title>
	</head>
	<body>
	<h1>OK!</h1>
	<h2><?php echo 'Current PHP version: ' . phpversion(); ?></h2>
	<a href="https://notepad-plus-plus.org/download/v7.html">Notepad++<br></a>
	<a href="https://www.facebook.com/profile.php?id=742008455">Priit<br></a>
	<img src="http://vignette2.wikia.nocookie.net/oigussotsioloogia/images/d/d8/Pilt-Grotius.jpg/revision/latest?cb=20080321154458&path-prefix=et" alt="Mingi vant"/><br>
	<img src="pics/pilt.jpg" alt="Pardipojad ja kiisu"/>
	<?php 
    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";

    $l = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($l, "SET CHARACTER SET UTF8") or
            die("Error, ei saa andmebaasi charsetti seatud");
    mysqli_close($l);?>
	</body>
</html>