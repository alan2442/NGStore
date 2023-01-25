<?php 
include "estruturapag.php/cabecalho.php"; 


$nome= $_POST['nome_usu'];
$cpf= $_POST['cpf_usu'];
$email= $_POST['email_usu'];
$senha= $_POST['senha_usu'];

$cidade= $_POST['cid_ende'];
$rua= $_POST['rua_ende'];
$numero= $_POST['num_ende'];
$bairro= $_POST['bairro_ende'];
$complem= $_POST['complem_ende'];

$dbh = new PDO('mysql:host=localhost;dbname=ngstore', 'root', 'root');

$dbh->exec("insert into usuario(nome_usu, cpf_usu, email_usu, senha_usu) values ('$nome', '$cpf', '$email', '$senha')");

$dbh->exec("insert into endereco(cid_usu, rua_usu, num_usu, bairro_usu, complem_usu) values ('$cidade', '$rua', '$numero', '$bairro', '$complem')");


$erro = $dbh->errorInfo();
if($erro[1]==1062){

    include "estruturapag.php/cabecalho.php";
    include "estruturapag.php/layout.php";
    echo "usuario duplicado";
    include "menupaginas.php/menucadastrar.php";
    include "estruturapag.php/rodape.php";
      
} else {

    include "estruturapag.php/cabecalho.php";
    include "estruturapag.php/layout.php";
    
    ?><div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
    Usuario Cadastrado
    </div>
    </div>
<?php
    include "menupaginas.php/menucadastrar.php";
    include "estruturapag.php/rodape.php";

}


?>

</body>
</html>