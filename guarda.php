<?php
$mysqli = new mysqli("localhost", "root", "", "dbtest");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

foreach (array_keys($_POST['nombre']) as $key) {
  $nombre = $_POST['nombre'][$key];
  $apellido = $_POST['apellido'][$key];

  echo "Nombre: $nombre"."<br>"."Apellido: $apellido"."<br>";

  $query = "INSERT INTO usuario VALUES (NULL, '$nombre', '$apellido')";
$mysqli->query($query);
}


?>