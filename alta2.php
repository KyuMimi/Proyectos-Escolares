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
//import_request_variables("GP","f_");
$Id_Clien= $_POST['Id_Clien'];
$Client_No= $_POST['Client_No'];
$Client_Ap= $_POST['Client_Ap'];
$Client_Am= $_POST['Client_Am'];
$Client_Di= $_POST['Client_Di'];
$Client_Te= $_POST['Client_Te'];

$linea1="INSERT INTO clientes (Id_Clien, Client_No, Client_Ap, Client_Am, Client_Di, Client_Te) "; 
$linea2=" VALUES ('$Id_Clien', '$Client_No', '$Client_Ap', '$Client_Am', '$Client_Di', '$Client_Te') ";
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
echo "<br><br><a href='alta.html'>Otra alta</a>"; 
echo "<br><br><a href='inicio.html'>Inicio</a>";
mysql_close($link); 
?>
</body> 
</html>