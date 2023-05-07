<?php
$localhost = 'localhost';
$host      = 'root';
$password  = '';
$database  = 'Cadastro';

$sql = new mysqli($localhost, $host, $password, $database);
if($sql->connect_errno){
  die("Falha ao conectar: (" . $sql->connect_errno . ") " . $sql->connect_error);
}

?>