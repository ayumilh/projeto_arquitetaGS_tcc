<?php
$localhost = 'localhost';
$host      = 'root';
$password  = '';
$database  = 'cadastro';

$sql = new mysqli($localhost, $host, $password, $database);
if($sql->connect_errno){
  die("Falha ao conectar: (" . $sql->connect_errno . ") " . $sql->connect_error);
}

?>