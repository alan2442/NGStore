<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$dbh = new PDO('mysql:host=localhost;dbname=ngstore', 'root', 'root');
$stmt = $dbh->query("select * from usuario where email_usu='$usuario' and senha_usu='$senha'");

$resultado = $stmt->rowCount();
if(!$resultado){

include "estruturapag.php/cabecalho.php";
include "estruturapag.php/layout.php"; 
?>
<div class="alert alert-danger" role="alert">
  Email ou Senha Incorreto.
</div>
<?php
include "menupaginas.php/menulogin.php";
include "estruturapag.php/rodape.php";

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