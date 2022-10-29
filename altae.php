<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>  
<title>alta2</title>
  <meta name="GENERATOR" content="Quanta Plus">  
<meta http-equiv="Content-Type" content="text/html; charset=iso8859-1"> 
</head> 
<body>
<?php
//import_request_variables("P","f_");
$Id_Emple= $_POST['Id_Emple'];
$Emplea_No= $_POST['Emplea_No'];
$Emplea_Ap= $_POST['Emplea_Ap'];
$Emplea_Am= $_POST['Emplea_Am'];
$Emplea_Di= $_POST['Emplea_Di'];
$Emplea_Te= $_POST['Emplea_Te'];
$Usuario= $_POST['Usuario'];
$Password= $_POST['Password'];
$linea1="INSERT INTO empleados (Id_Emple, Emplea_No, Emplea_Ap, Emplea_Am, Emplea_Di, Emplea_Te, Usuario, Password) "; 
$linea2=" VALUES ('$Id_Emple', '$Emplea_No', '$Emplea_Ap', '$Emplea_Am', '$Emplea_Di', '$Emplea_Te', '$Usuario', '$Password') ";
$consulta=$linea1.$linea2;
//echo $consulta;
if ( ! $link= mysql_connect("localhost","root","mysql")) 
{ 
echo "<a href=inicio.html>Error al conectar</a>"; 
exit ; 
}
if ( ! mysql_select_db("agricola")) 
{    
echo "<a href=inicio.html>Error al seleccionar BDD</a>";    
exit; 
}
if ( ! $result=mysql_query($consulta,$link)) 
{ 
echo "<a href=inicio.html>Error en la consulta</a>"; 
exit; 
}
echo "<br>Alta correcta"; 
echo "<br><br><a href='altae.html'>Otra alta</a>"; 
echo "<br><br><a href='inicio.html'>Inicio</a>";
mysql_close($link); 
?>
</body> 
</html>