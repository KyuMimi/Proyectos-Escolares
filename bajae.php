<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> <html>
<head>
<title>baja1</title>  
<meta name="GENERATOR" content="Quanta Plus">  
<meta http-equiv="Content-Type" content="text/html; charset=iso8859-1"> 
</head> 
<body>
<?php
$linea1="SELECT * FROM empleados ";
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
echo "<h2>Seleccione el empleado a dar de baja</h2>";
echo "<CENTER>"; echo "<FORM ACTION=borrae.php METHOD=POST>";
echo "<TABLE BORDER=1>";
for ($i=0;$i<mysql_numrows($result);$i++) 
{ 
	$Id_Emple=mysql_result($result,$i,"Id_Emple"); 
	$Emplea_No=mysql_result($result,$i,"Emplea_No");
	echo "<TR><TD><INPUT type='checkbox' name='borrar[$Id_Emplea]'></TD><TD>$Emplea_No</TD></TR>"; 
}
echo "</TABLE>"; echo "<INPUT type='submit' value='Borrar'>"; echo "</FORM>";
echo "</CENTER>";
mysql_close($link); 
?>
</body> 
</html>
