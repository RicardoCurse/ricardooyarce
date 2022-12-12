<!DOCTYPE html>
<head>
       ¡Taller ad Servcios Web!</title>

</head>
<body
     bgcolor="sky blue"
	 text="black">
</center>

<?php
class MyClass {
	public static $str = "<h3>Hi my name is Richard Oyarce";
	public static $JR = "Administracion de Servicios Web <br>";
	
}
echo MyClass::$str."<br>";
echo MyClass::$JR; "<br>";
echo "La fecha actual es " .date("d/m/y") . "<br>";
date_default_timezone_set("America/Santiago");
echo "La hora es: " .date("G:i:s");
?>

</center>
</body>
</html>