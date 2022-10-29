<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>  
<title>modif2</title>  
<meta name="GENERATOR" content="Quanta Plus">  
<meta http-equiv="Content-Type" content="text/html; charset=iso8859-1"> 
</head> 
<body>
<?php
//import_request_variables("P","f_");
$Id_Clien= $_POST['Id_Clien'];
$linea1="SELECT * FROM clientes  "; 
$linea2=" WHERE Id_Clien='$f_modif' ";
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
?>
<h2>Modificación de Clientes</h2> <center>
<FORM action='modifcc.php' method='POST'>
<TABLE border=0> <TR> 
<TD>Id Cliente</TD> 
<TD><INPUT type='text' name='Id_Clien' size='10' maxlength='10' 
value='<?php print(mysql_result($result,0,'Id_Clien')); ?>' ></TD> 
</TR>
<TR>
<TD>Nombre</TD> 
<TD><INPUT type='text' name='Client_No' size='30' maxlength='30' 
value='<?php print(mysql_result($result,0,'Client_No')); ?>'></TD> 
</TR> 
<TR> 
<TD>Apellido Paterno</TD> 
<TD><INPUT type='text' name='Client_Ap' size='20' maxlength='20' 
value='<?php print(mysql_result($result,0,'Client_Ap')); ?>'></TD> 
</TR> 
<TR> 
<TD>Apellido Materno</TD> 
<TD><INPUT type='text' name='Client_Am' size='30' maxlength='30' 
value='<?php print(mysql_result($result,0,'Client_Am')); ?>'></TD> 
</TR> 
<TR> 
<TD>Dirección</TD> 
<TD><INPUT type='text' name='Client_Di' size='50' maxlength='50' 
value='<?php print(mysql_result($result,0,'Client_Di')); ?>'></TD> 
</TR> 
<TR> 
<TD>Teléfono</TD> 
<TD><INPUT type='text' name='Client_Te' size='10' maxlength='10' 
value='<?php print(mysql_result($result,0,'Client_Te')); ?>'></TD> 
</TR> 
</table>
<INPUT type='hidden' name='id' value='<?php 
print(mysql_result($result,0,'Id_Clien')); ?>'>
<INPUT type='submit' value='Aceptar'> </FORM>
</center>
<?php mysql_close($link); 
?>
</body> 
</html>