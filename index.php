<?php


$dbh = new PDO('mysql:host=localhost;dbname=ngstore', 'root', 'root');
session_start();

if(!isset($_SESSION['usuario'])) { 

include "estruturapag.php/cabecalho.php";
include "estruturapag.php/layout.php";
include "menupaginas.php/menuindex.php";
include "estruturapag.php/rodape.php";


} else { ?> <?php


// Criar a pagina index do usuario que esta conectado 
include "estruturapag.php/cabecalho.php";
include "estruturapag.php/layout.php";
include "menupaginas.php/menuindex.php";
include "estruturapag.php/rodape.php";


} ?> 