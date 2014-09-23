<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>
	harjtus-8
	</title>
</head>

<body>

	

<h2>Funktsioon "continue"</h2>
<?php 

	for ($number = 1; $number <= 10; $number++) {
    if ($number == 5) {
        continue; // Kui $nr == 5, siis jääb alljärgnev vahele ning tsükkel käivitub uuesti.
    }

    echo $number . ", ";
}
 ?>


 <h2>Funktsioon "break"</h2>

 <?php 

		for ($number = 1; $number <= 10; $number++) {
    if ($number == 7) {

    	break;
        continue; // Kui $nr == 5, siis jääb alljärgnev vahele ning tsükkel käivitub uuesti.
    } 

    echo $number . ", ";
} 	

  ?>













</body>

</html>