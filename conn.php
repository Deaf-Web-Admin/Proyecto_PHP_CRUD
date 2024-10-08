<?php
// this is for create delete and update
$servidor = "";//example sql10.freesqldatabase.com
$database = ""; //example sql10721190
$usuario= ""; //example sql10721190
$password = ""; //example I6XnWyMcxn


//this is for read
Function conectar(){
$servidor = "";//example sql10.freesqldatabase.com
$database = "";//example sql10721190
$usuario= "";//example sql10721190
$password = "";//example I6XnWyMcxn
	$conexion = new mysqli($servidor, $usuario, $password, $database);
	return $conexion;
}
?>