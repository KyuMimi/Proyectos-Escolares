<?php 
$host= "localhost";
$usuario= "root";
$password= "mysql";
$busqueda= "busqueda";
$bd= "agricola";
$enlace= mysql_connect($host, $usuario, $password);
mysql_select_db ($bd, $enlace);
$USUARIO= $_POST["USUARIO"];
$USUARIO= $_REQUEST["USUARIO"];
$PASSWORD= $_POST["PASSWORD"];
$PASSWORD= $_REQUEST["PASSWORD"];
$consulta=mysql_query("SELECT * FROM 'empleados' WHERE Usuario LIKE '$USUARIO' and Password LIKE '$PASSWORD' ", $enlace);
$dato= mysql_fetch_array($consulta);
$cambia= $dato ["$USUARIO"];
if ($dato == ""){
	echo "Los datos no son correctos, <a href=index.php>Volver>";
}else{
	echo "Bienvenido a nuestra web $cambia, <a href=inicio.php>Entrar>";
}
mysql_close($conexion);	
?>
