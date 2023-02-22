<?php


$dbh = new PDO('mysql:host=localhost;dbname=tcc1', 'root', 'root');
session_start();
if (!isset($_SESSION['usuario'])) {  //<!--Pagina se não tiver Sessão -->

include "estruturapag.php/cabecalho.php";
include "estruturapag.php/layout.php";
include "menupaginas.php/menuroupas.php";
include "estruturapag.php/rodape.php";

}else { //Pagina com Sessão

    include "estruturapag.php/cabecalho.php";
    include "estruturapag.php/layout-con.php";
    include "menupaginas.php/menuroupas2.php";
    include "estruturapag.php/rodape.php";

}



?>