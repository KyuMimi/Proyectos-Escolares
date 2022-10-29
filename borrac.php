<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> <html>
<head>  
<title></title>  
<meta name="GENERATOR" content="Quanta Plus">  
<meta http-equiv="Content-Type" content="text/html; charset=iso8859-1"> 
</head> 
<body>
<?php
//import_request_variables("P","f_");
$Clien= array($_POST['Clien[Id_Clien]']);
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
foreach ($Clien as $indice => $valor) 
{ 
	if ($valor== "on") 
{
$linea1="DELETE FROM clientes "; 
$linea2=" WHERE id='$indice' ";
$consulta=$linea1.$linea2;
//echo "$consulta";
if ( ! $result=mysql_query($consulta,$link)) 
{ 
echo "<a href=inicio.html>Error en el borrardo</a>"; 
exit; 
} 
}
}
echo "<br>Borrado correcto"; 
echo "<br><br><a href='bajac.php'>Otra baja</a>"; 
echo "<br><br><a href='inicio.html'>Inicio</a>";
mysql_close($link); 
?>
</body> 
</html>