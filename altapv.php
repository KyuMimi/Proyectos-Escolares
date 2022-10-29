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
$Provee_Nu= $_POST['Provee_Nu'];
$Provee_No= $_POST['Provee_No'];
$Provee_Ap= $_POST['Provee_Ap'];
$Proveet_Am= $_POST['Provee_Am'];
$Provee_Di= $_POST['Provee_Di'];
$Provee_Te= $_POST['Provee_Te'];
$linea1="INSERT INTO proveedor (Provee_Nu, Provee_No, Provee_Ap, Provee_Am, Provee_Di, Provee_Te) "; 
$linea2=" VALUES ('$Provee_Nu', '$Provee_No', '$Provee_Ap', '$Provee_Am', '$Provee_Di', '$Provee_Te') ";
$consulta=$linea1.$linea2;
//echo $consulta;
if ( ! $link=mysql_connect("localhost","root","mysql")) 
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
echo "<br><br><a href='altapv.html'>Otra alta</a>"; 
echo "<br><br><a href='inicio.html'>Inicio</a>";
mysql_close($link); 
?>
</body> 
</html>