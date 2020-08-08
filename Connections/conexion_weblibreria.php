<?php
$hostname_conexion_weblibreria = "localhost";
$database_conexion_weblibreria = "web_libreria";
$username_conexion_weblibreria = "root";
$password_conexion_weblibreria = "";
$conexion_weblibreria = @mysql_connect($hostname_conexion_weblibreria, $username_conexion_weblibreria, $password_conexion_weblibreria) or trigger_error(mysql_error(),E_USER_ERROR);
Class dbObj{
  var $hostname_conexion_weblibreria = "localhost";
  var $database_conexion_weblibreria = "web_libreria";
  var $username_conexion_weblibreria= "root";
  var $password_conexion_weblibreria = "";

function getConnstring() {
$con = mysql_connect($this->hostname_conexion_weblibreria, $this->username_conexion_weblibreria, $this->password_conexion_weblibreria, $this->database_conexion_weblibreria) or die("Connection failed: " . mysqli_connect_error());

/* check connection */
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
} 

else {
$this->conn = $con;
}
return $this->conn;
}
}
?>
