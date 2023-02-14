<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$dbh = new PDO('mysql:host=localhost;dbname=ngstore', 'root', 'root');
$stmt = $dbh->query("select * from usuario where email_usu='$usuario' and senha_usu='$senha'");

$resultado = $stmt->rowCount();
if(!$resultado){
  echo "Usuário inválido";
  // !!! Criar a mensagem do usuario inválido com a pagina verdadeira
  exit();
} else {
  $dados = $stmt->fetch();
  session_start();
  $_SESSION['usuario'] = $dados[1];


include "estruturapag.php/cabecalho.php";
include "estruturapag.php/layout-con.php";
include "menupaginas.php/menuindex.php";
include "estruturapag.php/rodape.php";

}
?>