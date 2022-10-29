<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> <html>
<head>
<title>baja1</title>  
<meta name="GENERATOR" content="Quanta Plus">  
<meta http-equiv="Content-Type" content="text/html; charset=iso8859-1"> 
</head> 
<body>
<?php
$linea1="SELECT * FROM clientes ";
$consulta=$linea1;
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
echo "<center><h2>Seleccione Cliente a dar de baja</h2></center>";
echo "<CENTER>"; 
echo "<FORM ACTION=borrac.php METHOD=POST>";
echo "<TABLE BORDER=1>";
for ($i=0;$i<mysql_numrows($result);$i++) 
{ 
	$Id_Clien=mysql_result($result,$i,"Id_Clien"); 
	$Client_No=mysql_result($result,$i,"Client_No");
	echo "<TR><TD><INPUT type='checkbox' name="Clien[$Id_Clien]"></TD><TD>$Client_No</TD></TR>"; 
}
echo "</TABLE>"; echo "<INPUT type='submit' value='Borrar'>"; echo "</FORM>";
echo "</CENTER>";
mysql_close($link); 
?>
</body> 
</html>
