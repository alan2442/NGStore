<?php
$dbh = new PDO('mysql:host=localhost;dbname=ngstore', 'root', 'root');
session_start();

if(!isset($_SESSION['usuario'])) { 

include "estruturapag.php/cabecalho.php";
include "estruturapag.php/layout.php";
include "menupaginas.php/menucontato.php";
include "estruturapag.php/rodape.php";


} else {


//Pagina com Sessão aberta
include "estruturapag.php/cabecalho.php";
include "estruturapag.php/layout-con.php";
include "menupaginas.php/menucontato.php";
include "estruturapag.php/rodape.php";
}
?>