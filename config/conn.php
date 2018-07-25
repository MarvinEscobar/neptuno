<?php
$serverName = "EDUARDOLF\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database"=>"NEPTUNO_INV", "UID"=>"sa", "PWD"=>"1234");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>