<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<!--base de datos 
$host = "localhost";
$usuario = "root"; // Cambiar por su nombre de usuario.
$password = ""; // Cambiar por su password.
$conectar = mysql_connect ($host, $usuario, $password);
mysql_select_db ("agricola", $conectar);
 -->

<!--poo -->
<?php 
$host= "localhost";
$usuario= "593653";
$password= "123456789";
$conectar= mysql_connect ($host, $usuario, $password);
mysql_select_db ("agricola", $conectar);
return $conectar;
?>

</body>
</html>
